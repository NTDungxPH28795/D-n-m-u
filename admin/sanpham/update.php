<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='50'>";
    }else{
        $hinh="null";
    }
?>
<div class="row">
    <div class="row-title">
        <h2>CẬP NHẬT SẢN PHẨM</h2>
    </div>
    <form class="row-form" action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        Mã Sản Phẩm
        <select name="iddm">
            <option value="0" selected>Tất Cả</option>
            <?php 
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    if($iddm==$id)
                    echo '<option value="'.$id.'" selected>'.$name.'</option>';
                    else echo '<option value="'.$id.'">'.$name.'</option>';
                }
            ?>
        </select>
        Tên Sản Phẩm
        <input type="text" name="tensp" value="<?=$name?>">
        Giá
        <input type="text" name="giasp" value="<?=$price?>">
        Hình
        <input type="file" name="hinh">
        <?=$hinh?>
        Mô Tả
        <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
        <div class="table-btn">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập Nhật">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
    </form>
</div>
<style>
    .row .row-title{
        text-align: center;
    }
    .row-form{
        display: grid;
    }
    .row-form>input{
        padding: 6px 10px;
        border-radius: 8px;
    }

</style>