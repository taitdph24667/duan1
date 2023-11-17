<?php
function loadall_taikhoan(){
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan= pdo_query($sql);
    // var_dump($listtaikhoan);
    // die;
    return $listtaikhoan;
}
function delete_taikhoan(){
    $sql= "DELETE FROM `taikhoan` WHERE id=".$_GET['id'];
    pdo_execute($sql);
}
function loadone_taikhoan($id){
    $sql ="select * from taikhoan where id=".$id;
    $tk=pdo_query_one($sql);
    return $tk;
}
function update_taikhoan($id,$user,$pass,$email,$money,$role){
    $sql= "update taikhoan set user='".$user."',pass='".$pass."',email='".$email."',money='".$money."',role='".$role."' where id=".$id;
    pdo_execute($sql);
}
?>