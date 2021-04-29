<section class="hk-sec-wrapper">
    <h5 class="hk-sec-title text-uppercase mt-4">Gia sư hiện có</h5>
    <div class="row">
        <div class="col-sm mt-3">
            <form class="needs-validation" novalidate action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-md-4">
                        <select id="province" name="province_code" class="province col-md-4 form-control custom-select @error('province_code') is-invalid @enderror">
                            <option value="" selected>{!! trans('cart.province') !!}</option>
                            @foreach($provinces as $province)
                                <option value="{{ $province->code }}">{{ $province->name_with_type }}</option>
                            @endforeach
                        </select>
                        @error('province_code')<small style="color: #dc3545">{!! trans('cart.req-province') !!}</small>@enderror
                    </div>
                    <div class="col-md-4">
                        <select id="district" name="district_code" class="col-md-4 form-control custom-select @error('district_code') is-invalid @enderror">
                            <option value="" selected>{!! trans('cart.district') !!}</option>
                            @foreach($districts as $district)
                                <option value="{{ $district->code }}">{{ $district->name_with_type }}</option>
                            @endforeach
                        </select>
                        @error('district_code')<small style="color: #dc3545">{!! trans('cart.req-district') !!}</small>@enderror
                    </div>
                    <div class="col-md-4">
                        <select id="ward" name="ward_code" class="col-md-4 form-control custom-select @error('ward_code') is-invalid @enderror">
                            <option value="" selected>{!! trans('cart.ward') !!}</option>
                            @foreach($wards as $ward)
                                <option value="{{ $ward->code }}">{{ $ward->name_with_type }}</option>
                            @endforeach
                        </select>
                        @error('ward_code')<small style="color: #dc3545">{!! trans('cart.req-ward') !!}</small>@enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <select id="province" name="province_code" class="province col-md-4 form-control custom-select @error('province_code') is-invalid @enderror">
                            <option value="" selected>{!! trans('cart.province') !!}</option>
                            @foreach($provinces as $province)
                                <option value="{{ $province->code }}">{{ $province->name_with_type }}</option>
                            @endforeach
                        </select>
                        @error('province_code')<small style="color: #dc3545">{!! trans('cart.req-province') !!}</small>@enderror
                    </div>
                    <div class="col-md-4">
                        <select id="district" name="district_code" class="col-md-4 form-control custom-select @error('district_code') is-invalid @enderror">
                            <option value="" selected>{!! trans('cart.district') !!}</option>
                            @foreach($districts as $district)
                                <option value="{{ $district->code }}">{{ $district->name_with_type }}</option>
                            @endforeach
                        </select>
                        @error('district_code')<small style="color: #dc3545">{!! trans('cart.req-district') !!}</small>@enderror
                    </div>
                    <div class="col-md-4">
                        <select id="ward" name="ward_code" class="col-md-4 form-control custom-select @error('ward_code') is-invalid @enderror">
                            <option value="" selected>{!! trans('cart.ward') !!}</option>
                            @foreach($wards as $ward)
                                <option value="{{ $ward->code }}">{{ $ward->name_with_type }}</option>
                            @endforeach
                        </select>
                        @error('ward_code')<small style="color: #dc3545">{!! trans('cart.req-ward') !!}</small>@enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <button class="btn btn-info" type="submit">Tìm kiếm</button>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-md-6">
                        <div style="border: 1px solid #ced4da; padding: 15px; border-radius: 6px;">
                            <div class="img-avatar row">
                                <div class="img-avatar col-md-4">
                                    <img style="width: 150px; height: 150px" src="{{ asset('frontend/images/avatars/default.png') }}" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="name">
                                            <strong>Mã số</strong>
                                            <span>00000</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="name">
                                            <strong>Tên gia sư</strong>
                                            <span>Trần Hữu Nghị</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="name">
                                            <strong>Năm sinh</strong>
                                            <span>25-10-1996</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="name">
                                            <strong>Hiện là</strong>
                                            <span>Sinh viên</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="name">
                                            <strong>Trường</strong>
                                            <span>Đại Học Kinh Tế - Luật ĐHQG TP.HCM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content mt-2 text-justify">
                                <hr>
                                <div class="form-group">
                                    <div class="name">
                                        <strong>Chuyên ngành</strong>
                                        <span>Đại Học Kinh Tế - Luật ĐHQG TP.HCM</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="name">
                                        <strong>Các môn</strong>
                                        <span>Toán, Lý, Hóa</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="name">
                                        <strong>Khu vực</strong>
                                        <span>Quận 6, Quận 10, Quận 11, Quận Tân Phú, Quận Tân Bình, Quận Phú Nhuận, Quận Bình Tân, Huyện Bình Chánh</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button class="btn btn-info float-right" type="submit">Chọn gia sư</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="border: 1px solid #ced4da; padding: 15px; border-radius: 6px;">
                            <div class="img-avatar row">
                                <div class="img-avatar col-md-4">
                                    <img style="width: 150px; height: 150px" src="{{ asset('frontend/images/avatars/default.png') }}" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="name">
                                            <strong>Mã số</strong>
                                            <span>00000</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="name">
                                            <strong>Tên gia sư</strong>
                                            <span>Trần Hữu Nghị</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="name">
                                            <strong>Năm sinh</strong>
                                            <span>25-10-1996</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="name">
                                            <strong>Hiện là</strong>
                                            <span>Sinh viên</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="name">
                                            <strong>Trường</strong>
                                            <span>Đại Học Kinh Tế - Luật ĐHQG TP.HCM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content mt-2 text-justify">
                                <hr>
                                <div class="form-group">
                                    <div class="name">
                                        <strong>Chuyên ngành</strong>
                                        <span>Đại Học Kinh Tế - Luật ĐHQG TP.HCM</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="name">
                                        <strong>Các môn</strong>
                                        <span>Toán, Lý, Hóa</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="name">
                                        <strong>Khu vực</strong>
                                        <span>Quận 6, Quận 10, Quận 11, Quận Tân Phú, Quận Tân Bình, Quận Phú Nhuận, Quận Bình Tân, Huyện Bình Chánh</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button class="btn btn-info float-right" type="submit">Chọn gia sư</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</section>