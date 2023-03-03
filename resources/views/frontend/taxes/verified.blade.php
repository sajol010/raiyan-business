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
                        মোট ট্যাক্স : {{ $total_tax }}
                        মোট বকেয়া : {{ $total_tax - $total_paid }}
                        <a href="#" class="btn-get-started text-white">
{{--                            <div class="icon-box choose-certificate">--}}
{{--                                <div class="icon fw-bold"><i class="bi bi-arrow-left-circle-fill"></i></div>--}}
{{--                                <h2 class="title fs-4">ট্যাক্স ফর্মে ফিরে যান</h2>--}}
{{--                            </div>--}}

                            <button type="button" class="btn btn-theme" id="sslczPayBtn" {{-- token="if you have any token validation" --}}
                            postdata="your javascript arrays or objects which requires in backend" order="{{ time() }}"
                                    endpoint="{{ url('/pay-via-ajax') }}">
                                পেমেন্ট করুন
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        @else

        <section id="featured-services" class="featured-services pb-4">
            <div class="container">
                <div class="text-center text-theme2 py-4">
                    <h4 class="fw-bold fs-2"> সনদের জন্য তথ্য প্রদান সম্পন্ন হয়েছে </h4>
                    <h5 class="">আপনার সনদ আবেদনটি অনুমোদিত হলে আপনাকে মোবাইল মেসেজের মাধ্যমে জানানো হবে। অতঃপর সনদ ডাউনলোডের জন্য আপনার জাতীয় পরিচয়পত্র নং এবং রেজিষ্ট্রেশনের সময় ব্যবহৃত মোবাইল নং দিন। এরপর আপনার মোবাইলে একটি ওটিপি কোড যাবে। সেই কোডটির মাধ্যমে সনদ ডাউনলোড করতে পারবেন </h5>
                </div>
            </div>
        </section>
         @endif
        <!-- End Choose Medium Section -->
    </div>
@endsection
@push('js_script')
    <script>
        let obj = {};
        obj.amount = "{{ $total_tax - $total_paid }}";
        obj.name = "{{ $tax_payer->first_name }}";
        obj.phone = "{{ $tax_payer->phone }}";
        obj.nid = "{{ $tax_payer->nid }}";
        obj.amount = "{{ $total_tax - $total_paid }}";
        obj.customer_id = "{{ $total_tax - $total_paid }}";
        obj.holding_no = "{{ $holding_no }}";
        obj.ward_no = "{{ $ward }}";
        obj.village = "{{ $village }}";
        obj.nid = "{{ $nid }}";
        obj.from = "after_tax";
        obj.product_name = "{{ $tax->product_name }}";
        obj.product_category = "tax";

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
