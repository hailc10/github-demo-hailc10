<script>
            $(document).ready(function(){

                //Ajax for calling php function
                // $.post('lietkesachmuon.php', { dropdownValue: inputValue }, function(data){
                //     $("#ajaxngay").html(data);
                //     //do after submission operation in DOM
                // });
                $(".del").click(function(){
                  var closettr =  $(this).closest("tr");
                  closettr.remove();
                  var tendocgia = $(this).closest('tr').find('.tendocgia').text();
                  var masach = $(this).closest('tr').find('.masach').text();
                  $.post('xoamuonsach.php',{tendocgia: tendocgia, masach: masach},function(data){
                      $("#updatetable").html(data);
                      
                  });
                
                });
              
          
        });

        function DeleteObject(m,n){
               alert('22');
        }
        </script>

<table id="updatetable">
    <?php 
 

        include "connect.php";
        
         echo "<tr><td>STT</td><td>Tên đọc giả</td><td>Mã Sách</td><td>Chức năng</td></tr>";
                     
         $sql = "SELECT docgia.TENDOCGIA,muonsach.MASACH FROM muonsach ,docgia WHERE docgia.MADOCGIA=muonsach.MADOCGIA";

         $result = $conn->query($sql);
        
         if ($result->num_rows > 0) {
          // output data of each row
          $dem = 1;
          while($row = $result->fetch_assoc()) {
             $ten =  $row["TENDOCGIA"];
             $id  = $row["MASACH"];
           // $row["MASACH"] $row["TUADE"];
             echo "<tr><td>".$dem."</td><td class='tendocgia'>".$row["TENDOCGIA"]."</td><td class='masach'>".$row["MASACH"]."</td><td><button class='del'  name='xóa'>Xóa</button></td></tr>";
              $dem++;
            }
         } else {
          echo "<tr><td colspan='3'>Không có dữ liệu</td></tr>";
         }
         $conn->close();
   
    ?>
</table>