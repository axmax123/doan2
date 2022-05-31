package com.example.appbanhang.adapter;

import android.content.Context;
import android.content.DialogInterface;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;
import androidx.appcompat.app.AlertDialog;
import com.example.appbanhang.R;
import com.example.appbanhang.activity.MainActivity;
import com.example.appbanhang.model.Giohang;
import com.squareup.picasso.Picasso;
import java.text.DecimalFormat;
import java.util.ArrayList;
public class GiohangAdapter extends BaseAdapter {
    Context context;
    ArrayList<Giohang> arraygiohang;

    public GiohangAdapter(Context context, ArrayList<Giohang> arraygiohang) {
        this.context = context;
        this.arraygiohang = arraygiohang;
    }


    @Override
    public int getCount() {
        return arraygiohang.size();
    }

    @Override
    public Object getItem(int position) {
        return arraygiohang.get(position);
    }

    @Override
    public long getItemId(int position) {
        return position;
    }



    @Override
    public View getView(final int position, View view, ViewGroup parent) {
            LayoutInflater inflater = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            view = inflater.inflate(R.layout.dong_giohang,null);
        final TextView txttengiohang, txtgiagiohang;
         ImageView imggiohang;
        final Button btnminus, btnvalues,btnplus;
            txttengiohang = view.findViewById(R.id.textviewtengiohang);
            txtgiagiohang = view.findViewById(R.id.textviewgiagiohang);
            imggiohang = view.findViewById(R.id.imageviewgiohang);
            btnminus = view.findViewById(R.id.buttonminus);
            btnvalues = view.findViewById(R.id.buttonvalues);
            btnplus = view.findViewById(R.id.buttonplus);

        txttengiohang.setText(arraygiohang.get(position).getTensp());
        final DecimalFormat decimalFormat=new DecimalFormat("###,###,###");
        txtgiagiohang.setText(decimalFormat.format(arraygiohang.get(position).getGiasp())+" Đ");
        Log.d("test", String.valueOf(arraygiohang.size()));
        Log.d("test",arraygiohang.get(position).getHinhsp());
        Picasso.with(context).load(arraygiohang.get(position).getHinhsp()).centerCrop().resize(150,150).into(imggiohang);
        btnvalues.setText(arraygiohang.get(position).getSoluongsp()+"");
        final int sl= Integer.parseInt(btnvalues.getText().toString());
        final int slmoi=sl;
        if(sl<1){
            btnminus.setVisibility(View.INVISIBLE);
            btnplus.setVisibility(View.INVISIBLE);
        }
        else if(sl==1){
            btnminus.setVisibility(View.INVISIBLE);
            btnplus.setVisibility(View.VISIBLE);
        }
        else if(sl>=2&&sl<10){
            btnminus.setVisibility(View.VISIBLE);
            btnplus.setVisibility(View.VISIBLE);
        }
        else{
            btnminus.setVisibility(View.VISIBLE);
            btnplus.setVisibility(View.INVISIBLE);
        }
       btnplus.setOnClickListener(new View.OnClickListener() {
           @Override
           public void onClick(View v) {
               int sl1=Integer.parseInt(btnvalues.getText().toString());
               int slmoi=Integer.parseInt(btnvalues.getText().toString());
               slmoi+=1;
               btnvalues.setText(slmoi+"");
               MainActivity.manggiohang.get(position).setSoluongsp(slmoi);
               MainActivity.manggiohang.get(position).setGiasp(MainActivity.manggiohang.get(position).getGiasp()*slmoi/(sl1));
               txtgiagiohang.setText(MainActivity.manggiohang.get(position).getGiasp()+"");
               long tongtien=0;
               for(int i=0;i<MainActivity.manggiohang.size();i++){
                   tongtien+=MainActivity.manggiohang.get(i).getGiasp();
               }
               DecimalFormat decimalFormat1=new DecimalFormat("###,###,###");
               com.example.appbanhang.activity.Giohang.EvenUltil();
               if(slmoi>9){
                   btnplus.setVisibility(View.INVISIBLE);
                   btnminus.setVisibility(View.VISIBLE);
                   btnvalues.setText(slmoi+"");
               }
               else{
                   btnplus.setVisibility(View.VISIBLE);
                   btnminus.setVisibility(View.VISIBLE);
                   btnvalues.setText(slmoi+"");
               }

           }
       });
        btnminus.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                int sl1=Integer.parseInt(btnvalues.getText().toString());
                int slmoi=Integer.parseInt(btnvalues.getText().toString());
                slmoi-=1;
                btnvalues.setText(slmoi+"");
                MainActivity.manggiohang.get(position).setSoluongsp(slmoi);
                MainActivity.manggiohang.get(position).setGiasp(MainActivity.manggiohang.get(position).getGiasp()*slmoi/(sl1));
                txtgiagiohang.setText(MainActivity.manggiohang.get(position).getGiasp()+"");
                long tongtien=0;
                for(int i=0;i<MainActivity.manggiohang.size();i++){
                    tongtien+=MainActivity.manggiohang.get(i).getGiasp();
                }
                DecimalFormat decimalFormat1=new DecimalFormat("###,###,###");
                com.example.appbanhang.activity.Giohang.EvenUltil();
                if(slmoi<2){
                    btnminus.setVisibility(View.INVISIBLE);
                    btnplus.setVisibility(View.VISIBLE);
                    btnvalues.setText(slmoi+"");
                }
                else{
                    btnplus.setVisibility(View.VISIBLE);
                    btnminus.setVisibility(View.VISIBLE);
                    btnvalues.setText(slmoi+"");
                }
            }
        });
        return view;
    }
}
