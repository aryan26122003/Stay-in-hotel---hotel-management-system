<?php
$con=mysqli_connect("localhost","root","","hotel_management");
if($con){
    echo "connection successful";

}
else{
    echo "connection failed";
}
?>