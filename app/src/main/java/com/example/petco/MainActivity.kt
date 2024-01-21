package com.example.petco

import android.annotation.SuppressLint
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.os.Handler
import android.widget.ProgressBar

class MainActivity : AppCompatActivity() {

    private lateinit var loadingProgressBar: ProgressBar

    @SuppressLint("MissingInflatedId")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        loadingProgressBar = findViewById(R.id.progressBar_main)

        Handler().postDelayed({
            val intent = Intent(this, activity_login::class.java)
            startActivity(intent)
            finish()
        }, 3000) // Adjust the delay as needed (3 seconds in this example)
    }
}
