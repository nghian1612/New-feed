@extends('admin.layout.master')
@section('content')
@if($feeds)
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Bài viết thường</h4>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Stt</th>
                                <th>Người đăng</th>
                                <th>Tiêu đề</th>
                                <th>Trang thái</th>
                                <th>Ngày đăng</th>
                                <th>Cài đặt</th>
                            </tr>
                            @foreach($feeds as $feed)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td style="display:flex;">
                                    <div style="width:25px;height:25px; border-radius:50%;"><img src="images/resources/{{$feed->user->avarter}}" alt="" /></div>
                                    <p style="margin:0 0 0 5px;">{{$feed->user->name}}</p>
                                </td>
                                <td>Web Development Book</td>
                                <td>
                                    <button class="pd-setting">Active</button>
                                </td>
                                <td>$1500</td>
                                <td>
                                    <a href="" class="pd-setting-ed">Ẩn</a>
                                    <a href="" class="pd-setting-ed">Xóa</a>
                                </td>
                            </tr>
                            @endforeach
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

@endif

@endsection