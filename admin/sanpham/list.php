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
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Hình</th>
                <th>Giá</th>
                <th>Lượt Xem</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // include "../model/pdo.php";
                foreach ($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp="index.php?act=suasp&id=".$id; 
                    $xoasp="index.php?act=xoasp&id=".$id;
                    $hinhpath="../upload/".$img;
                    if(is_file($hinhpath)){
                        $hinh="<img src='".$hinhpath."' height='50'>";
                    }else{
                        $hinh="null";
                    }
                    echo'<tr>
                            <td style="text-align: center;"><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$price.'</td>
                            <td>'.$luotxem.'</td>
                            <td style="text-align: center;">
                                <a href="'.$suasp.'">
                                    <input type="button" class="edit" value="Sửa">
                                </a>
                                <a href="'.$xoasp.'">
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
        <a href="index.php?act=addsp"><input type="button" value="Nhập Thêm"></a>

    </div>

</div>
