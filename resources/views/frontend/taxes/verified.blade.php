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

        @if($total_paid < $total_tax)
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
        @else

        <section id="featured-services" class="featured-services pb-4">
            <div class="container">
                <div class="text-center text-theme2 py-4">
                    <h4 class="fw-bold fs-2"> সনদ নির্বাচন করুন </h4>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-lg-3 col-md-3">
                        <a href="{{ route('certificate.form') }}" class="btn-get-started text-white"  data-bs-toggle="modal"
                        data-bs-target="#myModal">
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
         @endif
        <!-- End Choose Medium Section -->

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-theme">
                    <form method="POST" action="{{ route('tax.verify') }}">
                        @csrf
                        <!-- Modal Header -->
                        <div class="modal-header">
                            {{-- <h4 class="modal-title"> সনদের জন্য নিচের ঘরগুলো পূরণ করুন </h4> --}}
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body featured-services" id="featured-services">
                            <div class="row text-center p-3">
                                <div class="col-lg-6 col-md-6">
                                    <a href="{{ route('certificate.form') }}" class="btn-get-started text-white">
                                        <div class="icon-box choose-certificate">
                                            <div class="icon fw-bold"><i class="bi bi-person"></i></div>
                                            <h2 class="title fs-4">উদ্যোক্তার মাধ্যমে</h2>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <a href="{{ route('certificate.form') }}" class="btn-get-started text-white">
                                        <div class="icon-box choose-certificate">
                                            <div class="icon fw-bold"><i class="bi bi-globe"></i></div>
                                            <h2 class="title fs-4">অনলাইনের মাধ্যমে</h2>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            {{-- <button type="submit" class="btn btn-theme">পরবর্তী</button>
                            <button type="button" class="btn btn-theme2" data-bs-dismiss="modal">বাদ
                                দিন</button> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
