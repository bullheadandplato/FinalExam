package com.cryptopaths.hussnainexam;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;

/**
 * Created by tripleheader on 2/14/17.
 *
 */

public class DatabaseHelper extends SQLiteOpenHelper {
    private static final String DATABASE_NAME="Exam";
    private static final int    DATABASE_VERSION=1;

    private static final String TAG=DatabaseHelper.class.getCanonicalName();
    private Context mContext;
    private static final String CREATE_TABLE="create table if not exists test (id int, name text);";

    private SQLiteDatabase mDb;

    public DatabaseHelper(Context context){
        super(context,DATABASE_NAME,null,DATABASE_VERSION); //this line will create database
        mContext=context;

        mDb=SQLiteDatabase.openOrCreateDatabase(mContext.getDatabasePath(DATABASE_NAME+".db").getPath(),null);

        mDb.execSQL(CREATE_TABLE);
    }
    @Override
    public void onCreate(SQLiteDatabase sqLiteDatabase) {
        Log.d(TAG, "onCreate: Im called and database created");

    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {

    }

    public void insertData(int id, String name){
        openDatabase();
        ContentValues values=new ContentValues();
        values.put("id",id);
        values.put("name",name);
        mDb.insert("test",null,values);
        mDb.close();

    }
    public String findName(int id){
        openDatabase();
        String[] columns={"id","name"};
        String[] selectionArgs={""+id};
        Cursor cursor=mDb.query("test",columns,"id = ?",selectionArgs,null,null,null);
        if(cursor.moveToFirst()){
            String tmp= cursor.getString(1);
            cursor.close();
            return tmp;
        }else{
            cursor.close();
           return "No record found";
        }
    }
    private void openDatabase(){

        mDb=SQLiteDatabase.openDatabase(mContext.getDatabasePath(DATABASE_NAME+".db").getPath(),null,0);
    }
}
