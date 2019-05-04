<?php
$panjang = 7;

function cetak_gambar($panjang){
    $tengah = round($panjang/2,0,PHP_ROUND_HALF_DOWN); 
    if($panjang % 2 == 0){
        echo "harus bilangan ganjil";
    }else{
        for($i=0;$i<$panjang;$i++){
            for($j=0;$j<$panjang;$j++){
                if($j == 0 || $j ==$panjang-1 || $i == $tengah){
                    echo "*";
                }else{
                    echo "=";
                }
             }
             echo "\n";
             //echo nl2br("\r*");
        }    
    }
    
}
 cetak_gambar($panjang);
?>