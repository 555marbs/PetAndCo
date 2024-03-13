package com.example.petco.models

import com.google.gson.annotations.SerializedName

data class User(

    @SerializedName("id")
    val id: String? = null,

    @SerializedName("name")
    val name: String? = null,

    @SerializedName("email")
    val email: String? = null,

    @SerializedName("password")
    val password: String? = null,

    @SerializedName("confirmPassword")
    val confirmPassword: String? = null
)

