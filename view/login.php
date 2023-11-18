</div><meta name="google-signin-client_id" content="815049177118-rimti0ph7dspev8isdjv5k4tlb2p45gd.apps.googleusercontent.com">
<link rel="stylesheet" href="account/style3.css">
<div class="account-box">
    <div class="wrapper">
      
      <div class="title">ĐĂNG NHẬP</div>
      <form action="index.php?act=dangnhap" method="post">
      <?php if (!$_SESSION) { ?>
        <div id="content"></div>
        <div class="field">
          <input type="text" id="" name="user" required>
          <label>Tài Khoản</label>
        </div>
        <div id="sign-in-button"></div>
        <div class="field">
          <input type="password" id="" name="pass" required>
          <label>Mật khẩu</label>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember" name="remember" value="1" checked>
            <label for="remember">Lưu đăng nhập</label>
          </div>
          
        </div>
        <input type="hidden" id="confirm" name="confirm">
        <div class="field">
          <input type="submit" id="submit" value="Đăng nhập" name="dangnhap">
        </div>
        <div class="signin">----------- Hoặc -----------</div>
        <div class="signin">
            <a href="index.php?act=dangky" class="btn btn-lg btn-primary"></i> Đăng ký</a>
        </div>
        <div class="signin">
            <div id="my-signin2"></div>
        </div>
      </form>
      <?php if (isset($loginMess)&&$loginMess != '') {
                echo $loginMess;
            } ?> <?php } else { ?>
            <h1>BẠN ĐÃ ĐĂNG NHẬP THÀNH CÔNG</h1>
              <p>Xin Chào <?=$_SESSION['user']['user']?></p>
              <ul>                
              <li><button><a href="index.php?act=trangchu">quay lại trang chủ</a></button>

              <li><button><a href="index.php?act=edit_taikhoan">Cập nhập tài khoản</a></button>
  
              <?php if( $_SESSION['user']['role'] ==1 ){ ?>
  
              <li><button><a href="admin/index.php">Đăng nhập Admin</a></button>
  
                  <?php } ?>
              <li><button><a href="index.php?act=dangxuat">Đăng xuất</a></button>
  </li>
              </ul>
          <?php } ?>
    </div>
</div>
<script src="../www.gstatic.com/firebasejs/6.0.2/firebase-app.js"></script>
<script src="../www.gstatic.com/firebasejs/6.0.2/firebase-auth.js"></script>
<script src="../apis.google.com/js/platformd1c1.js?onload=renderButton" async defer></script>
<script src="account/login.js"></script>
</div>
<div id="modal"></div>
<div class="modal fade" id="modal-getNotify" role="dialog"></div>