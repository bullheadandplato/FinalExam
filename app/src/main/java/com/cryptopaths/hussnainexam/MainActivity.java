package com.cryptopaths.hussnainexam;

import android.os.AsyncTask;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

import org.json.JSONException;
import org.json.JSONObject;

public class MainActivity extends AppCompatActivity {
    private DatabaseHelper mDbHelper;
    private int count=0;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        mDbHelper=new DatabaseHelper(this);
        new MyAsyncTask().execute();

    }

    public void insertButtonClicked(View view){
        mDbHelper.insertData(count++,((EditText)(findViewById(R.id.editText))).getText().toString());
        ((TextView)findViewById(R.id.resultTextView)).setText(mDbHelper.findName(count-1));


    }
    class MyAsyncTask extends AsyncTask<Void,Void,String>{

        @Override
        protected String doInBackground(Void... voids) {
            String url="http://uog.edu.com/student/result/...";
            //String json=ConnectionHandler.getResponceJsonFromUrl(url);

            String json="{ \"id\": \"1234\", \"name\": \"Osama\", \"class\": \"BSCS\", \"result\": {\"math\":\"10\",\"english\": \"13\",\"urdu\":\"53\"}}";

            return parseJson(json);

        }

        @Override
        protected void onPostExecute(String s) {
            super.onPostExecute(s);
            ((TextView)findViewById(R.id.resultTextView)).setText(s);
        }
    }
    public String parseJson(String json){
        try {
            JSONObject rootObject=new JSONObject(json);
            JSONObject resultObject=rootObject.getJSONObject("result");
            //calculate average now
            int mathMarks=Integer.valueOf(resultObject.getString("math"));
            int englishMarks= Integer.valueOf(resultObject.getString("english"));
            int urduMarks=Integer.valueOf(resultObject.getString("urdu"));
            int average=(mathMarks+englishMarks+urduMarks)/300;
            if(average>80){
                return "Report: Congratulations you got A+";
            }else if(average>50){
                return "Report: You have passed the exam";
            }else{
                return "Report: Unfortunately you didn't pass the exam";
            }

        } catch (JSONException e) {
            e.printStackTrace();
            return "Error in parsing json";
        }
    }

}
