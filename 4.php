<?php
$dataAbjad = array(
    array('c', 'a', 'g', 'b', 'j'),
    array('s', 'j', 'b', 'f', 'w'),
    array('f', 's', 'y')
);

print_r($dataAbjad);
function sortAlpha($dataAbjad){
    foreach($dataAbjad as $data){
        
        //print_r($data);
        sort($data);
        //$dataAbjadNew = array();
        $dataAbjadNew[] = $data;
    }
    return $dataAbjadNew;
}

print_r(sortAlpha($dataAbjad));
?>