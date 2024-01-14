

<section class="containerfull">
   <div class="container">
    
      <div class="boxright">
         <h1> Đăng ký</h1> <br>
         <div class="containerfull mr30">
            <form action="index.php?act=adduser" method="POST">
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
                  <div class="col-25">
                     <label for="repassword">Nhập lại Mật khẩu </label>
                  </div>
                  <div class="col-75">
                     <input type="password" id="repassword" name="repassword" placeholder="Nhập lại Mật khẩu ">
                  </div>
               </div>
               <div class="row">
                  <div class="col-25">
                     <label for="email">Email</label>
                  </div>
                  <div class="col-75">
                     <input type="text" id="email" name="email" placeholder="Email">
                  </div>
               </div>
               <!-- <div class="row">
                  <div class="col-25">
                     <label for="lname">Số điện thoại </label>
                  </div>
                  <div class="col-75">
                     <input type="text" id="lname" name="password" placeholder="Số điện thoại ">
                  </div>
               </div> -->

               
               <br>
               <div class="row">

                  <input type="submit" name="dangky" value="Đăng Ký">
               </div>
            </form>
         </div>


      </div>
   </div>
</section>