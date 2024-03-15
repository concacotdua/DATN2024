<?php
if (is_array($tt) && (count($tt) > 0)) {
    extract($tt);
    $idupdate = $id_news;
    // $status = $trangthai;
    $imgpath = IMG_PATH_ADMIN . $img;
    if (is_file($imgpath)) {
        $img = '<img src="' . $imgpath . '" width = "80px">';
    } else {
        $img = '';
    }
}
$html_dm = showdm_admin($dsdm, $iddm)
?>
<h1>Cập nhật trang thông tin</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
        <li class="breadcrumb-item">Quản lý</li>
        <li class="breadcrumb-item active">Cập nhật trang thông tin</li>
    </ol>
</nav>
</div><!-- End Page Title -->



<div class="row">
    <div class="col-lg-12">
        <h5 class="card-title">Sửa/cập nhật bài đăng</h5>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cập nhật</h5>
                    <form action="index.php?act=updatetintuc" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-2 col-form-label">Lựa chọn</label>
                            <select class="form-select" name="iddm" aria-label="Default select example">
                                <option selected>Chọn danh mục tin</option>
                                <?= $html_dm ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Tiêu đề</label>
                            <input type="text" class="form-control" name="tieude"
                                value="<?= ($tieude != "") ? $tieude : "" ?>" id="tieude">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Nội dung</label>
                            <input type="text" class="form-control" name="noidung"
                                value="<?= ($noidung != "") ? $noidung : ""  ?>">
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Nội dung chi tiết</h5>
                                <textarea class="tinymce-editor" name="ndchitiet"
                                    value="<?= htmlspecialchars($ndchitiet != "") ? $ndchitiet : "" ?> "></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="examppleInputFile" class="col-sm-2 col-form-label">Hình ảnh</label>
                            <div class="custom-file">
                                <input type="file" class="form-group" name="hinh" class="custom-file-input"
                                    id="examppleInputFile">
                                <?= $img ?>
                            </div>
                        </div>


                        <div class=" form-group mb-3">
                            <label for="inputTime" class="col-sm-2 col-form-label">Ngày tạo</label>
                            <input type="date" name="ngaytao" value="<?= ($ngaytao != "") ? $ngaytao : ""; ?>"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="idupd" value="<?= $idupdate ?>">
                            <!-- <input class="btn btn-primary" type="submit" name="updtt" value="Cập nhật"> -->
                            <button type="submit" name="updtt" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
                </div>
                <script>
                new DataTable('#exmaple');
                </script>
            </div>
        </div>
    </div>

</div>