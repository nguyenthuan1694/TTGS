@extends('frontend.layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
    <section style="padding-top: 35.5px">
        <div class="container section--default">
            <div class="row">
                <div class="col-md-3" style="margin-top: 20px">
                    <div class="text-uppercase text-center mb-3" style="display: flex;align-items: center;justify-content: center;height: 60px; background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%)"> 
                        <div style="padding: 5px;margin-top: 0;margin-bottom: 0;font-size: 14px;color: #fff;line-height: 150%;text-align: center;">
                            <span>Dành cho </br> phụ huynh - học sinh</span>
                        </div>
                    </div>
                    <div class="text-uppercase text-center mb-3" style="display: flex;align-items: center;justify-content: center;height: 60px; background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%)"> 
                        <div style="padding: 5px;margin-top: 0;margin-bottom: 0;font-size: 14px;color: #fff;line-height: 150%;text-align: center;">
                            <span>Đăng ký tìm gia sư</span>
                        </div>
                    </div>
                    <div class="text-uppercase text-center mb-3" style="display: flex;align-items: center;justify-content: center;height: 60px; background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%)"> 
                        <div style="padding: 5px;margin-top: 0;margin-bottom: 0;font-size: 14px;color: #fff;line-height: 150%;text-align: center;">
                            <span>Liên hệ tìm gia sư </br> 090.000.999</span>
                        </div>
                    </div>
                    <div class="text-uppercase text-center mb-3" style="display: flex;align-items: center;justify-content: center;height: 60px; background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%)"> 
                        <div style="padding: 5px;margin-top: 0;margin-bottom: 0;font-size: 14px;color: #fff;line-height: 150%;text-align: center;">
                            <span>Phụ huynh - học sinh </br> chọn gia sư hiện có</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gallery gallery-responsive portfolio_slider">
                        <div class=""><img style="height: 338.44px" src="{{ asset('frontend/images/banner_1.jpg') }}"></div>
                        <div class=""><img style="height: 338.44px" src="{{ asset('frontend/images/banner_2.jpg') }}"></div>
                        <div class=""><img style="height: 338.44px" src="{{ asset('frontend/images/banner_3.jpg') }}"></div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-top: 20px">
                    <div class="text-uppercase text-center mb-3" style="padding: 5px 15px; background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%)"> 
                        <div style="argin-top: 0;margin-bottom: 0;font-size: 14px;color: #fff;line-height: 150%;text-align: center;">
                            <span>Dành cho </br> giáo viên - sinh viên</span>
                        </div>
                    </div>
                    <div class="text-uppercase text-center mb-3" style="display: flex;align-items: center;justify-content: center;height: 60px; background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%)"> 
                        <div style="padding: 5px;margin-top: 0;margin-bottom: 0;font-size: 14px;color: #fff;line-height: 150%;text-align: center;">
                            <span>Đăng ký làm gia sư</span>
                        </div>
                    </div>
                    <div class="text-uppercase text-center mb-3" style="display: flex;align-items: center;justify-content: center;height: 60px; background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%)"> 
                        <div style="padding: 5px;margin-top: 0;margin-bottom: 0;font-size: 14px;color: #fff;line-height: 150%;text-align: center;">
                            <span>Liên hệ tìm gia sư </br> 090.000.999</span>
                        </div>
                    </div>
                    <div class="text-uppercase text-center mb-3" style="display: flex;align-items: center;justify-content: center;height: 60px; background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%)"> 
                        <div style="padding: 5px;margin-top: 0;margin-bottom: 0;font-size: 14px;color: #fff;line-height: 150%;text-align: center;">
                            <span>giáo viên - sinh viên </br> chọn lớp dạy hiện có</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section--default">
            <div class="row">
                <div class="col-md-3">
                    <h4 style="font-size: 16px;background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%);color: #fff;padding: 10px;text-transform: uppercase;text-align: center;">
                        Dành cho phụ huynh
                    </h4>
                    <div class="">
                        <ul>
                            <li class="mt-2"><a href="#" style="padding: 15px 30px">Đăng ký tìm gia sư</a></li>
                            <li class="mt-2"><a href="#" style="padding: 15px 30px">Gia sư hiện có</a></li>
                            <li class="mt-2"><a href="#" style="padding: 15px 30px">Học phí tham khảo</a></li>
                            <li class="mt-2"><a href="#" style="padding: 15px 30px">Dịch vụ giảng dạy</a></li>
                            <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh cần biết</a></li>
                            <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh lưu ý</a></li>
                        </ul>
                    </div>
                    <div class="mt-3">
                        <h4 style="font-size: 16px;background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%);color: #fff;padding: 10px;text-transform: uppercase;text-align: center;">
                            gia sư tiêu biểu
                        </h4>
                        <div class="">
                            <ul>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Đăng ký tìm gia sư</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Gia sư hiện có</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Học phí tham khảo</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Dịch vụ giảng dạy</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh cần biết</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh lưu ý</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h4 style="font-size: 16px;background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%);color: #fff;padding: 10px;text-transform: uppercase;text-align: center;">
                            gia sư các tỉnh thành
                        </h4>
                        <div class="">
                            <ul>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Đăng ký tìm gia sư</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Gia sư hiện có</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Học phí tham khảo</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Dịch vụ giảng dạy</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh cần biết</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh lưu ý</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h4 style="font-size: 16px;background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%);color: #fff;padding: 10px;text-transform: uppercase;text-align: center;">
                            gia sư khối lớp
                        </h4>
                        <div class="">
                            <ul>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Đăng ký tìm gia sư</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Gia sư hiện có</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Học phí tham khảo</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Dịch vụ giảng dạy</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh cần biết</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh lưu ý</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h4 style="font-size: 16px;background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%);color: #fff;padding: 10px;text-transform: uppercase;text-align: center;">
                            gia sư bộ môn
                        </h4>
                        <div class="">
                            <ul>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Đăng ký tìm gia sư</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Gia sư hiện có</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Học phí tham khảo</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Dịch vụ giảng dạy</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh cần biết</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh lưu ý</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <h4 style="font-size: 16px;background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%);color: #fff;padding: 10px;text-transform: uppercase;text-align: center;">
                            Giới thiệu
                        </h4>
                        @foreach($introduces as $introduce)
                            <div class="intro-title">
                                <span class="title font-weight-bold">
                                    {{ $introduce->title }}
                                </span>
                            </div>
                            <div class="intro-content mt-3 text-justify">
                                <span style="line-height: 32px">
                                    {!! $introduce->long_description !!}
                                </span>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-3">
                        <h4 style="font-size: 16px;background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%);color: #fff;padding: 10px;text-transform: uppercase;text-align: center;">
                            Bảng học phí tham khảo
                        </h4>
                        <div class="tuition-content mt-3 text-justify">
                            <span style="line-height: 32px">
                                - Đảm bảo gia sư dạy kèm chất lượng, uy tín, hiệu quả.</br>
                                - Gia Sư dạy kèm có lý lịch bản thân, bằng cấp rỏ ràng.</br>
                                - Nhận dạy thử một tuần để đánh giá chất lượng gia sư.</br>
                                - Học phí gia sư xin được nhận vào cuối tháng.</br>
                                Trung Tâm Gia Sư Thăng Long đưa ra bảng học phí 1 tháng dạy của gia sư cho Quý Phụ Huynh và các bạn gia sư tham khảo:
                            </span>
                            <div>
                                <div class="text-center mb-3 mt-3">
                                    <span class="font-weight-bold">BẢNG HỌC PHÍ 2 BUỔI 1 TUẦN VÀ 3 BUỔI 1 TUẦN</span>
                                </div>
                                <table border="1" cellpadding="5" height="178" width="596">
                                    <tbody style="font-size: 14px">
                                        <tr>
                                            <td rowspan="2" style="text-align: center; background-color: rgb(234, 249, 255);">
                                                <span style="color:#ff0000;"><strong>KHỐI LỚP</strong></span></td>
                                            <td colspan="2" style="text-align: center; background-color: rgb(234, 249, 255);">
                                                <span style="color:#000000;"><strong>2 buổi 1 tuần</strong></span></td>
                                            <td colspan="2" style="text-align: center; background-color: rgb(234, 249, 255);">
                                                <span style="color:#000000;"><strong>3 buổi 1 tuần</strong></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center; background-color: rgb(234, 249, 255);">
                                                <span style="color:#0000ff;"><strong>Sinh viên&nbsp;</strong></span></td>
                                            <td style="text-align: center; background-color: rgb(234, 249, 255);">
                                                <span style="color:#ff0000;"><strong>Giáo viên</strong></span></td>
                                            <td style="text-align: center; background-color: rgb(234, 249, 255);">
                                                <span style="color:#0000ff;"><strong>Sinh viên</strong></span></td>
                                            <td style="text-align: center; background-color: rgb(234, 249, 255);">
                                                <span style="color:#ff0000;"><strong>&nbsp; Giáo viên</strong></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span style="color:#0000ff;">Lớp Lá, 1, 2, 3, 4&nbsp;</span></td>
                                            <td>
                                                800 - 1.000</td>
                                            <td>
                                                1.400 - 1.600</td>
                                            <td>
                                                1.400 - 1.600</td>
                                            <td>
                                                2.200 - 2.400</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span style="color:#0000ff;">Lớp 5, 6, 7, 8</span></td>
                                            <td>
                                                1.000 - 1.200</td>
                                            <td>
                                                1.600 - 1.800</td>
                                            <td>
                                                1.600 - 1.800</td>
                                            <td>
                                                2.400 - 2.600</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span style="color:#0000ff;">Lớp 9, 10, 11, 12</span></td>
                                            <td>
                                                1.200 - 1.400&nbsp;</td>
                                            <td>
                                                1.800 - 2.000</td>
                                            <td>
                                                1.800 - 2.000</td>
                                            <td>
                                                2.600 - 3.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span style="color:#ff0000;">LTĐH-NGOẠI NGỮ</span></td>
                                            <td>
                                                1.200 - 1.400</td>
                                            <td>
                                                1.800 - 2.000&nbsp;</td>
                                            <td>
                                                1.800 - 2.000&nbsp;</td>
                                            <td>
                                                2.600 - 3.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <div class="text-center mb-3 mt-3">
                                    <span class="font-weight-bold">BẢNG HỌC PHÍ 4 BUỔI 1 TUẦN VÀ 5 BUỔI 1 TUẦN</span>
                                </div>
                                <table border="1" cellpadding="5" height="178" width="596">
                                    <tbody style="font-size: 14px">
                                        <tr>
                                            <td rowspan="2" style="text-align: center; background-color: rgb(234, 249, 255);">
                                                <span style="color:#ff0000;"><strong>KHỐI LỚP</strong></span></td>
                                            <td colspan="2" style="text-align: center; background-color: rgb(234, 249, 255);">
                                                <span style="color:#000000;"><strong>2 buổi 1 tuần</strong></span></td>
                                            <td colspan="2" style="text-align: center; background-color: rgb(234, 249, 255);">
                                                <span style="color:#000000;"><strong>3 buổi 1 tuần</strong></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center; background-color: rgb(234, 249, 255);">
                                                <span style="color:#0000ff;"><strong>Sinh viên&nbsp;</strong></span></td>
                                            <td style="text-align: center; background-color: rgb(234, 249, 255);">
                                                <span style="color:#ff0000;"><strong>Giáo viên</strong></span></td>
                                            <td style="text-align: center; background-color: rgb(234, 249, 255);">
                                                <span style="color:#0000ff;"><strong>Sinh viên</strong></span></td>
                                            <td style="text-align: center; background-color: rgb(234, 249, 255);">
                                                <span style="color:#ff0000;"><strong>&nbsp; Giáo viên</strong></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span style="color:#0000ff;">Lớp Lá, 1, 2, 3, 4&nbsp;</span></td>
                                            <td>
                                                800 - 1.000</td>
                                            <td>
                                                1.400 - 1.600</td>
                                            <td>
                                                1.400 - 1.600</td>
                                            <td>
                                                2.200 - 2.400</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span style="color:#0000ff;">Lớp 5, 6, 7, 8</span></td>
                                            <td>
                                                1.000 - 1.200</td>
                                            <td>
                                                1.600 - 1.800</td>
                                            <td>
                                                1.600 - 1.800</td>
                                            <td>
                                                2.400 - 2.600</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span style="color:#0000ff;">Lớp 9, 10, 11, 12</span></td>
                                            <td>
                                                1.200 - 1.400&nbsp;</td>
                                            <td>
                                                1.800 - 2.000</td>
                                            <td>
                                                1.800 - 2.000</td>
                                            <td>
                                                2.600 - 3.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span style="color:#ff0000;">LTĐH-NGOẠI NGỮ</span></td>
                                            <td>
                                                1.200 - 1.400</td>
                                            <td>
                                                1.800 - 2.000&nbsp;</td>
                                            <td>
                                                1.800 - 2.000&nbsp;</td>
                                            <td>
                                                2.600 - 3.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-3 text-justify">
                                <span style="line-height: 32px">
                                    - Giáo Viên dạy 1 buổi dạy 2 tiết = 90 phút</br>
                                    - Sinh Viên dạy 1 buổi dạy 2 tiếng = 120 phút</br>
                                    Mức học phí áp dụng với 1 học sinh, nếu học nhóm hay có yêu cầu khác vui lòng liên hệ trung tâm.</br>
                                    Đối với gia sư là giáo viên có thâm niên, thạc sỹ, giáo viên dạy tại trường có kinh nghiệm dạy kèm thật hiệu quả mức học phí được tính theo tiết (1 tiết = 45 phút).</br>
                                    Cấp 1: 100.000 - 120.000/1 tiết(45 phút) = 200.000 - 240.000/1 buổi </br>
                                    Cấp 2: 120.000 - 150.000/1 tiết(45 phút) = 240.000 - 300.000/1 buổi </br>
                                    Cấp 3 - LTĐH: 150.000 - 200.000/1 tiết(45 phút) = 300.000 - 400.000/1 buổi</br>
                                    Lưu Ý : Bảng học phí trên chỉ có tính chất tham khảo, học phí sẽ tăng hoặc giảm tùy theo số môn học và yêu cầu của quý phụ huynh.
                                </span>
                                <hr>
                                <span style="line-height: 32px">
                                    PHỤ HUYNH HỌC SINH CÓ NHU CẦU XIN LIÊN HỆ:</br>
                                    ĐIỆN THOẠI ĐỂ TƯ VÂN - ĐĂNG KÝ GIA SƯ TRỰC TIẾP</br>
                                    <h4 style="color: red">090.3978.794 - 090.9767.159</h4>
                                    Vì Tất Cả Học Sinh Thân Yêu Hãy Để Cho Chúng Tôi Thắp Sáng Ước Mơ Của Các Em Bằng Con Đường "Giáo Dục"</br>
                                    Chân thành cảm ơn Quý Bậc Phụ Huynh và Học Sinh đã quan tâm và tín nhiệm chúng tôi trong suốt thời gian qua. Kính chúc Quý bậc Phụ Huynh và các em Học Sinh sức khỏe, thành đạt.</br>
                                    => Phụ huynh đăng ký tìm gia sư TẠI ĐÂY.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4 style="font-size: 16px;background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%);color: #fff;padding: 10px;text-transform: uppercase;text-align: center;">
                        Dành cho gia sư
                    </h4>
                    <div class="">
                        <ul>
                            <li class="mt-2"><a href="#" style="padding: 15px 30px">Đăng ký tìm gia sư</a></li>
                            <li class="mt-2"><a href="#" style="padding: 15px 30px">Gia sư hiện có</a></li>
                            <li class="mt-2"><a href="#" style="padding: 15px 30px">Học phí tham khảo</a></li>
                            <li class="mt-2"><a href="#" style="padding: 15px 30px">Dịch vụ giảng dạy</a></li>
                            <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh cần biết</a></li>
                            <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh lưu ý</a></li>
                        </ul>
                    </div>
                    <div class="mt-3">
                        <h4 style="font-size: 16px;background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%);color: #fff;padding: 10px;text-transform: uppercase;text-align: center;">
                            Nhận lớp online
                        </h4>
                        <div class="">
                            <ul>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Đăng ký tìm gia sư</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Gia sư hiện có</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Học phí tham khảo</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Dịch vụ giảng dạy</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh cần biết</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh lưu ý</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h4 style="font-size: 16px;background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%);color: #fff;padding: 10px;text-transform: uppercase;text-align: center;">
                            Gia sư cần biết
                        </h4>
                        <div class="">
                            <ul>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Đăng ký tìm gia sư</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Gia sư hiện có</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Học phí tham khảo</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Dịch vụ giảng dạy</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh cần biết</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh lưu ý</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h4 style="font-size: 16px;background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%);color: #fff;padding: 10px;text-transform: uppercase;text-align: center;">
                            Tài liệu học tập
                        </h4>
                        <div class="">
                            <ul>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Đăng ký tìm gia sư</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Gia sư hiện có</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Học phí tham khảo</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Dịch vụ giảng dạy</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh cần biết</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh lưu ý</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h4 style="font-size: 16px;background: linear-gradient(90deg, #298179 0%, #044943 50%, #298179 100%);color: #fff;padding: 10px;text-transform: uppercase;text-align: center;">
                           Tìm gia sư
                        </h4>
                        <div class="">
                            <ul>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Đăng ký tìm gia sư</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Gia sư hiện có</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Học phí tham khảo</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Dịch vụ giảng dạy</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh cần biết</a></li>
                                <li class="mt-2"><a href="#" style="padding: 15px 30px">Phụ huynh lưu ý</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script src="{{ asset('backend/dist/js/validation-data.js') }}"></script>
<script>
        $('.gallery-responsive').slick({
    dots: false,
    infinite: true,
    speed: 600,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3500,
    responsive: [
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
    });
    $('.slick-prev').hide();
    $('.slick-next').hide();
    let indexOpen = 0;

let btnTab = document.querySelectorAll('.nav-tab ul li button');
let contentTab = document.querySelectorAll('.content-tab');

</script>
@endsection