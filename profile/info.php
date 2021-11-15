<?php
require_once '../_config.php';
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level == 0){
    header('location: /profile/update-info');
    die();
}
$title = 'Thông tin tài khoản';
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
                        Thông
                        tin tài khoản</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header position-relative min-vh-25 mb-7">
        <div class="bg-holder rounded-3 rounded-bottom-0"
            style="background-image:url(https://prium.github.io/falcon/v3.1.0/assets/img/generic/4.jpg);">
        </div>
        <!--/.bg-holder-->
        <div class="avatar avatar-5xl avatar-profile"><img class="rounded-circle img-thumbnail shadow-sm"
                src="https://graph.facebook.com/<?=$user_fb;?>/picture?width=500&height=500&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662"
                width="200" alt="" />
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8">
                <h4 class="mb-1"> <?=$user_username;?><span data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Verified"><small class="fa fa-check-circle text-primary"
                            data-fa-transform="shrink-4 down-2"></small></span></h4>
                <h5 class="fs-0 fw-normal"><i class="fa fa-coins"></i> Hiện có: <strong class="text-danger"><?=$user_point;?></strong>
                </h5>
                <p class="text-500">New York, USA</p>
                <a class="btn btn-falcon-success btn-sm px-3" href="/recharge/banking"><i class="fa fa-credit-card"></i>
                    Nạp
                    tiền</a>
                <a class="btn btn-falcon-danger btn-sm px-3 ms-2" href="/profile/logout"><i
                        class="fa fa-sign-out-alt"></i>
                    Đăng xuất</a>
                <div class="border-dashed-bottom my-4 d-lg-none"></div>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-lg-6 pe-lg-2 mb-3">
        <div class="card h-lg-100 overflow-hidden">
            <div class="card-header bg-light">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="mb-0">Chỉnh sửa tài khoản</h5>
                    </div>
                </div>
            </div>
            <div class="card-body bg-light">
                <p class="mb-0">
                <form action="" method="POST" accept-charset="utf-8" class="user">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Họ Tên:</label>
                            <input type="text" class="form-control" value="<?=$user_fullname;?>" readonly=""
                                required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tài khoản :</label>
                            <input type="text" class="form-control" value="<?=$user_username;?>" readonly=""
                                required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Số Điện Thoại :</label>
                            <input type="text" class="form-control" value="<?=$user_phone;?>" readonly="" required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Địa Chỉ Email :</label>
                            <input type="text" class="form-control" value="<?=$user_email;?>" readonly="" required="">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Mã Api Của Bạn:</label>
                            <input type="text" class="form-control" value="<?=$user_token;?>" readonly="" required="">
                        </div>
                        <div class="form-group col-md-12">
                            <label>ID Facebook :</label><span id="result_uid" style="font-size:17px">
                                <input type="text" class="form-control" id="user_fb" value="<?=$user_fb;?>"
                                    required=""></span>
                        </div>
                    </div>
                    <br />
                    <center>
                        <button type="button" class="btn btn-info btn-rounded btn-block" id="changeInfo"
                            onclick="change_info();"><i class="fa fa-info"></i> Lưu thông tin</button>
                    </center>
                </form>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 ps-lg-2 mb-3">
        <div class="card mb-3">
            <div class="card-header bg-light">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="mb-0">Đổi mật khẩu</h5>
                    </div>
                </div>
            </div>
            <div class="card-body bg-light">
                <p class="mb-0">
                <form action="" id="info" method="POST" accept-charset="utf-8" class="user">
                    <input type="hidden" name="t" value="password">
                    <div class="mb-0">
                        <label>Mật khẩu hiện tại :</label>
                        <input type="text" class="form-control" id="user_password" placeholder="Nhập mật khẩu cũ"
                            value="" required="">
                    </div>
                    <div class="mb-3">
                        <label>Mật khẩu mới :</label>
                        <input type="text" class="form-control" id="user_new_password" placeholder="Nhập mật khẩu mới"
                            value="" required="">
                    </div>
                    <div class="mb-3">
                        <label>Nhập lại mật khẩu mới :</label>
                        <input type="text" class="form-control" id="user_confirm_password"
                            placeholder="Nhập lại mật khẩu mới" value="" required="">
                    </div>
                    <center>
                        <button type="button" class="btn btn-danger btn-rounded btn-block" id="changePassword"
                            onclick="change_password();"><i class="fa fa-lock"></i> Đổi mật khẩu</button>
                    </center>
                </form>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="row g-0">

    <div class="card mb-3">
        <div class="card-header bg-light">
            <h5 class="mb-0">Lịch sử hoạt động của tài khoản</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive scrollbar" id="history"
                data-list='{"valueNames":["history_user_id","history_user_time","history_user_ip","history_user_content"],"page":10,"pagination":true}'>
                <div class="mb-3">
                    <input class="search form-control" placeholder="Search" />
                </div>
                <table class="table table-bordered table-striped fs--1">
                    <thead class="bg-200 text-900">
                        <tr>
                            <th class="sort" data-sort="history_user_id"><b>#</b>
                            </th>
                            <th class="sort" data-sort="history_user_time"><b>Thời gian</b>
                            </th>
                            <th class="sort" data-sort="history_user_ip"><b>Địa chỉ IP</b>
                            </th>
                            <th class="sort" data-sort="history_user_content"><b>Hành động</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php 
                        $result = mysqli_query($conn,"SELECT * FROM table_history_user WHERE history_user_username = '$user_username' ORDER BY history_user_id DESC LIMIT 0,100");
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td class="history_user_id"><?=$row['history_user_id'];?></td>
                            <td class="history_user_time"><?php echo date('d-m-Y', $row['history_user_time']);?></td>
                            <td class="history_user_ip"><?=$row['history_user_ip'];?></td>
                            <td class="history_user_content"><?=$row['history_user_content'];?></td>
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
function change_info() {
    var user_fb = $('#user_fb').val();
    if (!user_fb) {
        swal('Trường id faceobok không được bỏ trống.', 'error');
        return;
    }
    $.ajax({
        url: WEBSITE_URL + prefix + 'profile/change-info',
        type: 'POST',
        dataType: 'JSON',
        data: {
            type: 'change_info',
            user_fb: user_fb
        },
        beforeSend: function() {
            wait('#changeInfo', false);
        },
        complete: function() {
            wait('#changeInfo', true, '<i class="fa fa-info"></i> Lưu thông tin');
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

function change_password() {
    var user_password = $('#user_password').val();
    var user_new_password = $('#user_new_password').val();
    var user_confirm_password = $('#user_confirm_password').val();
    if (!user_password) {
        swal('Trường mật khẩu cũ không được bỏ trống.', 'error');
        return;
    }
    if (!user_new_password) {
        swal('Trường mật khẩu mới không được bỏ trống.', 'error');
        return;
    }
    if (!user_confirm_password) {
        swal('Trường nhập lại mật khẩu mới không được bỏ trống.', 'error');
        return;
    }
    $.ajax({
        url: WEBSITE_URL + prefix + 'profile/change-password',
        type: 'POST',
        dataType: 'JSON',
        data: {
            type: 'change_password',
            user_password: user_password,
            user_new_password: user_new_password,
            user_confirm_password: user_confirm_password
        },
        beforeSend: function() {
            wait('#changePassword', false);
        },
        complete: function() {
            wait('#changePassword', true, '<i class="fa fa-lock"></i> Đổi mật khẩu');
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