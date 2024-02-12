package com.example.petco

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.view.View
import androidx.cardview.widget.CardView
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.petco.CATSCATEGORY.CatsCategories

class ptHomePage : AppCompatActivity() {

    private  var recyclerView:RecyclerView? = null
    private  var recyclerViewHomepageAdapter: RecyclerViewHomePageAdapter? = null
    private var ptList = mutableListOf<HomePageDataClass>()

    private lateinit var cvDog : CardView
    private lateinit var cvCat : CardView
    private lateinit var cvBird : CardView
    private lateinit var cvRabbit : CardView


    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_pt_home_page)

        cvCat = findViewById(R.id.cvCat)
        cvCat.setOnClickListener{
            val int = Intent(this, CatsCategories::class.java)
            startActivity(int)
            finish()
        }


        cvDog = findViewById(R.id.cvDog)
        cvDog.setOnClickListener{
            val int = Intent(this,DogsCategories::class.java)
            startActivity(int)
            finish()
        }

        cvBird = findViewById(R.id.cvBird)
        cvBird.setOnClickListener {
            val int = Intent(this, BirdsCategories::class.java)
            startActivity(int)
            finish()

        }
        cvRabbit = findViewById(R.id.cvRabbit)
        cvRabbit.setOnClickListener {
            val int = Intent(this, RabbitCategories::class.java)
            startActivity(int)
            finish()
        }


        ptList = ArrayList()
        recyclerView = findViewById<View>(R.id.rvpthomepage) as RecyclerView
        recyclerViewHomepageAdapter = RecyclerViewHomePageAdapter(this@ptHomePage, ptList)
        val layoutManager: RecyclerView.LayoutManager = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false)
        recyclerView!!.layoutManager = layoutManager
        recyclerView!!.adapter = recyclerViewHomepageAdapter

        recyclerHomePageVertical()

    }

    private fun  recyclerHomePageVertical() {
        var pet = HomePageDataClass("Cat british", "Cat, (Felis catus), domesticated member of the family Felidae",R.drawable.catcare)
        ptList.add(pet)
        pet = HomePageDataClass("Cat maine coon","Dog, (Felis catus), domesticated member of the family Felidae", R.drawable.catbackground)
        ptList.add(pet)
        pet = HomePageDataClass("Cat dog","Dog, (Felis catus), domesticated member of the family Felidae", R.drawable.rabbit)
        ptList.add(pet)
        pet = HomePageDataClass("Cat trin","Dog, (Felis catus), domesticated member of the family Felidae", R.drawable.dogcategory)
        ptList.add(pet)
        pet = HomePageDataClass("Cat bernardo","Dog, (Felis catus), domesticated member of the family Felidae", R.drawable.cat)
        ptList.add(pet)
    }
}
