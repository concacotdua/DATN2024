<?php
$html_trending_tin = show_trend_tin($treding);
$html_tinnew = show_tin_new($tinnew);
$html_tinhot = show_tin_hot($tinhot);
$html_tag = show_loaitin($dmtin);

$html_show_right = show_right_tin($rightcontent);
if ($titlepage != "") {
    $title = $titlepage;
} else {
    $title = "Tin mới";
}
?>
<div class="container" style="margin-top:8%; width: auto; height: auto;margin-bottom:5%;"></div>
<!-- <div class="card">
    <div class="card-body">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/phuongquan9.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/quan9.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/UBNDQ9.png" class="d-block w-100" alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>

</div> -->
<section class="about">

    <div class="container">
        <div class="trending-main">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-5">
                        <div class="card-body mb-30">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/img/Q9tphcm.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/quan9.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/UBNDQ9.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/phuongquan9.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            <?= $html_trending_tin ?>
                        </div>
                    </div>
                </div>

                <!-- nội dung bên phải -->
                <div class="col-lg-4">
                    <form action="index.php?act=tintuc" method="post">
                        <div class="row mb-3">
                            <div class="input-group col-lg-12">
                                <input class="col-form-label" type="text" name="kyw" id="" placeholder="Nhập từ khóa">
                                <input class="btn btn-primary" type="submit" name="timkiem" value="Tìm kiếm">
                            </div>
                        </div>
                    </form>

                    <?= $html_show_right ?>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------ -->
    <!-- tin mới -->
    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container overflow-hidden paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <div>
                        <div class="text-body-secondary display-6 border-bottom py-2 mb-4"><?= $title ?></div>
                    </div>
                    <div class="h4 text-center mb-3 primary"></div>
                    <?= $html_tinnew ?>
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                    <div>
                        <div class="h3 border-bottom py-2 mb-4">Nội dung liên quan khác</div>
                    </div>
                    <div class="clearfix"></div>
                    <?= $html_tag ?>
                    <div>
                        <div class="h3 border-bottom pt-3 py-2 mb-4">Tin nổi bật</div>
                    </div>
                    <?= $html_tinhot ?>
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

                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>