<main>
<div class="dangky">
    <?php 
        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
            extract($_SESSION['user']);
        }
    ?>
    <form action="index.php?act=edit_taikhoan" class="form-dangky" method="post">
        <h4>Cập Nhật Thành Viên Coffee Monster</h4>
        <p>Email:</p>
        <input type="email" name="email" value="<?=$email?>">
        <p>Tên Tài Khoản:</p>
        <input type="text" name="user" value="<?=$user?>">
        <p>Mật Khẩu:</p>
        <input type="password" name="pass" value="<?=$pass?>">
        <p>Địa Chỉ:</p>
        <input type="text" name="address" value="<?=$address?>">
        <p>Số Điện Thoại:</p>
        <input type="text" name="tel" value="<?=$tel?>">
        <div class="form-dangky-btn">
            <input type="hidden" name="id" value="+84-<?=$id?>">
            <input type="submit" value="Cập Nhật" name="capnhat">
            <input type="reset" value="Nhập Lại">
        </div>
    </form>
    <p style="color: red;">
    <?php
        if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
        }
    ?>
    </p>
    
</div>
<!-- <div class="user">
    <form class="signIn" action="#" method="post">
        <p class="user-title"><i class="fa-solid fa-users-rectangle"></i></p>
        <p style="font-weight: 500;">Tài Khoản</p>
        <input type="text">
        <p style="font-weight: 500;">Mật Khẩu</p>
        <input type="password" name="" id="">
        <button>Đăng Nhập</button>
        <p class="not">Bạn chưa có tài khoản. Hãy đăng kí <a href="index.php?act=dangky">ở đây</a></p>
    </form>
</div> -->
</main>

<link rel="stylesheet" href="../css/style.css">
