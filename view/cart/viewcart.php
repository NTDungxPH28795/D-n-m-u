<main>
    <div class="product">
        <h4></h4>
        <table class="giohang">
            <tr>
                <th>Hình</th>
                <th>Sản Phẩm</th>
                <th>Đơn Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th>Thao Tác</th>
            </tr>
            <?php
            $tong=0;
                foreach ($_SESSION['mycart'] as $cart) {
                    $hinh=$img_path.$cart[2];
                    $ttien=$cart[3]*$cart[4];
                    $tong=$tong+$ttien;
                    echo'
                        <tr>
                            <td><img style="height: 50px; width: 50px;" src="'.$hinh.'" alt=""></td>
                            <td>'.$cart[1].'</td>
                            <td>'.$cart[3].'</td>
                            <td>'.$cart[4].'</td>
                            <td>'.$ttien.'</td>
                            <td><input type="button" value="Xóa"></td>
                        </tr>';
                }
                echo '
                <tr>
                    <td style="color: red; font-weight: bold;" colspan="4">Tổng đơn hàng</td>
                    <td style="color: red; font-weight: bold;">'.$tong.'</td>
                    <td></td>
                </tr>';
            ?>

        </table>
        <!-- <form action="" method="get"></form> -->
        <form class="giohang" action="index.php?act=dathang">
            <input type="submit" value="Đặt Hàng">
            <a href="index.php?act=delcart"><input type="button" value="Xóa khỏi giỏ hàng"></a>
        </form>
    </div>
    <div class="user" >
        <?php include "boxright.php"?>
    </div>
</main>

<style>
    .giohang{
        width: 100%;
        text-align: center;
        border-bottom: 2px solid var(--main-color);
        margin: 20px 0px;
    }


    .giohang input[type=submit],
    .giohang input[type=button]
    {
        padding: 6px;
        border-radius: 4px;
        background-color: var(--main-color);
        color: #fff;
        border: none;
        margin-bottom: 20px;
    }
</style>