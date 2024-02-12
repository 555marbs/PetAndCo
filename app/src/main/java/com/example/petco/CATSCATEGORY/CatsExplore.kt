package com.example.petco.CATSCATEGORY

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import android.widget.ImageView
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.petco.R
import com.example.petco.ptHomePage

class CatsExplore : AppCompatActivity() {

    private  var recyclerView: RecyclerView? = null
    private  var recyclerViewCatsExploreAdapter: RecyclerViewCatsExploreAdapter? = null
    private var catsexploreLists = mutableListOf<CatsExploreDataClass>()

    private lateinit var ivBackbtn : ImageView

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_cats_explore)


        catsexploreLists = ArrayList()
        recyclerView = findViewById<View>(R.id.rvCatsExplore) as RecyclerView
        recyclerViewCatsExploreAdapter = RecyclerViewCatsExploreAdapter(this@CatsExplore, catsexploreLists)
        val layoutManager: RecyclerView.LayoutManager = LinearLayoutManager(this, LinearLayoutManager.VERTICAL, false)
        recyclerView!!.layoutManager = layoutManager
        recyclerView!!.adapter = recyclerViewCatsExploreAdapter

        recylcerViewExplore()

        ivBackbtn = findViewById(R.id.ivBackbtn)
        ivBackbtn.setOnClickListener {
            val int = Intent(this, ptHomePage::class.java)
            startActivity(int)
        }
    }

    private fun recylcerViewExplore() {
        var catexplore = CatsExploreDataClass("GUIDES", "Discover a whimsical world of cat guides, where playful insights into breeds, care routines, training secrets, health tips, gourmet nutrition",R.drawable.catcare,CatGuides::class.java)
        catsexploreLists.add(catexplore)
        catexplore = CatsExploreDataClass("PET-FRIENDLY PLACES", "Discover a whimsical world of cat guides, where playful insights into breeds, care routines, training secrets, health tips, gourmet nutrition",R.drawable.catbackground,CatBreads::class.java)
        catsexploreLists.add(catexplore)
        catexplore = CatsExploreDataClass("GROMMING AND HYGIENE", "Discover a whimsical world of cat guides, where playful insights into breeds, care routines, training secrets, health tips, gourmet nutrition",R.drawable.catbackground,CatBreads::class.java)
        catsexploreLists.add(catexplore)
    }
}