<?php
$data=yaml_parse_file("../yaml/acceuille.yaml");
foreach($data AS $domaine=>$tbaccueille) {
    echo '<h1>'.$domaine.'<h1>';
    foreach($tbaccueille AS $accueille ) {
     
        echo $accueille ['niveau'].'</p>';  

    }
}
?>