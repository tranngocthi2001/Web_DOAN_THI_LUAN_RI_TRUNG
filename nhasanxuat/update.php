<?php
    if(is_array($nsx)){
        extract($nsx);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT NHÀ SẢN XUẤT</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatenhasx" method="post">
                    <div class="row mb10">
                        Mã nhà sx<br>
                        <input type="text" name="mansx" disabled>
                    </div>
                    <div class="row mb10">
                        Tên nhà sản xuất<br>
                        <input type="text" name="tennsx" value="<?php if(isset($tennsx)&&($tennsx!="")) echo $tennsx ;?>">
                    </div>
                    <div class="row mb10">
                        SDT<br>
                        <input type="text" name="sdt" value="<?=$sdt?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ<br>
                        <input type="text" name="diachi" value="<?=$diachi?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <!-- <input type="reset" value="NHẬP LẠI"> -->
                        <a href="index.php?act=listnhasx"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>