<div class="row">
    <div class="row-title">
        <h2>THÊM MỚI DANH MỤC</h2>
    </div>
    <form class="row-form" action="index.php?act=adddm" method="post">
        Mã Loại
        <input type="text" name="maloai" disabled>
        Tên Loại
        <input type="text" name="tenloai" style="color: #000">
            <div class="row-btn">
                <input type="submit" name="themmoi" value="Thêm Mới" >
                <input type="reset" value="Nhập Lại" style="color: white">
                <a href="index.php?act=listdm"><input type="button" value="Danh Sách" style="color: #000"></a>
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