<div class="row2">
         <div class="row2 font_title mb10 ">
          <h1>DANH SÁCH ACC GAME</h1>
         </div>
         <form action="#" method="POST">
          <input type="text" name="kyw">
            <select name="iddm">
              <option value="0" selected>Tất cả</option>
            <?php
            foreach($listdanhmuc as $danhmuc){
              extract($danhmuc);
              echo '<option value="'.$id.'">'.$name.'</option>';
            }
            ?>
            </select>
             <input type="submit" name="listok" value="OK">
          </form>
           <div class="row2 mb10 formds_loai">
<table>
            <tr>
                <th></th>
                <th>MÃ ACC GAME</th>
                <th>TÊN ACC GAME</th>
                <th>GIÁ</th>
                <th>HÌNH</th>
                <th>LƯỢT XEM</th>
            
                <th></th>
            </tr>
            <?php
               foreach($listaccgame as $accgame){
                extract($accgame);
                $suaag="index.php?act=suaag&id=".$id;
                $xoaag="index.php?act=xoaag&id=".$id;
                $hinhpath="../upload/".$img;
                if(is_file($hinhpath)){
                  $hinh="<img src='".$hinhpath."' height='80'>";
                }else{
                  $hinh="no photo";
                }
                echo 
                '<tr>
                   <td><input type="checkbox" name="" id=""></td>
                   <td>'.$id.'</td>
                   <td>'.$name.'</td>
                   <td>'.$price.'</td>
                   <td>'.$hinh.'</td>
                   <td>'.$luotxem.'</td>
                 
                   <td>
                    <a href = "'.$suaag.'"><input type="button" value="Sửa"></a>
                    <a href = "'.$xoaag.'"><input type="button" value="Xóa"></a>
                   </td>
                </tr>';
               };
            ?>
</table>
</div>
</div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         <a href="index.php?act=addag"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>