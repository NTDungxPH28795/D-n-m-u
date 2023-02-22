<div class="row">
    <div class="row-title">
        <h2>THÊM MỚI SẢN PHẨM</h2>
    </div>
    <form class="row-form" action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        Danh Mục
        <select name="iddm">
            <?php 
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                }
            ?>
        </select>
        Tên Sản Phẩm
        <input type="text" name="tensp" style="color: #000">
        Giá
        <input type="number" name="giasp" style="color: #000">
        Hình
        <input type="file" name="hinh">
        Mô Tả
        <textarea name="mota" cols="30" rows="10"></textarea>
            <div class="row-btn">
                <input type="submit" name="themmoi" value="Thêm Mới">
                <input type="reset" value="Nhập Lại" style="color: #000">
                <a href="index.php?act=listsp"><input type="button" value="Danh Sách" style="color: #000"></a>
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
    .row-btn{
        margin: 4px 0px;
        text-align: center;
    }
    .row-btn input{
        border-radius: 4px;
        padding: 6px 10px;
    }
</style>