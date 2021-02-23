<div>
<form method="POST" action="themsach.php" target="_blank"> 

     <table>
                <tr>
                    <td colspan="2"><h2>Thêm sách</h2></td>
                </tr>
              <tr>
                  <td> <label>Mã sách </label> </td>
                  <td> <input type="text" placeholder="Mã sách" name="code"></td>
              </tr>
              <tr>
                  <td><label>Tựa đề</label></td>
                  <td><input type="text" placeholder="Tựa đề" name="namee"></td>
              </tr>
              <tr>
                  <td><label>Giá</label></td>
                  <td><input type="text" placeholder="Giá" name="price"></td>
              </tr>
              <tr>
                  <td><label>Năm xuất bản</label></td>
                  <td><input type="text" placeholder="Năm xuất bản" name="deploytime"></td>
              </tr>
              <tr>
                  <td style="text-align:center;" colspan="2"><label>Trạng thái</label> <input type="checkbox" value="1" placeholder="Trạng thái" name="status"></td>
              </tr>
              <tr>
                  <td colspan="2"> <input type="submit"  name="submit"  id="themsach" style="margin-left: 70px;" value="Thêm"></td>
              </tr>
            </table>
</form>
</div>