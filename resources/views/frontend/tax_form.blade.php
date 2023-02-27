@extends('frontend.layouts.app')
@section('content')
    <section id="tax-form" class="portfolio-details">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="portfolio-info bg-light">
                        <h3 class="text-center fs-2">ইউনিয়ন পরিষদ</h3>
                        <div>
                            <form action="">
                                <div class="row pb-4">
                                    <div class="col-md-12 text-center text-theme2">
                                        <h4 class="fw-bold">আপনার ট্যাক্স পরিশোধ করুন</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">সম্পদের ধরণ</label>
                                        <select name="product_type" id="taxType" class="form-control">
                                            <option value="" selected disabled>নির্বাচন করুন</option>
                                            @foreach ($taxTypes as $category => $taxes)
                                                <option value="" disabled class="bg-secondary text-white"> {{ $category }} </option>
                                                @foreach ($taxes as $taxType =>$tax)
                                                    <option value="{{ $taxType }}" data-amount="{{ $tax }}"> {{ $taxType }} </option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">পরিশোধযোগ্য ট্যাক্সের পরিমাণ</label>
                                        <input type="text" name="tax_amount" id="taxAmount" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">অর্থবছর</label>
                                        <input type="text" name="economic_year" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">হোল্ডিং নং</label>
                                        <input type="text" name="holding_no" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">ওয়ার্ড নং</label>
                                        <input type="text" name="ward" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">গ্রাম</label>
                                        <input type="text" name="village" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">মালিকের নাম</label>
                                        <input type="text" name="owner" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">মালিকের মোবাইল নং</label>
                                        <input type="text" name="owner_phone" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">মালিকের জাতীয় পরিচয়পত্র নং</label>
                                        <input type="text" name="owner_nid" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">মালিকের পেশা</label>
                                        <input type="text" name="owner_profession" class="form-control">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-theme" id="sslczPayBtn" {{-- token="if you have any token validation" --}}
                                    postdata="your javascript arrays or objects which requires in backend" order="2193hd38"
                                    endpoint="{{ url('/pay-via-ajax') }}">
                                    পেমেন্ট করুন
                                </button>
                                <button type="button" class="btn btn-theme" data-bs-toggle="modal"
                                    data-bs-target="#myModal"> ট্যাক্স পরিশোধিত আছে </button>

                                <!-- The Modal -->
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content modal-theme">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">পেমেন্ট পদ্ধতি নির্বাচন করুন</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">

                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-theme">পরবর্তী</button>
                                                <button type="button" class="btn btn-theme2" data-bs-dismiss="modal">বাদ
                                                    দিন</button>
                                            </div>
                                        </div>
                                    </div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
        var obj = {};
        obj.name = "Sajol";
        obj.phone = "01400213733";
        obj.email = "sajolmahmud010@gmail.com";
        obj.nid = "asdhhdasgh";
        obj.address_line1 = "";
        obj.product_name = 'tax_'+(obj.nid);
        obj.product_category = 'tax';
        obj.amount = 1200;
        $('#sslczPayBtn').prop('postdata', JSON.stringify(obj));

        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                @if (!env('SSLCZ_TESTMODE'))
                    script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36)
                        .substring(7); // USE THIS FOR LIVE
                @else
                    script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36)
                        .substring(7); // USE THIS FOR SANDBOX
                @endif
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>

    <script>
        $(document).ready(function() {
            // On tax type change
            $('#taxType').change(function() {
                // Get the selected tax amount
                var taxAmount = $(this).find(':selected').data('amount');
                // Set the tax amount input field value
                $('#taxAmount').val(taxAmount);
            });
        });
    </script>
@endpush
