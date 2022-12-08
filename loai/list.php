<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH LOẠI SẢN PHẨM</h1>
            </div>
            <div class="row frmcontent">
                
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listloai as $loai) {
                                extract($loai);
                                $sualoai="index.php?act=sualoai&id=".$id;
                                $xoaloai="index.php?act=xoaloai&id=".$id;
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$tenloai.'</td>
                                <td><a href="'.$sualoai.'"><input type="button" value="Sửa"></a> <a href="'.$xoaloai.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                            }
                        ?>
                        
                        
                    </table>
                </div>
                <div class="row mb10">
                    <!-- <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn"> -->
                    <a href="index.php?act=addloai"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>