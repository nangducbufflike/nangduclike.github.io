<?php
require_once '../_config.php';
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level == 0){
    header('location: /profile/update-info');
    die();
}
$title = 'Lịch sử hoạt động';
require_once '../includes/header.php';
require_once '../includes/navbar.php';
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
                        Lịch sử hoạt động</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header bg-light">
        <h5 class="mb-0">Lịch sử hoạt động</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive scrollbar" id="history"
            data-list='{"valueNames":["history_buy_id","history_buy_time","history_buy_type","history_buy_point_original","history_buy_point_final","history_buy_content"],"page":10,"pagination":true}'>
            <div class="mb-3">
                <input class="search form-control" placeholder="Search" />
            </div>
            <table class="table table-bordered table-striped fs--1">
                <thead class="bg-200 text-900">
                    <tr>
                        <th class="sort" data-sort="history_buy_id"><b>#</b>
                        </th>
                        <th class="sort" data-sort="history_buy_time"><b>Thời Gian</b>
                        </th>
                        <th class="sort" data-sort="history_buy_type"><b>Loại</b>
                        </th>
                        <th class="sort" data-sort="history_buy_point_original"><b>Số dư ban đầu</b>
                        </th>
                        <th class="sort" data-sort="history_buy_point_final"><b>Số dư cuối cùng</b>
                        </th>
                        <th class="sort" data-sort="history_buy_content"><b>Nội dung</b>
                        </th>
                    </tr>
                </thead>
                <tbody class="list">
                    <?php 
                    $result = mysqli_query($conn,"SELECT * FROM table_history_buy WHERE history_buy_username = '$user_username' ORDER BY history_buy_id DESC LIMIT 0,100");
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td class="history_buy_id"><?=$row['history_buy_id'];?></td>
                        <td class="history_buy_time"><?php echo date('d-m-Y', $row['history_buy_time']);?></td>
                        <td class="history_buy_type"><?=$row['history_buy_type'];?></td>
                        <td class="history_buy_point_original"><?=number_format($row['history_buy_point_original']);?></td>
                        <td class="history_buy_point_final"><?=number_format($row['history_buy_point_final']);?></td>
                        <td class="history_buy_content"><?=$row['history_buy_content'];?></td>
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
<?php require_once '../includes/footer.php'; ?>