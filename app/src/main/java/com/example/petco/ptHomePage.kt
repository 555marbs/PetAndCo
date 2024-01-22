package com.example.petco

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import androidx.recyclerview.widget.GridLayoutManager
import androidx.recyclerview.widget.RecyclerView

class ptHomePage : AppCompatActivity() {

    private  var recyclerView:RecyclerView? = null
    private  var recyclerViewHomepageAdapter: RecyclerViewHomePageAdapter? = null
    private var ptList = mutableListOf<HomePageDataClass>()

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_pt_home_page)

        ptList = ArrayList()

        recyclerView = findViewById<View>(R.id.rvpthomepage) as RecyclerView
        recyclerViewHomepageAdapter = RecyclerViewHomePageAdapter(this@ptHomePage, ptList)
        val layoutManager: RecyclerView.LayoutManager = GridLayoutManager(this, 2)
        recyclerView!!.layoutManager = layoutManager
        recyclerView!!.adapter = recyclerViewHomepageAdapter

        preparePtListData()

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
