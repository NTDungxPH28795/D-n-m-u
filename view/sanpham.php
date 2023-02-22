<main>
<div class="product">
        <h4><?=$tendm?></h4>
    <div class="product-box">
        <?php
            $i=0;
            foreach ($dssp as $sp) {
                extract($sp);
                $hinh=$img_path.$img;
                $linksp="index.php?act=sanphamct&idsp=".$id;
                $addcart="index.php?act=addcart&idsp=".$id;

                echo '<div class="box">
                    <div class="product-box-img">
                        <img src="'.$hinh.'" alt="">
                        <div class="box-btn">
                        <button class="green"><a href="'.$linksp.'">Chi Tiết</a></button>
                        <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="'.$id.'">
                            <input type="hidden" name="name" value="'.$name.'">
                            <input type="hidden" name="img" value="'.$img.'">
                            <input type="hidden" name="price" value="'.$price.'">
                            <input type="submit" name="addtocart" value="Thêm vào Giỏ Hàng">
                        </form>
                    </div>
                    </div>
                    <div class="product-name">
                        <p>'.$name.'</p>
                    </div>
                    <div class="product-price">
                        <p>'.$price.' vnd</p>
                    </div>
                </div>';
            }
        ?>
    </div>
</div>
    <div class="user">
        <?php include "boxright.php"?>
    </div>
</main>
