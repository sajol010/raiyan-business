<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <style>
        .b_border {
            border: 20px solid transparent;
            border-image-source: url(../img/border.png);
            border-image-slice: 10%;
            border-image-repeat: repeat;
            padding: 15px;
        }

        .b_border {
            font-family: 'SolaimanLipi';
        }

        .b_border p {
            margin-bottom: 0;
        }

        .b_border .fz-15 {
            font-size: 15px;
        }

        .b_border .fz-20 {
            font-size: 20px;
        }

        .b_border .fz-24 {
            font-size: 24px;
        }

        .b_topBottom .b_number1 {
            font-size: 0;
        }

        .b_topBottom .b_number1 span {
            border: 1.5px solid #888;
            border-left: none;
            padding: 4px;
            font-size: 16px;
        }

        .b_topBottom .b_number1 span:first-child {
            border-left: 1.5px solid #888;
        }

        .b_topBottom img {
            width: 110px;
            height: 120px;
            object-fit: cover;
            border-radius: 5px;
        }

        .b_leftGap>div span:first-child {
            display: inline-block;
            width: 200px;
        }

        .b_gapInfo>div {
            margin-bottom: 8px;
        }

        .b_logoPosition {
            position: absolute;
            z-index: -1;
            width: 400px;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
            opacity: 0.2;
        }

        .b_topLink {
            border-top: 2px solid #555;
            width: 200px;
            margin: 0 auto;
            padding-bottom: 10px;
        }

        .b_footerQr img {
            width: 60px;
        }
    </style>
</head>

<body>
    <section>
        <div class="container-fluid">
            <div class="b_border">
                <div class="row b_topBar">
                    <!-- bongobondhu logo -->
                    <div class="col-3">
                        <img src="{{ asset('assets/frontend/img/2.png') }}" alt="mujib" class="img-fluid"
                            width="150px">
                    </div>

                    <!-- title  -->
                    <div class="col-6 text-center">
                        <p class="fz-20">The People's Republic of Bangladesh</p>
                        <p class="fz-24">7 no. Palashpur Union Parishad</p>
                        {{-- <p>হাজিগঞ্জ, চাঁদপুর - ৩৬১০</p> --}}
                    </div>

                    <!-- bangladesh logo -->
                    <div class="col-3">
                        <div class="text-end">
                            <img src="{{ asset('assets/frontend/img/1.png') }}" alt="bangladesh" class="img-fluid bd"
                                width="100px">
                            <p class="fz-15 pt-3">Date: ২৫-০৭-২০২২</p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center b_topBottom">

                    <!-- prottoyon potro no  -->
                    <div class="col-12 text-center">
                        <div>
                            <div class="row">
                                <div class="col-6 mx-auto">
                                    <span class="fs-3 fw-bold">Citizenship Certificate</span>
                                </div>
                            </div>

                            {{-- <div class="b_number1 pt-3">
                                <span>একই নামের প্রত্যয়নপত্র নং.</span>
                                <span>২</span>
                                <span>০</span>
                                <span>২</span>
                                <span>২</span>
                                <span>১</span>
                                <span>৩</span>
                                <span>১</span>
                                <span>৪</span>
                                <span>৯</span>
                                <span>৩</span>
                                <span>৫</span>
                                <span>০</span>
                                <span>৭</span>
                                <span>০</span>
                                <span>০</span>
                                <span>০</span>
                                <span>০</span>
                                <span>০</span>
                                <span>৪</span>
                            </div> --}}
                        </div>
                    </div>

                    <!-- image -->
                    {{-- <div class="col-2 text-end">
                        <img src="./images/avatar.jpg" alt="avatar" class="img-fluid">
                    </div> --}}
                </div>

                <div class="row position-relative pt-3">
                    <div class="b_logoPosition">
                        <img src="{{ asset('assets/frontend/img/1.png') }}" alt="bangladesh" class="img-fluid">
                    </div>

                    <div class="col-12">
                        <p class="mb-2">This is to certify that,</p>

                        <div class="b_leftGap b_gapInfo">
                            <div>
                                <span>Name </span>
                                <span>: {{ $citizen->e_name }}</span>
                            </div>

                            <div>
                                <span>Mother's Name </span>
                                <span>: {{ $citizen->e_mother }}</span>
                            </div>

                            <div>
                                <span>Father's Name </span>
                                <span>: {{ $citizen->e_father }}</span>
                            </div>

                            @if ($citizen->b_husband != '')
                                <div>
                                    <span>Husband's Name </span>
                                    <span>: {{ $citizen->e_husband }}</span>
                                </div>
                            @endif

                            <div>
                                <span>NID No. </span>
                                <span>: {{ $citizen->e_nid }}</span>
                            </div>
                        </div>

                        <p class="mb-2 mt-3">Present Address</p>

                        <div class="b_leftGap">
                            <div>
                                <span>
                                    Holding No: {{ $citizen->e_present_holding }}
                                </span>

                                <span>
                                    Village: {{ $citizen->e_present_village }}
                                </span>
                            </div>

                            <div>
                                <span>Ward No: {{ $citizen->e_present_ward }}</span>

                                <span>Union {{ $citizen->e_present_union }}</span>
                            </div>

                            <div>
                                <span>Upazilla: {{ $citizen->e_present_upazilla }}</span>

                                <span>Zilla: {{ $citizen->e_present_zilla }}</span>
                            </div>
                        </div>

                        <p class="mb-2 mt-3">Permanent Address</p>

                        <div class="b_leftGap">
                            <div>
                                <span>
                                    Holding No: {{ $citizen->e_permanent_holding }}
                                </span>

                                <span>
                                    Village: {{ $citizen->e_permanent_village }}
                                </span>
                            </div>

                            <div>
                                <span>Ward No: {{ $citizen->e_permanent_ward }}</span>

                                <span>Union {{ $citizen->e_permanent_union }}</span>
                            </div>

                            <div>
                                <span>Upazilla: {{ $citizen->e_permanent_upazilla }}</span>

                                <span>Zilla: {{ $citizen->e_permanent_zilla }}</span>
                            </div>
                        </div>

                        <p class="my-2">He is a permanent resident of Ward No. {{ $citizen->e_permanent_ward }} of
                            the union. I wish him all the best and prosperity.</p>
                    </div>
                </div>

                <div class="row pt-5">
                    <div class="col-5 ms-auto">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/signature/7_polashpur.png') }}" alt=""
                                width="20%">
                            <div class="b_topLink"></div>
                            <p></p>
                            <p>Chairman</p>
                            <p>7 no. Palashpur Union Parishad</p>
                            {{-- <p>হাজিগঞ্জ, চাঁদপুর</p> --}}
                        </div>
                    </div>
                </div>

                {{-- <div class="row b_footerQr pt-5">
                    <div class="col-12 d-flex">
                        <div class="me-3">
                            <img src="./images/qr-code.png" alt="qr-code" class="img-fluid">
                        </div>
                        <div>
                            <p>
                                নির্দেশবলীঃ সার্টিফিকেট QR Code দিয়ে অথবা upsheba.com ওয়েবসাইট থেকে যাচাই করুন।
                                <br>
                                পরিষদের তথ্যঃ হাজিগঞ্জ সদর ইউনিয়ন পরিষদ, 01712369052, saalamin5496@gmail.com,
                                hajiganj.upsheba.com
                            </p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
</body>

</html>
