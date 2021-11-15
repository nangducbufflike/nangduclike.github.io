<?php 
require_once '../_config.php';
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level == 0){
    header('location: /profile/update-info');
}
$title = 'Trang chủ';
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
                        Trang chủ</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row g-3 mb-3">
    <div class="col-sm-6 col-md-4">
        <div class="card overflow-hidden" style="min-width: 12rem">
            <div class="bg-holder bg-card"
                style="background-image:url(https://prium.github.io/falcon/v3.1.0/assets/img/icons/spot-illustrations/corner-1.png);">
            </div>
            <!--/.bg-holder-->
            <div class="card-body position-relative">
                <h6>Số dư hiện tại</h6>
            
                <div class="row">
                    <div class="col-12">
                        <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning"><?=$user_point;?></div><a
                         class="fw-semi-bold fs--1 text-nowrap" href="/profile/info">Xem thêm<span class="fas fa-angle-right ms-1"
                        data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto ps-0">
                        <div class="echart-bar-weekly-sales h-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="col-sm-6 col-md-4">
        <div class="card overflow-hidden" style="min-width: 12rem">
            <div class="bg-holder bg-card"
                style="background-image:url(https://prium.github.io/falcon/v3.1.0/assets/img/icons/spot-illustrations/corner-2.png);">
            </div>
            <!--/.bg-holder-->
            <div class="card-body position-relative">
                <h6>Tổng đã nạp</h6>
           
                <div class="row">
                    <div class="col-12">
                        <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info"><?=$user_total_nap;?></div><a
                          class="fw-semi-bold fs--1 text-nowrap" href="/recharge/banking">Lịch sử nạp<span class="fas fa-angle-right ms-1"
                        data-fa-transform="down-1"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="col-md-4">
        <div class="card overflow-hidden" style="min-width: 12rem">
            <div class="bg-holder bg-card"
                style="background-image:url(https://prium.github.io/falcon/v3.1.0/assets/img/icons/spot-illustrations/corner-3.png);">
            </div>
            <!--/.bg-holder-->
            <div class="card-body position-relative">
                <h6>Tổng đã tiêu</h6>
           <div class="row">
                    <div class="col-12">
                        <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif">X VNĐ</div><a
                         </div><a class="fw-semi-bold fs--1 text-nowrap" href="/profile/history">Lịch sử đơn hàng<span
                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-0">
    <div class="col-md-8">
        <div class="card overflow-hidden mb-3">
            <div class="card-header bg-light">
                <div class="row justify-content-between align-items-center">
                    <div class="col-sm-auto">
                        <h5 class="mb-1 mb-md-0">Thông báo gần đây</h5>
                    </div>

                </div>
            </div>
            <div class="card-body fs--1 p-0">
                <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
            <div class="notification-avatar">
                <div class="avatar avatar-xl me-3">
                    <div class="avatar-emoji rounded-circle">
                        <img class="rounded-circle" src="../../assets/img/team/1.jpg">
                    </div>
                </div>
            </div>
            <div class="notification-body">
                <p class="mb-1">
                    <strong>
                         Web Đang Trong Quá Trình Thử Nghiệm
Thanks                    </strong>
                </p>
                <span class="notification-time">12-07-2021</span>
            </div>
        </a>
                <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
            <div class="notification-avatar">
                <div class="avatar avatar-xl me-3">
                    <div class="avatar-emoji rounded-circle">
                        <img class="rounded-circle" src="../../assets/img/team/1.jpg">
                    </div>
                </div>
            </div>
            <div class="notification-body">
                <p class="mb-1">
                    <strong>
                        Chào mừng bạn đến với hệ thống               </strong>
                </p>
                <span class="notification-time">12-07-2021</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 ps-lg-2 mb-3">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Cấp bậc tài khoản</h5>
            </div>
            <div class="card-body bg-light overflow-hidden">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="d-flex position-relative">
                            <div class="col-auto">
                                <div class="card bg-soft-info text-info mb-3 page_speed_219467203">
                                    <div class="card-body p-3 text-center"><i class="fas fa-crown"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 pl-3 p-2">
                                <h6 class="fs-0 mb-1">Đại Lý</h6>
                                <p class="mb-0 fs--1 text-500">Tổng nap: <b class="text-danger">5,000,000</b> coin.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="d-flex position-relative">
                            <div class="col-auto">
                                <div class="card bg-soft-success text-success mb-3 page_speed_219467203">
                                    <div class="card-body p-3 text-center"><i class="fas fa-crown"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 pl-3 p-2">
                                <h6 class="fs-0 mb-1">Nhà Phân Phối</h6>
                                <p class="mb-0 fs--1 text-500">Tổng nap: <b class="text-danger">20,000,000</b> coin.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <hr>
                        <p class="text-small text-warning">Khi bạn lên cấp bậc nào thì sẽ có giá ưu đãi cho cấp bậc đó
                            nhé.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- script bổ sung -->
</div>
<?php require_once '../includes/footer.php'; ?>