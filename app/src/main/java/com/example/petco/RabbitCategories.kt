package com.example.petco

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.ImageView

class RabbitCategories : AppCompatActivity() {

    private lateinit var ivBackbtn : ImageView
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_rabbit_categories)

        ivBackbtn = findViewById(R.id.ivBackbtn)
        ivBackbtn.setOnClickListener{
            val int = Intent(this,ptHomePage::class.java)
            startActivity(int)
        }
    }
}