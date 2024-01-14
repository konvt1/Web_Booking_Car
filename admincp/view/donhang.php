<div class="main">
    <table class="table">
        <tr>
            <th>Mã đơn đặt vé</th>
       
            <th>Tên người đặt</th>
            <th>Địa chỉ người đặt</th>
            <th>Điện thoại người đặt</th>
            <th>Điểm đón</th>
            <th>Điểm trả</th>
            <th>Ngày đặt</th>
            <th>Giờ khách đặt</th>
            <th>Tổng thanh toán</th>
            <th>Phương thức thanh toán</th>
            <th>Hành động</th>
        </tr>
        <?php
        // Check if $kq is set and not empty
        if (isset($kq) && count($kq) > 0) {
            foreach ($kq as $dm) {
                echo '
                <tr>
                    <td>' . $dm['madondatve'] . '</td>
                 
                    <td>' . $dm['ten_nguoidat'] . '</td>
                    <td>' . $dm['diachi_nguoidat'] . '</td>
                    <td>' . $dm['dienthoai_nguoidat'] . '</td>
                    <td>' . $dm['diemdon'] . '</td>
                    <td>' . $dm['diemtra'] . '</td>
                    <td>' . $dm['ngaydat'] . '</td>
                    <td>' . $dm['giokhachdat'] . '</td>
                    <td>' . $dm['tong'] . '</td> 
                    <td>' . $dm['pttt'] . '</td>
                    <td>
                        <a href="index.php?act=deldon&id=' . $dm['madondatve'] . '">Xóa</a>
                    </td>
                </tr>';
            }
        } else {
            echo '<tr><td colspan="12">Không có dữ liệu để hiển thị</td></tr>';
        }
        ?>
    </table>
</div>