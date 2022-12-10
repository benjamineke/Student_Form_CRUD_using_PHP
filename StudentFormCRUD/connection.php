<?php

    $con=new mysqli('localhost', 'root', '01234', 'benjamineke1_crud');

    if(!$con){
        die(mysqli_error($con));
    }

?>