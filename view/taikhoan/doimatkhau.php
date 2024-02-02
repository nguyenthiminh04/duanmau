<main class="catalog boxcenter mb" style="margin-top: 20px;">

    <div class="boxleft">
        <?php
            if(isset($_SESSION['minhh'])) {
                extract($_SESSION['minhh']);
            }
        ?>
        <div class="box_title">ĐỔI MẬT KHẨU</div>
        <div class="box_content form_account" style="padding: 20px !important;">
            <form action="index.php?act=doimatkhau" method="post">
                <div>
                    Mật khẩu mới
                    <input type="password" name="pass" value="<?= (!empty($passdoi)) ? $passdoi : "" ?>" placeholder="Nhập mật khẩu" required>
                    <span style="color: red;">
                        <?= isset($errPass) ? $errPass : "" ?>
                    </span>
                </div>
                <div>
                    Nhập lại mật khẩu mới
                    <input type="password" value="<?= (!empty($passnew)) ? $passnew : "" ?>" name="passnew" placeholder="Nhập mật khẩu" required>
                    <span style="color: red;">
                        <?= isset($errPassnew) ? $errPassnew : "" ?>
                    </span>
                </div>
                <input type="hidden" value="<?= isset($id) ? $id : "" ?>" name="id">
                <input type="submit" value="Đổi mật khẩu" name="doimatkhau">
                <input type="reset" value="Nhập lại">
            </form>
            <div style="width:100%; color: blue; font-size: 25px; display:flex; justify-content: center; align-items: center; padding: 10px;">
                <?= (isset($successPass) && $successPass != "") ? $successPass : "" ?>
            </div>
        </div>

    </div>

    <?php
        include "./view/boxright.php";
    ?>

</main>
<!-- BANNER 2 -->