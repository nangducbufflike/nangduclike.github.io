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
                        Nạp tiền vào thẻ cào</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header bg-light">
        <div class="row justify-content-between">
            <div class="col-md-auto">
                <h5 class="mb-3 mb-md-0">Nạp tiền thẻ cào</h5>
            </div>
            <div class="col-md-auto"><a class="btn btn-falcon-primary btn-sm" href="/recharge/banking"><i
                        class="fa fa-credit-card"></i> Nạp tiền chuyển khoản</a>
            </div>
        </div>
    </div>
    <div class="card-body bg-light overflow-hidden">
        <form>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label" for="">Loại thẻ:</label>
                        <select class="form-control" id="card_type">
                            <option value="">--- Chọn loại thẻ ---</option>
                            <option value="VIETTEL">VIETTEL (Chiết khấu 30%) </option>
                            <option value="MOBIFONE">MOBIFONE (Chiết khấu 30%) </option>
                            <option value="VINAPHONE">VINAPHONE (Chiết khấu 30%) </option>
                            <option value="VIETNAMOBILE">VIETNAMOBILE (Chiết khấu 30%)</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label" for="">Mệnh giá:</label>
                        <select class="form-control" id="card_amount">
                            <option value="">--- Chọn mệnh giá thẻ ---</option>
                            <option value="10000">10.000 VNĐ</option>
                            <option value="20000">20.000 VNĐ</option>
                            <option value="30000">30.000 VNĐ</option>
                            <option value="50000">50.000 VNĐ</option>
                            <option value="100000">100.000 VNĐ</option>
                            <option value="200000">200.000 VNĐ</option>
                            <option value="300000">300.000 VNĐ</option>
                            <option value="500000">500.000 VNĐ</option>
                            <option value="1000000">1.000.000 VNĐ</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label" for="">Seri:</label>
                        <input type="number" class="form-control" id="card_serial" placeholder="Nhập số seri của thẻ">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label" for="">Mã thẻ:</label>
                        <input type="number" class="form-control" id="card_pin" placeholder="Nhập mã thẻ">
                    </div>
                </div>
            </div>
            <br />
            <center>
                <button type="button" class="btn btn-primary btn-rounded btn-block" id="rechargeCard"
                    onclick="recharge_card();"><i class="fa fa-paper-plane"></i> Nạp Ngay</button>
            </center>
        </form>
    </div>
</div>
<div class="row g-0">

    <div class="card mb-3">
        <div class="card-header bg-light">
            <h5 class="mb-0">Lịch sử nạp thẻ</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive scrollbar" id="history"
                data-list='{"valueNames":["card_id","card_code","card_time","card_type","card_amount","card_serial","card_pin","card_content"],"page":10,"pagination":true}'>
                <div class="mb-3">
                    <input class="search form-control" placeholder="Search" />
                </div>
                <table class="table table-bordered table-striped fs--1">
                    <thead class="bg-200 text-900">
                        <tr>
                            <th class="sort" data-sort="card_id"><b>#</b>
                            </th>
                            <th class="sort" data-sort="card_code"><b>Mã giao dịch</b>
                            </th>
                            <th class="sort" data-sort="card_time"><b>Thời gian</b>
                            </th>
                            <th class="sort" data-sort="card_type"><b>Loại thẻ</b>
                            </th>
                            <th class="sort" data-sort="card_amount"><b>Mệnh giá</b>
                            </th>
                            <th class="sort" data-sort="card_serial"><b>Seri</b>
                            </th>
                            <th class="sort" data-sort="card_pin"><b>Mã thẻ</b>
                            </th>
                            <th class="sort" data-sort="card_content"><b>Nội dung</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php 
                        $result = mysqli_query($conn,"SELECT * FROM table_card WHERE card_username = '$user_username' ORDER BY card_id DESC LIMIT 0,100");
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td class="card_id"><?=$row['card_id'];?></td>
                            <td class="card_code"><?=$row['card_code'];?></td>
                            <td class="card_time"><?php echo date('d-m-Y', $row['card_time']);?></td>
                            <td class="card_type"><?=$row['card_type'];?></td>
                            <td class="card_amount"><?=$row['card_amount'];?></td>
                            <td class="card_serial"><?=$row['card_serial'];?></td>
                            <td class="card_pin"><?=$row['card_pin'];?></td>
                            <td class="card_content"><?=$row['card_content'];?></td>
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
function recharge_card() {
    var card_type = $('#card_type').val();
    var card_amount = $('#card_amount').val();
    var card_serial = $('#card_serial').val();
    var card_pin = $('#card_pin').val();
    if (!card_type) {
        swal('Trường loại thẻ không được bỏ trống.', 'error');
        return;
    }
    if (!card_amount) {
        swal('Trường mệnh giá không được bỏ trống.', 'error');
        return;
    }
    if (!card_serial) {
        swal('Trường seri không được bỏ trống.', 'error');
        return;
    }
    if (!card_pin) {
        swal('Trường mã thẻ không được bỏ trống.', 'error');
        return;
    }
    $.ajax({
        url: WEBSITE_URL + prefix + 'recharge/card',
        type: 'POST',
        dataType: 'JSON',
        data: {
            type: 'recharge-card',
            card_type: card_type,
            card_amount: card_amount,
            card_serial: card_serial,
            card_pin: card_pin
        },
        beforeSend: function() {
            wait('#rechargeCard', false);
        },
        complete: function() {
            wait('#rechargeCard', true, '<i class="fa fa-info"></i> Nạp Ngay');
        },
        success: (data) => {
            if (data.error) {
                swal(data.msg, "error");
            } else {
                swal(data.msg, "success");
                setTimeout(function() {
                    location.reload();
                }, 1000);
            }
        }
    })
}
</script>
<?php require_once '../includes/footer.php'; ?>