@extends('frontend.layouts.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    @include('frontend.partials.hero')
    <!-- End Hero -->
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services pb-4">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('certificate.list') }}" class="btn-get-started text-white">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-building"></i></div>
                            <h2 class="title fs-2">ইউনিয়ন পরিষদ</h2>
                            <p class="description"></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                    <a href="#" class="btn-get-started text-white">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-house"></i></div>
                        <h2 class="title fs-2">পৌরসভা</h2>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/frontend/img/about.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>রাইয়ান বিজনেস ডেভেলপমেন্ট বাংলাদেশ লিমিটেড</h3>
                    <p class="fst-italic">
                        আমরা নিয়ে এসেছি ঘরে বসে নাগরিক সুবিধা ভোগের সুযোগ। সম্পূর্ণ অনলাইনের মাধ্যমে আবেদন করে আপনার
                        প্রয়োজনীয় সনদ উত্তোলন করতে পারবেন। আমাদের সেবাসমূহঃ
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> ইউনিয়ন পরিষদের সনদসমূহ </li>
                        <li><i class="bi bi-check-circle"></i> পৌরসভার সনদসমূহ </li>
                        <li><i class="bi bi-check-circle"></i> অনলাইন ট্যাক্স পরিশোধ </li>
                    </ul>
                    <p>
                        এছাড়াও আরো অনেক অনলাইন সুবিধা আমরা দিয়ে থাকি। বিস্তারিত জানতে আমাদের সাথে যোগাযোগ করুন।
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
@endsection
