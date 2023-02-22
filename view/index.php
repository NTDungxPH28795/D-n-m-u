<?php
    session_start();
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/taikhoan.php";
    include "header.php";
    include "global.php";
    include "gioithieu.php"; 
    if(isset($_SESSION['mycart'])){
        $_SESSION['mycart']=[];
    }
    $spnew=loadall_sanpham_home();
    $dsdm=loadall_danhmuc();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'chitiet':
                if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
                    # code...
                    $onesp=loadone_sanpham($id);
                    include "sanphamct.php";
                }else{
                    include "index.php";
                }
                break;
            case 'gioithieu':
                include "gioithieu.php";
                break;
            case 'dichvu':
                include "dichvu.php";
                break;
            case 'tintuc':
                // include "tintuc.php";
                include "welfare.php";
                break;
            case 'sanphamct':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    include "sanphamct.php";
                    // header('location: sanphamct.php');
                }else{
                    include "home.php";
                }
                break;
            case 'sanpham':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }

                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                    
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm=load_ten_dm($iddm);
                include "sanpham.php";
                break;
            case 'sanpham':
                // include "sanpham.php";
                include "home.php";
                break;
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao="Đăng kí thành công! Vui lòng đăng nhập";
                }
                // include "sanpham.php";
                include "../view/taikhoan/dangky.php";
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        // $thongbao="Đăng nhập thành công";
                        header('location: index.php');
                    }else{
                        $thongbao="Tài khoản không tồn tại!";
                    }
                }
                include "home.php";
                // include "../view/taikhoan/dangky.php";
                break;
            case 'edit_taikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $id=$_POST['id'];
                    update_taikhoan($id,$user,$email,$pass,$address,$tel);
                    $_SESSION['user']=checkuser($user,$pass);
                    header('location: index.php?act=edit_taikhoan');
                }
                include "../view/taikhoan/edit_taikhoan.php";
                // include "../view/taikhoan/dangky.php";
                break;
            case 'quenmk':
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                    $email=$_POST['email'];
                    $checkemail=checkemail($email);
                    // if(($checkemail['user']=$user) && ($checkemail['email']=$email)){
                    if(is_array($checkemail)){
                        $thongbao="Mât khẩu: ".$checkemail['pass'];
                    }else{
                        $thongbao="Kiểm tra lại thông tin tài khoản !";
                    }
                    // header('location: index.php?act=edit_taikhoan');
                }
                include "../view/taikhoan/quenmk.php";
                // include "../view/taikhoan/dangky.php";
                break;
            case 'thoat':
                session_unset();
                // include "sanpham.php";
                header('location: index.php');
                break;
            case 'addtocart':
                $_SESSION['mycart']=[];
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=1;
                    $ttien=$soluong * $price;
                    $spadd=[$id,$name,$img,$price,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$spadd);
                }

                include "../view/cart/viewcart.php";
                break;
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }
    include "welfare.php";
    include "footer.php";
?>

<style>

</style>