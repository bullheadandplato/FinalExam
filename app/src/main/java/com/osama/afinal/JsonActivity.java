package com.osama.afinal;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.widget.TextView;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

public class JsonActivity extends AppCompatActivity {
    static String myJson="{ \"Departments\" :[" +
            "{ \"id\" : \"01\"," +
            "\"name\" : \"Computer Science\"," +
            "\"students\" : [{ \"osama\": [{ \"roll\" : \"13031519-091\"" +
            "}]},{\"Ahmad\":[{ \"roll\" : \"13031519-113\" " +
            "}]}]"+
            "}]}";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_json);
        TextView jsonTextView=(TextView)findViewById(R.id.jsonTextView);
        jsonTextView.setText(" ");
        try {
            JSONObject jsonObject=new JSONObject(myJson);
            JSONArray jsonArray=jsonObject.getJSONArray("Departments");
            for(int i=0;i<jsonArray.length();i++){
                JSONObject newObject=jsonArray.getJSONObject(i);
                JSONArray man=newObject.getJSONArray("students");
                jsonTextView.setText(""+man.length());
                for(int j=0;j<man.length();j++){
                    JSONObject onemoreObject=man.getJSONObject(j);
                    String togetvalue=onemoreObject.keys().next();
                    JSONArray google=onemoreObject.getJSONArray(togetvalue);
                    for(int k=0;k<google.length();k++){
                        JSONObject haha=google.getJSONObject(k);
                        jsonTextView.setText(jsonTextView.getText()+" "+haha.getString("roll"));
                    }
                }
            }
        } catch (JSONException e) {
            e.printStackTrace();
        }
    }
}
