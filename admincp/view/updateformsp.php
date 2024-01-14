<div class="main">
    <h2>Cập nhat chuyen xe</h2>
    <!-- <?php
    var_dump($kqone);
    ?> -->
    <form action="index.php?act=sanpham_update" method="POST">
        <select name="matuyen" id="">
            <option value="0">Chọn danh mục</option>
            <?php


            $iddmcur = $spct[0]['matuyen'];
            if (isset($dsdm)) {
                foreach ($dsdm as $dm) {
                    if ($dm['machuyenxe'] == $iddmcur)
                        echo '<option value="' . $dm['machuyenxe'] . '" selected id>' . $dm['tentuyen'] . '</option>';
                    else
                        echo '<option value="' . $dm['machuyenxe'] . '" >' . $dm['tentuyen'] . '</option>';
                }
            }

            ?>
        </select>
        <input type="text" name="tentuyen" id="tentuyen"  value="<?=$spct[0]['tentuyen']?>" placeholder="Tên tuyến" required>
         <input type="date" name="ngaykhoihanh" id="ngaykhoihanh" value="<?=$spct[0]['ngaykhoihanh']?>" placeholder="Ngày khởi hành" required>
        
         <input type="time" name="giokhoihanh" value="<?=$spct[0]['giokhoihanh']?>" id="giokhoihanh" placeholder="Giờ khởi hành" required>
         <input type="text" name="diemdi" value="<?=$spct[0]['diemdi']?>" id="diemdi" placeholder="Điểm đi" required>
         <input type="text" name="diemden" value="<?=$spct[0]['diemden']?>" id="diemden" placeholder="Điểm đến" required>
         <input type="number" name="banggia" value="<?=$spct[0]['banggia']?>" id="banggia" placeholder="Bảng giá" required>
        <input type="hidden" name="machuyenxe" value="<?=$spct[0]['machuyenxe']?>">
        <input type="submit" name="capnhat" value="capnhat">
    </form>
    <br>
    <table class="table">
        <tr>
            <th>Mã chuyến xe</th>
            <th>Mã tuyến</th>
            <th>Tên tuyến</th>
            <th>Ngày khởi hành</th>
            <th>Giờ khởi hành</th>
            <th>Điểm đi</th>
            <th>Điểm đến</th>
            <th>Bảng giá</th>
            <th>Hành động</th>
        </tr>
        <?php
        // var_dump($kq)
        ?>

        <?php


        // if (isset($kq) && (count($kq) > 1)) {

        foreach ($kq as $dm) {
            echo '
                <tr>
                <td>' . $dm['machuyenxe'] . '</td>
                <td>' . $dm['matuyen'] . '</td>
                <td>' . $dm['tentuyen'] . '</td>
                <td>' . $dm['ngaykhoihanh'] . '</td>
                <td>' . $dm['giokhoihanh'] . '</td>
                <td>' . $dm['diemdi'] . '</td>
                <td>' . $dm['diemden'] . '</td>
                <td>' . $dm['banggia'] . '</td>
                <td>
                  <a href="index.php?act=updateformsp&id=' . $dm['matuyen'] . '" class="btn btn-info">Sửa</a>
                  <a href="index.php?act=delsp&id=' . $dm['matuyen'] . '" class="btn btn-danger">Xóa</a>
                </td>
              </tr>';
        }

        //}

        ?>

    </table>
</div>