<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI Danh Mục</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=adddm" method="POST">
           <div class="row2 mb10 form_content_container">
           ID ACC <br>
            <input type="text" name="maacc" placeholder="nhập vào mã loại">
           </div>
           <div class="row2 mb10">
            Tên ACC  <br>
            <input type="text" name="tenacc" placeholder="nhập vào tên">
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="submit" name="them" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listdm"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
           if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
           ?>
          </form>
         </div>
        </div>