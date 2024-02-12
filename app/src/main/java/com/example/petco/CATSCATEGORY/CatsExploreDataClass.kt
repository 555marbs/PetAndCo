package com.example.petco.CATSCATEGORY

import androidx.appcompat.app.AppCompatActivity

data class CatsExploreDataClass(var title: String, var description:String , var image: Int, val targetActivity: Class<out AppCompatActivity>)
