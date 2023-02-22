<div class="row">
    <div class="row-title">
        <h2>DANH SÁCH TÀI KHOẢN</h2>
    </div>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Mã Tài Khoản</th>
                <th>Tên Tài Khoản</th>
                <th>Mật Khẩu</th>
                <th>Email</th>
                <th>Số Điện Thoại</th>
                <th>Địa Chỉ</th>
                <th>Vai Trò</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // include "../model/pdo.php";
                foreach ($listtaikhoan as $taikhoan){
                    extract($taikhoan);
                    $suatk="index.php?act=suatk&id=".$id; 
                    $xoatk="index.php?act=xoatk&id=".$id; 
                    echo'<tr>
                            <td style="text-align: center;"><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>
                            <td>'.$email.'</td>
                            <td>'.$tel.'</td>
                            <td>'.$address.'</td>
                            <td>'.$role.'</td>
                            <td style="text-align: center;">
                                <a href="'.$xoatk.'">
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
        <!-- <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"></a> -->

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
            /* padding-bottom: 10px; */
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
