<h1>Thêm đoạn nội dung</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
        <li class="breadcrumb-item">Quản lý</li>
        <li class="breadcrumb-item active">Thêm đoạn giới thiệu</li>
    </ol>
</nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <h5 class="card-title">Thêm đoạn giới thiệu</h5>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bảng thêm phần giới thiệu</h5>
                        <form action="index.php?act=addgioithieu" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="" class="col-form-label">Tiêu đề</label>
                                <input type="text" class="form-control" name="tieude">
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Nội dung</h5>
                                    <textarea class="tinymce-editor" name="noidung"></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="col-form-label">Ghi chú</label>
                                <input type="text" class="form-control" name="ghichu" placeholder="nội dung">
                            </div>
                            <div class="form-group">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Hình ảnh</label>
                                <input class="form-control" name="img" type="file" id="formFile">
                            </div>
                            <div class="form-group mb-3">
                                <label for="inputTime" class="col-sm-2 col-form-label">Ngày đăng</label>
                                <input type="date" name="ngaydang" class="form-control">
                            </div>

                            <div class="justify-content-center">
                                <input type="submit" name="addgt" value="Thêm đoạn giới thiệu" class="btn btn-primary">
                            </div>

                            <?php
                            if (isset($tb) && ($tb != "")) {
                                echo $tb;
                            }
                            ?>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- End section 1 -->