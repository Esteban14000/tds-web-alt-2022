<?php
$data=yaml_parse_file("Competence.yaml");
foreach($data AS $domaine=>$tbCompetence) {
    echo '<h1>'.$domaine.'<h1>';
    foreach($tbCompetence AS $Competence ) {
        echo '<p>'.$Competence['nom'].':';
        echo $Competence['niveau'].'</p>';  

    }

}

?>