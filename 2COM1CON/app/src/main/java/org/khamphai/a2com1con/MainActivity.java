package org.khamphai.a2com1con;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        final EditText e = findViewById(R.id.editText);
        final TextView t = findViewById(R.id.textView);
        Button a = findViewById(R.id.button2); //Button Click
        final Spinner b = findViewById(R.id.spinner); // Item Choose

        a.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                String value = e.getText().toString();
                String spinner = b.getSelectedItem().toString();

                if (spinner.contains("+")) {
                    int bb = Integer.parseInt(value) + 10;
                    t.setText("Result: " + bb);
                } else if (spinner.contains("-")) {
                    int lop = Integer.parseInt(value) - 10;
                    t.setText("Result: " + lop);
                }

            }
        });

    }
}
