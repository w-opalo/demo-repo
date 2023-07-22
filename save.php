<?php
    if(isset($_GET['rq']) && $_GET['rq'] == "save"){
        $fname = $_GET["fname"];
        $id = $_GET["id"];
        $email = $_GET["email"];


        echo $fname ."has been saved successfully";
    }
?>