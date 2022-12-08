<div class="row">
            <div class="row frmtitle">
                <h1>THÊM MỚI NHÀ SẢN XUẤT</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addnhasx" method="post">
                    <div class="row mb10">
                        Mã nhà sx<br>
                        <input type="text" name="mansx" disabled>
                    </div>
                    <div class="row mb10">
                        Tên nhà sản xuất<br>
                        <input type="text" name="tennsx">
                    </div>
                    <div class="row mb10">
                        SDT<br>
                        <input type="text" name="sdt">
                    </div>
                    <div class="row mb10">
                        Địa chỉ<br>
                        <input type="text" name="diachi">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
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