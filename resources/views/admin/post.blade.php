@extends('admin.layout.master')
@section('content')
<div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">                 
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            @include('admin.layout.detailuser')
                            <div class=" custom-product-edit st-prf-pro">
                                <div class="product-tab-list tab-pane ">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="product-status mg-b-15">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="product-status-wrap">
                                                                <div class="asset-inner">
                                                                    <table>
                                                                        <tr>
                                                                            <th>STT</th>
                                                                            <th>Tiêu đề</th>
                                                                            <th>Loại bài đăng</th>
                                                                            <th>Trạng thái</th>
                                                                            <th>Thời gian đăng</th>
                                                                            <th>Bình luận</th>
                                                                            <th>Lượt thích</th>
                                                                            <th>Setting</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td><img src="img/product/book-1.jpg" alt="" /></td>
                                                                            <td>Web Development Book</td>
                                                                            <td>
                                                                                <button class="pd-setting">Active</button>
                                                                            </td>
                                                                            <td>Html, Css</td>
                                                                            <td>0</td>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                            </td>

                                                                    </table>
                                                                </div>
                                                                <div class="custom-pagination">
                                                                    <ul class="pagination">
                                                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
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
                        <div style="background: white;padding: 15px;">
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


                        <div style="background: white;padding: 15px; margin-bottom:10px;">
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