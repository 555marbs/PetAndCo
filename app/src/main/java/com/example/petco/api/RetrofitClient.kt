package com.example.petco.api

import android.content.Context
import android.content.SharedPreferences
import okhttp3.Interceptor
import okhttp3.OkHttpClient
import okhttp3.Response
import okhttp3.logging.HttpLoggingInterceptor
import retrofit2.Retrofit
import retrofit2.converter.gson.GsonConverterFactory

object RetrofitClient {
    private const val BASE_URL = "https://petandco.site/api/"
    private const val PREF_NAME = "MyAppPrefs"
    private const val TOKEN_KEY = "token"
    private const val CSRF_TOKEN_KEY = "csrf_token"

    fun getService(context: Context): ApiService {
        val retrofit = Retrofit.Builder()
            .baseUrl(BASE_URL)
            .client(createHttpClient(context))
            .addConverterFactory(GsonConverterFactory.create())
            .build()
        return retrofit.create(ApiService::class.java)
    }

    private fun createHttpClient(context: Context): OkHttpClient {
        val loggingInterceptor = HttpLoggingInterceptor()
        loggingInterceptor.level = HttpLoggingInterceptor.Level.BODY

        val httpClient = OkHttpClient.Builder()
        httpClient.addInterceptor(loggingInterceptor)
        httpClient.addInterceptor(AuthInterceptor(context))
        return httpClient.build()
    }

    fun saveToken(context: Context, token: String) {
        val prefs: SharedPreferences =
            context.getSharedPreferences(PREF_NAME, Context.MODE_PRIVATE)
        prefs.edit().putString(TOKEN_KEY, token).apply()
    }

    fun getToken(context: Context): String? {
        val prefs: SharedPreferences =
            context.getSharedPreferences(PREF_NAME, Context.MODE_PRIVATE)
        return prefs.getString(TOKEN_KEY, null)
    }

    fun saveCsrfToken(context: Context, csrfToken: String) {
        val prefs: SharedPreferences =
            context.getSharedPreferences(PREF_NAME, Context.MODE_PRIVATE)
        prefs.edit().putString(CSRF_TOKEN_KEY, csrfToken).apply()
    }

    fun getCsrfToken(context: Context): String? {
        val prefs: SharedPreferences =
            context.getSharedPreferences(PREF_NAME, Context.MODE_PRIVATE)
        return prefs.getString(CSRF_TOKEN_KEY, null)
    }

    fun logout(context: Context) {
        val prefs: SharedPreferences =
            context.getSharedPreferences(PREF_NAME, Context.MODE_PRIVATE)
        prefs.edit().remove(TOKEN_KEY).remove(CSRF_TOKEN_KEY).apply()
    }

    private class AuthInterceptor(val context: Context) : Interceptor {
        override fun intercept(chain: Interceptor.Chain): Response {
            val token = getToken(context)
            val csrfToken = getCsrfToken(context)

            val request = chain.request().newBuilder()

            token?.let {
                request.addHeader("Authorization", "Bearer $token")
            }

            csrfToken?.let {
                request.addHeader("X-CSRF-Token", csrfToken)
            }
            return chain.proceed(request.build())
        }
    }
}


