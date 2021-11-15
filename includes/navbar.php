<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
    <script>
    var navbarStyle = localStorage.getItem("navbarStyle");
    if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
    }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span>
            </button>
        </div>
        <a class="navbar-brand" href="/">
            <div class="d-flex align-items-center py-3"><img class="me-2" src="/assets/img/illustrations/falcon.png"
                    alt="" width="40" /><span class="font-sans-serif">TANGLIKE</span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">

        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                     <!-- label-->

                    <!-- parent pages-->
                    <a class="nav-link" href="/home" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Trang
                                chủ</span>
                        </div>
                    </a>
                  
                    <!-- parent pages-->
                    <a class="nav-link" href="/profile/info" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-user-circle"></span></span><span class="nav-link-text ps-1">Thông Tin Cá Nhân</span>
                       
                                    </div>

                    </a>

               
                    <!-- parent pages-->
                    <a class="nav-link" href="/recharge/banking" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-coins"></span></span><span class="nav-link-text ps-1">Nạp tiền
                                vào tài khoản</span>
                                 </div>
                    </a>
             
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#service_facebook" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="service_facebook">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fab fa-facebook-f"></span>
                            </span>
                            <span class="nav-link-text">Dịch vụ
                                Facebook</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="service_facebook" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/like-post/order">
                                <span class="nav-link-icon">
                                    <span class="fa fa-thumbs-up"></span>
                                </span>
                                <span class="nav-link-text ps-1">Tăng like bài viết <svg class="svg-inline--fa fa-toggle-on fa-w-18 text-success" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="toggle-on" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M384 64H192C86 64 0 150 0 256s86 192 192 192h192c106 0 192-86 192-192S490 64 384 64zm0 320c-70.8 0-128-57.3-128-128 0-70.8 57.3-128 128-128 70.8 0 128 57.3 128 128 0 70.8-57.3 128-128 128z"></path></svg></span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/like-page/order">
                                <span class="nav-link-icon">
                                    <span class="fa fa-thumbs-up"></span>
                                </span>
                                <span class="nav-link-text ps-1">Tăng like trang <svg class="svg-inline--fa fa-toggle-on fa-w-18 text-success" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="toggle-on" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M384 64H192C86 64 0 150 0 256s86 192 192 192h192c106 0 192-86 192-192S490 64 384 64zm0 320c-70.8 0-128-57.3-128-128 0-70.8 57.3-128 128-128 70.8 0 128 57.3 128 128 0 70.8-57.3 128-128 128z"></path></svg></span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/comment/order">
                                <span class="nav-link-icon">
                                    <span class="fa fa-comment"></span>
                                </span>
                                <span class="nav-link-text ps-1">Tăng bình luận <svg class="svg-inline--fa fa-toggle-on fa-w-18 text-success" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="toggle-on" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M384 64H192C86 64 0 150 0 256s86 192 192 192h192c106 0 192-86 192-192S490 64 384 64zm0 320c-70.8 0-128-57.3-128-128 0-70.8 57.3-128 128-128 70.8 0 128 57.3 128 128 0 70.8-57.3 128-128 128z"></path></svg></span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/share/order">
                                <span class="nav-link-icon">
                                    <span class="fa fa-share-alt"></span>
                                </span>
                                <span class="nav-link-text ps-1">Tăng chia sẽ <svg class="svg-inline--fa fa-toggle-on fa-w-18 text-success" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="toggle-on" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M384 64H192C86 64 0 150 0 256s86 192 192 192h192c106 0 192-86 192-192S490 64 384 64zm0 320c-70.8 0-128-57.3-128-128 0-70.8 57.3-128 128-128 70.8 0 128 57.3 128 128 0 70.8-57.3 128-128 128z"></path></svg></span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/follow/order">
                                <span class="nav-link-icon">
                                    <span class="fa fa-users"></span>
                                </span>
                                <span class="nav-link-text ps-1">Tăng theo dõi <svg class="svg-inline--fa fa-toggle-on fa-w-18 text-success" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="toggle-on" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M384 64H192C86 64 0 150 0 256s86 192 192 192h192c106 0 192-86 192-192S490 64 384 64zm0 320c-70.8 0-128-57.3-128-128 0-70.8 57.3-128 128-128 70.8 0 128 57.3 128 128 0 70.8-57.3 128-128 128z"></path></svg></span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/eye-live/order">
                                <span class="nav-link-icon">
                                    <span class="fa fa-eye"></span>
                                </span>
                                <span class="nav-link-text ps-1">Tăng mắt live <svg class="svg-inline--fa fa-toggle-on fa-w-18 text-success" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="toggle-on" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M384 64H192C86 64 0 150 0 256s86 192 192 192h192c106 0 192-86 192-192S490 64 384 64zm0 320c-70.8 0-128-57.3-128-128 0-70.8 57.3-128 128-128 70.8 0 128 57.3 128 128 0 70.8-57.3 128-128 128z"></path></svg></span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/view-video/order">
                                <span class="nav-link-icon">
                                    <span class="fa fa-eye"></span>
                                </span>
                                <span class="nav-link-text ps-1">Tăng view video <svg class="svg-inline--fa fa-toggle-on fa-w-18 text-success" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="toggle-on" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M384 64H192C86 64 0 150 0 256s86 192 192 192h192c106 0 192-86 192-192S490 64 384 64zm0 320c-70.8 0-128-57.3-128-128 0-70.8 57.3-128 128-128 70.8 0 128 57.3 128 128 0 70.8-57.3 128-128 128z"></path></svg></span>
                                
                          </a>
                        </li>

                    </ul>
                </li>
                <!-- parent pages-->
                <?php if ($user_level == 4) { ?>

                <li class="nav-item">
                    <div class="row navbar-vertical-label-wrapper mb-2">
                        <div class="col-auto navbar-vertical-label">Khu Vực Admin</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>

                    <a class="nav-link" href="/administrator/edit-site" role="button">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fas fa-wrench"></span>
                            </span>
                            <span class="nav-link-text">Cài đặt</span>
                        </div>
                    </a>
                    <a class="nav-link dropdown-indicator collapsed" href="#administrator_user" data-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="administrator_user">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fab fa-facebook-f"></span>
                            </span>
                            <span class="nav-link-text">User</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="administrator_user" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/user/list">
                                <span class="nav-link-icon">
                                    <span class="fa fa-thumbs-up"></span>
                                </span>
                                <span class="nav-link-text ps-1">Danh sách</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/user/point">
                                <span class="nav-link-icon">
                                    <span class="fa fa-thumbs-up"></span>
                                </span>
                                <span class="nav-link-text ps-1">Cộng trừ tiền</span>
                            </a>
                        </li>
                    </ul>

                    <a class="nav-link dropdown-indicator collapsed" href="#administrator_service"
                        data-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="administrator_service">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fab fa-facebook-f"></span>
                            </span>
                            <span class="nav-link-text">Dịch vụ</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="administrator_service" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/service/add">
                                <span class="nav-link-icon">
                                    <span class="fa fa-thumbs-up"></span>
                                </span>
                                <span class="nav-link-text ps-1">Thêm dịch vụ</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/service/list">
                                <span class="nav-link-icon">
                                    <span class="fa fa-thumbs-up"></span>
                                </span>
                                <span class="nav-link-text ps-1">Danh sách dịch vụ</span>
                            </a>
                        </li>
                    </ul>

                    <a class="nav-link dropdown-indicator collapsed" href="#administrator_service_facebook"
                        data-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="administrator_service_facebook">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span class="fab fa-facebook-f"></span>
                            </span>
                            <span class="nav-link-text">Đơn Hàng</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="administrator_service_facebook" data-parent="#navbarVerticalCollapse">
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/service/facebook/like-post/list">
                                <span class="nav-link-icon">
                                    <span class="fa fa-thumbs-up"></span>
                                </span>
                                <span class="nav-link-text ps-1">Tăng like bài viết</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/service/facebook/like-page/list">
                                <span class="nav-link-icon">
                                    <span class="fa fa-thumbs-up"></span>
                                </span>
                                <span class="nav-link-text ps-1">Tăng like trang</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/service/facebook/comment/list">
                                <span class="nav-link-icon">
                                    <span class="fa fa-thumbs-up"></span>
                                </span>
                                <span class="nav-link-text ps-1">Tăng bình luận</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/service/facebook/share/list">
                                <span class="nav-link-icon">
                                    <span class="fa fa-thumbs-up"></span>
                                </span>
                                <span class="nav-link-text ps-1">Tăng chia sẽ</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/service/facebook/follow/list">
                                <span class="nav-link-icon">
                                    <span class="fa fa-thumbs-up"></span>
                                </span>
                                <span class="nav-link-text ps-1">Tăng theo dõi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/service/facebook/eye-live/list">
                                <span class="nav-link-icon">
                                    <span class="fa fa-thumbs-up"></span>
                                </span>
                                <span class="nav-link-text ps-1">Tăng mắt live</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/service/facebook/view-video/list">
                                <span class="nav-link-icon">
                                    <span class="fa fa-thumbs-up"></span>
                                </span>
                                <span class="nav-link-text ps-1">Tăng lượt xem video</span>
                            </a>
                        </li>
                    </ul>

                </li>
                <?php } ?>


                        
                        
                  
</nav>
<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">

    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false"
        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span>
    </button>

    <a class="navbar-brand me-1 me-sm-3" href="/">
        <div class="d-flex align-items-center"><img class="me-2" src="/assets/img/illustrations/falcon.png" alt=""
                width="40" /><span class="font-sans-serif">LGT</span>
        </div>
    </a>
    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboard">Cá
                    nhân</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboard">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium"
                            href="/profile/info">Trang cá nhân</a><a class="dropdown-item link-600 fw-medium"
                            href="/profile/history">Lịch sử hoạt động</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboard">Mua
                    dịch vụ</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboard">

                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium"
                            href="/service/facebook/like-post/order">Tăng like bài
                            viết</a><a class="dropdown-item link-600 fw-medium"
                            href="/service/facebook/like-page/order">Tăng like page</a><a
                            class="dropdown-item link-600 fw-medium" href="/service/facebook/comment/order">Tăng
                            bình luận</a><a class="dropdown-item link-600 fw-medium"
                            href="/service/facebook/share/order">Tăng
                            chia sẽ bài viết</a><a class="dropdown-item link-600 fw-medium"
                            href="/service/facebook/follow/order">Tăng
                            người theo
                            dõi</a><a class="dropdown-item link-600 fw-medium"
                            href="/service/facebook/eye-live/order">Tăng mắt
                            livestream</a><a class="dropdown-item link-600 fw-medium" href="/service/view">Tăng lượt xem
                            video</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboard">Nạp Tiền</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboard">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2">
                        <a class="dropdown-item link-600 fw-medium" href="/recharge/banking">Nạp tiền vào tài
                            khoản</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item"><span class="badge bg-primary"><?=number_format($user_point);?> vn₫</span> <span
                id="status"></span>
        </li>
        <li class="nav-item">
            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator"
                href="/profile/history"><span class="fa fa-history" data-fa-transform="shrink-7"
                    style="font-size: 33px;"></span><span class="notification-indicator-number">0</span></a>
        </li>
       <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                    id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6"
                        style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification"
                    aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none">
                        <div class="card-header">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h6 class="card-header-title mb-0">Thông báo gần đây</h6>
                                </div>
                            </div>
                        </div>
                        <div class="scrollbar-overlay" style="max-height:19rem">
                            <div class="list-group list-group-flush fw-normal fs--1">
                                <div class="list-group-title border-bottom">NEW</div>
                                <div class="list-group-item">
                                                                        <a class="notification notification-flush notification-unread" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <img class="rounded-circle" src="/assets/img/team/1-thumb.png" alt="" />
                                            </div>
                                        </div>

                                        <div class="notification-body">
                                            <p class="mb-1">web đang trong quá trình thử nghiệm .
Thanks</p>
                                            <span
                                                class="notification-time">10-07-2021</span>
                                        </div>
                                    </a>
                                                                        <a class="notification notification-flush notification-unread" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <img class="rounded-circle" src="/assets/img/team/1-thumb.png" alt="" />
                                            </div>
                                        </div>

                                        <div class="notification-body">
                                            <p class="mb-1">Chào mừng bạn đến với hệ thống</p>
                                            <span
                                                class="notification-time">10-07-2021</span>
                                         </div>
                                    </a>
                                                                    </div>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top"><a class="card-link d-block"
                                href="app/social/notifications.html">Xem tất cả</a>
                </div>
            </div>
        </li>





        <li class="nav-item dropdown">
            <a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle"
                        src="https://graph.facebook.com/<?=$user_fb;?>/picture?width=500&height=500&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662"
                        alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#"><span
                            class="fas fa-crown me-1"></span><span><?=$user_level_type;?></span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/profile/info">Trang cá nhân</a>
                    <a class="dropdown-item" href="/profile/history">Lịch sử hoạt động</a>
                    <a class="dropdown-item" href="/recharge/banking">Nạp tiền vào tài khoản</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/profile/logout">Đăng xuất</a>
                </div>
            </div>
        </li>
    </ul>
</nav>
<div class="content">
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                    class="toggle-line"></span></span>
        </button>
        <a class="navbar-brand me-1 me-sm-3" href="/">
            <div class="d-flex align-items-center"><img class="me-2" src="/assets/img/illustrations/falcon.png" alt=""
                    width="40" /><span class="font-sans-serif">TL</span>
            </div>
        </a>

        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
           
            </li>
            <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator"
                    href="/profile/history"><span class="fa fa-history" data-fa-transform="shrink-7"
                        style="font-size: 33px;"></span><span class="notification-indicator-number">5</span></a>
            </li>
          <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                    id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6"
                        style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification"
                    aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none">
                        <div class="card-header">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h6 class="card-header-title mb-0">Thông báo gần đây</h6>
                                </div>
                            </div>
                        </div>
                        <div class="scrollbar-overlay" style="max-height:19rem">
                            <div class="list-group list-group-flush fw-normal fs--1">
                                <div class="list-group-title border-bottom">NEW</div>
                                <div class="list-group-item">
                                                                        <a class="notification notification-flush notification-unread" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <img class="rounded-circle" src="/assets/img/team/1-thumb.png" alt="" />
                                            </div>
                                        </div>

                                        <div class="notification-body">
                                            <p class="mb-1">web đang trong quá trình thử nghiệm .
Thanks</p>
                                            <span
                                                class="notification-time">10-07-2021</span>
                                        </div>
                                    </a>
                                                                        <a class="notification notification-flush notification-unread" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <img class="rounded-circle" src="/assets/img/team/1-thumb.png" alt="" />
                                            </div>
                                        </div>

                                        <div class="notification-body">
                                            <p class="mb-1">Chào mừng bạn đến với hệ thống</p>
                                            <span
                                                class="notification-time">10-07-2021</span>
                                         </div>
                                    </a>
                                                                    </div>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top"><a class="card-link d-block"
                                href="app/social/notifications.html">Xem tất cả</a>
                    </div>
                </div>
            </li>



            <li class="nav-item dropdown">
                <a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-xl">
                        <img class="rounded-circle"
                            src="https://graph.facebook.com/<?=$user_fb;?>/picture?width=500&height=500&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662"
                            alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                        <a class="dropdown-item fw-bold text-warning" href="#"><span
                                class="fas fa-crown me-1"></span><span><?=$user_level_type;?></span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/profile/info">Trang cá nhân</a>
                        <a class="dropdown-item" href="/profile/history">Lịch sử hoạt động</a>
                        <a class="dropdown-item" href="/recharge/banking">Nạp tiền vào tài khoản</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/profile/logout">Đăng xuất</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;"
        data-move-target="#navbarVerticalNav" data-navbar-top="combo">

        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                    class="toggle-line"></span></span>
        </button>

        <a class="navbar-brand me-1 me-sm-3" href="/">
            <div class="d-flex align-items-center"><img class="me-2" src="/assets/img/illustrations/falcon.png" alt=""
                    width="40" /><span class="font-sans-serif">LGT</span>
            </div>
        </a>
        <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">

                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboard">Cá nhân</a>
                    <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboard">
                        <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium"
                                href="/profile/info">Trang cá nhân</a><a class="dropdown-item link-600 fw-medium"
                                href="/history">Lịch sử hoạt
                                động</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboard">Mua dịch
                        vụ</a>
                    <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboard">

                        <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium"
                                href="/service/facebook/like-post/order">Tăng like bài
                                viết</a><a class="dropdown-item link-600 fw-medium"
                                href="/service/facebook/like-page/order">Tăng like page</a><a
                                class="dropdown-item link-600 fw-medium" href="/service/facebook/comment/order">Tăng
                                bình luận
                            </a><a class="dropdown-item link-600 fw-medium" href="/service/facebook/share/order">Tăng
                                chia sẽ
                                bài viết</a><a class="dropdown-item link-600 fw-medium"
                                href="/service/facebook/follow/order">Tăng
                                người theo dõi</a><a class="dropdown-item link-600 fw-medium"
                                href="/service/facebook/eye-live/order">Tăng
                                mắt
                                livestream</a><a class="dropdown-item link-600 fw-medium" href="/service/view">Tăng lượt
                                xem video</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboard">Nạp Tiền</a>
                    <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboard">
                        <div class="bg-white dark__bg-1000 rounded-3 py-2">
                            <a class="dropdown-item link-600 fw-medium" href="/recharge/banking">Nạp tiền vào tài
                                khoản</a>
                           
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item"><span class="badge bg-primary"><?=number_format($user_point);?> vn₫</span> <span
                    id="status"></span>
            </li>
            <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator"
                    href="/profile/history"><span class="fa fa-history" data-fa-transform="shrink-7"
                        style="font-size: 33px;"></span><span class="notification-indicator-number">5</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator"
                    id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><span class="fa fa-users" data-fa-transform="shrink-6"
                        style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card"
                    aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none" style="max-width: 5rem">
                        <div class="card-header">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h6 class="card-header-title mb-0">Thành viên trực tuyến</h6>
                                </div>
                                <div class="col-auto"><span class="card-link fw-normal">Tổng số người đang
                                        online: 1 </span>
                                </div>
                            </div>
                        </div>
                        <div class="scrollbar-overlay" style="max-height:19rem;">
                            <div class="list-group list-group-flush fw-normal fs--1">
                                <div class="list-group-title border-bottom">Danh sách online</div>
                                <div class="list-group-item">
                                    <a class="notification notification-flush notification-read" href="#">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <img class="rounded-circle"
                                                    src="https://graph.facebook.com/<?=$user_fb;?>/picture?width=500&height=500&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1"><strong><?=$user_username;?></strong> đang ở bản điều khiển.
                                            </p>
                                            <span class="notification-time"><span class="me-2" role="img"
                                                    aria-label="Emoji"></span>IP:</span><?=$user_ip;?></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-xl">
                        <img class="rounded-circle"
                            src="https://graph.facebook.com/<?=$user_fb;?>/picture?width=500&height=500&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662"
                            alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                        <a class="dropdown-item fw-bold text-warning" href="#"><span
                                class="fas fa-crown me-1"></span><span>Thành Viên</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/profile/info">Trang cá nhân</a>
                        <a class="dropdown-item" href="/profile/history">Lịch sử hoạt động</a>
                        <a class="dropdown-item" href="/recharge/banking">Nạp tiền vào tài khoản</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/profile/logout">Đăng xuất</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <script>
    var navbarPosition = localStorage.getItem('navbarPosition');
    var navbarVertical = document.querySelector('.navbar-vertical');
    var navbarTopVertical = document.querySelector('.content .navbar-top');
    var navbarTop = document.querySelector('[data-layout] .navbar-top');
    var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
    if (navbarPosition === 'top') {
        navbarTop.removeAttribute('style');
        navbarTopVertical.remove(navbarTopVertical);
        navbarVertical.remove(navbarVertical);
        navbarTopCombo.remove(navbarTopCombo);
    } else if (navbarPosition === 'combo') {
        navbarVertical.removeAttribute('style');
        navbarTopCombo.removeAttribute('style');
        navbarTop.remove(navbarTop);
        navbarTopVertical.remove(navbarTopVertical);
    } else {
        navbarVertical.removeAttribute('style');
        navbarTopVertical.removeAttribute('style');
        navbarTop.remove(navbarTop);
        navbarTopCombo.remove(navbarTopCombo);
    }
    </script>