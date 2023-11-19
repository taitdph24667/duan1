<?php session_start();
include "view/header.php";
include "quantri/model/pdo.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/accgame.php";
include "model/napthe.php";
include "global.php";
//  đã thay đổi
// test part 2

if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
      

        case "trangchu":
$locdm=!empty($_GET['dm'])?$_GET['dm']:"";

    $listaccgame= loadAll_accgame('',$locdm);
      $listdanhmuc=loadall_danhmuc();
      

            include "view/home.php";
     
        break;

        case "sanphamct":
            if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
              $id=$_GET['idsp'];
                 $onesp=loadone_accgame($id);
                 $locdm=!empty($_GET['dm'])?$_GET['dm']:"";
                 $listaccgame= loadAll_accgame('',$locdm);
                 $listdanhmuc=loadall_danhmuc();
           
            include "view/chitietacc.php";
            }else{
                include "view/home.php";
            }
         
     
        break;

        case "napthe":
          
                include "view/napthe.php";
         
            break;

            case "hdmuaacc":
          
                include "view/hdmuaacc.php";
         
            break;




            case "dangnhap": 
             include "view/login.php";
                if (isset($_POST['dangnhap'])) {
                      echo $loginMess;
                    include "index.php";
                }
                break;
                
              
                case "dangxuat":
                    dangxuat();
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