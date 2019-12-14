@extends('admin.layout.master')
@section('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">                 
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    @include('admin.layout.detailuser')
                    <div class=" custom-product-edit st-prf-pro">
                        <div class="product-tab-list tab-pane fade in">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="background-user">
                                                    <img src="images/resources/cover-img.jpg" alt="">
                                                </div>
                                                <div class="avartar-user" style=" display:inline-block; width: 100px;border-radius:50%;border: 3px solid white;margin: -50px 25px 20px 25px;position: relative;">
                                                    <img src="images/resources/user-pro-img.png" alt="" style="width:100px;">
                                                </div>
                                                <div class="name-user" style="display: inline-block; position: absolute;padding: 5px 0;">
                                                    <h4 style="margin:0">Name User</h4>
                                                    <p>UI Designer</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div>
                                                    <h5>Giới thiệu</h5>
                                                    <div class="content-profile">
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                        dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                        dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                        dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5>Kinh nghiệm</h5>
                                                    <h6>tieu de kinh nghiêm</h6>
                                                    <div class="content-profile">
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                        dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                    </div>
                                                    <h6>tieu de kinh nghiêm</h6>
                                                    <div class="content-profile">
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                        dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5>Hoc vấn</h5>
                                                    <h6>tieu de kinh nghiêm</h6>
                                                    <div class="content-profile">
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                                        dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5>Kỹ năng</h5>
                                                    <a href="">kỹ năng</a>
                                                    <a href="">kỹ năng</a>
                                                    <a href="">kỹ năng</a>
                                                </div>
                                                <div>
                                                    <h5>Vị trí</h5>
                                                    <p>vị trí Tp hcm</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="text-align: right">
                                                <a href="" class="btn btn-primary waves-effect waves-light mg-b-15">Cập nhật thông tin</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div style="background: white;padding: 15px; display:none">
                    <div>
                        <div style="display: flex;">
                            <div style="width:40px;height:40px; border-radius:50%">
                                <img src="images/resources/user-pro-img.png"  style="width:100%;">
                            </div>
                            <div style="margin-left: 10px;">
                                <h5 style="margin-bottom: 5px; ">name user</h5>
                                <div><img src="images/clock.png" alt="" ><span style="margin-left: 5px; ">thoi gian dang bai</span></div>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex;margin: 10px 0;">
                                <div style="margin-right: 10px;">
                                    <img src="images/icon8.png" alt="">
                                    <span>ngay ket thuc</span>
                                </div> 
                                <div>
                                    <img src="images/icon9.png" alt="">
                                    <span>noi lam viec</span>
                                </div>
                            </div>
                            <h5>tieu de bai viet</h5>
                            <div style="margin-bottom:10px">
                                <span>loai viec lam</span>
                                <span style="margin-left: 10px;">luong đ/gio</span>
                            </div>
                            <div>
                                <p>
                                Công ty chúng tôi đang cần tuyển dụng vị trí: THIẾT KẾ WEBSITE. Số lượng: 20 người. Bạn sẽ được training khi làm. Chúng tôi cần ở bạn: Dẫn dắt một đội 
                                ngũ sử dụng Angular 8, Ionic.Phối hợp với các nhà phát triển back-end và thiết kế web.Huấn luyện các thành viên khác trong nhóm Sáng tạo về mặt UI
                                </p>
                            </div>
                            <div>
                                <a href="" style="display:inline-block; padding:2px 10px; background:#CCC;border-radius:10px" >skill</a>
                                <a href="" style="display:inline-block; padding:2px 10px; background:#CCC;border-radius:10px" >skill</a>
                                <a href="" style="display:inline-block; padding:2px 10px; background:#CCC;border-radius:10px" >skill</a>
                            </div>
                        </div>
                        <div>
                            <span>Luot like</span>
                            <span style="margin-left: 10px;">Binh luan</span>
                        </div>
                    </div><hr>
                    <div>
                        <div style="display: flex;">
                            <div style="width:30px;height:30px; border-radius:50%">
                                <img src="images/resources/user-pro-img.png"  style="width:100%;">
                            </div>
                            <div style="margin-left: 10px;">
                                <h6 style="margin-bottom: 2px;">name user</h6>
                                <div><span style="font-size: 12px">thoi gian dang bai</span></div>
                            </div>
                        </div>
                        <div>
                            <p>hello</p>
                        </div>
                    </div>
                </div>


                <div style="background: white;padding: 15px; margin-bottom:10px; display:none">
                    <div>
                        <div style="display: flex;">
                            <div style="width:40px;height:40px; border-radius:50%">
                                <img src="images/resources/user-pro-img.png"  style="width:100%;">
                            </div>
                            <div style="margin-left: 10px;">
                                <h5 style="margin-bottom: 5px; ">name user</h5>
                                <div><img src="images/clock.png" alt="" ><span style="margin-left: 5px; ">thoi gian dang bai</span></div>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex;margin: 10px 0;">
                                <div style="margin-right: 10px;">
                                    <img src="images/icon8.png" alt="">
                                    <span>ngay ket thuc</span>
                                </div> 
                                <div>
                                    <img src="images/icon9.png" alt="">
                                    <span>noi lam viec</span>
                                </div>
                            </div>
                            <h5>tieu de bai viet</h5>
                            <div style="margin-bottom:10px">
                                <span>loai viec lam</span>
                                <span style="margin-left: 10px;">luong đ/gio</span>
                            </div>
                            <div>
                                <p>
                                Công ty chúng tôi đang cần tuyển dụng vị trí: THIẾT KẾ WEBSITE. Số lượng: 20 người. Bạn sẽ được training khi làm. Chúng tôi cần ở bạn: Dẫn dắt một đội 
                                ngũ sử dụng Angular 8, Ionic.Phối hợp với các nhà phát triển back-end và thiết kế web.Huấn luyện các thành viên khác trong nhóm Sáng tạo về mặt UI
                                </p>
                            </div>
                            <div>
                                <a href="" style="display:inline-block; padding:2px 10px; background:#CCC;border-radius:10px" >skill</a>
                                <a href="" style="display:inline-block; padding:2px 10px; background:#CCC;border-radius:10px" >skill</a>
                                <a href="" style="display:inline-block; padding:2px 10px; background:#CCC;border-radius:10px" >skill</a>
                            </div>
                            <div style="margin:10px 0">
                                <img src="images/feedimage/feed20191214-054814.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <span>Luot like</span>
                            <span style="margin-left: 10px;">Binh luan</span>
                        </div>
                    </div><hr>
                    <div>
                        <div style="display: flex;">
                            <div style="width:30px;height:30px; border-radius:50%">
                                <img src="images/resources/user-pro-img.png"  style="width:100%;">
                            </div>
                            <div style="margin-left: 10px;">
                                <h6 style="margin-bottom: 2px; ">name user</h6>
                                <div><span style="font-size: 12px ">thoi gian dang bai</span></div>
                            </div>
                        </div>
                        <div>
                            <p>hello</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection