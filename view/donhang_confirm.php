<section class="containerfull">
   <div class="container">
      <h2>Cảm ơn quý khách. vé đã đặt thành công</h2>

      <table class="table table-striped">
         <thead>
            <tr>
               <th>Mã đơn đặt</th>
               <th>Mã vé</th>
               <th>Mã khách hàng</th>
               <th>Tên</th>
               <th>Địa chỉ</th>
               <th>SĐT</th>
               <th>Điểm đón</th>
               <th>Điểm trả</th>
               <th>ngày đặt </th>
               <th>giờ đặt </th>
               <th>tổng </th>
               <th>pttt</th>
            </tr>
         </thead>
         <?php
         // Lấy ID đơn hàng từ biến session
         $id_donhang_moi = $_SESSION['id_donhang_moi'];

         // Hiển thị ID đơn hàng
         echo "ID đơn hàng vừa thanh toán: " . $id_donhang_moi;

         // Kiểm tra xem có ID đơn hàng hay không
         if ($id_donhang_moi) {
            // Lấy thông tin đơn hàng vừa thanh toán
            $donhang_moi = getonedh($id_donhang_moi);

            if ($donhang_moi) {
               // Hiển thị thông tin đơn hàng
               foreach ($donhang_moi as $donhang) {
                  echo '
                  <tr>
                     <td>' . $donhang['madondatve'] . '</td>
                     <td>' . $donhang['mave'] . '</td>
                     <td>' . $donhang['makn'] . '</td>
                     <td>' . $donhang['ten_nguoidat'] . '</td>
                     <td>' . $donhang['diachi_nguoidat'] . '</td>
                     <td>' . $donhang['dienthoai_nguoidat'] . '</td>
                     <td>' . $donhang['diemdon'] . '</td>
                     <td>' . $donhang['diemtra'] . '</td>
                     <td>' . $donhang['ngaydat'] . '</td>
                     <td>' . $donhang['giokhachdat'] . '</td>
                     <td>' . $donhang['tong'] . '</td>
                     <td>' . $donhang['pttt'] . '</td>
                   
                  </tr>';
               }
            } else {
               echo "Không tìm thấy thông tin đơn hàng vừa thanh toán.";
            }
         } else {
            echo "Không có ID đơn hàng để hiển thị.";
         }
         ?>
      </table>
   </div>
</section>