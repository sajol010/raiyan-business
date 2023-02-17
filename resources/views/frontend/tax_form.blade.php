@extends('frontend.layouts.app')
@section('content')
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="portfolio-info">
                        <h3 class="text-center fs-2">ইউনিয়ন পরিষদ</h3>
                        <div>
                            <form action="">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">ইমারতের নাম</label>
                                        <input type="text" name="building_name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">হোল্ডিং নং</label>
                                        <input type="text" name="holding_no" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">ইমারতের ধরণ</label>
                                        <input type="text" type="building_type" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">অর্থবছর</label>
                                        <input type="text" name="economic_year" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="">মালিকের নাম</label>
                                        <input type="text" name="owner" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="">মালিকের মোবাইল নং</label>
                                        <input type="text" name="owner_phone" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">মালিকের জাতীয় পরিচয়পত্র নং</label>
                                        <input type="text" name="owner_nid" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
