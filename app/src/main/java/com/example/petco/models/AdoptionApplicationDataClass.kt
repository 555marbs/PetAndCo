package com.example.petco.models

data class AdoptionApplicationDataClass(
    val adoptionId: Long,
    val userId: Long,
    val fullname: String,
    val tel: String,
    val address: String,
    val exp: String
)

