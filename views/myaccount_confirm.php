<?php
if (isset($_SESSION["s_user"]) && (count($_SESSION["s_user"]) > 0)) {
    extract($_SESSION["s_user"]);
    $userinfo = get_user($id_user);
    $_SESSION["s_user"] = $userinfo;
    extract($userinfo);
}
?>
<section class="services">
    <div class="container" style="margin-top:8%; width: auto; height: auto;margin-bottom:5%;"></div>

    <div class="container">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> Thông tin cá nhân</h5>

                            <!-- General Form Elements -->
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Tên</label>
                                <div class="col-sm-10">
                                    <?= $name ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <?= $email ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAddress" class="col-sm-2 col-form-label">Địa chỉ</label>
                                <div class="col-sm-10">
                                    <?= $address ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Số điện thoại</label>
                                <div class="col-sm-10">
                                    <?= $phone ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputColor" class="col-sm-2 col-form-label">Chọn màu</label>
                                <div class="col-sm-10">
                                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Giới thiệu</label>
                                <div class="col-sm-10">
                                    <?= $gioithieu ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <a href="index.php?act=myaccount"><button class="btn btn-success bi bi-arrow-left-circle-fill"> Quay
                                            lại</button></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>
    </div>
</section>