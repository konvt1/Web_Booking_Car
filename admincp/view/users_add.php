


<h3>Thêm thành viên</h3>
    <div class="box500">
        <form class="addPro" action="index.php?act=users_add" method="POST">
            <div class="form-group">
                <label for="tenkh">Tên : </label>
                <input type="text" class="form-control" name="tenkh" id="tenkh" placeholder="Nhập tên  ">
            </div>
            <div class="form-group">
                <label for="ngaysinh">Ngày sinh: </label>
                <input type="text" class="form-control" name="ngaysinh" id="ngaysinh" placeholder="Nhập ngày sinh">
            </div>
            <div class="form-group">
                <label for="gioitinh">Giới tính : </label>
                <input type="text" class="form-control" name="gioitinh" id="gioitinh" placeholder="Nhập giới tính">
            </div>
            <div class="form-group">
                <label for="diachi">Địa chỉ: </label>
                <input type="text" class="form-control" name="diachi" id="diachi" placeholder="Nhập địa chỉ">
            </div>
            <div class="form-group">
                <label for="sdt">SĐT: </label>
                <input type="text" class="form-control" name="sdt" id="sdt" placeholder="Nhập số điện thoại">
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Nhập email">
            </div>
            <div class="form-group">
                <label for="cmnd">CMND: </label>
                <input type="text" class="form-control" name="cmnd" id="cmnd" placeholder="Nhập cmnd">
            </div>
            <div class="form-group">
                <label for="user">User: </label>
                <input type="text" class="form-control" name="user" id="user" placeholder="Nhập user">
            </div>
            <div class="form-group">
                <label for="pass">Pass: </label>
                <input type="text" class="form-control" name="pass" id="pass" placeholder="Nhập pass">
            </div>
         
            <button type="submit" name="btnadd" class="btn btn-primary">Thêm danh mục</button>
        </form>
    </div>


    <style>

        h3 {
            color: #007bff;
        }

        .box500 {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 500px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>