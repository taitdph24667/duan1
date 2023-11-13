<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI ACC GAME</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addag" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
           Danh muc <br>
           <select name="iddm" id="">
            <?php
            foreach($listdanhmuc as $danhmuc){
              extract($danhmuc);
              echo '<option value="'.$id.'">'.$name.'</option>';
            }
            ?>
            
           </select>
           </div>
           <div class="row2 mb10">
            Tên Tài Khoản Game<br>
            <input type="text" name="tenacc" >
           </div>
           <div class="row2 mb10">
            Giá <br>
            <input type="text" name="giaacc" >
           </div>
           <div class="row2 mb10">
            Ảnh <br>
            <input type="file" name="hinh" >
           </div>
           <div class="row2 mb10">
            Mô tả <br>
            <textarea name="mota" cols="30" rows="10"></textarea>
          </div>
            Mật khẩu <br>
            <input type="text" name="password">
           
           <div class="row mb10 ">
         <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">
         <a href="index.php?act=listag"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
           ?>
          </form>
         </div>
        </div>
