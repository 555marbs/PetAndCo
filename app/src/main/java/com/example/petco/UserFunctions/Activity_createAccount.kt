package com.example.petco.UserFunctions

import android.annotation.SuppressLint
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.ImageView
import android.widget.TextView
import android.widget.Toast
import com.example.petco.R
import com.example.petco.api.RetrofitClient
import com.example.petco.models.User
import com.example.petco.models.UserL
import com.example.petco.ptHomePage
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response

class activity_createAccount : AppCompatActivity() {

    private lateinit var btnCreateAccount: Button
    private lateinit var et_name: EditText
    private lateinit var et_emailAddress: EditText
    private lateinit var et_password: EditText
    private lateinit var et_confirmPassword: EditText
    private lateinit var img_backButton_createaccount :ImageView
    private lateinit var tvsigninHere : TextView

    @SuppressLint("MissingInflatedId")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_create_account)


        tvsigninHere = findViewById(R.id.tvSigninhere)
        et_name = findViewById(R.id.et_name_createaccount)
        et_emailAddress = findViewById(R.id.et_emailAddress_createaccount)
        et_password = findViewById(R.id.et_password_creataccount)
        et_confirmPassword = findViewById(R.id.et_confirmPassword_creataccount)
        img_backButton_createaccount = findViewById(R.id.img_backButton_createaccount)
        btnCreateAccount = findViewById(R.id.btn_createAccount_createaccount)



        tvsigninHere.setOnClickListener {
            val int = Intent(this, activity_login::class.java)
            startActivity(int)
        }

        btnCreateAccount.setOnClickListener {
            registerUser()
        }
        img_backButton_createaccount.setOnClickListener{
            val int = Intent(this, activity_login::class.java)
            startActivity(int)
        }
    }
    private fun registerUser() {
        val name = et_name.text.toString().trim()
        val email = et_emailAddress.text.toString().trim()
        val password = et_password.text.toString().trim()
        val confirmPassword = et_confirmPassword.text.toString().trim()

        if (name.isEmpty() || email.isEmpty() || password.isEmpty() || confirmPassword.isEmpty()) {
            Toast.makeText(
                this@activity_createAccount,
                "Please fill in all fields",
                Toast.LENGTH_SHORT
            ).show()
            return
        }
        if (password != confirmPassword) {
            Toast.makeText(
                this@activity_createAccount,
                "Passwords do not match",
                Toast.LENGTH_SHORT
            ).show()
            et_password.text.clear()
            et_confirmPassword.text.clear()
            return
        }

        val user = UserL(
            name = name,
            email = email,
            password = password,
            confirmPassword = confirmPassword
        )

        val apiService = RetrofitClient.getService(this)
        val call = apiService.registerUsers(user)

        call.enqueue(object : Callback<UserL> {
            override fun onResponse(call: Call<UserL>, response: Response<UserL>) {
                if (response.isSuccessful) {
                    Toast.makeText(
                        this@activity_createAccount,
                        "Registered successfully",
                        Toast.LENGTH_SHORT
                    ).show()
                    val intent = Intent(this@activity_createAccount, ptHomePage::class.java)
                    startActivity(intent)
                    finish()
                } else {
                    Toast.makeText(
                        this@activity_createAccount,
                        "Registration failed",
                        Toast.LENGTH_SHORT
                    ).show()
                }
            }

            override fun onFailure(call: Call<UserL>, t: Throwable) {
                Toast.makeText(
                    this@activity_createAccount,
                    "Registration failed No Connnection",
                    Toast.LENGTH_SHORT
                ).show()
            }
        })
    }
}


