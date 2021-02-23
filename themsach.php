<?php          
                 include "connect.php";
                 include "models/sach.php";

                 if(isset($_POST['submit'])&&($_POST['submit']=="Thêm"))
                 {
                 //     $ob = new sach($_POST['code'],$_POST['name'],$_POST['price'],$_POST['deploytime'],$_POST['status']);
                 
                 $trangthai;

                 if(isset($_POST['status'])&&$_POST['status']=="1"){
                    $trangthai = 1;
                 } else{
                     $trangthai = 0 ;
                 }
                      $sql = "INSERT INTO sach VALUES(' ".$_POST['code']." ',' ".$_POST['namee']." ',' ".$_POST['price']." ',' ".$_POST['deploytime']." ',' ".$trangthai." ')";

                  if($conn->query($sql)==TRUE){
                   echo "<script>alert(\"Thêm thành công \");</script>";
                   }else {echo "<script>alert(\"Thêm thất bại \");</script>";}
                 }
?>