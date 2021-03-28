<!DOCTYPE html>
<html>
<head>
<title>Praktikum Modul 1</title>
</head>
<body>

<?php
$family=["Yuwesli","Murniati Bajenta","Billy Asi Dirgantara","Verenty Eugenia","Axel Berkati"];

foreach($family as $data){
    $teks=str_replace(" ","",$data); //buang spasi yang ada di tengah kata
    echo "jumlah kata dari nama $data: ". str_word_count($data) ."<br>";
    echo "jumlah huruf dari nama $data: ". strlen($teks) ."<br>";
}


foreach($family as $data){
	echo "Kebalikan dari nama $data: ". strrev($data)."<br>";
}


function vowel_konsonant($word){
    $word_len = strlen($word)-1;
    $vowel_letters = array("a","e","i","o","u");

    $vowel = 0;
    $consonant = 0;

    for($i = 0; $i <= $word_len; $i++){
        if(in_array($word[$i], $vowel_letters)){
            $vowel++;
        }else{
            $consonant++;
        }
    }
   	
    echo "<br>jumlah huruf vocal : ".$vowel;
    echo "<br>jumlah huruf konsonan : ".$consonant;
}

foreach($family as $data){
	echo "<br>Menghitung jumlah vokal dan konsonan dari nama $data";
	$teks=str_replace(" ","",$data); //buang spasi yang ada di tengah kata
	$teks_modif=strtolower($teks); //ganti kalimat menjadi huruf kecil semua
    
	vowel_konsonant($teks_modif);
}
?>
</body>
</html>