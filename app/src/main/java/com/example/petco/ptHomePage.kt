package com.example.petco

import android.annotation.SuppressLint
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import androidx.recyclerview.widget.GridLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.google.android.material.bottomnavigation.BottomNavigationView

class ptHomePage : AppCompatActivity() {

    private  var recyclerView:RecyclerView? = null
    private  var recyclerViewHomepageAdapter: RecyclerViewHomePageAdapter? = null
    private var ptList = mutableListOf<HomePageDataClass>()

    //Navigation Purposes
    private lateinit var bottomNaviation : BottomNavigationView

    @SuppressLint("MissingInflatedId")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_pt_home_page)

        ptList = ArrayList()
        bottomNaviation = findViewById(R.id.btnav_bottomNavigation)


        recyclerView = findViewById<View>(R.id.rvpthomepage) as RecyclerView
        recyclerViewHomepageAdapter = RecyclerViewHomePageAdapter(this@ptHomePage, ptList)
        val layoutManager: RecyclerView.LayoutManager = GridLayoutManager(this, 2)
        recyclerView!!.layoutManager = layoutManager
        recyclerView!!.adapter = recyclerViewHomepageAdapter

        preparePtListData()

        bottomNaviation.setOnItemSelectedListener {
            when(it.itemId){
//                R.id.home -> {val intent = Intent(this, rvHompagee::class.java)
//                    startActivity(intent)
//                    finish()}

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

    private fun preparePtListData() {
        var pet = HomePageDataClass("Cat", R.drawable.chihuahua)
        ptList.add(pet)
        pet = HomePageDataClass("Cat", R.drawable.cat)
        ptList.add(pet)
        pet = HomePageDataClass("Cat", R.drawable.cat)
        ptList.add(pet)
        pet = HomePageDataClass("Cat", R.drawable.cat)
        ptList.add(pet)
        pet = HomePageDataClass("Cat", R.drawable.cat)
        ptList.add(pet)
        pet = HomePageDataClass("Cat", R.drawable.cat)
        ptList.add(pet)
        pet = HomePageDataClass("Cat", R.drawable.cat)
        ptList.add(pet)


    }



}
