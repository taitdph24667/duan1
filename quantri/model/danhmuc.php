<?php
function insert_danhmuc($tenacc){
    $sql="insert into danhmuc(name) values('$tenacc')";
    pdo_execute($sql);
}
function delete_danhmuc(){
    $sql= "DELETE FROM `danhmuc` WHERE id=".$_GET['id'];
    pdo_execute($sql);
}
function loadall_danhmuc(){ 
$sql = "select * from danhmuc order by id desc";
$listdanhmuc=pdo_query($sql);
return $listdanhmuc;
}
function loadone_danhmuc($id){
$sql ="select * from danhmuc where id=".$id;
$dm=pdo_query_one($sql);
return $dm;
}
function update_danhmuc($id,$tenacc){
    $sql= "update danhmuc set name='".$tenacc."' where id=".$id;
    pdo_execute($sql);
}
?>