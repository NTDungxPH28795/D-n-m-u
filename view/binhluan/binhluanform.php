<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro=$_REQUEST['idpro'];
    $dsbl=loadall_binhluan(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="binhluanform">
        <ul>
            <h3>Bình Luận</h3>
            <!-- Danh Mục -->
            <div class="text-cmt">
                <table>
                    <?php
                        foreach ($dsbl as $bl) {
                            extract($bl);
                            echo '<tr><td>'.$noidung.'</td>';
                            echo '<td>'.$iduser.'</td>';
                            echo '<td>'.$ngaybinhluan.'</td></tr>';
                        }
                    ?>
                </table>


<!-- start -->
<?php
    if(isset($_SESSION['user'])){
            extract($_SESSION['user']);
        ?>
        <form class="text-form" action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <input type="hidden" name="idpro" value="<?=$idpro?>">
            <input type="text" placeholder="Nội dung bình luận" name="noidung">
            <input type="submit" value="Gửi" name="guibinhluan">
        </form>
    <?php
        }else{
    ?>
        <form class="text-form" method="post">
            <input style="text-align: center; width: 100%;" type="text" placeholder="Đăng nhập để bình luận !" name="noidung" disabled>
        </form>
<?php }?>
<!-- end -->

            </div>
        </ul>
    </div>
        <?php
            if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                $noidung=$_POST['noidung'];
                $idpro=$_POST['idpro'];
                $iduser=$_SESSION['user']['id'];
                $ngaybinhluan=date("l jS \of F Y"); 
                insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                header("Location: ".$_SERVER['HTTP_REFERER']);
            }
        ?>
    <style>
        .binhluanform .text-cmt{
            height: 100%;
            background-color: var(--main-color);
            width: 100%;
            margin-top: 10px;
            border-radius: 12px;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        }

        .binhluanform .text-cmt .text-form {
            padding: 10px 20px;
            border-radius: 4px;
            display: flex;
        }
        .binhluanform .text-cmt .text-form input[type=text]{
            padding: 6px 8px;
            width: 90%;
        }
        .binhluanform .text-cmt .text-form input[type=submit]{
            padding: 6px 8px;
            width: 9%;
            margin-left: 4px;
            border: none;
            border-radius: 4px;
            color: var(--main-color);
            background-color: #fff;
            font-weight: bold;
            cursor: pointer;
        }

        table{
            height: auto;
            padding: 10px;
            width: 100%;
            color: #fff;
        }
        table tr{
            opacity: .8;
        }
        table tr:hover{
            opacity: 1;
            cursor: pointer;
        }
        table td{
            width: 10%;
            text-align: center;
        }
    </style>
</body>
</html>