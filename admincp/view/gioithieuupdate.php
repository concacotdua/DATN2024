<?php
if (is_array($gt) && (count($gt) > 0)) {
    extract($gt);
    $idupdgt = $id_about;
    $imgpath = IMG_PATH_ADMIN . $img;
    if (is_file($imgpath)) {
        $img = '<img src="' . $imgpath . '" width = "80px">';
    } else {
        $img = '';
    }
}
?>
<h1>Cập nhật đoạn giới thiệu</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
        <li class="breadcrumb-item">Quản lý</li>
        <li class="breadcrumb-item active">Sửa/cập nhật đoạn giới thiệu</li>
    </ol>
</nav>
</div><!-- End Page Title -->



<div class="row">
    <div class="col-lg-12">
        <h5 class="card-title">Sửa bài đăng</h5>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bảng tạo thêm bài đăng</h5>
                    <form action="index.php?act=updategioithieu" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="" class="col-form-label">Tiêu đề</label>
                            <input type="text" class="form-control" name="tieude"
                                value="<?= ($tieude != "") ? $tieude : "" ?>" id="tieude">
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Nội dung</h5>
                                <textarea class="tinymce-editor" name="noidung"
                                    value="<?= htmlspecialchars($noidung != "") ? $noidung : "" ?> "></textarea>
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
                        <div class="form-group">
                            <label for="" class="col-form-label">ghi chú</label>
                            <input type="text" class="form-control" name="ghichu"
                                value="<?= htmlspecialchars($ghichu != "") ? $ghichu : ""  ?>">
                        </div>

                        <div class=" form-group mb-3">
                            <label for="inputTime" class="col-sm-2 col-form-label">Ngày đăng</label>
                            <input type="date" name="ngaydang" value="<?= ($ngaydang != "") ? $ngaydang : ""; ?>"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="idabout" value="<?= $idupdgt ?>">
                            <button type="submit" name="capnhatgioithieu" class="btn btn-primary">Cập nhật</button>
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