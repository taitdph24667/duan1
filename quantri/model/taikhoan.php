<?php
function loadall_taikhoan(){
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan= pdo_query($sql);
    // var_dump($listdanhmuc);
    // die;
    return $listtaikhoan;
}
?>