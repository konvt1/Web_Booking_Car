
<section class="containerfull">
    <div class="container">
        <form action="index.php?act=thanhtoan" method="POST">
            <div class="col9 viewcart">
                <div class="ttdathang">

                    <h2>Thông tin người đặt hàng</h2>
             
                    <label for="ten_nguoidat"><b>Họ và tên</b></label>
                    <input type="text" placeholder="Nhập họ tên đầy đủ" name="ten_nguoidat" id="ten_nguoidat" required>
             
               
                    <label for="diachi_nguoidat"><b>Địa chỉ</b></label>
                    <input type="text" placeholder="Nhập địa chỉ" name="diachi_nguoidat" id="diachi_nguoidat" required>
                    <label for="dienthoai_nguoidat"><b>Điện thoại </b></label>
                    <input type="text" placeholder="Nhập email" name="dienthoai_nguoidat" id="dienthoai_nguoidat" required>

                    <label for="diemdon"><b>Điểm đón </b></label>
                    <input type="text" placeholder="Nhập Điểm đón" name="diemdon" id="diemdon" required>
                    <label for="diemtra"><b>Điểm trả </b></label>
                    <input type="text" placeholder="Nhập Điểm trả" name="diemtra" id="diemtra" required>
                    <label for="ngaydat"><b>Ngày đặt </b></label>
                    <input type="date" placeholder="Nhập Ngày đặt" name="ngaydat" id="ngaydat" required>
                    <label for="giokhachdat"><b>Giờ đặt </b></label>
                    <input type="time" placeholder="Nhập Giờ đặt" name="giokhachdat" id="giokhachdat" required>
                    <label for="giokhachdat"><b>Ngay khoi hanh </b></label>
                    <input type="date" placeholder="Nhập khoi hanh" name="ngaykhoihanh" id="ngaykhoihanh" required>
                    <label for="giokhachdat"><b>Gio khoi hanh </b></label>
                    <input type="time" placeholder="Nhập Giờ đặt" name="giokhoihanh" id="giokhoihanh    " required>





                </div>


            </div>
            <div class="col3">  
                <h2>ĐƠN HÀNG</h2>
                <div class="pttt">
                    <div class="boxcart">
                        <h3>Phương thức thanh toán: </h3>
                        <input type="radio" name="pttt" value="1" id="" checked> Tiền mặt<br>
                        <input type="radio" name="pttt" value="2" id=""> Ví điện tử<br>
                        <input type="radio" name="pttt" value="3" id=""> Chuyển khoản<br>
                        <input type="radio" name="pttt" value="4" id=""> Thanh toán online<br>
                    </div>
                </div>
                <div class="total">
                    <div class="boxcart bggray">
                        <h3>Tổng thanh toán: <?= $thanhtien = get_tong(); ?></h3>
                    </div>
                </div>
          
                <button type="submit" name="thanhtoan">Thanh toán</button>
 
            </div>
        </form>


    </div>
</section>

<!-- <script>
        var ttnhanhang=document.getElementById("ttnhanhang");
        ttnhanhang.style.display="none";
        function showttnhanhang(){
            if(ttnhanhang.style.display=="none"){
                ttnhanhang.style.display="block";
            }else{
                ttnhanhang.style.display="none";
            }
        }
        

    </script> -->

<style>
    .seat-map-container {
        display: flex;
        flex-direction: column;
    }

    .seat-row {
        display: flex;
    }

    .available-seat,
    .unavailable-seat {
        border: 1px solid #ccc;
        padding: 10px;
        margin: 5px;
        cursor: pointer;
    }

    .unavailable-seat {
        background-color: #ddd;
        cursor: not-allowed;
    }

    .selected-seat {
        background-color: #4CAF50;
        color: white;
    }
</style>