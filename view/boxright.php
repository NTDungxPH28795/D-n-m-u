
<?php
    if(isset($_SESSION['user'])){
            extract($_SESSION['user']);
        ?>
        <div class="box-signin">
            <div class="box-signin-title">
                <p>Xin chào: <?=$user?></p>
            </div>
            <div class="box-signin-list">
                <div class="box-signin-list-btn">
                    <a href="index.php?act=quenmk">Quên Mật Khẩu</a><br>
                    <i class="fa-solid fa-question"></i>
                </div>
                <div class="box-signin-list-btn">
                    <a href="index.php?act=edit_taikhoan">Cập Nhật Thông Tin</a><br>
                    <i class="fa-solid fa-pen-nib"></i>
                </div>
                <?php if($role==1){?>
                <div class="box-signin-list-btn">
                    <a href="../admin/index.php">Đăng Nhập ADMIN</a><br>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <?php }?>
                <div class="box-signin-list-btn">
                    <a href="index.php?act=thoat">Thoát</a>
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </div>
            </div>
        </div>
    <?php
        }else{
    ?>
<form class="signIn" action="index.php?act=dangnhap" method="post">
    <p class="user-title"><i class="fa-solid fa-users-rectangle"></i></p>
    <p style="font-weight: 500;">Tài Khoản</p>
    <input type="text" name="user">
    <p style="font-weight: 500;">Mật Khẩu</p>
    <input type="password" name="pass">
    <input type="submit" value="Đăng Nhập" name="dangnhap">
    <div class="box-signin-list-btn">
        <a href="index.php?act=quenmk">Quên Mật Khẩu</a><br>
        <i class="fa-solid fa-question"></i>
    </div>
    <p class="not">Bạn chưa có tài khoản. Hãy đăng kí <a href="index.php?act=dangky">ở đây</a></p>
    <p style="color: red;">
    <?php
        if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
        }
    ?>
    </p>
</form>
<?php }?>
<div class="danhmuc">
    <h3>Danh Mục</h3>
    <ul>
        <!-- Danh Mục -->
        <?php 
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm="index.php?act=sanpham&iddm=".$id;
                echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
            }
        ?>
            <!-- Search Sản Phẩm -->
            <form class="product-form" action="index.php?act=sanpham" method="post">
                <input type="text" placeholder="Tìm Kiếm.." name="kyw">
                <button name="timkiem"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
    </ul>
</div>