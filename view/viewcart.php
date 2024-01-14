    <?php
    $php_cart = viewcart();
    ?>
    <section class="containerfull">
        <div class="container">
            <div class="col9 viewcart">
                <h2>ĐƠN HÀNG</h2>
                <table border="1px">
                    <tr>
                        <th>STT</th>
                        <th>Tên tuyến</th>
                        <th>Điểm đi</th>
                        <th>Điểm đến</th>
                        <th>Ngày khởi hành</th>
                        <th>Giờ khởi hành</th>
                        <th>Bảng giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>
                    
                    <?= $php_cart ?>


                </table>
                <a href="index.php?act=viewcart&del=1">Xóa rỗng đơn hàng</a>
            </div>
            <div class="col3">
                <h2>ĐƠN HÀNG</h2>
                <form action="index.php?act=viewcart" method="post"></form>
                <div class="total">
                    <h3>Tổng: <?=get_tong(); ?></h3>
                </div>
            

                <div class="total">
                    <h3>Tổng thanh toán: <?= $thanhtien=get_tong(); ?></h3>
                </div>
                <a href="index.php?act=thanhtoan">
                <button>Thanh toán</button>
                </a>
            </div>


        </div>
    </section>