<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH NGƯỜI DÙNG BÌNH LUẬN</h1>
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
                        <th>MÃ KHÁCH HÀNG</th>
                        <th>TÊN KHÁCH HÀNG</th>
                        <th>EMAIL</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php
                        foreach ($listtaikhoan as $taikhoan) {
                            extract($taikhoan);
                            ?>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><?= $id ?></td>
                                    <td><?= $user ?></td>
                                    <td><?= $email ?></td>
                                    <td style="text-align: center;">
                                        <a class="btn btn-success" href="index.php?act=danhsachbinhluan&idtk=<?= $id ?>">XEM BÌNH LUẬN</a>
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