package com.example.petco.api

import com.example.petco.models.AdoptionApplicationDataClass
import com.example.petco.models.HomePageDataClass
import com.example.petco.models.LoginUser
import com.example.petco.models.User
import com.example.petco.models.LoginResponse
import com.example.petco.models.UserL
import okhttp3.MultipartBody
import okhttp3.RequestBody
import retrofit2.Call
import retrofit2.http.Body
import retrofit2.http.GET
import retrofit2.http.Header
import retrofit2.http.Multipart
import retrofit2.http.POST
import retrofit2.http.PUT
import retrofit2.http.Part
import retrofit2.http.Path

interface ApiService {
    @GET("user")
    fun getUser(): Call<List<User>>

    @POST("register")
    fun registerUsers(@Body userL: UserL): Call<UserL>

    @PUT("update/{id}")
    fun editUsers(@Path("id") id: String, @Body user: UserL): Call<UserL>

    @POST("login")
    fun loginUser(@Body loginUser: LoginUser): Call<LoginResponse>

    @GET("posts")
    fun getAdopt(): Call<ArrayList<HomePageDataClass>>

    @GET("adoptions")
    fun getAdoption(
        @Header("Authorization") token: String,
    ): Call<ArrayList<HomePageDataClass>>

    @POST("/adoptions/{adoptionId}/apply")
    fun submitApplication(
        @Header("Authorization") token: String,
        @Header("X-CSRF-Token") csrfToken: String,
        @Path("adoptionId") adoptionId: Long,
        @Body applicationData: AdoptionApplicationDataClass
    ): Call<AdoptionApplicationDataClass>

    @Multipart
    @POST("adoptions")
    fun postAdoptWithImage(
        @Part("image") image: MultipartBody.Part,
        @Part("title") title: RequestBody,
        @Part("content") content: RequestBody,
        @Part("contacts") contacts: RequestBody,
        @Part("user_id") userid: RequestBody,
    ): Call<HomePageDataClass>

}


