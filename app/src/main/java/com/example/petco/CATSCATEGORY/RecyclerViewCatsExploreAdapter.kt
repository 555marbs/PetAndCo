package com.example.petco.CATSCATEGORY

import android.content.Intent
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import androidx.cardview.widget.CardView
import androidx.recyclerview.widget.RecyclerView
import com.example.petco.R

class RecyclerViewCatsExploreAdapter constructor(private val getActivity: CatsExplore, private val catsexploreLists : List<CatsExploreDataClass>) :
        RecyclerView.Adapter<RecyclerViewCatsExploreAdapter.MyViewHolder>() {



    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): MyViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.cardview_cats_categories, parent, false)
        return MyViewHolder(view)
    }

    override fun getItemCount(): Int {
        return catsexploreLists.size
    }

    override fun onBindViewHolder(holder: MyViewHolder, position: Int) {
        holder.tvCatTitle .text = catsexploreLists[position].title
        holder.ivCatsImage.setImageResource(catsexploreLists[position].image)
        holder.tvCatDescription.text = catsexploreLists[position].description
        holder.cvCatsExplore.setOnClickListener {
            val selectedcatcv = catsexploreLists[position]
            val intent = Intent(getActivity, selectedcatcv.targetActivity)

            getActivity.startActivity(intent)
            getActivity.finish()

        }

    }
    class MyViewHolder (itemView : View) : RecyclerView.ViewHolder(itemView) {
        val tvCatTitle : TextView = itemView.findViewById(R.id.tvCatTitle)
        val ivCatsImage : ImageView = itemView.findViewById(R.id.ivCatsImage)
        val tvCatDescription: TextView = itemView.findViewById(R.id.tvCatDescription)
        val cvCatsExplore : CardView = itemView.findViewById(R.id.cvCatsExplore)

    }

}