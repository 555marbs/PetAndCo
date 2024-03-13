package com.example.petco.models

import com.google.gson.annotations.SerializedName
import java.io.Serializable

data class UserL(
                 val id: String? = null,
                 val name: String? = null,
                 val email: String? = null,
                 val password: String? = null,
                 val confirmPassword: String? = null) : Serializable
