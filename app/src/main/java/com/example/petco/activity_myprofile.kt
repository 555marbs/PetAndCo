package com.example.petco

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import com.google.android.material.bottomnavigation.BottomNavigationView

class activity_myprofile : AppCompatActivity() {

    private lateinit var bottomNaviation : BottomNavigationView

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_myprofile)

        bottomNaviation = findViewById(R.id.btnav_bottomNavigation)

        bottomNaviation.setOnItemSelectedListener {
            when(it.itemId){
                R.id.home -> {val intent = Intent(this, ptHomePage::class.java)
                    startActivity(intent)
                    finish()}

//                R.id.search ->{val intent = Intent(this, MarketPlace::class.java)
//                    startActivity(intent)
//                    finish()}
//
//                R.id.sell_product ->{val intent = Intent(this, AddDetails::class.java)
//                    startActivity(intent)
//                    finish()}

                R.id.profile -> {val  intent = Intent(this, activity_myprofile::class.java)
                    startActivity(intent)
                    finish()}
            }
            true
        }
    }
}