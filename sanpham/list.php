<div class="row">
            <div class="row frmtitle mb">
                <h1>DANH SÁCH SẢN PHẨM</h1>
            </div>
            <form action="index.php?act=listsp" method="post">
                        <input type="text" name="kyw" placeholder="Tên sản phẩm">
                        <select name="idloai">
                            <option value="0" selected>Tất cả</option>
                            <?php
                                foreach($listloai as $loai){
                                    extract($loai);
                                    echo '<option value="'.$id.'">'.$tenloai.'</option>';
                                }
                            ?>
                        </select>
                        <input type="submit" name="listok" value="GO">
            </form>
            <div class="row frmcontent">
                
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ SẢN PHẨM</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>Hình</th>
                            <th>GIÁ</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($listsanpham as $sanpham) {
                                extract($sanpham);
                                $suasp="index.php?act=suasp&id=".$id;
                                $xoasp="index.php?act=xoasp&id=".$id;
                                $hinhpath="../upload/".$img;
                                if(is_file($hinhpath)){
                                    $hinh="<img src='".$hinhpath."' height='80'>";
                                }else{
                                    $hinh="No Photo";
                                }
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$tensp.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$gia.'</td>
                                <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                            }
                        ?>
                        
                        
                    </table>
                </div>
                <div class="row mb10">
                    <!-- <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn"> -->
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>