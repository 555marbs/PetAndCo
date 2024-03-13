package com.example.petco

import android.app.Activity
import android.content.Context
import android.content.Intent
import android.database.Cursor
import android.net.Uri
import android.os.Bundle
import android.provider.MediaStore
import android.util.Log
import android.widget.Button
import android.widget.EditText
import android.widget.ImageView
import android.widget.Toast
import androidx.activity.result.contract.ActivityResultContracts
import androidx.appcompat.app.AppCompatActivity
import com.example.petco.api.RetrofitClient
import com.example.petco.models.AdoptionPostDataClass
import com.example.petco.models.HomePageDataClass
import okhttp3.MediaType.Companion.toMediaTypeOrNull
import okhttp3.MultipartBody
import okhttp3.RequestBody
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response
import java.io.File
import java.io.IOException
import java.io.InputStream

class PostAdoption : AppCompatActivity() {

    private lateinit var btnPost: Button
    private lateinit var title: EditText
    private lateinit var contentDescription: EditText
    private lateinit var imageView: ImageView
    private lateinit var contacts: EditText
    private lateinit var ivBackButton: ImageView
    private var selectedImageUri: Uri? = null

    private val pickImageLauncher =
        registerForActivityResult(ActivityResultContracts.StartActivityForResult()) { result ->
            if (result.resultCode == Activity.RESULT_OK) {
                val imageIntentData: Intent? = result.data
                selectedImageUri = imageIntentData?.data
                imageView.setImageURI(selectedImageUri)
            }
        }

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_post_adoption)

        title = findViewById(R.id.et_TitlePosting)
        contentDescription = findViewById(R.id.et_ContentDescription)
        contacts = findViewById(R.id.et_Contacts)
        btnPost = findViewById(R.id.btnPostAdoption)
        imageView = findViewById(R.id.ivPostAdoption)
        ivBackButton = findViewById(R.id.ivBackbtn)

        ivBackButton.setOnClickListener {
            val intent = Intent(this@PostAdoption, AdoptionActivity::class.java)
            startActivity(intent)
        }

        val btnSelectImage: Button = findViewById(R.id.btnSelectImage)
        btnSelectImage.setOnClickListener {
            openGalleryForImage()
        }

        btnPost.setOnClickListener {
            if (selectedImageUri != null) {
                val titleText = title.text.toString()
                val contentDescriptionText = contentDescription.text.toString()
                val contactsText = contacts.text.toString()
                val newAdoptionData =
                    HomePageDataClass(0, 0,"image-url", contactsText, titleText, contentDescriptionText, 0)
                postAdoption(newAdoptionData)
            } else {
                Toast.makeText(this, "Please select an image", Toast.LENGTH_SHORT).show()
            }
        }
    }

    private fun openGalleryForImage() {
        val galleryIntent =
            Intent(Intent.ACTION_PICK, MediaStore.Images.Media.EXTERNAL_CONTENT_URI)
        pickImageLauncher.launch(galleryIntent)
    }

    private fun createImagePart(context: Context, uri: Uri): MultipartBody.Part {
        val imageFile: File? = if (uri.scheme == "content") {
            val inputStream = context.contentResolver.openInputStream(uri)
            val tempFile = createTempFile("temp_image", null, context.cacheDir)
            tempFile?.let {
                it.copyInputStreamToFile(inputStream)
            }
            tempFile
        } else {
            File(uri.path!!)
        }

        imageFile?.let {
            val imageRequestBody = RequestBody.create("image/*".toMediaTypeOrNull(), it)
            return MultipartBody.Part.createFormData("image", it.name, imageRequestBody)
        }
        throw IOException("Failed to create a temporary image file.")
    }


    private fun File.copyInputStreamToFile(inputStream: InputStream?) {
        if (inputStream == null) return
        this.outputStream().use { fileOut ->
            inputStream.copyTo(fileOut)
        }
    }

    private fun createTextRequestBody(text: String): RequestBody {
        return RequestBody.create(MultipartBody.FORM, text)
    }

    private fun postAdoption(newAdoptionData: HomePageDataClass) {
        val apiService = RetrofitClient.getService(this)
        val titleRequestBody = createTextRequestBody(newAdoptionData.title)
        val contentDescriptionRequestBody = createTextRequestBody(newAdoptionData.content)
        val contactsRequestBody = createTextRequestBody(newAdoptionData.contact)
        val imagePart = createImagePart(this@PostAdoption, selectedImageUri!!)
        val userId = 123456L
        newAdoptionData.userId = userId

        val call: Call<HomePageDataClass> = apiService.postAdoptWithImage(
            imagePart,
            titleRequestBody,
            contentDescriptionRequestBody,
            contactsRequestBody,
            createTextRequestBody("Userid")
        )

        Log.d("PostAdoption", "Request URL: ${call.request().url}")
        Log.d("PostAdoption", "Request Headers: ${call.request().headers}")
        Log.d("PostAdoption", "Request Body: ${call.request().body}")

        call.enqueue(object : Callback<HomePageDataClass> {
            override fun onResponse(
                call: Call<HomePageDataClass>,
                response: Response<HomePageDataClass>
            ) {
                Log.d("PostAdoption", "Response Code: ${response.code()}")
                Log.d("PostAdoption", "Response Body: ${response.body()}")
            }

            override fun onFailure(call: Call<HomePageDataClass>, t: Throwable) {
                Log.e("PostAdoption", "onFailure: ${t.message}", t)
            }
        })
    }
}
