<?php
function loadall_thenap(){ 
$sql = "select * from napthe order by id desc";
$listnapthe=pdo_query($sql);
return $listnapthe;
}

?>