@extends('frontend.layouts.app')
@section('content')
    <section id="tax-form" class="portfolio-details">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="portfolio-info bg-light">
                        <h3 class="text-center fs-2">নাগরিক সনদ</h3>
                        <div>
                            <form id="certificateForm" method="POST" action="{{ route('certificate.store') }}">
                                @csrf
                                <div class="row pb-4">
                                    <div class="col-md-12 text-center text-theme2">
                                        <h4 class="fw-bold">সনদের কাঙ্খিত ভাষা অনুযায়ী আপনার তথ্য দিন</h4>
                                    </div>
                                </div>
                                <nav>
                                    <div class="nav nav-tabs certificate-form" id="nav-tab" role="tablist">
                                        <button class="nav-link active col-md-6 fw-bold" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab"
                                            aria-controls="nav-home" aria-selected="true">বাংলা</button>
                                        <button class="nav-link col-md-6 fw-bold" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">ইংলিশ</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active pt-4" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab" tabindex="0">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> নাম </label>
                                                <input type="text" name="b_name" id="" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> লিঙ্গ </label>
                                                <input type="text" name="b_gender" id="" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> মাতার নাম </label>
                                                <input type="text" name="b_mother" id="" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> পিতার নাম </label>
                                                <input type="text" name="b_father" id="" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> স্বামীর নাম </label>
                                                <input type="text" name="b_husband" id="" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> জাতীয় পরিচয়পত্র নং </label>
                                                <input type="text" name="b_nid" id="" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> জন্মতারিখ </label>
                                                <input type="date" name="b_birth_day" id="" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> জন্মসনদ নং </label>
                                                <input type="text" name="b_birth_no" id="" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> মোবাইল নং </label>
                                                <input type="text" name="b_phone" id="" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> পেশা </label>
                                                <input type="text" name="b_profession" id="" class="form-control">
                                            </div>

                                            <h5 class="text-muted fw-bold"> বর্তমান ঠিকানা </h5>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> হোল্ডিং নং </label>
                                                <input type="text" name="b_present_holding" id="" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> ওয়ার্ড নং </label>
                                                <input type="text" name="b_present_ward" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> গ্রাম </label>
                                                <input type="text" name="b_present_village" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> ইউনিয়ন </label>
                                                <input type="text" name="b_present_union" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> উপজেলা </label>
                                                <input type="text" name="b_present_upazilla" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> জেলা </label>
                                                <input type="text" name="b_present_zilla" id=""
                                                    class="form-control">
                                            </div>

                                            <h5 class="text-muted fw-bold"> স্থায়ী ঠিকানা </h5>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> হোল্ডিং নং </label>
                                                <input type="text" name="b_permanent_holding" id="" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> ওয়ার্ড নং </label>
                                                <input type="text" name="b_permanent_ward" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> গ্রাম </label>
                                                <input type="text" name="b_permanent_village" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> ইউনিয়ন </label>
                                                <input type="text" name="b_permanent_union" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> উপজেলা </label>
                                                <input type="text" name="b_permanent_upazilla" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> জেলা </label>
                                                <input type="text" name="b_permanent_zilla" id=""
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade pt-4" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab" tabindex="0">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Name </label>
                                                <input type="text" name="e_name" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Gender </label>
                                                <input type="text" name="e_gender" id="" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Mother's Name </label>
                                                <input type="text" name="e_mother" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Father's Name </label>
                                                <input type="text" name="e_father" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Husband's Name </label>
                                                <input type="text" name="e_husband" id="" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> NID No. </label>
                                                <input type="text" name="e_nid" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Date of Birth </label>
                                                <input type="date" name="e_birth_day" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Birth Certificate No. </label>
                                                <input type="text" name="e_birth_no" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Mobile No. </label>
                                                <input type="text" name="e_phone" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Profession </label>
                                                <input type="text" name="e_profession" id=""
                                                    class="form-control">
                                            </div>

                                            <h5 class="text-muted fw-bold"> Present Address </h5>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Holding No. </label>
                                                <input type="text" name="e_present_holding" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Ward No. </label>
                                                <input type="text" name="e_present_ward" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Village </label>
                                                <input type="text" name="e_present_village" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Union </label>
                                                <input type="text" name="e_present_union" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Upazilla </label>
                                                <input type="text" name="e_present_upazilla" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Zilla </label>
                                                <input type="text" name="e_present_zilla" id=""
                                                    class="form-control">
                                            </div>

                                            <h5 class="text-muted fw-bold"> Permanent Address </h5>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Holding No. </label>
                                                <input type="text" name="e_permanent_holding" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Ward No. </label>
                                                <input type="text" name="e_permanent_ward" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Village </label>
                                                <input type="text" name="e_permanent_village" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Union </label>
                                                <input type="text" name="e_permanent_union" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Upazilla </label>
                                                <input type="text" name="e_permanent_upazilla" id=""
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="" class="ps-1"> Zilla </label>
                                                <input type="text" name="e_permanent_zilla" id=""
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 pb-3">
                                    <label for="" class="ps-1"> সনদের ভাষা </label>
                                    <div class="ps-1 pt-1">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="language"
                                                id="inlineRadio1" value="1" checked>
                                            <label class="form-check-label" for="inlineRadio1">বাংলা</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="language"
                                                id="inlineRadio2" value="2">
                                            <label class="form-check-label" for="inlineRadio2">ইংলিশ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="language"
                                                id="inlineRadio2" value="3">
                                            <label class="form-check-label" for="inlineRadio2">উভয়ই</label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="medium" value="{{ $medium??2 }}">
                                <input type="hidden" name="product_category" class="form-control" value="certificate">
                                <input type="hidden" name="product_name" class="form-control" value="certificate_{{ time()}}">
                                @if($medium == 1)
                                <button type="submit" class="btn btn-theme"> সাবমিট করুন </button>
                                @else
                                <button type="button" class="btn btn-theme" id="sslczPayBtn" {{-- token="if you have any token validation" --}}
                                postdata="your javascript arrays or objects which requires in backend" order="{{ time() }}"
                                        endpoint="{{ url('/certificate/pay-via-ajax') }}">
                                    পেমেন্ট করুন
                                </button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js_script')
    <script>

        $('#certificateForm input').on("change", function (){
            var obj = {};
            let formData = $('#certificateForm').serializeArray();
            formData.forEach(function (data){
                // if(data.name == 'amount')
                //     obj[data.name] = parseFloat(replaceToEnglishNumbers(data.value));
                // else
                obj[data.name] = data.value
            });
            console.log(obj)
            $('#sslczPayBtn').prop('postdata', JSON.stringify(obj));
        });

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
@endpush
