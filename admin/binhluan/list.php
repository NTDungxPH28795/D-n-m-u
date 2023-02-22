<div class="row">
    <div class="row-title">
        <h2>Danh Sách Loại Hàng</h2>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw" style="color: #000 !important;">
        <select name="iddm">
            <option value="0" selected>Tất Cả</option>
            <?php 
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                }
            ?>
        </select>
        <input type="submit" name="listok" value="Tìm Kiếm">
    </form>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Nội Dung Bình Luận</th>
                <th>IDuser</th>
                <th>IDpro</th>
                <th>Ngày Bình Luận</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // include "../model/pdo.php";
                foreach ($listbinhluan as $binhluan){
                    extract($binhluan);
                    $xoabl="index.php?act=xoabl&id=".$id;
                    echo'<tr>
                            <td style="text-align: center;"><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$iduser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <td style="text-align: center;">
                                <a href="'.$xoabl.'">
                                    <input type="button" class="delete" value="Xóa">
                                </a>
                            </td>
                        </tr>';
                }
            ?>

        </tbody>
    </table>
    <div class="table-btn">
        <input type="button" value="Chọn Tất Cả">
        <input type="button" value="Bỏ Chọn Tất Cả">
        <input type="button" value="Xóa Các Mục Đã Chọn">
    </div>
    <style>
        /* Bảng Danh Sách Danh Muc */
        table{
            margin-top: 20px;
            width: 100%;
        }

        table thead tr th{
            background-color: #fff;
            color: #000;
            text-align: center;
        }
        table, th, td {
            border: 1px solid #fff;
            border-collapse: collapse;
            padding: 8px 20px;
        }

        input{
            border: none;
            border-radius: 8px;
            padding: 8px 25px;
            margin: 0px 10px;
            color: #fff;
            opacity: .8;
        }

        input:hover{
            opacity: unset;
            cursor: pointer;
        }

        .edit{
            background-color: green;
        }

        .delete{
            background-color: red;
        }

        .table-btn{
            text-align: center;
        }
        .table-btn input{
            background-color: #fff;
            margin-top: 8px;
            color: #000;
        }
    </style>
</div>
