package com.osama.afinal;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
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
    String jsonExample="{\"Contacts\" : [ {\"person1\" :"+
        " [{\"id\": \"130\", \"name\": \"Ahmad\"}]},{\"person2\" :"+
        " [{\"id\" : \"190\" , \"name\" : \"osama\"}]}, {\"person3\" : [{\"id\" : \"32\" , \"name\" : \"hussnain\"}]}]}";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_json);
        TextView jsonTextView=(TextView)findViewById(R.id.jsonTextView);
        jsonTextView.setText(" ");
        try {
         /*   JSONObject jsonObject=new JSONObject(myJson);
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
            }*/
            JSONObject contacts=new JSONObject(jsonExample);
            JSONArray persons=contacts.getJSONArray("Contacts");
            for (int i=0;i<persons.length();i++){
                JSONObject person=persons.getJSONObject(i);
                JSONArray personAttributes=person.getJSONArray(person.keys().next());
                for (int j=0;j<personAttributes.length();j++){
                    JSONObject attr=personAttributes.getJSONObject(j);
                    jsonTextView.setText(jsonTextView.getText()+ " "+attr.getString("name"));
                }
            }
        } catch (JSONException e) {
            e.printStackTrace();
        }
    }
}
