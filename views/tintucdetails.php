<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$html_tag = show_loaitin($dmtin);
extract($ndct);
$html_show_lq = show_tin_lienquan($ndlq);
$html_show_right = show_right_tin($rightcontent);
// $html_show_insert_cmt = showbl_insert();
// $html_show_content_cmt = show_binhluan($showbl);

?>
<div class="container" style="margin-top:5%; width: auto; height: auto;margin-bottom:5%;"></div>
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <article>
                    <div class="content text-left">
                        <figure class="text-end">
                            <figcaption class="blockquote">
                                <i class="fa fa-italic" aria-hidden="true">Ngày đăng :</i><cite
                                    title="Source Title"><?= $ngaytao ?></cite>
                            </figcaption>
                        </figure>
                        <h1 class="mb-4"><?= $tieude ?></h1>
                        <hr>
                        <h4 class="mb-3"><em><?= $noidung ?></em></h4>

                        <img src="uploads/<?= $img ?>" alt="img" class="img-fluid" />
                        <hr>
                        <blockquote class="blockquote">
                            <p class="d-flex flex-nowrap text-start"><?= $ndchitiet ?></p>
                        </blockquote>
                        <hr>
                        <h2 id="youtube-video">Video Youtube </h2>
                        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                            <!-- hiển thị video -->
                            <?= $linkvideo ?>
                        </div>
                    </div>
                </article>

                <!-- Bình luận  -->
                <div id="binhluan">
                    <iframe src="views/binhluan.php?page_id=<?= $id_news ?>" width="100%" height="500px"
                        frameborder="0"></iframe>
                </div>
            </div>
            <!-- nội dung bên phải  -->
            <div class="col-lg-4" style="margin-top: 7%;">
                <div class="widget-blocks">
                    <div class="row">
                        <div class="col-lg-12">
                        </div>
                        <div class="col-lg-12 col-md-6 mb-5">
                            <div class="widget">
                                <div class="widget-body">
                                    <div class="border-end bg-white" id="sidebar-wrapper">
                                        <div class="sidebar-heading border-bottom bg-warning">
                                            <h2 class="text-dark bg-light">Danh mục</h2>
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <!-- hiển thị danh mục tin -->
                                            <?= $html_tag ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 mt-5">
                            <div class="widget">
                                <h2 class="section-title mb-3">Tin thế giới</h2>
                                <div class="widget-body">
                                    <div class="widget-list">
                                        <!-- tin bên phải -->
                                        <?= $html_show_right ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="weekly-wrapper mb-5 py-5">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Tin liên quan</h3>
                        </div>
                    </div>
                </div>
                <div class="row mb-2 py-2">
                    <?= $html_show_lq ?>
                </div>
            </div>

        </div>
    </div>
</section>