package com.example.petco
import android.content.Context
import android.content.Intent
import android.graphics.drawable.Drawable
import android.util.Log
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import android.widget.Toast
import androidx.cardview.widget.CardView
import androidx.recyclerview.widget.RecyclerView
import com.bumptech.glide.Glide
import com.bumptech.glide.load.engine.GlideException
import com.bumptech.glide.request.RequestListener
import com.example.petco.models.HomePageDataClass
import com.example.petco.R
import com.example.petco.ApplicationAdoptionActivity

class RecyclerViewHomePageAdapter(
    private val context: Context,
    private val ptList: List<HomePageDataClass>,
    private val token: String
) : RecyclerView.Adapter<RecyclerViewHomePageAdapter.MyViewHolder>() {

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): MyViewHolder {
        val view =
            LayoutInflater.from(context).inflate(R.layout.cardview_adoption, parent, false)
        return MyViewHolder(view)
    }

    override fun getItemCount(): Int {
        return ptList.size
    }

    override fun onBindViewHolder(holder: MyViewHolder, position: Int) {
        Log.d("MyAdapter", "onBindViewHolder called for position $position")

        val currentItem = ptList[position]

        holder.cardView.setOnClickListener {
            val adoptionId = currentItem.adoptionId // Make sure this retrieves the correct adoptionId
            Log.d("MyAdapter", "CardView clicked for adoptionId: $adoptionId")

            val intent = Intent(context, ApplicationAdoptionActivity::class.java)
            intent.putExtra("adoptionId", adoptionId)
            intent.putExtra("token", token)
            context.startActivity(intent)
        }
        val imagename = currentItem.image
        val imagepath = "http://petandco.site/image/$imagename"
        Log.d("GlideLoad", "Loading image from: $imagepath")
        Glide.with(context)
            .load(imagepath)
            .error(R.drawable.error)
            .listener(object : RequestListener<Drawable> {
                override fun onLoadFailed(
                    e: GlideException?,
                    model: Any?,
                    target: com.bumptech.glide.request.target.Target<Drawable>?,
                    isFirstResource: Boolean
                ): Boolean {
                    Log.e("GlideLoad", "Image loading failed: ${e?.message}")
                    return false
                }

                override fun onResourceReady(
                    resource: Drawable?,
                    model: Any?,
                    target: com.bumptech.glide.request.target.Target<Drawable>?,
                    dataSource: com.bumptech.glide.load.DataSource?,
                    isFirstResource: Boolean
                ): Boolean {
                    Log.d("GlideLoad", "Image loaded successfully")
                    return false
                }

            })
            .into(holder.ivCardviewImage)
        holder.tvCardviewTitle.text = currentItem.title
        holder.tvCardViewDescription.text = currentItem.content
        holder.tv_CardviewContacts.text = currentItem.contact
    }

    class MyViewHolder(itemView: View) : RecyclerView.ViewHolder(itemView) {
        val tvCardviewTitle: TextView = itemView.findViewById(R.id.CardViewTitle)
        val ivCardviewImage: ImageView = itemView.findViewById(R.id.CardViewImage)
        val tvCardViewDescription: TextView = itemView.findViewById(R.id.CardViewDescription)
        val tv_CardviewContacts: TextView = itemView.findViewById(R.id.tv_CardviewContacts)
        val cardView: CardView = itemView.findViewById(R.id.CardView)
    }
}
