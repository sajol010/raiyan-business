@extends('frontend.layouts.app')
@section('content')
    <!-- ======= Choose Medium Section ======= -->
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-10">
                <div class="portfolio-info mt-5">
                    <h1 class="text-center fw-bold"> ০৭ নং পলাশী ইউনিয়ন পরিষদ</h1>
                </div>
            </div>
        </div>

        <section id="featured-services" class="featured-services pb-4">
            <div class="container">
                <div class="text-center text-theme2 py-4">
                    <h4 class="fw-bold fs-2"> আপনার বকেয়া ট্যাক্স পরিশোধ করুন </h4>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-lg-4 col-md-4">
                        <a href="{{ route('tax.form') }}" class="btn-get-started text-white">
                            <div class="icon-box choose-certificate">
                                <div class="icon fw-bold"><i class="bi bi-arrow-left-circle-fill"></i></div>
                                <h2 class="title fs-4">ট্যাক্স ফর্মে ফিরে যান</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="featured-services" class="featured-services pb-4">
            <div class="container">
                <div class="text-center text-theme2 py-4">
                    <h4 class="fw-bold fs-2"> সনদ নির্বাচন করুন </h4>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-lg-3 col-md-3">
                        <a href="" class="btn-get-started text-white">
                            <div class="icon-box choose-certificate">
                                <div class="icon"><i class="bi bi-file-text"></i></div>
                                <h2 class="title fs-4">নাগরিক সনদ</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href="" class="btn-get-started text-white">
                            <div class="icon-box choose-certificate">
                                <div class="icon"><i class="bi bi-file-text"></i></div>
                                <h2 class="title fs-4">চারিত্রিক সনদ</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href="" class="btn-get-started text-white">
                            <div class="icon-box choose-certificate">
                                <div class="icon"><i class="bi bi-file-text"></i></div>
                                <h2 class="title fs-4">মৃত্যু সনদ</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href="" class="btn-get-started text-white">
                            <div class="icon-box choose-certificate">
                                <div class="icon"><i class="bi bi-file-text"></i></div>
                                <h2 class="title fs-4">ভূমিহীন সনদ</h2>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row justify-content-center text-center pt-4">
                    <div class="col-lg-3 col-md-3">
                        <a href="" class="btn-get-started text-white">
                            <div class="icon-box choose-certificate">
                                <div class="icon"><i class="bi bi-file-text"></i></div>
                                <h2 class="title fs-4">একই নামের প্রত্যয়ন সনদ</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href="" class="btn-get-started text-white">
                            <div class="icon-box choose-certificate">
                                <div class="icon"><i class="bi bi-file-text"></i></div>
                                <h2 class="title fs-4">বার্ষিক আয়ের প্রত্যয়ন সনদ</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href="" class="btn-get-started text-white">
                            <div class="icon-box choose-certificate">
                                <div class="icon"><i class="bi bi-file-text"></i></div>
                                <h2 class="title fs-4">অবিবাহিত সনদ</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href="" class="btn-get-started text-white">
                            <div class="icon-box choose-certificate">
                                <div class="icon"><i class="bi bi-file-text"></i></div>
                                <h2 class="title fs-4">পুনঃবিবাহ না হওয়া সনদ</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Choose Medium Section -->
    </div>
@endsection
