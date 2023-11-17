<?php
   if (is_array($taikhoan)) {
    extract($taikhoan);
   }
?>
<div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬT TÀI KHOẢN</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatetk" method="POST">
           <div class="row2 mb10 form_content_container">
           TÊN TÀI KHOẢN <br>
            <input type="text" name="user" value="<?=$user?>">
           </div>
           <div class="row2 mb10">
            MẬT KHẨU  <br>
            <input type="text" name="pass"  value="<?=$pass?>" >
           </div>
           <div class="row2 mb10">
            EMAIL  <br>
            <input type="text" name="email" value="<?=$email?>" >
           </div>
           <div class="row2 mb10">
            MONEY  <br>
            <input type="text" name="money" value="<?=$money?>" >
           </div>
           ROLE <br>
           <input type="int" name="role" value="<?=$role?>">
           <div class="row mb10 ">
           <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id?>">
         <input class="mr20" type="submit" name="capnhattk" value="Cập nhật">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listtk"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
           if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
           ?>
          </form>
         </div>
        </div>