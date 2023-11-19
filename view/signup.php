</div><meta name="google-signin-client_id" content="815049177118-rimti0ph7dspev8isdjv5k4tlb2p45gd.apps.googleusercontent.com">
<link rel="stylesheet" href="account/style3.css">
<div class="account-box">
    <div class="wrapper">
      <div class="title">ĐĂNG KÝ</div> 
      <form method="post">
      <center><?php
  if(isset($thongbao)&&$thongbao != ""){
    echo $thongbao;
  }
?></center>
      <form action="index.php?act=dangky" method="post">
        <div id="content"></div>
        <div class="field">
          <input type="text" id="" name="user" required>
          <label>Tên tài khoản</label>
        </div>
        <div id="sign-in-button"></div>
        <div class="field">
          <input type="password" id="" name="pass" required>
          <label>Mật khẩu</label>
        </div>
        <div class="field">
          <input type="email" id="" name="email" required>
          <label>Gmail</label>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember" name="remember" value="1" checked>
            <!-- <label for="remember">Lưu đăng nhập</label> -->
          </div>
          <!-- <span>Lấy mã xác thực</span> -->
        </div>
        <input type="hidden" id="confirm" name="confirm">
        <div class="field">
          <input type="submit" id="submit" value="Đăng ký" name="test">
          

          
        </div>
      
</form>

        <div class="signin">----------- Hoặc -----------</div>
        <div class="signin">
            <a href="index.php?act=dangnhap" class="btn btn-lg btn-primary"></i> Đăng nhập </a>
        </div>
        <div class="signin">
            <div id="my-signin2"></div>
        </div>
      </form>
    </div>
</div>

</div>


