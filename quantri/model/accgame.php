<?php
function insert_accgame($tenacc,$giaacc,$hinh,$mota,$lv,$class,$iddm,$matkhau,){
    $sql= "insert into accgame(name,price,img,mota,lv,class,iddm,matkhau) values('$tenacc','$giaacc','$hinh','$mota','$lv','$class','$iddm','$matkhau')";
    pdo_execute($sql);

}
function delete_accgame($id){
    $sql= "DELETE FROM `accgame` WHERE id=".$id;
    pdo_execute($sql);
}
function loadAll_accgame($kyw="",$iddm=0){
    $sql = "select a.id as id,a.name as name,a.price as price,a.img as img,a.mota as mota,a.lv as lv,a.class as class,a.luotxem as luotxem ,a.iddm as iddm,a.matkhau as matkhau,d.name as namedm from accgame as a join danhmuc as d on d.id=a.iddm where 1";
    if ($kyw!="") {
        $sql.=" and class like '%".$kyw."%'";
    }
    if ($iddm>0) {
        $sql.=" and iddm ='".$iddm."' ";
    }
    $sql.= " order by id desc";
    $listaccgame= pdo_query($sql);
    return $listaccgame;
}
function loadone_accgame($id){
    $sql ="select * from accgame where id=".$id;
$dm=pdo_query_one($sql);
return $dm;
}
function update_accgame($id,$iddm,$tenacc,$giaacc,$mota,$lv,$class,$hinh,$matkhau){
    if ($hinh!="")
       $sql= "update accgame set iddm='".$iddm."',name='".$tenacc."',price='".$giaacc."',mota='".$mota."',lv='".$lv."',class='".$class."',img='".$hinh."',matkhau='".$matkhau."' where id=".$id;
    else
       $sql= "update accgame set iddm='".$iddm."',name='".$tenacc."',price='".$giaacc."',mota='".$mota."',lv='".$lv."',class='".$class."',matkhau='".$matkhau."' where id=".$id;
   
    pdo_execute($sql);
}

?>