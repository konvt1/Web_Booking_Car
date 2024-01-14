<?php
$php_tuyenxe = showdm($cxdm);
extract($cxchitiet);

?>
<section class="containerfull">
    <div class="container">
        <div class="boxleft mr2pt menutrai">
            <h1>TUYẾN XE</h1><br><br>
            <?= $php_tuyenxe ?>

        </div>
        <div class="boxright">
            <h1>CHUYẾN XE CHI TIỂT</h1><br>
            <div class="containerfull mr30">

                <div class="col6 textchitiet">
                    <h2>Tên tuyến: <?= $tentuyen ?></h2>
                    <p>Ngày khởi hành: <?= $ngaykhoihanh ?></p>
                    <p>Giờ khởi hành: <?= $giokhoihanh ?></p>
                    <p>Điểm đi: <?= $diemdi ?></p>
                    <p>Điểm đến: <?= $diemden ?></p>
                    <p>Gía: <?= $banggia ?> đ</p>

                    <form action="index.php?act=addcart" method="post">
                        <input type="hidden" name="tentuyen" value="<?= $tentuyen ?>">
                        <input type="hidden" name="diemdi" value="<?= $diemdi ?>">
                        <input type="hidden" name="diemden" value="<?= $diemden ?>">
                        <input type="hidden" name="ngaykhoihanh" value="<?= $ngaykhoihanh ?>">
                        <input type="hidden" name="giokhoihanh" value="<?= $giokhoihanh ?>">
                        <input type="hidden" name="banggia" value="<?= $banggia ?>">
                        <input type="number" name="soluong" id="" min="1" value="1" max="10">
                        <button type="submit" name="addcart">Đặt Vé</button>
                    </form>
               
                </div>

            </div>
            <hr>

        </div>


    </div>
</section>