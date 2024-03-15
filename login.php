<div class="container-fluid h-custom" style="margin-top:10%;width: auto;height: auto;margin-bottom:10%;">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <h1 class="d-flex">Đăng nhập</h1>
            <?php
            if (isset($_SESSION['tb-dangnhap']) && ($_SESSION['tb-dangnhap'] != ""))
                echo $_SESSION['tb-dangnhap'];
                unset($_SESSION['tb-dangnhap']);
            ?>
            <form action="index.php?act=dangnhap" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" name="user" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Nhập tài khoản" />
                    <label class="form-label" for="form3Example3">Tài khoản</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                    <input type="password" name="pass" id="form3Example4" class="form-control form-control-lg"
                        placeholder="Nhập mật khẩu" />
                    <label class="form-label" for="form3Example4">Mật khẩu</label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <!-- Checkbox -->
                    <div class="form-check mb-0">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                        <label class="form-check-label" for="form2Example3">
                            Ghi nhớ mật khẩu
                        </label>
                    </div>
                    <a href="#!" class="text-body">Quên mật khẩu?</a>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <input type="submit" name="dangnhap" class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Đăng nhập">
                    <p class="small fw-bold mt-2 pt-1 mb-0">Chưa có tài khoản? <a href="index.php?act=register"
                            class="link-danger">Đăng
                            ký</a></p>
                </div>
            </form>
        </div>
    </div>
</div>