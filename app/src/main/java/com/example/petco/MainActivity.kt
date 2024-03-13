package com.example.petco

import android.content.Intent
import android.os.Bundle
import android.os.Handler
import android.util.Log
import android.widget.ProgressBar
import androidx.appcompat.app.AppCompatActivity
import androidx.core.content.ContextCompat
import com.example.petco.R
import com.example.petco.UserFunctions.activity_login
import com.example.petco.ptHomePage
import com.example.petco.api.RetrofitClient

class MainActivity : AppCompatActivity() {

    private val SPLASH_TIME: Long = 100

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        val token = RetrofitClient.getToken(this)

        Handler().postDelayed({
            navigateUser(token)
        }, SPLASH_TIME)
    }
    private fun navigateUser(token: String?) {
        val targetActivity = if (token != null) {
            // Token exists, user is already logged in
            Log.d("UserData", "User is already logged in with token: $token")
            ptHomePage::class.java
        } else {
            // Token doesn't exist, navigate to login page
            Log.d("UserData", "No token found, navigating to login page")
            activity_login::class.java
        }
        startActivity(Intent(this, targetActivity))
        finish()
    }
}
