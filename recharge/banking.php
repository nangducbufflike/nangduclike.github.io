<?php
require_once '../_config.php';
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level == 0){
    header('location: /profile/update-info');
    die();
}
$title = 'Nạp tiền vào tài khoản';
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
                        Nạp tiền chuyển khoản</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header bg-light">
        <div class="row justify-content-between">
            <div class="col-md-auto">
                <h5 class="mb-3 mb-md-0">Nạp tiền chuyển khoản</h5>
            </div>
            <div class="col-md-auto"><a class="btn btn-falcon-primary btn-sm" href="/recharge/card"><i
                        class="fa fa-credit-card"></i> Nạp tiền thẻ cào</a>
            </div>
        </div>
    </div>
    <div class="card-body bg-light overflow-hidden">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-secondary" role="alert">- Bạn vui lòng chuyển khoản chính xác nội dung chuyển
                    khoản bên dưới hệ thống sẽ tự động cộng tiền cho bạn sau 1 - 5 phút sau khi nhận được tiền. Nếu
                    chuyển khác ngân hàng sẽ mất thời gian lâu hơn, tùy thời gian xử lý của mỗi ngân hàng.
                    <br>Nếu sau 10 phút từ khi tiền trong tài khoản của bạn bị trừ mà vẫn chưa được cộng tiền vui liên
                    hệ Admin để được hỗ trợ.
                    <br> - Đối với Vietcombank khung giờ từ 10h đến 12h tối không nên nạp vì sẽ bị delay.
                </div>
            </div>
            <div class="mb-3 col-sm-6">
                <h5 class="text-info text-center"><img src="https://automxh.vn/assets/img/momo.png" height="45px"></h5>
                <div class="alert alert-success" role="alert">Số Điện Thoại: <b><a href="javascript:;"
                            onclick="copyMomo();"><b>0899993441 </b><i class="far fa-copy"></i>
                        </a>
                    </b>
                    <br>Chủ tài khoản: <b>Nguyễn Ngọc Thức</b>
                    <br>Số tiền tối thiểu: <b>10,000 VNĐ</b>
                </div>
            </div>
            <div class="col-md-12">
                <h5 class="text-primary">Nội dung chuyển khoản</h5>
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading font-weight-semi-bold text-center">
                        <a href="javascript:;" onclick="copyContent();"><b>Thudz <?=$user_username;?></b>&nbsp;<i
                                class="far fa-copy"></i></a>
                  </div>
            </div>
            <div class="mb-3 col-sm-6">
                <h5 class="text-info text-center"><img src="/assets/img/mbbank.png" height="45px"></h5>
                <div class="alert alert-success" role="alert">Số Tài Khoản: <b><a href="javascript:;"
                            onclick="copyMBBank();"><b>0899993441 </b><i class="far fa-copy"></i>
                        </a>
                    </b>
                    <br>Chủ tài khoản: <b>Nguyễn Ngọc Thức</b>
                    <br>Số tiền tối thiểu: <b>10,000 VNĐ</b>
                </div>
            </div>
            <div class="col-md-12">
                <h5 class="text-primary">Nội dung chuyển khoản</h5>
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading font-weight-semi-bold text-center">
                        <a href="javascript:;" onclick="copyContent();"><b>Thudz <?=$user_username;?></b>&nbsp;<i
                                class="far fa-copy"></i></a>
                   </div>
            </div>
            <div class="mb-3 col-sm-6">
                <h5 class="text-info text-center"><img src="https://automxh.vn/assets/img/logo_thesieurecom.png" height="45px"></h5>
                <div class="alert alert-success" role="alert">Tên Tài Khoản: <b><a href="javascript:;"
                            onclick="copyTSR();"><b>0877771404 </b><i class="far fa-copy"></i>
                        </a>
                    </b>
                    <br>Chủ tài khoản: <b>Nguyễn Ngọc Thức</b>
                    <br>Số tiền tối thiểu: <b>10,000 VNĐ</b>
                </div>
            </div>
            <div class="col-md-12">
                <h5 class="text-primary">Nội dung chuyển khoản</h5>
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading font-weight-semi-bold text-center">
                        <a href="javascript:;" onclick="copyContent();"><b>Thudz <?=$user_username;?></b>&nbsp;<i
                                class="far fa-copy"></i></a>                                             
                    </h4>
                </div>
            </div>
            <div class="col-md-12">
                <div class="alert alert-warning" role="alert">
                    <h5 class="alert-heading font-weight-semi-bold">Lưu ý</h5>
                    <p>Nạp sai cú pháp hoặc sai số tài khoản sẽ bị trừ 20% phí giao dịch. Vd: nạp 100k sai nội dung sẽ
                        chỉ nhận được 80k coin và phải liên hệ admin để cộng tay.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">

    <div class="card mb-3">
        <div class="card-header bg-light">
            <h5 class="mb-0">Lịch sử chuyển khoản</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive scrollbar" id="history"
                data-list='{"valueNames":["banking_id","banking_code","banking_time","banking_type","banking_transfer","banking_amount","banking_content"],"page":10,"pagination":true}'>
                <div class="mb-3">
                    <input class="search form-control" placeholder="Search" />
                </div>
                <table class="table table-bordered table-striped fs--1">
                    <thead class="bg-200 text-900">
                        <tr>
                            <th class="sort" data-sort="banking_id"><b>#</b>
                            </th>
                            <th class="sort" data-sort="banking_code"><b>Mã giao dịch</b>
                            </th>
                            <th class="sort" data-sort="banking_time"><b>Thời gian</b>
                            </th>
                            <th class="sort" data-sort="banking_type"><b>Loại</b>
                            </th>
                            <th class="sort" data-sort="banking_transfer"><b>Người chuyển</b>
                            </th>
                            <th class="sort" data-sort="banking_amount"><b>Thực nhận</b>
                            </th>
                            <th class="sort" data-sort="banking_content"><b>Nội dung</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php 
                        $result = mysqli_query($conn,"SELECT * FROM table_banking WHERE banking_username = '$user_username' ORDER BY banking_id DESC LIMIT 0,100");
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td class="banking_id"><?=$row['banking_id'];?></td>
                            <td class="banking_code"><?=$row['banking_code'];?></td>
                            <td class="banking_time"><?php echo date('d-m-Y', $row['banking_time']);?></td>
                            <td class="banking_type"><?=$row['banking_type'];?></td>
                            <td class="banking_transfer"><?=$row['banking_transfer'];?></td>
                            <td class="banking_amount"><?=$row['banking_amount'];?></td>
                            <td class="banking_content"><?=$row['banking_content'];?></td>
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

</div>
<script>
function copy(text) {
    var input = document.createElement('input');
    input.setAttribute('value', text);
    document.body.appendChild(input);
    input.select();
    var result = document.execCommand('copy');
    document.body.removeChild(input);
}

function copyMomo() {
    var text = "0899993441";
    copy(text);
    swal('Đã copy số điện thoại CK Momo!', 'success');
}

function copyMBBank() {
    var text = "0899993441";
    copy(text);
    swal('Đã copy số tài khoản CK Mbbank!', 'success');
}

function copyTSR() {
    var text = "0877771404";
    copy(text);
    swal('Đã copy tên tài khoản CK Thesieure!', 'success');
}

function copyContent() {
    var text = "Thucdz <?=$user_username;?>";
    copy(text);
    swal('Đã copy nội dung chuyển khoản!', 'success');
}
</script>
<?php require_once '../includes/footer.php'; ?>