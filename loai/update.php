<?php
    if(is_array($loai)){
        extract($loai);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT LOẠI SẢN PHẨM</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updateloai" method="post">
                    <div class="row mb10">
                        Mã loại<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại<br>
                        <input type="text" name="tenloai" value="<?php if(isset($tenloai)&&($tenloai!="")) echo $tenloai ;?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listloai"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>