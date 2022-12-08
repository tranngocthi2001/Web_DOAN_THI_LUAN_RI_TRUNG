<?php
    session_start();
    include "model/pdo.php";
    include "model/loai.php";
    include "model/sanpham.php";
    include "model/taikhoan.php";
    include "model/cart.php";
    include "view/header.php";
    include "global.php";

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $spnew=loadall_sanpham_home();
    $dsloai=loadall_loai();
    $dstop10=loadall_sanpham_top10();

    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'sanphamct':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }
                
                
                break;
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao="ĐĂNG KÝ THÀNH CÔNG.";
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        //$thongbao="ĐĂNG NHẬP THÀNH CÔNG.";
                        //chuyển qua trang mới
                        header('Location: index.php');
                        
                    }else{
                        $thongbao="TÀI KHOẢN KHÔNG TỒN TẠI !!!";
                    }
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'edit_taikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $id=$_POST['id'];
                    update_taikhoan($id,$user,$pass,$email,$address,$tel);
                    $_SESSION['user']=checkuser($user,$pass);
                    //chuyển qua trang mới
                    header('Location: index.php?act=edit_taikhoan');
                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
            case 'quenmk':
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                    $email=$_POST['email'];

                    $checkemail=checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
                    }else{
                        $thongbao="Email này không tồn tại";
                    }
                }
                include "view/taikhoan/quenmk.php";
                break;
            case 'thoat':
                session_unset();
                header('Location: index.php');
                break;
            




                //tocart
            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $tensp=$_POST['tensp'];
                    $img=$_POST['img'];
                    $gia=$_POST['gia'];
                    $soluong=1;
                    $ttien=$soluong * $gia;
                    $spadd=[$id,$tensp,$img,$gia,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$spadd);
                    
                }
                include "view/cart/viewcart.php";
                break;
            case 'delcart':
                if(isset($_GET['idcart'])){
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                }else{
                    $_SESSION['mycart']=[];
                }
                //include "view/cart/viewcart.php";
                header('Location: index.php?act=viewcart');
                break;
            case 'viewcart':
                include "view/cart/viewcart.php";
                break;
            case 'bill':
                include "view/cart/bill.php";
                break;
            case 'billcomfirm':
                if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                    if(isset($_SESSION['user'])) $iduser=$_SESSION['user']['id'];
                    else $id=0;
                    $user=$_POST['user'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $pttt=$_POST['pttt'];
                    $ngaydathang=date('h:i:sa d/m/Y');
                    $tongdonhang=tongdonhang();
                    //tạo bill
                    $idbill=insert_bill($iduser,$user,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang);

                    foreach($_SESSION['mycart'] as $cart){
                        insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                    }

                    $_SESSION['cart']=[];

                }
                $bill=loadone_bill($idbill);
                $billct=loadall_cart($idbill);
                include "view/cart/billcomfirm.php";
                break;
            case 'mybill':
                $listbill=loadall_bill($_SESSION['user']['id']);
                include "view/cart/mybill.php";
                break;   

            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
    
?>