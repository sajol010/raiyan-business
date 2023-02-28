@extends('frontend.layouts.app')
@section('content')
    <section id="tax-form" class="portfolio-details">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="portfolio-info bg-light">
                        <h3 class="text-center fs-2"> ০৭ নং পলাশী ইউনিয়ন পরিষদ</h3>
                        <div>
                            <form method="POST" action="">
                                @csrf
                                <div class="row pb-5">
                                    <div class="col-md-8 text-theme2">
                                        <h4 class="fw-bold">&#10065; আপনার ট্যাক্স পরিশোধ করুন</h4>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <button type="button" class="btn btn-theme" data-bs-toggle="modal"
                                            data-bs-target="#myModal"> ট্যাক্স পরিশোধিত আছে </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">সম্পদের ধরণ</label>
                                        <select name="product_type" id="taxType" class="form-control">
                                            <option value="" selected disabled>নির্বাচন করুন</option>
                                            @foreach ($taxTypes as $category => $taxes)
                                                <option value="" disabled class="bg-secondary text-white">
                                                    {{ $category }} </option>
                                                @foreach ($taxes as $taxType => $tax)
                                                    <option value="{{ $taxType }}" data-amount="{{ $tax }}">
                                                        {{ $taxType }} </option>
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
                            </form>
                        </div>

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content modal-theme">
                                    <form method="POST" action="{{ route('tax.verify') }}">
                                        @csrf
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title"> সনদের জন্য নিচের ঘরগুলো পূরণ করুন </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body">

                                            <div class="row">
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
                                                    <label for="" class="ps-1">জাতীয় পরিচয়পত্র
                                                        নং</label>
                                                    <input type="text" name="owner_nid" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-theme">পরবর্তী</button>
                                            <button type="button" class="btn btn-theme2" data-bs-dismiss="modal">বাদ
                                                দিন</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
        obj.product_name = 'tax_' + (obj.nid);
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


        // Convert English Numbers to Bangla and load them according the select field choice
        var numbers = {
            0: '০',
            1: '১',
            2: '২',
            3: '৩',
            4: '৪',
            5: '৫',
            6: '৬',
            7: '৭',
            8: '৮',
            9: '৯'
        };

        function replaceNumbers(input) {
            var output = [];
            for (var i = 0; i < input.length; ++i) {
                if (numbers.hasOwnProperty(input[i])) {
                    output.push(numbers[input[i]]);
                } else {
                    output.push(input[i]);
                }
            }
            return output.join('');
        }

        // On tax type change
        $('#taxType').change(function() {
            // Get the selected tax amount
            var taxAmount = $(this).find(':selected').data('amount');
            // Replace Bengali numbers in the tax amount
            taxAmount = replaceNumbers(taxAmount);
            // Set the tax amount input field value
            $('#taxAmount').val(taxAmount);
        });
    </script>
@endpush
