package com.example.petco

import android.content.Context
import android.content.Intent
import android.content.SharedPreferences
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import com.example.petco.UserFunctions.activity_login
import com.example.petco.api.ApiService
import com.example.petco.api.RetrofitClient
import com.example.petco.models.AdoptionApplicationDataClass
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response
import timber.log.Timber

class ApplicationAdoptionActivity : AppCompatActivity() {

    private lateinit var etFullName: EditText
    private lateinit var etContactDetails: EditText
    private lateinit var etCompleteAddress: EditText
    private lateinit var etExperienceAsOwner: EditText
    private lateinit var btnPostApplication: Button
    private var adoptionId: Long = 123456L
    private var userId: Long = 789012L
    private lateinit var token: String

    private lateinit var apiService: ApiService

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_application_adoption)

        // Initialize Timber for logging
        Timber.plant(Timber.DebugTree())

        apiService = RetrofitClient.getService(this)
        token = intent.getStringExtra("token") ?: ""

        adoptionId = intent.getLongExtra("adoptionId", adoptionId)

        etFullName = findViewById(R.id.et_FullName)
        etContactDetails = findViewById(R.id.et_ContactDetails)
        etCompleteAddress = findViewById(R.id.et_CompleteAddress)
        etExperienceAsOwner = findViewById(R.id.et_ExperienceAsAnOwner)
        btnPostApplication = findViewById(R.id.btnPostApplication)

        btnPostApplication.setOnClickListener {
            submitApplication()
        }
    }

    private fun submitApplication() {
        val fullname = etFullName.text.toString()
        val tel = etContactDetails.text.toString()
        val address = etCompleteAddress.text.toString()
        val exp = etExperienceAsOwner.text.toString()

        Timber.d("Submitting application for adoptionId: $adoptionId, userId: $userId")
        val applicationData = AdoptionApplicationDataClass(
            adoptionId = adoptionId,
            userId = userId,
            fullname = fullname,
            tel = tel,
            address = address,
            exp = exp
        )
        Timber.d("Submitting application with adoptionId: $adoptionId")

        val token = getTokenFromSharedPreferences()
        val csrfToken = getCsrfTokenFromSharedPreferences(this)
        val finalCsrfToken = csrfToken ?: ""

        val call: Call<AdoptionApplicationDataClass> =
            apiService.submitApplication("Bearer $token",finalCsrfToken ,adoptionId, applicationData)
        call.enqueue(object : Callback<AdoptionApplicationDataClass> {
            override fun onResponse(
                call: Call<AdoptionApplicationDataClass>,
                response: Response<AdoptionApplicationDataClass>
            ) {
                if (response.isSuccessful) {
                    Toast.makeText(
                        this@ApplicationAdoptionActivity,
                        "Application submitted successfully!",
                        Toast.LENGTH_SHORT
                    ).show()
                    finish()
                } else {
                    if (response.code() == 419) {
                        // Handle token expiration, redirect to login, or refresh token
                        // Example: Redirect to login
                        startActivity(Intent(this@ApplicationAdoptionActivity, activity_login::class.java))
                        finish()
                    } else {
                        // Handle other error responses
                        Toast.makeText(
                            this@ApplicationAdoptionActivity,
                            "Failed to submit application: ${response.message()}",
                            Toast.LENGTH_SHORT
                        ).show()
                    }
                }
            }

            override fun onFailure(call: Call<AdoptionApplicationDataClass>, t: Throwable) {
                // Handle network failure
                Toast.makeText(
                    this@ApplicationAdoptionActivity,
                    "Network error: ${t.message}",
                    Toast.LENGTH_SHORT
                ).show()
            }
        })
    }

    private fun getCsrfTokenFromSharedPreferences(context: Context): String? {
        val prefs: SharedPreferences = context.getSharedPreferences("CsrfPrefs", Context.MODE_PRIVATE)
        return prefs.getString("csrfToken", null)
    }
    private fun getTokenFromSharedPreferences(): String? {
        val prefs: SharedPreferences =
            applicationContext.getSharedPreferences(PREF_NAME, Context.MODE_PRIVATE)
        return prefs.getString(TOKEN_KEY, null)
    }
    companion object {
        private const val PREF_NAME = "MyAppPrefs"
        private const val TOKEN_KEY = "token"
    }
}


