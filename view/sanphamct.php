<main>
            <div class="product">
                <?php 
                    extract($onesp);
                ?>
                <div class="product-ct-box">
                    <div class="product-ct-box-img">
                        <?php
                            $img=$img_path.$img;
                            echo '<img src="'.$img.'">';
                        ?>
                    </div>
                    <div class="product-ct-box-content">
                        <h2><?php echo $name?></h2>
                        <h4>Giá: <?=$price?></h4>
                        <div class="product-mota">
                            <p>Mô Tả: <?=$mota?></p>
                        </div>
                        <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="'.$id.'">
                                <input type="hidden" name="name" value="'.$name.'">
                                <input type="hidden" name="img" value="'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="submit" name="addtocart" value="Thêm vào Giỏ Hàng">
                        </form>
                    </div>

                    <style>
                        .product-ct-box{
                            display: flex;
                        }

                        .product-ct-box-img{
                            border-radius: 8px;
                            overflow: hidden;
                            /* width: 50%; */
                        }

                        .product-ct-box-img img{
                            width: 100%;
                            height: 100%;
                        }
                        .product-ct-box-content{
                            display: grid;
                            padding: 40px;
                        }
                        .product-ct-box-content h2{
                            font-weight: bold;
                            color: var(--main-color);
                            text-align: center;
                        }
                        .product-ct-box-content h4{
                            font-weight: 300;
                            font-style: italic;
                        }
                        .product-mota{
                            font-size: 16px;
                            text-align: justify;
                        }
                        .product-ct-box-content input[type=submit]{
                            padding: 8px 10px;
                            border: none;
                            border-radius: 4px;
                            width: 100%;
                            background-color: var(--main-color);
                            color: white;
                            transition: .3s;
                        }
                        .product-ct-box-content input[type=submit]:hover{
                            transform: scale(1.05,1.05);
                            cursor: pointer;
                        }

                    </style>
                    <!-- <button class="blue"><a href="'.$addcart.'">Thêm Vào Giỏ Hàng</a></button> -->
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#binhluan").load("./binhluan/binhluanform.php", {idpro: <?=$id?>});
                    });
                </script>
                <div class="product-cmt" id="binhluan">

                </div>
                <div class="product-list">
                    <h3>Sản Phẩm Tương Tự</h3>
                    <div class="product product2">
                
                <div class="product-box">
                    <?php
                        $i=0;
                        foreach ($spnew as $sp) {
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
                </div>
            </div>
            <div class="user">
                <?php include "boxright.php"?>
            </div>

        </main>
