package com.example.petco
import android.content.Context
import android.content.Intent
import android.content.SharedPreferences
import android.os.Bundle
import android.util.Log
import androidx.appcompat.app.AppCompatActivity
import androidx.recyclerview.widget.GridLayoutManager
import androidx.recyclerview.widget.RecyclerView
import com.example.petco.api.RetrofitClient
import com.example.petco.models.HomePageDataClass
import com.google.android.material.bottomnavigation.BottomNavigationView
import com.google.android.material.floatingactionbutton.FloatingActionButton
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response

class AdoptionActivity : AppCompatActivity() {

    private lateinit var recyclerView: RecyclerView
    private lateinit var recyclerViewHomepageAdapter: RecyclerViewHomePageAdapter
    private val ptList = mutableListOf<HomePageDataClass>()
    private lateinit var fabAdd: FloatingActionButton
    private lateinit var token: String

    var isHomePageActive = false
    var isMyProfilesActive = false

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_adoption)

        // Initialize views and adapters
        recyclerView = findViewById(R.id.RecyclerAdoption)
        fabAdd = findViewById(R.id.fabAdd)

        // Initialize token
        token = getTokenFromSharedPreferences() ?: ""

        // Initialize adapter with token
        recyclerViewHomepageAdapter = RecyclerViewHomePageAdapter(this@AdoptionActivity, ptList, token)
        recyclerView.adapter = recyclerViewHomepageAdapter
        recyclerView.layoutManager = GridLayoutManager(this, 1, GridLayoutManager.VERTICAL, false)

        // Set onClickListener for FAB
        fabAdd.setOnClickListener {
            val intent = Intent(this, PostAdoption::class.java)
            startActivity(intent)
        }

        // Call API to get adoption data
        getAdoption()

        // Initialize bottom navigation
        val bottomNavigation = findViewById<BottomNavigationView>(R.id.bottomNavigationView)
        bottomNavigation.setOnItemSelectedListener { menuItem ->
            when (menuItem.itemId) {
                R.id.home -> {
                    if (!isHomePageActive) {
                        val intent = Intent(this, ptHomePage::class.java)
                        startActivityIfNeeded(intent, 0)
                        isHomePageActive = true
                    }
                    true
                }
                R.id.Adoption -> true
                R.id.MyProfiles -> {
                    if (!isMyProfilesActive) {
                        val intent = Intent(this, MyProfiles::class.java)
                        startActivityIfNeeded(intent, 0)
                        isMyProfilesActive = true
                    }
                    true
                }
                else -> false
            }
        }
    }

    private fun getTokenFromSharedPreferences(): String? {
        val prefs: SharedPreferences = applicationContext.getSharedPreferences(PREF_NAME, Context.MODE_PRIVATE)
        return prefs.getString(TOKEN_KEY, null)
    }

    private fun getAdoption() {
        val apiService = RetrofitClient.getService(this)
        val call = apiService.getAdoption("Bearer $token")

        call.enqueue(object : Callback<ArrayList<HomePageDataClass>> {
            override fun onResponse(
                call: Call<ArrayList<HomePageDataClass>>,
                response: Response<ArrayList<HomePageDataClass>>
            ) {
                if (response.isSuccessful) {
                    val products = response.body()
                    products?.let {
                        ptList.addAll(it)
                        recyclerViewHomepageAdapter.notifyDataSetChanged()
                    }
                } else {
                    // Handle error response
                    Log.e("Dashboard", "Failed to fetch product list: ${response.message()}")
                }
            }

            override fun onFailure(call: Call<ArrayList<HomePageDataClass>>, t: Throwable) {
                // Handle network failure
                Log.e("Dashboard", "Network error: ${t.message}")
            }
        })
    }

    companion object {
        private const val PREF_NAME = "MyAppPrefs"
        private const val TOKEN_KEY = "token"
    }
}

