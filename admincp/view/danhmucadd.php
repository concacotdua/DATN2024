<h1>Tạo danh mục tin tức</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
        <li class="breadcrumb-item">Quản lý</li>
        <li class="breadcrumb-item active">Thêm danh mục</li>
    </ol>
</nav>
</div><!-- End Page Title -->


<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <h5 class="card-title">Tạo danh mục tin tức</h5>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Thêm mới danh mục</h5>
                        <form action="index.php?act=adddanhmuc" method="post">
                            <div class="form-group">
                                <label for="" class="col-form-label">Loại thông tin</label>
                                <input type="text" class="form-control" name="loaitintuc">
                            </div>

                            <fieldset class="form-group">
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
                            </fieldset>
                            <div class="form-group mb-3">
                                <label for="inputTime" class="col-sm-2 col-form-label">Ngày tạo</label>
                                <input type="date" name="ngaytao" class="form-control">
                            </div>
                            <div class="justify-content-center">
                                <input type="submit" name="themdanhmuc" value="Thêm danh mục" class="btn btn-primary">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- End section 1 -->