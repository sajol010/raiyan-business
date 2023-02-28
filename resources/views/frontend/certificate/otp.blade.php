@extends('frontend.layouts.app')
@section('content')
    <section id="tax-form" class="portfolio-details">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                    <div class="portfolio-info bg-light">
                        <h3 class="text-center fs-2">সনদ ডাউনলোড</h3>
                        <div>
                            <form method="POST" action="{{ route('certificate.download') }}">
                                @csrf
                                <div class="row pb-4">
                                    <div class="col-md-12 text-center text-theme2">
                                        <h5 class="fw-bold">আপনার মোবাইলে প্রেরিত ওটিপিটি এখানে বসান </h5>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="otp" id="" class="form-control" placeholder="ওটিপি">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-theme"> ডাউনলোড </button>
                                </div>
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
