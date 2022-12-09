<?php
function insert_nsx($tennsx,$sdt,$diachi){
    $sql="insert into nhasanxuat(tennsx,sdt,diachi) values('$tennsx','$sdt','$diachi')";
    pdo_execute($sql);
}

function delete_nsx($id){
    $sql="delete from nhasanxuat where id=".$id;
    pdo_execute($sql);
}
function loadall_nsx(){
    $sql="select * from nhasanxuat order by id desc";
    $listnhasx=pdo_query($sql);
    return  $listnhasx;
}
function loadone_nsx($id){
    $sql="select * from nhasanxuat where id=".$id;
    $nsx=pdo_query_one($sql);
    return $nsx;
}
function update_nsx($id,$tennsx,$sdt,$diachi){
    $sql="update nhasanxuat set tennsx='".$tennsx."',sdt='".$sdt."',diachi='".$diachi."' where id=".$id;
    pdo_execute($sql);
}


?>