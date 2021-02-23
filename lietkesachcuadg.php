<table>
    <?php 
 
     if ($_POST['dropdownValue']){
      //call the function or execute the code
      processDrpdown($_POST['dropdownValue']);
     }
  
        // include "models/sach.php";             
     function processDrpdown($selectedVal) {

        include "connect.php";
        
         echo "<tr><td><h3>STT</h3></td><td><h3>Tên sách</h3></td></tr>";
                     
         $sql = "SELECT sach.TUADE FROM muonsach,docgia,sach 
         WHERE muonsach.MADOCGIA=docgia.MADOCGIA AND docgia.MADOCGIA='".$selectedVal."' AND muonsach.MASACH=sach.MASACH";

         $result = $conn->query($sql);
        
         if ($result->num_rows > 0) 
         {           
           $dem = 1;
           while($row = $result->fetch_assoc()) 
           {
             echo "<tr><td>".$dem."</td><td>".$row["TUADE"]."</td></tr>";
             $dem += 1;
           }
         } else 
         {
             echo "<script>alert('".$selectedVal."')</script>";
          echo "<tr><td colspan='3'>Không có dữ liệu</td></tr>";
         }
         $conn->close();
     }  
         

    ?>
</table>