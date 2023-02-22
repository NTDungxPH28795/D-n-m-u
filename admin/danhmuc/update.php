<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
    <div class="row-title">
        <h2>CẬP NHẬT DANH MỤC</h2>
    </div>
    <form class="row-form" action="index.php?act=updatedm" method="post">
        Mã Loại
        <input type="text" name="maloai" disabled>
        Tên Loại
        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!=""))echo $name;?>">
            <div class="row-btn">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0))echo $id;?>">
                <input type="submit" name="capnhat" value="Cập Nhật">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listdm"><input type="button" value="Danh Sách"></a>
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