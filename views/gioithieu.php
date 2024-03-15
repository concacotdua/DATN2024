<?php
// $html_dm = show_dm($hienthi);
$html_gt = get_gthieu($html_gt);
$html_tag = show_loaitin($dmtin);
$html_tinhot = show_tin_hot($tinhot);

?>
<section class="about">
    <div class="container" style="margin-top:5%; width: auto; height: auto;margin-bottom:5%;">
        <div class="row">
            <div class="col-lg-8 ">
                <div class="breadcrumbs mb-4"> <a href="index.php">Trang chủ</a>
                    <span class="mx-1">/</span> <a href="gioithieu.php">Giới thiệu</a>
                </div>
            </div>
            <div class="col-lg-8 mx-auto mb-5 mb-lg-0">
                <?= $html_gt ?>
            </div>
            <div class="col-lg-4">
                <div class="widget-blocks">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 mb-5">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="border-end bg-white" id="sidebar-wrapper">
                                        <div class="sidebar-heading border-bottom bg-warning">
                                            <h2 class="text-center text-dark bg-light ">Danh mục</h2>
                                        </div>
                                        <div class="list-group list-group-flush mt-2">
                                            <?= $html_tag ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="widget">
                                <h2 class="section-title mb-3">Tin tức nổi bật</h2>
                                <div class="widget-body">
                                    <div class="widget-list">
                                        <!-- <article class="card mb-4">
                                            <div class="card-image">
                                                <div class="post-info"> <span class="text-uppercase">1 minutes
                                                        read</span>
                                                </div>
                                                <img loading="lazy" decoding="async" src="images/post/post-9.jpg" alt="Post Thumbnail" class="w-100">
                                            </div>
                                            <div class="card-body px-0 pb-1">
                                                <h3><a class="post-title post-title-sm" href="article.html">Portugal and
                                                        France Now
                                                        Allow Unvaccinated Tourists</a></h3>
                                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit, sed do eiusmod tempor …</p>
                                                <div class="content"> <a class="read-more-btn" href="article.html">Read
                                                        Full
                                                        Article</a>
                                                </div>
                                            </div>
                                        </article> -->
                                        <a class="media align-items-center" href="article.html">
                                            <?= $html_tinhot ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>