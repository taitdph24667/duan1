<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH THẺ NẠP</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>LOẠI THẺ</th>
                <th>MỆNH GIÁ</th>
                <th>SERI</th>
                <th>MÃ THẺ</th>
                <th>NGÀY NẠP</th>
                <TH>NGƯỜI NẠP</TH>
               
                <th></th>
            </tr>
            <div class="row2 mb10 formds_loai">
            <tr>
               
            <?php
             foreach ($listnapthe as $napthe) {
                extract($napthe);
                $duyetthe="index.php?act=reload&id=".$idtk."&duyet=$id";
                $khongduyet="index.php?act=reload&khongduyet=$id";
                $status="";
                
if($trangthai==0){
  $status='<a onClick="return (window.location.reload());" href="'.$duyetthe.'"><input type="button" value="duyệt"></a> 
  <a onClick="window.location.reload();" href= "'.$khongduyet.'"><input type="button" value="Không duyệt"></a>';
}else if($trangthai==1){
  $status= 'đã duyệt';
  
}else{
  $status= 'đã từ chối';
}




              
                echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>Garena</td>
                        <td>'.number_format($menhgia,0,"",".").' VND</td>
                        <td>'.$seri.'</td>
                        <td>'.$mathe.'</td>
                        <td>'.$ngaynap.'</td>
                        <td>'.$idtk.'</td>
                        <td>'.$status.'</td>
                       

                     </tr>';
             }
            ?>

            </tr>
           </div>
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
           </div>
          </form>
         </div>
        </div>
        