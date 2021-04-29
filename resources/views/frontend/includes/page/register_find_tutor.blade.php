<section class="hk-sec-wrapper">
    <h5 class="hk-sec-title text-uppercase mt-4">Điền thông tin đăng ký tìm gia sư</h5>
    <div class="row">
        <div class="col-sm mt-3">
            <form class="needs-validation" novalidate action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="title">Họ và tên phụ huynh</label>
                        <input id="title" placeholder="Vui lòng nhập tên phụ huynh" name="title" type="text" class="form-control" value="{{ old('title') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone">Số điện thoại</label>
                        <input id="phone" placeholder="Vui lòng nhập số điên thoại" name="phone" type="text" class="form-control" value="{{ old('phone') }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <select id="province" name="province_code" class="province col-md-4 form-control custom-select @error('province_code') is-invalid @enderror">
                            <option value="" selected>{!! trans('cart.province') !!}</option>
                            @foreach($provinces as $province)
                                <option value="{{ $province->code }}">{{ $province->name_with_type }}</option>
                            @endforeach
                        </select>
                        @error('province_code')<small style="color: #dc3545">{!! trans('cart.req-province') !!}</small>@enderror
                    </div>
                    <div class="col-md-6">
                        <select id="district" name="district_code" class="col-md-4 form-control custom-select @error('district_code') is-invalid @enderror">
                            <option value="" selected>{!! trans('cart.district') !!}</option>
                            @foreach($districts as $district)
                                <option value="{{ $district->code }}">{{ $district->name_with_type }}</option>
                            @endforeach
                        </select>
                        @error('district_code')<small style="color: #dc3545">{!! trans('cart.req-district') !!}</small>@enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <select id="ward" name="ward_code" class="col-md-4 form-control custom-select @error('ward_code') is-invalid @enderror">
                            <option value="" selected>{!! trans('cart.ward') !!}</option>
                            @foreach($wards as $ward)
                                <option value="{{ $ward->code }}">{{ $ward->name_with_type }}</option>
                            @endforeach
                        </select>
                        @error('ward_code')<small style="color: #dc3545">{!! trans('cart.req-ward') !!}</small>@enderror
                    </div>
                    <div class="col-md-6">
                        <input id="house_number" placeholder="{!! trans('cart.number-house') !!}" name="house_number" type="text" class="form-control" value="{{ old('house_number') }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="schools">Học sinh trường</label>
                        <input id="schools" placeholder="Vui lòng nhập tên trường" name="schools" type="text" class="form-control" value="{{ old('schools') }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="schools">Lớp</label>
                        <input id="schools" placeholder="Vui lòng nhập tên trường" name="schools" type="text" class="form-control" value="{{ old('schools') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="schools">Môn học</label>
                        <input id="schools" placeholder="Vui lòng nhập tên trường" name="schools" type="text" class="form-control" value="{{ old('schools') }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="num_student">Số lượng học sinh</label>
                        <input id="num_student" placeholder="Vui lòng nhập tên trường" name="num_student" type="text" class="form-control" value="{{ old('num_student') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="schools">Học lực hiện tại</label>
                        <input id="schools" placeholder="Vui lòng nhập tên trường" name="schools" type="text" class="form-control" value="{{ old('schools') }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="num_student">Số buổi/Tuần</label>
                        <input id="num_student" placeholder="Vui lòng nhập tên trường" name="num_student" type="text" class="form-control" value="{{ old('num_student') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="schools">Thời gian học</label>
                        <input id="schools" placeholder="VD: T2-T4-T6; 17h-19h" name="schools" type="text" class="form-control" value="{{ old('schools') }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <button class="btn btn-info" type="submit">ĐĂNG KÝ</button>
                        <a href="{{ route('news.index') }}" class="btn btn-light">CANCEL</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>