@extends('frontend.layouts.app')
@section('content')
    <section id="tax-form" class="portfolio-details">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="portfolio-info bg-light">
                        <h3 class="text-center fs-2"> ০৭ নং পলাশী ইউনিয়ন পরিষদ</h3>
                        <div>
                            <form id="taxFormReg" method="POST" action="">
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
                                        <select name="product_type" id="taxType" class="form-control" onchange="changed()">
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
                                        <input type="text" name="amount" id="taxAmount" class="form-control" onkeyup="changed()">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">অর্থবছর</label>
                                        <input type="text" name="paying_year" class="form-control" onkeyup="changed()">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">হোল্ডিং নং</label>
                                        <input type="text" name="holding_no" class="form-control" onkeyup="changed()">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">ওয়ার্ড নং</label>
                                        <input type="text" name="ward_no" class="form-control" onkeyup="changed()">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">গ্রাম</label>
                                        <input type="text" name="village" class="form-control" onkeyup="changed()">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">মালিকের নাম</label>
                                        <input type="text" name="name" class="form-control" onkeyup="changed()">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">মালিকের মোবাইল নং</label>
                                        <input type="text" name="phone" class="form-control" onkeyup="changed()">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">মালিকের জাতীয় পরিচয়পত্র নং</label>
                                        <input type="text" name="nid" class="form-control" onkeyup="changed()">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="" class="ps-1">মালিকের পেশা</label>
                                        <input type="text" name="profession" class="form-control" onkeyup="changed()">
                                    </div>
                                    <div class="form-group col-md-6" >
                                        <input type="text" name="product_category" class="form-control" value="tax" style="display: none">
                                        <input type="text" name="product_name" class="form-control" value="tax_{{ time()}}" style="display: none">
                                        <input type="text" name="total_tax" id="totalTaxAmount" class="form-control" value="tax_{{ time()}}" style="display: none">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-theme" id="sslczPayBtn" {{-- token="if you have any token validation" --}}
                                    postdata="your javascript arrays or objects which requires in backend" order="{{ time() }}"
                                    endpoint="{{ url('/pay-via-ajax') }}">
                                    পেমেন্ট করুন
                                </button>

                                <!-- The Modal -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content modal-theme">
                        <form method="GET" action="{{ route('tax.verify') }}">
                            @csrf
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title"> সনদের জন্য নিচের ঘরগুলো পূরণ করুন </h4>
                                <button type="button" class="btn-close"
                                        data-bs-dismiss="modal"></button>
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
                                        <input type="text" name="nid" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-theme">পরবর্তী</button>
                                <button type="button" class="btn btn-theme2"
                                        data-bs-dismiss="modal">বাদ
                                    দিন</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js_script')
    <script>
        function changed(){
            var obj = {};
            let formData = $('#taxFormReg').serializeArray();
            formData.forEach(function (data){
                if(data.name == 'amount')
                    obj[data.name] = parseFloat(replaceToEnglishNumbers(data.value));
                else
                    obj[data.name] = data.value
            });
            console.log(obj)
            $('#sslczPayBtn').prop('postdata', JSON.stringify(obj));
        }

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
        var englishNumbers = {
            '০': 0,
            '১': 1,
            '২': 2,
            '৩': 3,
            '৪': 4,
            '৫': 5,
            '৬': 6,
            '৭': 7,
            '৮': 8,
            '৯': 9
        };

        function replaceToEnglishNumbers(input) {
            var output = [];
            for (var i = 0; i < input.length; ++i) {
                if (englishNumbers.hasOwnProperty(input[i])) {
                    output.push(englishNumbers[input[i]]);
                } else {
                    output.push(input[i]);
                }
            }
            return output.join('');
        }

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
            $('#totalTaxAmount').val(taxAmount);
            taxAmount = replaceNumbers(taxAmount);
            // Set the tax amount input field value
            $('#taxAmount').val(taxAmount);
        });


        @php if (\Session::get('error')){ @endphp
        Swal.fire({
            title: 'Error!',
            text: "{{Session::get('error')}}",
            icon: 'error',
            confirmButtonText: 'OK'
        })
        @php } @endphp
    </script>
@endpush
