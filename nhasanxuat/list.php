<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH NHÀ SẢN XUẤT</h1>
            </div>
            <div class="row frmcontent">
                
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ NHÀ SX</th>
                            <th>TÊN NHÀ SẢN XUẤT</th>
                            <th>SDT</th>
                            <th>Địa chỉ</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listnhasx as $nsx) {
                                extract($nsx);
                                $suansx="index.php?act=suansx&id=".$id;
                                $xoansx="index.php?act=xoansx&id=".$id;
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$tennsx.'</td>
                                <td>'.$sdt.'</td>
                                <td>'.$diachi.'</td>
                                <td><a href="'.$suansx.'"><input type="button" value="Sửa"></a> <a href="'.$xoansx.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                            }
                        ?>
                        
                        
                    </table>
                </div>
                <div class="row mb10">
                    <!-- <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn"> -->
                    <a href="index.php?act=addnhasx"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>