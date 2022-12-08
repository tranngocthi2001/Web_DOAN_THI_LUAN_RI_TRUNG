<?php
    if(is_array($taikhoan)){
        extract($taikhoan);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT TÀI KHOẢN KHÁCH HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatetaikhoan" method="post">
                    <div class="row mb10">
                        Mã tk<br>
                        <input type="text" name="mataikhoan" disabled>
                    </div>
                    <div class="row mb10">
                        Tên Tài Khoản<br>
                        <input type="text" name="user" value="<?php if(isset($user)&&($user!="")) echo $user ;?>">
                    </div>
                    <div class="row mb10">
                        Mật khẩu<br>
                        <input type="text" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                        Email<br>
                        <input type="text" name="email" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ<br>
                        <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                        Điện thoại<br>
                        <input type="text" name="tel" value="<?=$tel?>">
                    </div>
                    <div class="row mb10">
                        Vai trò<br>
                        <input type="text" name="role" disabled>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listtaikhoan"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>