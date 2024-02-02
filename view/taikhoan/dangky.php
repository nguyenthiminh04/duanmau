<main class="catalog  mb boxcenter" style="margin-top: 20px;">

    <div class="boxleft">
        <?php
            if((isset($_SESSION['minhh'])) && (is_array($_SESSION['minhh']))) {
                extract($_SESSION['minhh']);
            }
        ?>
        <div class="box_title">Đăng ký thành viên</div>
        <div class="box_content form_account" style="padding: 15px !important;">
            <form action="index.php?act=dangky" method="post">
                <div>
                    Email
                    <input type="email" name="email" style="margin-top: 10px;" placeholder="Nhập email của bạn" required/>
                </div>
                <div>
                    Tên đăng nhập
                    <input type="text" name="user" style="margin-top: 10px;" placeholder="Nhập tên đăng nhập" required minlength="3" maxlength="100" />
                </div>
                Mật khẩu
                <div>
                    <input type="password" name="pass" style="margin-top: 10px;" placeholder="Nhập mật khẩu mới" required
                    pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$"
                    title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." />
                </div>
                <input type="submit" value="Đăng ký" name="dangky">
                <input type="reset" value="Nhập lại">
            </form>
            <div style="width:100%; color: blue; font-size: 25px; display:flex; justify-content: center; align-items: center; padding: 10px;">
                <?= (isset($successDangky) && $successDangky != "") ? $successDangky : "" ?>
            </div>
        </div>

    </div>

    <?php
        include "./view/boxright.php";
    ?>

</main>
<!-- BANNER 2 -->