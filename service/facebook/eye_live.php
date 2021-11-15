<?php
include_once "../../_config.php";
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
include_once "../../includes/header.php";
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
                                <?=$site_name;?></strong></a>
                    </li>
                    <li class="breadcrumb-item font-sans-serif active" aria-current="page"><i class="fas fa-link"></i>
                        <?=$row['service_title'];?></li>
                    </li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-lg-8 pe-lg-2 mb-3">
        <div class="card h-lg-100 overflow-hidden">
            <div class="card-header bg-light">
                <div class="row justify-content-between">
                    <div class="col-md-auto">
                        <h5 class="mb-3 mb-md-0"><?=$row['service_title'];?></h5>
                    </div>
                    <div class="col-md-auto"><a class="btn btn-falcon-default btn-sm"
                            href="/service/facebook/eye-live/list"><span class="fas fa-list fs--2 mr-1"></span> Danh sách
                            đơn</a>
                    </div>
                </div>
            </div>
            <div class="card-body bg-light">
                <p class="mb-0">
                <form action="" id="form_id" class="user" method="POST" accept-charset="utf-8">
                    <label>Máy chủ:</label>
                    <div class="form-check">
                        <input class="form-check-input" checked="checked" id="buff_server" type="radio"
                            onchange="bill();" name="server" value="1" data-bs-toggle="collapse" />
                        <label class="form-check-label" for="buff_server">Server 1 (<b><?=$row['service_price'];?>₫</b>)
                             (
                            Vip )  <b
                                class="text-warning">(Hoạt Động)</b></label>

                    </div>

                    <?php if ($row['service_price_server_1'] != 0) { ?>
                    <div class="form-check">
                        <input class="form-check-input" id="buff_server" type="radio" onchange="bill();" name="server"
                            value="2" data-bs-toggle="collapse" />
                        <label class="form-check-label" for="buff_server">Server 2
                            (<b><?=$row['service_price_server_1'];?>₫</b>) (Trung Bình) <b
                                class="text-warning">(Hoạt Động)</b></label>

                    </div>
                    <?php } ?>
                    <?php if ($row['service_price_server_2'] != 0) { ?>
                    <div class="form-check">
                        <input class="form-check-input" id="buff_server" type="radio" onchange="bill();" name="server"
                            value="3" data-bs-toggle="collapse" />
                        <label class="form-check-label" for="buff_server">Server 3
                            (<b><?=$row['service_price_server_2'];?>₫</b>) (Rẻ) <b
                                class="text-warning">(Hoạt Động)</b></label>

                    </div>
                    <?php } ?>
                    <?php if ($row['service_price_server_3'] != 0) { ?>
                    <div class="form-check">
                        <input class="form-check-input" id="buff_server" type="radio" onchange="bill();" name="server"
                            value="4" data-bs-toggle="collapse" />
                        <label class="form-check-label" for="buff_server">Server 4
                            (<b><?=$row['service_price_server_3'];?>₫</b>) (Siêu Rẻ) <b
                                class="text-warning">(Hoạt Động)</b></label>

                    </div>
                    <?php } ?>
                    <?php if ($row['service_price_server_4'] != 0) { ?>
                    <div class="form-check">
                        <input class="form-check-input" id="buff_server" type="radio" onchange="bill();" name="server"
                            value="5" data-bs-toggle="collapse" />
                        <label class="form-check-label" for="buff_server">Server 5
                            (<b><?=$row['service_price_server_4'];?>₫</b>) (Ngon) <b
                                class="text-warning">(Hoạt Động)</b></label>
                              <div class="alert alert-warning alert-dismissible fade show fs--1 text-center" role="alert">
                                 - Không chạy live Chia Sẻ Âm Nhạc </div>
                    </div>
                    <?php } ?>
                    <div class="mb-3">
                        <label>Nhập ID hoặc Link bài viết:</label>
                        <input type="text" id="buff_fb_id" name="idpost" onpaste="getUID();" class="form-control"
                            placeholder="Nhập link bài viết cần tăng" required="">
                        <label>(*) Nếu nhập <code>link bài viết</code> hệ thống sẽ tự động <code>"GET ID"</code>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label>Số mắt:</label>
                        <input type="number" id="buff_amount" name="amount" onkeyup="bill();" class="form-control"
                            placeholder="Nhập số lượng cần tăng" value="" required="">
                    </div>
                    <div class="mb-3">
                        <label>Số phút:</label>
                        <input type="number" id="buff_minutes" name="minutes" onkeyup="bill();" class="form-control"
                            placeholder="Nhập số phút cần tăng" value="" required="">
                    </div>
                    <div class="mb-3">
                        <label>Ghi chú:</label>
                        <textarea type="text" id="buff_note" class="form-control" rows="3"
                            placeholder="Nhập ghi chú nếu cần" required=""></textarea>
                    </div>
                    <div class="alert alert-success" role="alert">
                        <center><strong>Thành Tiền: <span id="total_payment" class="text-danger">0</span> VNĐ</strong>
                        </center>
                    </div>
                    <center>
                        <button type="button" class="btn btn-success btn-rounded me-1 mb-1" id="eyeliveFacebook"
                            onclick="eye_live_facebook();"><i class="fa fa-dollar-sign"></i> Thanh Toán</button>
                    </center>
                </form>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-3 mt-3 mt-lg-0">
            <div class="bg-holder bg-card page_speed_227445930"></div>
            <div class="card-body p-3">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="avatar avatar-4xl rounded-circle border page_speed_1005751458"><img
                                class="rounded-circle"
                                src="https://graph.facebook.com/<?=$user_fb;?>/picture?width=500&height=500&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662"
                                width="100%" alt="user" data-pagespeed-url-hash="760951865"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></div>
                    </div>
                    <div class="col pl-0">
                        <h6 class="fs-0 mb-1"><?=$user_username;?></h6>
                        <div class="card bg-soft-success text-primary mb-1"><strong
                                class="p-1 font-sans-serif fs--1 text-center">Hiện có: <strong
                                    class="text-danger"><?=number_format($user_point);?></strong> coin</strong></div>
                        <div class="card bg-soft-info text-primary"><strong
                                class="p-1 font-sans-serif fs--1 text-center">Cấp độ: <?=$user_level_type;?></strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-0 overflow-hidden">
            <div class="bg-holder bg-card"></div>
            <div class="card-body position-relative">
                <div class="alert alert-info" role="alert">
                    <h5 class="alert-heading font-weight-semi-bold">Thông tin</h5>
                    <?=$row['service_info'];?>
                </div>
                <div class="alert alert-danger" role="alert">
                    <h5 class="alert-heading font-weight-semi-bold">Lưu ý</h5>
                    <?=$row['service_noted'];?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function getUID() {
    setTimeout(() => {
        var id = $('[name=idpost]').val();
        var result = null;
        var post_id = id['match'](/(.*)\/posts\/([0-9]{8,})/);
        var ins_id_post = id['match'](/(.*)\/p\/([a-zA-Z0-9]{8,})/);
        var photo_id = id['match'](/(.*)\/?fbid=([0-9]{8,})/);
        var album_id = id['match'](/(.*)\/media_set\?set=a.([0-9]{8,})/);
        var video_id = id['match'](/(.*)\/video.php\?v=([0-9]{8,})/);
        var story_id = id['match'](/(.*)\/story.php\?story_fbid=([0-9]{8,})/);
        var link_id = id['match'](/(.*)\/permalink.php\?story_fbid=([0-9]{8,})/);
        var tiktok_id = id['match'](
            /(.*)\/([a-zA-Z0-9]{1,})\/share\/([a-zA-Z0-9.]{2,})\/([a-zA-Z0-9.]{4,})/);
        var video_id_2 = id['match'](/(.*)\/?v=([0-9]{8,})/);
        var other_id = id['match'](/(.*)\/([a-zA-Z0-9.]{4,})/);
        var group_id = id['match'](/(.*)\/group\/([a-zA-Z0-9.]{4,})/);
        var tiktok_p = id['match'](/(.*)\/@([a-zA-Z0-9.]{3,})/);
        var comment_id = id['match'](/(.*)comment_id=([0-9]{8,})/);
        if (post_id) {
            result = post_id[2]
        } else {
            if (tiktok_id) {
                result = tiktok_id[4]
            } else {
                if (tiktok_p) {
                    result = tiktok_p[2]
                } else {
                    if (group_id) {
                        result = group_id[2]
                    } else {
                        if (ins_id_post) {
                            result = ins_id_post[2]
                        } else {
                            if (photo_id) {
                                result = photo_id[2]
                            } else {
                                if (video_id) {
                                    result = video_id[2]
                                } else {
                                    if (video_id_2) {
                                        result = video_id_2[2]
                                    } else {
                                        if (album_id) {
                                            result = album_id[2]
                                        } else {
                                            if (story_id) {
                                                result = story_id[2]
                                            } else {
                                                if (link_id) {
                                                    result = link_id[2]
                                                } else {
                                                    if (other_id) {
                                                        result = other_id[2]
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        };
        if (comment_id) {
            result += '_' + comment_id[2]
        };
        if (result == null) {
            result = "Link bài viết không hợp lệ hoặc không hỗ trợ vui lòng liên hệ admin.";
        }
        $('#buff_fb_id').val(result);
    }, 500);
};

function eye_live_facebook() {
    var buff_fb_id = $('#buff_fb_id').val();
    var buff_server = $('input[name=server]:checked').val();
    var buff_amount = $('#buff_amount').val();
    var buff_minutes = $('#buff_minutes').val();
    var buff_note = $('#buff_note').val();
    if (!buff_fb_id) {
        swal('Trường link bài viết không được bỏ trống.', 'error');
        return;
    }
    if (!buff_server) {
        swal('Trường server không được bỏ trống.', 'error');
        return;
    }
    if (!buff_amount) {
        swal('Trường số lượng không được bỏ trống.', 'error');
        return;
    }
    if (!buff_minutes) {
        swal('Trường số phút không được bỏ trống.', 'error');
        return;
    }
    $.ajax({
        url: WEBSITE_URL + prefix + 'service/facebook/eye-live/order',
        type: 'POST',
        dataType: 'JSON',
        data: {
            type: '<?=$row['service_slug'];?>',
            buff_fb_id: buff_fb_id,
            buff_server: buff_server,
            buff_amount: buff_amount,
            buff_minutes: buff_minutes,
            buff_note: buff_note
        },
        beforeSend: function() {
            wait('#eyeliveFacebook', false);
        },
        complete: function() {
            wait('#eyeliveFacebook', true, '<i class="fa fa-dollar-sign"></i> Thanh Toán');
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
<script>
function bill() {
    var amount = $('[name=amount]').val();
    var minutes = $('[name=minutes]').val();
    var server = $('input[name=server]:checked').val();
    if (server == 1) {
        var price = <?=$row['service_price'];?>;
    } else if (server == 2) {
        var price = <?=$row['service_price_server_1'];?>;
    } else if (server == 3) {
        var price = <?=$row['service_price_server_2'];?>;
    } else if (server == 4) {
        var price = <?=$row['service_price_server_3'];?>;
    } else if (server == 5) {
        var price = <?=$row['service_price_server_4'];?>;
    }
    var price = amount * minutes * price;
    var total_payment = price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
    $('#total_payment').html(formatNumber(total_payment));
}
$(document).ready(function() {
    bill();
});
</script>
<?php require_once '../../includes/footer.php'; ?>