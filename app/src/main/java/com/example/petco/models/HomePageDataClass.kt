package com.example.petco.models

import java.io.Serializable

data class HomePageDataClass(
    var id: Long,
    var adoptionId: Long,
    var image: String,
    var contact: String,
    var title: String,
    var content: String,
    var userId: Long,
) : Serializable



