<script>
            $(document).ready(function(){
            $('#getdate').change(function(){
                //Selected value
                var inputValue = $(this).val();

                //Ajax for calling php function
                $.post('lietkesachmuon.php', { dropdownValue: inputValue }, function(data){
                    $("#ajaxngay").html(data);
                    //do after submission operation in DOM
                });
            });
        });
</script>

<table >
    <tr>
      <td style="border:none;">Ngày :  
        <?php
           include "connect.php";

            echo " <select id='getdate' name='getdate'><option  disabled selected>Selecte date</option>"; 
            
            $sql = "SELECT DISTINCT NGAYMUON FROM `muonsach` ORDER BY NGAYMUON DESC";

            $result = $conn->query($sql);

          if ($result->num_rows > 0) {
       
            while($row = $result->fetch_assoc()) {
              echo "<option value=".$row['NGAYMUON'].">".$row['NGAYMUON']."</option>";
            }
         } else {
          echo "<option>Không có dữ liệu</option>";
         }

         echo "</select>";
       
         $conn->close();
           
       ?>
      </td>
    </tr>
    <tr>
      <td style="border:none;"><h2>Những cuốn sách được mượn</h2></td>
    </tr>
    <tr>
      <td style="display:none;" ><input type="text" id="result" name="result"></td>
    </tr>
</table>
<div id="ajaxngay">

</div>