<div class="main-content">
                <h3 class="title-page">
                    Thành viên
                </h3>
                <div class="d-flex justify-content-end">
                    <a href="index.php?act=users_add" class="btn btn-primary mb-2">Thêm thành viên</a>
                </div>
                <table class="table table-striped">
    <thead>
                <tr>
        <th>id</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Giới tínhh</th>
        <th>Địa chỉ </th>
        <th>số điện thoại</th>
        <th>Email</th>
        <th>Cmnd</th>
        <th>User</th>
        <th>Pass</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (isset($kq) && count($kq) > 0) {
        foreach ($kq as $dm) {
          echo '
          <tr>
            <td>' . $dm['id'] . '</td>
            <td>' . $dm['tenkh'] . '</td>
            <td>' . $dm['ngaysinh'] . '</td>
            <td>' . $dm['gioitinh'] . '</td>
            <td>' . $dm['diachi'] . '</td>
            <td>' . $dm['sdt'] . '</td>
            <td>' . $dm['email'] . '</td>
            <td>' . $dm['cmnd'] . '</td>
            <td>' . $dm['user'] . '</td>
            <td>' . $dm['pass'] . '</td>
           
          </tr>';
        }
      }
      ?>
    </tbody>
  </table>
            </div>
        </div>
    </div>
    <script>
        new DataTable('#example');
    </script>