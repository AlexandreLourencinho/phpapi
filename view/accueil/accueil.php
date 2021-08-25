<?php
if(isset($_GET['testget'])){
        echo json_encode($lesdiques);
}

if(isset($_POST)){
    echo json_encode($lesArtiste);
}
?>