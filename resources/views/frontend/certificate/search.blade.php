@extends('frontend.layouts.app')
@section('content')
    <section id="tax-form" class="portfolio-details">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="portfolio-info bg-light">
                        <h3 class="text-center fs-2">সনদ ডাউনলোড</h3>
                        <div>
                            <form action="">
                                <div class="row pb-4">
                                    <div class="col-md-12 text-center text-theme2">
                                        <h5 class="fw-bold">সনদ ডাউনলোডের জন্য আপনার জাতীয় পরিচয়পত্র নং এবং রেজিষ্ট্রেশনের সময় ব্যবহৃত মোবাইল নং দিন। এরপর আপনার মোবাইলে একটি ওটিপি কোড যাবে। সেই কোডটির মাধ্যমে সনদ ডাউনলোড করতে পারবেন </h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1"> জাতীয় পরিচয়পত্র নং </label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1"> মোবাইল নং </label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-theme"> ওটিপি পাঠান </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js_script')
    
@endpush
