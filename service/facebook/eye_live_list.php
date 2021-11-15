<?php
require_once '../../_config.php';
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level == 0){
    header('location: /profile/update-info');
    die();
}
$result = mysqli_query($conn,"SELECT * FROM table_service WHERE service_slug = 'buff-eye-live-facebook'");
$row = mysqli_fetch_assoc($result);
$title = $row['service_title'];
require_once '../../includes/header.php';
require_once '../../includes/navbar.php';
?>
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"></div>
    <!--/.bg-holder-->
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item font-sans-serif"><a href="/"><strong><i class="fas fa-globe"></i>
                                <?=$site_name;?></strong></a></li>
                    <li class="breadcrumb-item font-sans-serif active" aria-current="page"><i class="fas fa-link"></i>
                        <?=$row['service_title'];?></li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header bg-light">
        <div class="row justify-content-between">
            <div class="col-md-auto">
                <h5 class="mb-3 mb-md-0">Danh sách đơn</h5>
            </div>
            <div class="col-md-auto"><a class="btn btn-falcon-default btn-sm"
                    href="/service/facebook/eye-live/order"><span class="fas fa-plus fs--2 mr-1"></span> Thêm đơn</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive scrollbar" id="history"
            data-list='{"valueNames":["buff_id","buff_time","buff_fb_id","buff_server","buff_amount","buff_minutes","buff_note","buff_present","buff_payment","buff_status"],"page":10,"pagination":true}'>
            <div class="mb-3">
                <input class="search form-control" placeholder="Search" />
            </div>
            <table class="table table-bordered table-striped fs--1">
                <thead class="bg-200 text-900">
                    <tr>

                        <th class="sort" data-sort="buff_id"><b>#</b>
                        </th>
                        <th class="sort" data-sort="buff_time"><b>Thời gian</b>
                        </th>
                        <th class="sort" data-sort="buff_fb_id"><b>ID Facebook</b>
                        </th>
                        <th class="sort" data-sort="buff_server"><b>Máy chủ</b>
                        </th>
                        <th class="sort" data-sort="buff_amount"><b>Số mắt</b>
                        </th>
                        <th class="sort" data-sort="buff_minutes"><b>Số phút</b>
                        </th>
                        <th class="sort" data-sort="buff_note"><b>Ghi chú</b>
                        </th>
                        <th class="sort" data-sort="buff_present"><b>Đã tăng</b>
                        </th>
                        <th class="sort" data-sort="buff_payment"><b>Tổng thanh toán</b>
                        </th>
                        <th class="sort" data-sort="buff_status"><b>Trạng thái</b>
                        </th>
                    </tr>
                </thead>
                <tbody class="list">
                    <?php 
                    $result = mysqli_query($conn, "SELECT * FROM table_buff WHERE buff_username = '$user_username' AND buff_slug = 'buff-eye-live-facebook' ORDER BY buff_id DESC LIMIT 0,15");
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['buff_status'] == 'progress') {
                            $buff_status = '<font color="gray" style="font-weight: bold">Chờ duyệt</font>';
                        } else if ($row['buff_status'] == 'running') {
                            $buff_status = '<font color="violet" style="font-weight: bold">Đang chạy</font>';
                        } else if ($row['buff_status'] == 'complete') {
                            $buff_status = '<font color="green" style="font-weight: bold">Hoàn thành</font>';
                        } else if ($row['buff_status'] == 'blocked') {
                            $buff_status = '<font color="red" style="font-weight: bold">Bị khóa</font>';
                        }
                        
                        if ($row['buff_server'] == '1') {
                            $buff_server = 'Máy chủ 1';
                        } else if ($row['buff_server'] == '2') {
                            $buff_server = 'Máy chủ 2';
                        } else if ($row['buff_server'] == '3') {
                            $buff_server = 'Máy chủ 3';
                        } else if ($row['buff_server'] == '4') {
                            $buff_server = 'Máy chủ 4';
                        } else if ($row['buff_server'] == '5') {
                            $buff_server = 'Máy chủ 5';
                        }
                    ?>
                    <tr>
                        <td class="buff_id"><?=$row['buff_id'];?></td>
                        <td class="buff_time"><?php echo date('d-m-Y', $row['buff_time']);?></td>
                        <td class="buff_fb_id"><a href="http://fb.me/<?=$row['buff_fb_id'];?>"
                                target="_blank"><?=$row['buff_fb_id'];?></a>
                        </td>
                        <td class="buff_server"><?=$buff_server;?></td>
                        <td class="buff_amount"><?=number_format($row['buff_amount']);?></td>
                        <td class="buff_minutes"><?=$row['buff_minutes'];?></td>
                        <td class="buff_note"><?=$row['buff_note'];?></td>
                        <td class="buff_present"><?=number_format($row['buff_present']);?></td>
                        <td class="buff_payment"><?=number_format($row['buff_payment']);?></td>
                        <td class="buff_status"><?=$buff_status;?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="d-flex align-items-center justify-content-center">
                <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                    data-list-pagination="prev"><span class="fas fa-chevron-left"></span>
                </button>
                <ul class="pagination mb-0"></ul>
                <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                    data-list-pagination="next"><span class="fas fa-chevron-right"></span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php require_once '../../includes/footer.php'; ?>