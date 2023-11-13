
<?php 
include "view/header.php";


include "quantri/model/pdo.php";

include "model/danhmuc.php";
include "quantri/model/accgame.php";
include "quantri/model/taikhoan.php";
include "quantri/model/napthe.php";


if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
      

        case "trangchu":
$locdm=!empty($_GET['dm'])?$_GET['dm']:"";

          $listaccgame= loadAll_accgame('',$locdm);
      $listdanhmuc=loadall_danhmuc();


            include "view/home.php";
     
        break;

        case "napthe":
          
                include "view/napthe.php";
         
            break;

            case "hdmuaacc":
          
                include "view/hdmuaacc.php";
         
            break;

            case "dangnhap":
          
                include "view/login.php";
         
            break;

            case "dangky":
          
                include "view/signup.php";
         
            break;


    //    include "view/home.php";
        // case "sanphamct":
          
        //     if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
        //         $sanpham = loadone_sanpham($_GET['idsp']);
        //         $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
        //         $binhluan = loadall_binhluan($_GET['idsp']);
        //         include "view/chitietsanpham.php";
        //     }else{
        //         include "view/home.php";            
        //     }
        //     break;
  

            
      

      
    }
}else{
    $listaccgame= loadAll_accgame();
    $listdanhmuc=loadall_danhmuc();
    include "view/home.php";
    
}


include "view/footer.php";

?>