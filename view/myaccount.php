<?php
if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
    extract($_SESSION['s_user']);
}
?>
<section class="containerfull">
    <div class="container">
        <div class="boxright">
            <h1> Cập nhật</h1> <br>
            <div class="containerfull mr30">
                <form action="index.php?act=updateuser" method="POST">
                    <div class="row">
                        <div class="col-25">
                            <label for="user">Tên đăng nhập</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="user" value="<?= $user ?>" name="user" placeholder="Tên đăng nhập">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="pass">Mật khẩu </label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="pass" value="<?= $pass ?>" name="pass" placeholder="Mật khẩu ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Tên Khách hàng </label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="tenkh" value="<?= $tenkh ?>" name="tenkh" placeholder="Tên khách hàng ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Ngày sinh </label>
                        </div>
                        <div class="col-75">
                            <input type="date" id="ngaysinh" value="<?= $ngaysinh ?>" name="ngaysinh" placeholder="Ngày sinh ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">giới tính </label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="gioitinh" value="<?= $gioitinh ?>" name="gioitinh" placeholder="Giới tính ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Địa chỉ </label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="diachi" value="<?= $diachi ?>" name="diachi" placeholder="địa chỉ ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Số điện thoại </label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="sdt" value="<?= $sdt ?>" name="sdt" placeholder="Số điện thoại ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="email" value="<?= $email ?>" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">cmnd</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="cmnd" value="<?= $cmnd ?>" name="cmnd" placeholder="CMND">
                        </div>
                    </div>


                    <br>
                    <div class="row">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

