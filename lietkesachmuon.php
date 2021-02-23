<table>
    <?php 
 
     if ($_POST['dropdownValue']){
      //call the function or execute the code
      processDrpdown($_POST['dropdownValue']);
     }
  
        // include "models/sach.php";             
     function processDrpdown($selectedVal) {

        include "connect.php";
        
         echo "<tr><td>STT</td><td>Mã Sách</td><td>Tựa đề</td></tr>";
                     
         $sql = "SELECT muonsach.MASACH,TUADE FROM sach ,muonsach WHERE NGAYMUON = '".$selectedVal."' AND sach.MASACH=muonsach.MASACH";

         $result = $conn->query($sql);
        
         if ($result->num_rows > 0) {
          // output data of each row
          $dem = 1;
          while($row = $result->fetch_assoc()) {

           // $row["MASACH"] $row["TUADE"];
             echo "<tr><td>".$dem."</td><td>".$row["MASACH"]."</td><td>".$row["TUADE"]."</td></tr>";
             $dem += 1;
          }
         } else {
          echo "<tr><td colspan='3'>Không có dữ liệu</td></tr>";
         }
         $conn->close();
     }  
         

    ?>
</table>