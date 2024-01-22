package com.example.petco

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import android.widget.Toast
import androidx.cardview.widget.CardView
import androidx.recyclerview.widget.RecyclerView


class RecyclerViewHomePageAdapter constructor(private val getActivity: ptHomePage, private val ptList: List<HomePageDataClass>) :
    RecyclerView.Adapter<RecyclerViewHomePageAdapter.MyViewHolder>() {


    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): MyViewHolder {
        val view = LayoutInflater.from(parent.context).inflate(R.layout.cardview_homepage, parent, false)
        return MyViewHolder(view)
    }

    override fun getItemCount(): Int {
        return ptList.size
    }

    override fun onBindViewHolder(holder: MyViewHolder, position: Int) {
        holder.tvCardviewTitle.text = ptList[position].title
        holder.ivCardviewImage.setImageResource(ptList[position].image)

        holder.cardView.setOnClickListener {
            Toast.makeText(getActivity,ptList[position].title, Toast.LENGTH_LONG).show()
        }

    }
    class MyViewHolder (itemView : View ) :RecyclerView.ViewHolder(itemView) {
        val tvCardviewTitle : TextView = itemView.findViewById(R.id.CardViewTitle)
        val ivCardviewImage : ImageView = itemView.findViewById(R.id.CardViewImage)
        val cardView : CardView = itemView.findViewById(R.id.CardView)

    }
}