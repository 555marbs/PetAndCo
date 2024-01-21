package com.example.petco

import android.annotation.SuppressLint
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.TextView

class activity_login : AppCompatActivity() {

    private lateinit var btSignUp: Button
    private lateinit var tvForgotPassword: TextView
    @SuppressLint("MissingInflatedId")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_login)

        btSignUp = findViewById(R.id.btn_signUp_login)
        tvForgotPassword = findViewById(R.id.tv_forgotPassword_login)

        //Going to Creating An Account
       btSignUp.setOnClickListener {
            val intent = Intent(this, activity_createAccount::class.java)
            startActivity(intent)
        }

       tvForgotPassword.setOnClickListener {
           val intent = Intent(this, activity_forgot_password::class.java)
           startActivity(intent)
       }

    }
}