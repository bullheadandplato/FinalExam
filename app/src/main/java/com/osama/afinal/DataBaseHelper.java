package com.osama.afinal;

import android.content.ContentValues;
import android.content.Context;
import android.content.Loader;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;

/**
 * Created by osama on 9/27/16.
 */

public class DataBaseHelper extends SQLiteOpenHelper {








    static  String database_name="myDB";
    static  int database_version=1;
    //String tag=getClass().getCanonicalName();
    Context context;
    SQLiteDatabase db;

    //Queries Section

    public static  String create_table="CREATE TABLE `users` ( `uid` int(11) NOT NULL, " +
            "`username` varchar(255) NOT NULL," +
            "`password` varchar(255) NOT NULL," +
            "`email` varchar(255) NOT NULL, " +
            "UNIQUE(email) "+
            ");";
    public DataBaseHelper(Context c){
        super(c,database_name,null,database_version);
        this.context=c;
       db=this.getReadableDatabase();

    }

    @Override
    public void onCreate(SQLiteDatabase sqLiteDatabase) {
            sqLiteDatabase.execSQL(create_table);
            Log.d("database","Database created");
    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {

    }
    public void insertIntoDatabase(){
        ContentValues value=new ContentValues();
        value.put("uid",1);
        value.put("username","Ahmad");
        value.put("password","patri0t");
        value.put("email","patriot321power@gmail.com");
        db.insert("users",null,value);
        Log.d("database","Values inserted");
    }
}
