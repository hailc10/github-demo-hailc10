<h3 style="margin:15px;">Danh sách độc giả mượn tất cả các loại sách trong thư viện : </h3>
<table>
       
       <tr><td><h3>STT</h3></td><td><h3>Tên độc giả</h3></td></tr>
<?php 
   include "connect.php";
   $sql = "SELECT DISTINCT docgia.TENDOCGIA,COUNT(sach.MASACH) FROM muonsach,docgia,sach 
           WHERE muonsach.MADOCGIA=docgia.MADOCGIA AND muonsach.MASACH=sach.MASACH 
           GROUP BY docgia.TENDOCGIA HAVING COUNT(sach.MASACH) = (SELECT COUNT(MASACH) FROM sach)";
   
   $result = $conn->query($sql);

   if ($result->num_rows > 0){
    $dem = 1;
    while($row = $result->fetch_assoc()) {

     // $row["MASACH"] $row["TUADE"];
       echo "<tr><td>".$dem."</td><td>".$row["TENDOCGIA"]."</td></tr>";
       $dem += 1;

     }
   }   else {
    echo "<tr><td colspan='2'>Không có dữ liệu</td></tr>";
   }  
   $conn->close(); 
?>
</table>