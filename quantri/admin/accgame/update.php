<?php
   if (is_array($accgame)) {
    extract($accgame);
   }
   $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
      $hinh="<img src='".$hinhpath."' height='80'>";
    }else{
      $hinh="no photo";
    }
?>
<div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬT ACC GAME</h1>
         </div>
         <div class="row2 form_content ">
         <form action="index.php?act=updateag" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
           <select name="iddm">
              <option value="0" selected>Tất cả</option>
            <?php
            foreach($listdanhmuc as $danhmuc){
              extract($danhmuc);
              if($iddm==$id) $a="selected"; else $a="";
              echo '<option value="'.$id.'" '.$a.'>'.$name.'</option>';
            }
            ?>
            </select>
           </div>
           <div class="row2 mb10">
            Tên Tài Khoản Game<br>
            <input type="text" name="tenacc" value="<?=$name?>">
           </div>
           <div class="row2 mb10">
            Giá <br>
            <input type="text" name="giaacc" value="<?=$price?>">
           </div>
           <div class="row2 mb10">
            Ảnh <br>
            <input type="file" name="hinh" >
            <?=$hinh?>
           </div>
           <div class="row2 mb10">
            Mô tả <br>
            <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
          </div>
            Mật khẩu <br>
            <input type="text" name="password" value="<?=$matkhau?>">
           
           <div class="row mb10 ">
            <input type="hidden" name="id" value="<?=$accgame['id']?>">
         <input class="mr20" type="submit" name="capnhat" value="Cập Nhật">
         <input  class="mr20" type="reset" value="NHẬP LẠI">
         <a href="index.php?act=listag"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
           ?>
          </form>
         </div>
        </div>