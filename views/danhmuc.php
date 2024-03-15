<?php
$listward = '';
foreach ($ward_list as $item) {
    extract($item);
    $listward .= '<tr>
    <th scope="row">' . $id_phuong . '</th>
    <td>' . $maphuong . '</td>
    <td>' . $tenphuong . '</td>
    <td>' . $diachi . '</td>
    <td>' . $dientich . '</td>
</tr>';
}
?>
<div class="container" style="margin-top:10%;width: auto;height: auto;margin-bottom:10%;">
    <div class="pagetitle">
        <h1>Dữ liệu các phường tại Quận 9</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item">Phường</li>
                <li class="breadcrumb-item active">dữ liệu phường</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bảng thống kê</h5>
                    <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple
                            DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to
                        conver to a datatable</p>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Mã Phường</th>
                                <th scope="col">Tên phường</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Diện tích</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $listward ?>

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>

</div>