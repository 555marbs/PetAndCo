package com.example.petco.UserFunctions
import android.app.AlertDialog
import android.content.Context
import android.content.Intent
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.TextView
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import com.example.petco.R
import com.example.petco.api.RetrofitClient
import com.example.petco.models.LoginResponse
import com.example.petco.models.LoginUser
import com.example.petco.models.UserL
import com.example.petco.ptHomePage
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response

class activity_login : AppCompatActivity() {

    private lateinit var tvForgotPassword: TextView
    private lateinit var btlogin: Button
    private lateinit var createAnAccount : TextView
    private lateinit var et_email_logInPage: EditText
    private lateinit var et_passwordLogIn: EditText

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_login)

        createAnAccount = findViewById(R.id.tvCreateAnAccount)
        tvForgotPassword = findViewById(R.id.tv_forgotPassword_login)
        btlogin = findViewById(R.id.btn_loginbt_login)
        et_email_logInPage = findViewById(R.id.et_email_logInPage)
        et_passwordLogIn = findViewById(R.id.et_passwordLogIn)


        val token = RetrofitClient.getToken(this)
        if (token != null && token.isNotEmpty()) {
            val intent = Intent(this, ptHomePage::class.java)
            startActivity(intent)
        }

        createAnAccount.setOnClickListener {
            val intent = Intent(this, activity_createAccount::class.java)
            startActivity(intent)
        }

        btlogin.setOnClickListener {
            loginUser()
        }

        tvForgotPassword.setOnClickListener {
            val intent = Intent(this, activity_forgot_password::class.java)
            startActivity(intent)
        }
    }

    private fun loginUser() {
        val loadingDialog = createLoadingDialog()
        loadingDialog.show()

        val email = et_email_logInPage.text.toString().trim()
        val password = et_passwordLogIn.text.toString().trim()

        if (email.isEmpty() || password.isEmpty()) {
            loadingDialog.dismiss()
            showError("Please fill in all fields")
            return
        }

        val call = RetrofitClient.getService(this).loginUser(LoginUser(email = email, password = password))
        call.enqueue(object : Callback<LoginResponse> {
            override fun onResponse(call: Call<LoginResponse>, response: Response<LoginResponse>) {
                loadingDialog.dismiss()

                if (response.isSuccessful) {
                    val loginResponse = response.body()
                    loginResponse?.let { login->
                        handleSuccessfulLogin(login)
                    } ?: showError("Login failed. Response body is null.")
                } else {
                    val errorBody = response.errorBody()?.string()
                    showError("Login failed. Error: $errorBody")
                }
            }

            override fun onFailure(call: Call<LoginResponse>, t: Throwable) {
                loadingDialog.dismiss()
                showError("Failed to connect to the server. Please try again later. Error: ${t.message}")
            }
        })
    }
    private fun handleSuccessfulLogin(login: LoginResponse){
        RetrofitClient.saveToken(this@activity_login, login.token)
        saveUserData(login.user)
        val intent = Intent(this@activity_login, ptHomePage::class.java)
        startActivity(intent)
        finish()
    }
    private fun saveUserData(user: UserL?) {
        val sharedPreferences = getSharedPreferences("UserData",Context.MODE_PRIVATE)
        val editor = sharedPreferences.edit()
        user?.id?.let { editor.putString("id", it) }
        user?.name?.let { editor.putString("name", it) }
        user?.email?.let { editor.putString("email", it) }
        user?.password?.let { editor.putString("password", it) }
        user?.confirmPassword?.let { editor.putString("confirmPassword", it) }
        editor.apply()
    }
    private fun showError(message: String) {
        Toast.makeText(this@activity_login, message, Toast.LENGTH_SHORT).show()
    }
    private fun createLoadingDialog(): AlertDialog {
        val builder = AlertDialog.Builder(this)
        builder.setMessage("Please Wait Loading...")
        builder.setCancelable(false)
        return builder.create()
    }

}