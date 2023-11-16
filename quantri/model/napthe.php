<?php
function loadall_thenap(){ 
$sql = "select * from napthe order by id desc";
$listnapthe=pdo_query($sql);
return $listnapthe;
}
function duyetthenap($iduser,$idthenap){ 

    $sql =" UPDATE `taikhoan` SET `money`=`money`+ (SELECT `menhgia` from `napthe` WHERE id =$idthenap) WHERE id =$iduser";
    // echo $sql;
    pdo_execute("update `napthe` set trangthai=1 where id=$idthenap");
    // header("Refresh:5");
 return pdo_execute($sql);
 

    }
function khongduyetthenap($idthenap){ 
   
 return pdo_execute("update `napthe` set trangthai=-1 where id=$idthenap");
        }


?>