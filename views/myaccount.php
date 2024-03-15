<?php
if (isset($_SESSION["s_user"]) && (count($_SESSION["s_user"]) > 0)) {
    extract($_SESSION["s_user"]);
    $ten = $name;
    $eml = $email;
    $diachi = $address;
    $gthieu = $gioithieu;
    $sdt = $phone;
    $id = $id_user;
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
                            <h5 class="card-title">Cập nhật thông tin cá nhân</h5>

                            <!-- General Form Elements -->
                            <form action="index.php?act=updateuser" method="post">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tên</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $ten ?>" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" value="<?= $eml ?>" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputAddress" class="col-sm-2 col-form-label">Địa chỉ</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="<?= $diachi ?>" name="address">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Số điện thoại</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" value="<?= $sdt ?>" name="phone">
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
                                        <textarea class="form-control" style="height: 100px" value="<?= $gthieu ?>" name="gioithieu"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="hidden" name="id_user" value="<?= $id ?>">
                                        <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật thông tin">
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

            </div>
        </section>
    </div>
</section>