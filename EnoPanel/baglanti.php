
<?php

// $servername = "localhost";
// $username = "nese7cademcomtr_enes";
// $password = "rT-XR8l2%gkG";
// $dbname = "nese7cademcomtr_db";
 
 $servername = "localhost";
 $username = "nese7cademcomtr_enes";
 $password = "rT-XR8l2%gkG";
 $dbname = "nese7cademcomtr_db";
 
  $conn=mysqli_connect($servername,$username,$password,$dbname);
 
  if(!$conn){
     die("Bağlantı Kurulamadı :" .mysqli_connect_error());
 
  }
 
  else{
     echo"Bağlantı Başarılı";
  }


 



?>

