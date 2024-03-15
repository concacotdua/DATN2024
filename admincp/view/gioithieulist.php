<?php
$html_gioithieu = show_gioithieu($dmgioithieu);
?>

<h1>Danh sách đoạn giới thiệu</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
        <li class="breadcrumb-item">Quản lý</li>
        <li class="breadcrumb-item active">Danh sách đoạn giới thiệu</li>
    </ol>
</nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-9">
                    <div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="index.php?act=gioithieulist">
                            <input type="text" name="keyw" placeholder="Tìm" title="Enter search keyword">
                            <button type="submit" name="timkiem" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-end col-lg-3 mb-3">
                    <a href="index.php?act=gioithieuadd">
                        <button class="btn btn-success "><i class="bi bi-plus ">Thêm mới</i></button>
                    </a>
                </div>
            </div>
            <div class="card">

                <div class="card-body pb-0">
                    <h5 class="card-title">Danh sách đoạn giới thiệu</h5>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Ngày đăng</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $html_gioithieu ?>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

        <div class="row mx-0">
            <div class="col-12 text-center pb-4 pt-4">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="index.php?act=tintuclist&page=">1</a></li>
                    <li class="page-item"><a class="page-link" href="index.php?act=tintuclist&page=">2</a></li>
                    <li class="page-item"><a class="page-link" href="index.php?act=tintuclist&page=">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>