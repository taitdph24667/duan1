<?php
ob_start();
    include "../quantri/model/pdo.php";
    include "header.php";
    include "model/danhmuc.php";
    include "../quantri/model/accgame.php";
    include "../quantri/model/taikhoan.php";
    include "../quantri/model/napthe.php";
    if (isset($_GET['act'])) {
        $act=$_GET['act'];
        switch($act){
        //danh mục
            case 'adddm':
                if (isset($_POST['them'])&&($_POST['them'])) {
                    $tenacc= $_POST['tenacc'];
                    
                    insert_danhmuc($tenacc);
                    
                    $thongbao="Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdanhmuc= loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                delete_danhmuc($_GET['id']);
                }
                $listdanhmuc= loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $dm=loadone_danhmuc($_GET['id']);
                }
                $listdanhmuc= loadall_danhmuc();
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $tenacc= $_POST['tenacc'];
                        $id= $_POST['id'];
                        update_danhmuc($id,$tenacc);
                        $thongbao="Cập Nhật thành công";
                    }
                    $listdanhmuc= loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;
    //sản phẩm
            case 'addag':
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $iddm= $_POST['iddm'];
                    $tenacc= $_POST['tenacc'];
                    $giaacc= $_POST['giaacc'];
                    $lv= $_POST['lv'];
                    $class= $_POST['class'];
                    $mota= $_POST['mota'];
                    $hinh= $_FILES['hinh']['name'];
                    $matkhau= $_POST['password'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            }else {
            }
            insert_accgame($tenacc,$giaacc,$hinh,$mota,$lv,$class,$iddm,$matkhau);
            $thongbao="Thêm thành công";
        }
    
                $listdanhmuc= loadall_danhmuc();
                include "accgame/add.php";
                break;
            case 'listag':
                if (isset($_POST['listok'])&&($_POST['listok'])) {
                    $kyw =$_POST['kyw'];
                    $iddm =$_POST['iddm'];
                }else {
                    $kyw ='';
                    $iddm =0;
                }
                $listdanhmuc= loadall_danhmuc();
                $listaccgame= loadall_accgame($kyw,$iddm);
                include "accgame/list.php";
                break;
            case 'xoaag':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                delete_accgame($_GET['id']);
                }
                $listaccgame= loadall_accgame("",0);
                include "accgame/list.php";
                break;
            case 'suaag':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $accgame=loadone_accgame($_GET['id']);
                }
                $listdanhmuc= loadall_danhmuc();
                $listaccgame=loadall_accgame();
                include "accgame/update.php";
                break;
            case 'updateag':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                   
                    $id=$_POST['id'];
                    $iddm= $_POST['iddm'];
                    $tenacc= $_POST['tenacc'];
                    $giaacc= $_POST['giaacc'];
                    $lv= $_POST['lv'];
                    $class= $_POST['class'];
                    $mota= $_POST['mota'];
                    $hinh= $_FILES['hinh']['name'];
                    $matkhau= $_POST['password'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            }else {
            }
            update_accgame($id,$iddm,$tenacc,$giaacc,$lv,$class,$mota,$hinh,$matkhau);
            $thongbao="Cập nhật thành công";
        }
        $listdanhmuc= loadall_danhmuc();
        $listaccgame= loadall_accgame();
        include "accgame/list.php";
        break;
        // khach hang
            case 'xoatk':
             if (isset($_GET['id'])&&($_GET['id']>0)) {
                delete_taikhoan($_GET['id']);
                }
                $listtaikhoan= loadall_taikhoan();
                include "taikhoan/list.php";
            break;
            case 'suatk':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $taikhoan=loadone_taikhoan($_GET['id']);
                }
                $listtaikhoan=loadall_taikhoan();
                include "taikhoan/update.php";
                break;
            case 'updatetk':
                    if(isset($_POST['capnhattk'])&&($_POST['capnhattk'])){
                        $id=$_POST['id'];
                        $user= $_POST['user'];
                        $pass= $_POST['pass'];
                        $email=$_POST['email'];
                        $money= $_POST['money'];
                        $role= $_POST['role'];
                        // var_dump($money);
                        // die;
                update_taikhoan($id,$user,$pass,$email,$money,$role);
                $thongbao="Cập nhật thành công";
            }
            $listtaikhoan= loadall_taikhoan();
            include "taikhoan/list.php";
            break;
            case 'dskh':
                $listtaikhoan= loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            default:
                include "home.php";
                break;

                case 'napthe':
                   $listnapthe=loadall_thenap();
                  
                  
                    include "../quantri/napthe/list.php";
                    // header("Refresh:0");
                    break;
case "reload":
    if(isset($_GET["duyet"])&& !empty($_GET["duyet"])){
        duyetthenap($_GET["id"],$_GET["duyet"]);
       }
       if(isset($_GET["khongduyet"])&& !empty($_GET["khongduyet"])){
        khongduyetthenap($_GET["khongduyet"]);
       }
header("location:index.php?act=napthe");
    break;


        }
    }else{
       
    }

 include "footer.php";
?>