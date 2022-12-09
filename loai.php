<?php
function insert_loai($tenloai){
    $sql="insert into loaisp(tenloai) values('$tenloai')";
    pdo_execute($sql);
}

function delete_loai($id){
    $sql="delete from loaisp where id=".$id;
    pdo_execute($sql);
}
function loadall_loai(){
    $sql="select * from loaisp order by id desc";
    $listloai=pdo_query($sql);
    return  $listloai;
}
function loadone_loai($id){
    $sql="select * from loaisp where id=".$id;
    $loai=pdo_query_one($sql);
    return $loai;
}
function update_loai($id,$tenloai){
    $sql="update loaisp set tenloai='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}


?>