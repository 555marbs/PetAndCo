package com.example.petco

import android.content.Context
import android.content.Intent
import android.os.Bundle
import android.widget.Button
import android.widget.TextView
import androidx.appcompat.app.AppCompatActivity
import com.example.petco.UserFunctions.activity_login
import com.example.petco.api.RetrofitClient
import com.example.petco.models.UserL
import com.google.android.material.bottomnavigation.BottomNavigationView
import okhttp3.Callback
import retrofit2.Call
import retrofit2.Response

class MyProfiles : AppCompatActivity() {

    private lateinit var tvName: TextView
    private lateinit var tvEmail: TextView
    private lateinit var btlogout: Button
    private lateinit var btn_et_profiles: Button
    private var user: UserL? = null

    var isHomePageActive = false
    var isAdoptionActive = false

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_my_profiles)

        btn_et_profiles = findViewById(R.id.btn_et_profiles)
        val bottomNavigation = findViewById<BottomNavigationView>(R.id.bottomNavigationView)

        tvName = findViewById(R.id.tvName)
        tvEmail = findViewById(R.id.tvEmail)
        val sharedPreferences = getSharedPreferences("UserData", MODE_PRIVATE)
        val userName = sharedPreferences.getString("name", "")
        val userEmail = sharedPreferences.getString("email", "")

        tvName.setText(userName)
        tvEmail.setText(userEmail)
        user = getUserData()

        bottomNavigation.setOnItemSelectedListener { menuItem ->
            when (menuItem.itemId) {
                R.id.home -> {
                    if (!isHomePageActive) {
                        val intent = Intent(this, ptHomePage::class.java)
                        startActivityIfNeeded(intent, 0)
                        isHomePageActive = true
                    }
                    true
                }
                R.id.Adoption -> {
                    if (!isAdoptionActive) {
                        val intent = Intent(this, AdoptionActivity::class.java)
                        startActivityIfNeeded(intent, 0)
                        isAdoptionActive = true
                    }
                    true
                }
                R.id.MyProfiles -> {
                    true
                }
                else -> false
            }
        }

        btn_et_profiles.setOnClickListener {
            val intent = Intent(this, EditProfilesActivity::class.java)
            startActivity(intent)
        }

        btlogout = findViewById(R.id.btn_logoutbt_logout)

        btlogout.setOnClickListener {
            logoutUser()
        }
    }
    private fun getUserData(): UserL? {
        val sharedPreferences = getSharedPreferences("UserData", MODE_PRIVATE)
        val id = sharedPreferences.getString("id", null)
        val name = sharedPreferences.getString("name", null)
        val email = sharedPreferences.getString("email", null)

        if (id == null || name == null || email == null) {
            return null
        }
        return UserL(id, name, email, "", "")
    }

    private fun logoutUser() {
        RetrofitClient.logout(this@MyProfiles)
        clearUserData()
        val intent = Intent(this@MyProfiles, activity_login::class.java)
        startActivity(intent)
    }

    private fun clearUserData() {
        val sharedPreferences = getSharedPreferences("UserData", MODE_PRIVATE)
        val editor = sharedPreferences.edit()
        editor.clear()
        editor.apply()
    }
}
