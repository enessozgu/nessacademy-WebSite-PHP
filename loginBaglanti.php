
<?php
 
 $servername ="localhost";
 $username="root";
 $password="37689622Ee88";
 $dbname="login";

 $baglan=mysqli_connect($servername,$username,$password,$dbname);

 if(!$baglan){
    die("Bağlantı Kurulamadı :" .mysqli_connect_error());

 }


 



?>
