package com.example.petco

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button

class activity_forgot_password : AppCompatActivity() {

    private lateinit var btnForgotPassword: Button
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_forgot_password)

        btnForgotPassword = findViewById(R.id.btn_forgotpassword_forgotpassword)

        btnForgotPassword.setOnClickListener {
            val intent = Intent(this, resetPassword::class.java)
            startActivity(intent)
        }
    }
}