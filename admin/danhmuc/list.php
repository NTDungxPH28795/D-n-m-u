<div class="row">
    <div class="row-title">
        <h2>Danh Sách Loại Hàng</h2>
    </div>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Mã Loại</th>
                <th>Tên Loại</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // include "../model/pdo.php";
                foreach ($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm="index.php?act=suadm&id=".$id; 
                    $xoadm="index.php?act=xoadm&id=".$id; 
                    echo'<tr>
                            <td style="text-align: center;"><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td style="text-align: center;">
                                <a href="'.$suadm.'">
                                    <input type="button" class="edit" value="Sửa">
                                </a>
                                <a href="'.$xoadm.'">
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
        <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"></a>

    </div>

</div>
