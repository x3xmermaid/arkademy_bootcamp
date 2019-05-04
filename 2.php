<?php
$username = "asdaqsdw";
$password = "xxxXcx1@";


function validasi($username, $password){
    
    if(ctype_lower($username) && strlen($username) == 8){
        echo "Username Benar \n";
    }else{
        echo "Username Salah tidak boleh huruf besar, angka, dan simbol dan berjumlah 8\n";
    } 

    if(!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,}$/', $password)){
        echo "Pass salah harus ada huruf besar, huruf kecil, angka, dan simbol dan berjumlah minimal 8\n";
    }else{
        echo "password Benar\n";
    } 
}

validasi ($username, $password);
?>