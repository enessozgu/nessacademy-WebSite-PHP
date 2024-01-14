
<?php
 
 $servername ="localhost";
 $username="root";
 $password="";
 $dbname="test_db";

 $baglan=mysqli_connect($servername,$username,$password,$dbname);

 if(!$baglan){
    die("Bağlantı Kurulamadı :" .mysqli_connect_error());

 }

 else{
    echo"Bağlantı Başarılı";
 }


 



?>

