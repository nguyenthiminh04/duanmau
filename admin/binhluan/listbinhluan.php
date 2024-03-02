<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row2 form_content" style="margin-top: 20px; border-radius: 6px;">
        <div style="margin-bottom: 20px;">
            <a href="" class="btn btn-success">CHỌN TẤT CẢ</a>
            <a href="" class="btn btn-danger">BỎ CHỌN TẤT CẢ</a>
        </div>
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table class="table table-striped">
                    <tr>
                        <th></th>
                        <th>ID BÌNH LUẬN</th>
                        <th>ẢNH SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>NGƯỜI DÙNG</th>
                        <th>BÌNH LUẬN</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $ngayupdate = date("Y-m-d H:i:s");
                        foreach ($danhsachbinhluan as $binhluan) {
                            extract($binhluan);
                            ?>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><?= $id ?></td>
                                    <td style="padding: 10px !important; text-align: center;"><img style="width: 80px;" src="/minhnt_duanmau/upload/<?= $anhSanpham ?>" alt=""></td>
                                    <td><?= $nameSanpham ?></td>
                                    <td><?= $userTaikhoan ?></td>
                                    <td><?= $noidung ?></td>
                                    <td><?= date("d/m/Y h:i:s", strtotime($ngaybinhluan)) ?></td>
                                    <td>
                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này không?')" href="index.php?act=xoabinhluan&idbl=<?= $id ?>&idtk=<?= $idtk ?>" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            <?php
                        }
                    ?>

                </table>
            </div>
            
        </form>
    </div>
</div>
</div>