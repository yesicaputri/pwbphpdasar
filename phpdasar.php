<?php
   $hello_world = "Saya siswa SMKN1 Karawang Yang Lagi Belajar PHP";
   echo $hello_world;
   echo "<br/>";
   // sterlen() mengembalikan panjang string
   echo strlen($hello_world);
   echo "<br /";
   // str_word_cout() menghitung jumlah kata dalam string
   echo str_word_count($hello_world);
   echo "<br />";
   // strrev() membalikkan huruf string
   echo strrev($hello_world);
   echo "<br />";
   // strpos() mencari teks tertentu di dalam string
   echo strpos($hello_world,"siswa");
   echo "<br />";
   // str_replace() mengganti beberapa karakter dengan beberapa karakter lain dalam string
   echo str_replace("SMKN 1 Karawang", "NESKAR", $hello_world);
?>
