<?php
function createKarakter(){
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return substr(str_shuffle($chars), 0, 32);
}
    

function cetak($num){
    
    for($i=0 ; $i<$num;$i++){
        $data[$i] = createKarakter();
        
        for($j=0; $j < $i ;$j++){
            if($data[$i] == $data[$j]){
                $data[$i] = createKarakter();
            }
        }
    }
    foreach($data as $value){
        echo $value."\n";
        //echo nl2br("$value.\n");
    }
       
}
cetak(3);

?>