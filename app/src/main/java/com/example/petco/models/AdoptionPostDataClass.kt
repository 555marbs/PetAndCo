package com.example.petco.models

data class AdoptionPostDataClass(
    var id: String,
    var image:String,
    var title: String,
    var contact : String,
    var content:String,
    var userid : String? = null)
