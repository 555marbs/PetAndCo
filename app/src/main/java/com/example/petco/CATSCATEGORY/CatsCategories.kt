package com.example.petco.CATSCATEGORY

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.ImageView
import com.example.petco.R
import com.example.petco.ptHomePage

class CatsCategories : AppCompatActivity() {
    private lateinit var ivBackbtn : ImageView
    private lateinit var btExploreCats :Button

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_cats_categories)
        ivBackbtn = findViewById(R.id.ivBackbtn)
        ivBackbtn.setOnClickListener {
            val int = Intent(this, ptHomePage::class.java)
            startActivity(int)
        }
        btExploreCats = findViewById(R.id.btExploreCats)
        btExploreCats.setOnClickListener {
            val int = Intent(this, CatsExplore::class.java)
            startActivity(int)
        }
    }
}