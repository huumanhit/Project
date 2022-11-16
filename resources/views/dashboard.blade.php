    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <x-app-layout>
        <x-slot name="header">
        </x-slot>
        <div class="section">
            <div class="page-one-dashboard">
                <div class="tuyen-dung">
                    <a class="nhatuyendung" href="{{URL::to('/tuyendung')}}">NHÀ TUYỂN DỤNG</a>
                </div>
            </div>
            <div class="page-two-das">
                <div class="form-search">
                    <p class="title-form">TÌM KIẾM VIỆC LÀM</p>
                    <hr>
                    <form action="" method="get" class="form">
                        <div class="input-form">
                            <label>Ngành nghề</label>
                            <input type="text">
                        </div>
                        <div class="input-form">
                            <label>Địa Điểm</label>
                            <select>
                                <option>Hà Nội</option>
                                <option>Đà Nẵng</option>
                                <option>TP Hồ Chí Minh</option>
                            </select>
                        </div>
                        <div class="button-form">
                            <div class="icon">
                                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <div class="page-3-dashboard">
            <p class="title-p2">CÔNG VIỆC NỔI BẬT</p>
            <div class="feature-job">
                <div class="feature-job-1">
                    <img class="img-feature" src="{{ asset('img/it.jpg') }}" alt="it">
                    <div class="content-job-feature">
                        <p>KỸ SƯ PHẦN MỀM</p>
                        <div class="location">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                            <p>Hà Nội</p>
                            <p class="time">FULL TIME</p>
                        </div>
                        <p>Tăng lương hàng năm - Review thưởng 2 lần/ năm, thử việc 100% lương. Có cơ hội làm việc đào tạo tại nước ngoài. Được chăm sóc sức khỏe toàn diện bằng gói bảo hiểm sức khỏe của Bảo hiểm Bảo Việt.</p>
                    </div>

                </div>
                <div class="feature-job-1">
                    <img class="img-feature" src="{{ asset('img/cs.jpg') }}" alt="it">
                    <div class="content-job-feature">
                        <p>CHĂM SÓC KHÁCH HÀNG</p>
                        <div class="location">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                            <p>Đà Nẵng</p>
                            <p class="time">FULL TIME</p>
                        </div>
                        <p>Mức thu nhập hấp dẫn, cạnh tranh thị trường. Chế độ BHXH , BHYT , BHTN đầy đủ. Tháng lương 13. Thưởng theo quý/năm , lễ/Tết.</p>
                    </div>

                </div>
                <div class="feature-job-1">
                    <img class="img-feature" src="{{ asset('img/gd.jpg') }}" alt="it">
                    <div class="content-job-feature">
                        <p>THIẾT KẾ ĐỒ HỌA</p>
                        <div class="location">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                            <p >TP.Hồ Chí Minh</p>
                            <p class="time-part">PARTIME</p>
                        </div>
                        <p>Thưởng dựa trên hiệu quả hoạt động của công ty. Lương cạnh tranh thương lượng theo từng cấp độ. Máy tính xách tay, màn hình được cung cấp.</p>
                    </div>

                </div>
            </div>

        </div>
    </x-app-layout>