package com.example.petco

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button

class resetPassword : AppCompatActivity() {

    private lateinit var btResetButton: Button
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_reset_password)

        btResetButton = findViewById(R.id.btn_resetPassword_resetpassword)

        btResetButton.setOnClickListener {
            val intent = Intent(this, activity_login::class.java)
            startActivity(intent)
        }
    }
}