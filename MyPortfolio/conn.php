<?php
$conn =mysqli_connect("localhost","root","","myportfolio");
if(!$conn){
    die ("connot connect to database".mysqli_connect_error());
}
