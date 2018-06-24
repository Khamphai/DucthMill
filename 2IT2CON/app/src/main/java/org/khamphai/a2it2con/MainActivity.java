package org.khamphai.a2it2con;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    String a1, a2 = null;
    TextView textView1;
    Button btn1, button2, btnn3;
    EditText editText1, editText2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btn1 = findViewById(R.id.btn1);
        button2 = findViewById(R.id.btn2);
        btnn3 = findViewById(R.id.btn3);
        textView1 = findViewById(R.id.tv1);
        editText1 = findViewById(R.id.edt1);
        editText2 = findViewById(R.id.edt2);


        textView1.setText("0"); //Set TextView = 0
        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                a1 = editText1.getText().toString();
                a2 = editText2.getText().toString();
                int c1 = Integer.parseInt(a1);
                int c2 = Integer.parseInt(a2);
                int total = c1 + c2;
                textView1.setText("Total is " + total);
            }
        });
        button2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                a1 = editText1.getText().toString();
                a2 = editText2.getText().toString();
                int c1 = Integer.parseInt(a1);
                int c2 = Integer.parseInt(a2);
                int total = c1 - c2;
                textView1.setText("Total is " + total);
            }
        });

        btnn3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                a1 = editText1.getText().toString();
                a2 = editText2.getText().toString();
                int c1 = Integer.parseInt(a1);
                int c2 = Integer.parseInt(a2);
                int total = c1 * c2;
                textView1.setText("Total is " + total);
            }
        });

    }
}
