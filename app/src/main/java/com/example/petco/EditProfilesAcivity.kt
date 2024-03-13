package com.example.petco

import android.content.Intent
import android.os.Bundle
import android.util.Log
import android.widget.Button
import android.widget.EditText
import android.widget.ImageView
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import com.example.petco.api.RetrofitClient
import com.example.petco.models.UserL
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response

class EditProfilesActivity : AppCompatActivity() {

    private lateinit var etName: EditText
    private lateinit var etEmailAddress: EditText
    private lateinit var etPassword: EditText
    private lateinit var etConfirmPassword: EditText
    private lateinit var imgBackButtonCreateAccount: ImageView
    private lateinit var btnSaveChanges: Button
    private var user: UserL? = null

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_edit_profiles_acivity)

        etName = findViewById(R.id.et_updatename_createaccount)
        imgBackButtonCreateAccount = findViewById(R.id.img_backButton_createaccount)
        etEmailAddress = findViewById(R.id.et_updateemailAddress_createaccount)
        etPassword = findViewById(R.id.et_updatepassword_creataccount)
        etConfirmPassword = findViewById(R.id.et_updateconfirmPassword_creataccount)
        btnSaveChanges = findViewById(R.id.btn_UpdateProfile)

        val sharedPreferences = getSharedPreferences("UserData", MODE_PRIVATE)
        val userId = sharedPreferences.getString("id", "")
        val userName = sharedPreferences.getString("name", "")
        val userEmail = sharedPreferences.getString("email", "")
        val userPassword = sharedPreferences.getString("password", "")
        val userConfirmPassword = sharedPreferences.getString("confirmPassword", "")

        etName.setText(userName)
        etEmailAddress.setText(userEmail)
        etPassword.setText(userPassword)
        etConfirmPassword.setText(userConfirmPassword)

        user = getUserData()
        user?.let { preFillUserData(it) }

        imgBackButtonCreateAccount.setOnClickListener {
            val intent = Intent(this@EditProfilesActivity, MyProfiles::class.java)
            startActivity(intent)
        }

        btnSaveChanges.setOnClickListener {
            if (updateUserData()) {
                navigateToUserProfiles()
            } else {
                Toast.makeText(this, "Failed to save changes", Toast.LENGTH_SHORT).show()
            }
        }
    }
    private fun preFillUserData(user: UserL) {
        etName.setText(user.name)
        etEmailAddress.setText(user.email)
        etPassword.hint = "********"
        etConfirmPassword.hint = "********"
    }

    private fun updateUserData(): Boolean {
        val name = etName.text.toString().trim()
        val email = etEmailAddress.text.toString().trim()
        val password = etPassword.text.toString().trim()
        val confirmPassword = etConfirmPassword.text.toString().trim()

        val updatedUser = UserL(user?.id, name, email, password, confirmPassword)
        saveUserData(updatedUser)
        updateUserOnServer(updatedUser)
        return true
    }


    private fun saveUserData(user: UserL) {
        val sharedPreferences = getSharedPreferences("UserData", MODE_PRIVATE)
        val editor = sharedPreferences.edit()
        user?.id?.let { editor.putString("id", it) }
        user?.name?.let { editor.putString("name", it) }
        user?.email?.let { editor.putString("email", it) }
        user?.id?.let { editor.putString("id", it) }
        user?.name?.let { editor.putString("name", it) }
        user?.email?.let { editor.putString("email", it) }
        user?.password?.let { editor.putString("password", it) }
        user?.confirmPassword?.let { editor.putString("confirmPassword", it) }
        editor.apply()
    }
    private fun updateUserOnServer(user: UserL) {
        val apiService = RetrofitClient.getService(this)
        val call: Call<UserL> = apiService.editUsers(user.id ?: "", user)

        call.enqueue(object : Callback<UserL> {
            override fun onResponse(call: Call<UserL>, response: Response<UserL>) {
                Log.d("Retrofit onResponse", "Response Code: ${response.code()}")
                if (response.isSuccessful) {
                    Toast.makeText(this@EditProfilesActivity, "Server update successful", Toast.LENGTH_SHORT).show()
                } else {
                    Toast.makeText(this@EditProfilesActivity, "Server update failed", Toast.LENGTH_SHORT).show()
                }
            }

            override fun onFailure(call: Call<UserL>, t: Throwable) {
                Log.e("Retrofit onFailure", "Error: ${t.message}")
                Toast.makeText(this@EditProfilesActivity, "Failed to connect to the server", Toast.LENGTH_SHORT).show()
            }
        })
    }

    private fun navigateToUserProfiles() {
        val intent = Intent(this, MyProfiles::class.java)
        startActivity(intent)
        finish()
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
}
