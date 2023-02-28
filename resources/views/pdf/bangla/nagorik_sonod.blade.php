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
                        <p class="fz-20">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</p>
                        <p class="fz-24">৭ নং পলাশপুর ইউনিয়ন পরিষদ</p>
                        {{-- <p>হাজিগঞ্জ, চাঁদপুর - ৩৬১০</p> --}}
                    </div>

                    <!-- bangladesh logo -->
                    <div class="col-3">
                        <div class="text-end">
                            <img src="{{ asset('assets/frontend/img/1.png') }}" alt="bangladesh" class="img-fluid bd" width="100px">
                            <p class="fz-15 pt-3">তারিখঃ ২৫-০৭-২০২২</p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center b_topBottom">

                    <!-- prottoyon potro no  -->
                    <div class="col-12 text-center">
                        <div>
                            <div class="row">
                                <div class="col-6 mx-auto">
                                    <span class="fs-3 fw-bold">নাগরিক সনদ</span>
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
                        <p class="mb-2">এই মর্মে প্রত্যয়ন করা যাইতেছে যে,</p>

                        <div class="b_leftGap b_gapInfo">
                            <div>
                                <span>নাম </span>
                                <span>: ফারুক</span>
                            </div>

                            <div>
                                <span>মাতার নাম </span>
                                <span>: মোছাঃ ফাতেমা বেগম</span>
                            </div>

                            <div>
                                <span>পিতা/স্বামীর নাম </span>
                                <span>: মোঃ নুরুজ্জামান আলী</span>
                            </div>

                            <div>
                                <span>ন্যাশনাল আইডি নং </span>
                                <span>: ৫৫৪৯৩৪৯৭৫০</span>
                            </div>
                        </div>

                        <p class="mb-2 mt-3">বর্তমান ঠিকানা</p>

                        <div class="b_leftGap">
                            <div>
                                <span>
                                    হোল্ডিং নং: ০২-১১১১
                                </span>

                                <span>
                                    গ্রাম: কদমপুর
                                </span>
                            </div>

                            <div>
                                <span>ওয়ার্ড নং: ০২</span>

                                <span>ইউনিয়ন: হাজিগঞ্জ</span>
                            </div>

                            <div>
                                <span>উপজেলা: হাজিগঞ্জ</span>

                                <span>জেলা: চাঁদপুর</span>
                            </div>
                        </div>

                        <p class="mb-2 mt-3">স্থায়ী ঠিকানা</p>

                        <div class="b_leftGap">
                            <div>
                                <span>
                                    হোল্ডিং নং: ০২-১১১১
                                </span>

                                <span>
                                    গ্রাম: কদমপুর
                                </span>
                            </div>

                            <div>
                                <span>ওয়ার্ড নং: ০২</span>

                                <span>ইউনিয়ন: হাজিগঞ্জ</span>
                            </div>

                            <div>
                                <span>উপজেলা: হাজিগঞ্জ</span>

                                <span>জেলা: চাঁদপুর</span>
                            </div>
                        </div>

                        <p class="my-2">তিনি অত্র ইউনিয়নের অন্তগত ০২ নং ওয়ার্ডের স্থায়ী বাসিন্দা, আমার জানামতে মোঃ
                            ফারুক আহমেদ প্রকাশে ফারুক একই ব্যাক্তি উভয় নামে পরিচিত। আমি তার সর্বাঙ্গীণ মঙ্গোল ও উন্নতি কামনা করি।</p>
                    </div>
                </div>

                <div class="row pt-5">
                    <div class="col-5 ms-auto">
                        <div class="text-center">
                            <img src="{{ asset('assets/frontend/img/signature/7_polashpur.png') }}" alt="" width="20%">
                            <div class="b_topLink"></div>
                            <p>আলহাজ্ব মোঃ সফিকুল ইসলাম</p>
                            <p>চেয়ারম্যান</p>
                            <p>৭ নং পলাশপুর ইউনিয়ন পরিষদ</p>
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
