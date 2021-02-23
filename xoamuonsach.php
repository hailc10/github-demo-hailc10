
<?php 
   include "connect.php";
   echo "<tr><td>STT</td><td>Tên đọc giả</td><td>Mã Sách</td><td>Chức năng</td></tr>";
   

        $tendg = $_POST['tendocgia'];
        $idmasach = $_POST['masach'];

        $sql1 = "DELETE muonsach FROM muonsach ,docgia WHERE docgia.MADOCGIA=muonsach.MADOCGIA AND TENDOCGIA = '$tendg' AND MASACH = '$idmasach'";

        if ($conn->query($sql1) === TRUE) {
            echo "<script>alert('Xóa thành công');</script>";
          } else {
            echo "Error deleting record: " . $conn->error;
          }
   
   $conn->close();
   include "cau3.php";
?>
