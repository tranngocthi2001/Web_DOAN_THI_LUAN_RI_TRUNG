<?php
    if(is_array($bill)){
        extract($bill);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT ĐƠN HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatebill" method="post">
                    <div class="row mb10">
                        Mã đh<br>
                        <input type="text" name="madonhang" disabled>
                    </div>
                    <div class="row mb10">
                        Tên<br>
                        <input type="text" name="bill_name" value="<?php if(isset($bill_name)&&($bill_name!="")) echo $bill_name ;?>">
                    </div>
                    <div class="row mb10">
                        Email<br>
                        <input type="text" name="bill_email" value="<?=$bill_email?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ<br>
                        <input type="text" name="bill_address" value="<?=$bill_address?>">
                    </div>
                    <div class="row mb10">
                        Điện thoại<br>
                        <input type="text" name="bill_tel" value="<?=$bill_tel?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listbill"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>