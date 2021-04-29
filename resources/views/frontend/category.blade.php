@extends('frontend.layouts.app')

@section('content')
    {{ Breadcrumbs::render('category', $category) }}
    <link rel="stylesheet" href="{{ asset('frontend/css/category.css') }}">
    <section>
        <div class="container vrsg-categories">
            <div class="bg-qc row mb-3">
                <!-- <div class="col-md-6"><img style="border-radius: 6px" src="{{ asset('frontend/images/background/bg-qc-1.png') }}" alt=""></div>
                <div class="col-md-6"><img style="border-radius: 6px" src="{{ asset('frontend/images/background/bg-qc-2.png') }}" alt=""></div> -->
            </div>
            <div class="row">
                <div class="col-auto category--list__right section--default">
                    <div class="section-title_category">
                        <h2 class="category--list__right-title">{{ $category->name }}</h2>
                    </div>
                    <div class="row mt-4">
                        <div class="col-xl-12 cart-category">
                            @if($category->slug == config('common.parents.register_find_tutor'))
                                @include('frontend.includes.page.register_find_tutor')
                            @endif
                            @if($category->slug == config('common.parents.tutor'))
                                @include('frontend.includes.page.tutor')
                            @endif
                            @if($category->slug == config('common.parents.tuition'))
                                @include('frontend.includes.page.tuition')
                            @endif
                            @if($category->slug == config('common.parents.teaching_services'))
                                @include('frontend.includes.page.teaching_services')
                            @endif
                            @if($category->slug == config('common.parents.parents_need_to_know'))
                                @include('frontend.includes.page.parents_need_to_know')
                            @endif
                            @if($category->slug == config('common.parents.parents_notice'))
                                @include('frontend.includes.page.parents_notice', ['parentsNotes' => $prentsNotes])
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script type="text/javascript">
    $('#province').change(function () {
            let selected =  $(this).children("option:selected").val();
            $.ajax({
                type: 'POST',
                url: '{{ route('cart.getListDistrict') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    provinceCode: selected,
                }
            }).then(function (res) {
                let html = '';
                res.data.forEach(function (e) {
                    html += `<option value="${e.code}">${e.name_with_type}</option>`;
                });
                $('#district').html(html);
                $('#district').trigger('change');
            })
        });

        $('#district').change(function () {
            let selected =  $(this).children("option:selected").val();
            $.ajax({
                type: 'POST',
                url: '{{ route('cart.getListWard') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    districtCode: selected,
                }
            }).then(function (res) {
                let html = '';
                res.data.forEach(function (e) {
                    html += `<option value="${e.code}">${e.name_with_type}</option>`;
                });
                $('#ward').html(html);
                $('#ward').trigger('change');
            })
        });
        $('#ward').change(function () {
            getAddressString();
            let province_code = $('#province').children("option:selected").val();
            let district_code = $('#district').children("option:selected").val();
            $.ajax({
                type: 'POST',
                url: '{{ route('cart.updateShipping') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    province_code: province_code,
                    district_code: district_code
                }
            }).then(function (res) {
                let tax = `${res.data.tax} VNĐ`;
                let total = `${res.data.total} VNĐ`;
                $('p.tax > span').text(tax);
                $('p.total > span').text(total);
            });
        });

        $("#province").select2({});
        $("#district").select2({});
        $("#ward").select2({});
        
        $('button[name="btnCheckout"]').click(function () {
            $('form[name="checkout"]').submit();
        });
</script>
@endsection