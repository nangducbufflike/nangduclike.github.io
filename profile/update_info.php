<?php 
require_once '../_config.php'; 
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level == 1){
    header('location: /home');
    die();
}
$title = 'Cập nhật thông tin tài khoản';
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
                                <?=$site_name;?></strong></a>
                    </li>
                    <li class="breadcrumb-item font-sans-serif active" aria-current="page"><i class="fas fa-link"></i>
                        Cập nhật thông tin tài khoản</li>
                </ol>
            </div>

        </div>
    </div>
</div>


<div class="row g-0">
    <div class="col-lg-12">
        <div class="card h-lg-100 overflow-hidden">
            <div class="card-header bg-light">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="mb-0">Cập nhật thông tin tài khoản</h5>
                    </div>
                </div>
            </div>
            <div class="card-body bg-light">
                <p class="mb-0">
                <div class="alert alert-info" role="alert"><i class="fa fa-bell"></i> Để đảm bảo an toàn cho tài
                    khoản của bạn vui lòng cập nhân thông tin cá nhân tại đây, thông tin cá nhân phải chính xác để chúng
                    tôi có thể trợ giúp tốt nhất cho bạn về các vấn đề phát sinh sau này!
                </div>
                <br>
                <form action="" method="POST" accept-charset="utf-8" class="user">
                    <input type="hidden" name="t" value="info">
                    <div class="mb-3">
                        <label>Họ và tên:</label>
                        <input type="text" class="form-control" id="user_fullname" placeholder="Nhập họ và tên"
                            required="">
                    </div>
                    <div class="mb-3">
                        <label>Số điện thoại</label>
                        <input type="number" class="form-control" id="user_phone" placeholder="Nhập số điện thoại"
                            required="">
                    </div>
                    <div class="mb-3">
                        <label>Email:</label>
                        <input type="text" class="form-control" id="user_email" placeholder="Email" required="">
                    </div>
                    <div class="alert alert-warning" role="alert"><strong>(*)</strong> Vui
                        lòng đảm bảo các thông tin bạn vừa nhập là <code>chính xác</code>, nếu chúng tôi phát hiện các
                        <code>thông tin trên là sai</code> chúng tôi có thể
                        <code>Xoá tài khoản</code> của bạn mà không báo trước. Cảm ơn bạn đã sử dụng MUALIKEFB.VN
                    </div>
                    <center>
                        <button type="button" class="btn btn-success btn-rounded btn-block" id="updateInfo"
                            onclick="update_info();"><i class="fa fa-info"></i> Cập nhật</button>
                    </center>
                </form>
                </p>
            </div>
        </div>
    </div>

</div>

<script>
function update_info() {
    var user_fullname = $('#user_fullname').val();
    var user_phone = $('#user_phone').val();
    var user_email = $('#user_email').val();
    if (!user_fullname) {
        swal('Trường họ và tên không được bỏ trống.', 'error');
        return;
    }
    if (!user_phone) {
        swal('Trường số điện thoại không được bỏ trống.', 'error');
        return;
    }
    if (!user_email) {
        swal('Trường email không được bỏ trống.', 'error');
        return;
    }
    $.ajax({
        url: WEBSITE_URL + prefix + 'profile/update-info',
        type: 'POST',
        dataType: 'JSON',
        data: {
            type: 'update_info',
            user_fullname: user_fullname,
            user_phone: user_phone,
            user_email: user_email
        },
        beforeSend: function() {
            wait('#updateInfo', false);
        },
        complete: function() {
            wait('#updateInfo', true, '<i class="fa fa-info"></i> Lưu thông tin');
        },
        success: (data) => {
            if (data.error) {
                swal(data.msg, "error");
            } else {
                swal(data.msg, "success");
                setTimeout(function() {
                    window.location.href = '/home';
                }, 1000);
            }
        }
    })
}
</script>

<?php require_once '../includes/footer.php'; ?>