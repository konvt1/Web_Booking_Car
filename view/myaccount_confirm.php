<?php
if (isset($_SESSION['s_user']) && count($_SESSION['s_user']) > 0) {
    // Assuming get_user() retrieves user information based on the user ID
    extract($_SESSION['s_user']);
    $userinfo = get_user($id);
    $_SESSION['s_user'] = $userinfo;
    extract($userinfo);
}
?>
<section class="containerfull">
    <div class="container">
        <div class="boxright">
            <h1>Thông tin cập nhật</h1><br>
            <div class="containerfull mr30">
                <div class="row">
                    <div class="col-25">
                        <label for="user">Tên đăng nhập</label>
                    </div>
                    <div class="col-75">
                        <?= htmlspecialchars($user) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="pass">Mật khẩu</label>
                    </div>
                    <div class="col-75">
                        <?= htmlspecialchars($pass) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Tên Khách hàng</label>
                    </div>
                    <div class="col-75">
                        <?= htmlspecialchars($tenkh) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Ngày sinh</label>
                    </div>
                    <div class="col-75">
                        <?= htmlspecialchars($ngaysinh) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Giới tính</label>
                    </div>
                    <div class="col-75">
                        <?= htmlspecialchars($gioitinh) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Địa chỉ</label>
                    </div>
                    <div class="col-75">
                        <?= htmlspecialchars($diachi) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Số điện thoại</label>
                    </div>
                    <div class="col-75">
                        <?= htmlspecialchars($sdt) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-75">
                        <?= htmlspecialchars($email) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="email">CMND</label>
                    </div>
                    <div class="col-75">
                        <?= htmlspecialchars($cmnd) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>