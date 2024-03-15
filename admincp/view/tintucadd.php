<?php
$html_dm = showdm_ad($dsdm);
?>
<h1>Tạo bài đăng</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
        <li class="breadcrumb-item">Danh Mục</li>
        <li class="breadcrumb-item active">Đăng bài</li>
    </ol>
</nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <h5 class="card-title">Tạo bài đăng</h5>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bảng tạo thêm bài đăng</h5>
                        <form action="index.php?act=addtintuc" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Lựa chọn</label>
                                <select class="form-select" name="iddm" aria-label="Default select example">
                                    <option selected>Chọn danh mục tin</option>
                                    <?= $html_dm ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-form-label">Tiêu đề</label>
                                <input type="text" class="form-control" name="tieude">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="col-form-label">Nội dung</label>
                                <input type="text" class="form-control" name="noidung" placeholder="nội dung">
                            </div>
                            <!-- <div class="form-group">
                                <label for="" class="col-form-label">Nội dung chi tiết</label>
                                <textarea type="text" class="form-control" name="ndchitiet"
                                    placeholder="nội dung chi tiết" style="height: auto;"></textarea>
                            </div> -->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Nội dung chi tiết</h5>
                                    <textarea class="tinymce-editor" name="ndchitiet"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Hình ảnh</label>
                                <input class="form-control" name="img" type="file" id="formFile">
                            </div>
                            <div class="form-group mb-3">
                                <label for="inputTime" class="col-sm-2 col-form-label">Ngày tạo</label>
                                <input type="date" name="ngaytao" class="form-control">
                            </div>
                            <!-- <fieldset class="form-group">
                                <legend class="col-form-label col-sm-2 pt-0">Chọn trạng thái</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="trangthai" id="gridRadios1" value="1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Hiện
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="trangthai" id="gridRadios2" value="0">
                                        <label class="form-check-label" for="gridRadios2">
                                            Ẩn
                                        </label>
                                    </div>
                                </div>
                            </fieldset> -->
                            <div class="justify-content-center">
                                <input type="submit" name="addtin" value="Tạo bài đăng" class="btn btn-primary">
                                <!-- <input type="reset" name="" value="Nhập lại" class="btn btn-secondary"> -->
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