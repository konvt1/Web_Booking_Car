
  <section class="containerfull">
   <div class="container">
      <div class="boxright">
         <h1> Đăng nhập</h1> <br>
         <div class="containerfull mr30">
            <h2 style="color:red">  
               <?php
                  if(isset($_SESSION['tb_dangnhap']) && ($_SESSION['tb_dangnhap']!="")){
                     echo $_SESSION['tb_dangnhap'];
                     unset($_SESSION['tb_dangnhap']);
                  } 
               ?>
            </h2>
            <form action="index.php?act=login" method="POST">
               <div class="row">
                  <div class="col-25">
                     <label for="user">Tên đăng nhập</label>
                  </div>
                  <div class="col-75">
                     <input type="text" id="user" name="user" placeholder="Tên đăng nhập">
                  </div>
               </div>
               <div class="row">
                  <div class="col-25">
                     <label for="pass">Mật khẩu </label>
                  </div>
                  <div class="col-75">
                     <input type="password" id="pass" name="pass" placeholder="Mật khẩu ">
                  </div>
               </div>
               <div class="row">
                  <!-- Adjusted button styling for a smaller size -->
                  <input type="submit" name="dangnhap" value="Đăng Nhập" class="btn btn-primary m-b" style="padding: 5px 15px ;">
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
