package com.example.petco
import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.TextView
import androidx.cardview.widget.CardView
import com.example.petco.CATSCATEGORY.CatsCategories
import com.google.android.material.bottomnavigation.BottomNavigationView
import android.animation.ValueAnimator

class ptHomePage : AppCompatActivity() {

    private lateinit var cvDog : CardView
    private lateinit var cvCat : CardView
    private lateinit var cvBird : CardView
    private lateinit var cvRabbit : CardView

    var isHomePageActive = false
    var isAdoptionActive = false
    var isMyProfilesActive = false

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_pt_home_page)

        val animatedText = findViewById<TextView>(R.id.pthomepagedescription)
        val descriptionText = "Welcome to Pet&Co., where every animal holds a story and every story awaits a happy ending."
        animatedText.animateText(descriptionText)

        val bottomNavigation = findViewById<BottomNavigationView>(R.id.bottomNavigationView)

        bottomNavigation.setOnItemSelectedListener { menuItem ->
            when (menuItem.itemId) {
                R.id.home -> {
                    true
                }
                R.id.Adoption -> {
                    if (!isAdoptionActive) {
                        val intent = Intent(this, AdoptionActivity::class.java)
                        startActivityIfNeeded(intent, 0)
                        isAdoptionActive = true
                    }
                    true
                }
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


        cvCat = findViewById(R.id.cvCat)
        cvCat.setOnClickListener{
            val int = Intent(this, CatsCategories::class.java)
            startActivity(int)
            finish()
        }


        cvDog = findViewById(R.id.cvDog)
        cvDog.setOnClickListener{
            val int = Intent(this,DogsCategories::class.java)
            startActivity(int)
            finish()
        }

        cvBird = findViewById(R.id.cvBird)
        cvBird.setOnClickListener {
            val int = Intent(this, BirdsCategories::class.java)
            startActivity(int)
            finish()

        }
        cvRabbit = findViewById(R.id.cvRabbit)
        cvRabbit.setOnClickListener {
            val int = Intent(this, FishCategories::class.java)
            startActivity(int)
            finish()
        }
    }

    fun TextView.animateText(text: CharSequence, duration: Long = 100L) {
        val textLength = text.length

        val valueAnimator = ValueAnimator.ofInt(0, textLength)
        valueAnimator.duration = duration * textLength
        valueAnimator.addUpdateListener { animator ->
            val animatedValue = animator.animatedValue as Int
            this.text = text.subSequence(0, animatedValue)
        }
        valueAnimator.start()
    }
}
