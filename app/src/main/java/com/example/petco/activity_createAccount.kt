package com.example.petco

import android.annotation.SuppressLint
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button

class activity_createAccount : AppCompatActivity() {

    private lateinit var btnCreateAccount: Button
    @SuppressLint("MissingInflatedId")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_create_account)

        btnCreateAccount = findViewById(R.id.btn_createAccount_createaccount)

        btnCreateAccount.setOnClickListener{
            val intent = Intent(this, activity_login::class.java)
            startActivity(intent)
        }
    }
}