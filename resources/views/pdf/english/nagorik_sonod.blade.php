<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <section>
        <div class="container-fluid">
            <div class="b_border">
                <div class="row b_topBar">
                    <!-- bongobondhu logo -->
                    <div class="col-3">
                        <img src="{{ asset('assets/frontend/img/2.png') }}" alt="mujib" class="img-fluid" width="150px">
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
                            <img src="{{ asset('assets/frontend/img/1.png') }}" alt="bangladesh" class="img-fluid bd" width="100px">
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
                                <span>: ফারুক</span>
                            </div>

                            <div>
                                <span>Mother's Name </span>
                                <span>: মোছাঃ ফাতেমা বেগম</span>
                            </div>

                            <div>
                                <span>Father's/Husband's Name </span>
                                <span>: মোঃ নুরুজ্জামান আলী</span>
                            </div>

                            <div>
                                <span>NID No. </span>
                                <span>: ৫৫৪৯৩৪৯৭৫০</span>
                            </div>
                        </div>

                        <p class="mb-2 mt-3">Present Address</p>

                        <div class="b_leftGap">
                            <div>
                                <span>
                                    Holding No: ০২-১১১১
                                </span>

                                <span>
                                    Village: কদমপুর
                                </span>
                            </div>

                            <div>
                                <span>Ward No: ০২</span>

                                <span>Union হাজিগঞ্জ</span>
                            </div>

                            <div>
                                <span>Upazilla: হাজিগঞ্জ</span>

                                <span>Zilla: চাঁদপুর</span>
                            </div>
                        </div>

                        <p class="mb-2 mt-3">Permanent Address</p>

                        <div class="b_leftGap">
                            <div>
                                <span>
                                    Holding No: ০২-১১১১
                                </span>

                                <span>
                                    Village: কদমপুর
                                </span>
                            </div>

                            <div>
                                <span>Ward No: ০২</span>

                                <span>Union: হাজিগঞ্জ</span>
                            </div>

                            <div>
                                <span>Upazilla: হাজিগঞ্জ</span>

                                <span>Zilla: চাঁদপুর</span>
                            </div>
                        </div>

                        <p class="my-2">He is a permanent resident of Ward No. 02 of the union, according to my knowledge
                            Farooq Ahmed is the same person known by both names. I wish him all the best and prosperity.</p>
                    </div>
                </div>

                <div class="row pt-5">
                    <div class="col-5 ms-auto">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/signature/7_polashpur.png') }}" alt="" width="20%">
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
