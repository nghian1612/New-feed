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
                                    <div style="width:25px;height:25px; border-radius:50%;"><img src="images/resources/{{$feed->user->avatar}}" alt="" /></div>
                                    <p style="margin:0 0 0 5px;">{{$feed->user->name}}</p>
                                </td>
                                <td><a href="client/detailjob/{{$feed->id}}" target="_blank">{{$feed->title}}</a></td>
                                <td>
                                    @if($feed->status == 1)
                                    <button class="pd-setting">Hiển thị</button>
                                    @else 
                                    <button class="pd-setting" style="background:#CCC">Ẩn</button>
                                    @endif
                                </td>
                                <td>{{$feed->created_at}}</td>
                                <td>
                                    @if($feed->status == 1)
                                    <a href="admin/jobmanager/hide/{{$feed->id}}" class="pd-setting-ed">Ẩn</a>
                                    @else
                                    <a href="admin/jobmanager/show/{{$feed->id}}" class="pd-setting-ed">Hiện</a>
                                    @endif
                                    <a href="admin/jobmanager/delete/{{$feed->id}}" class="pd-setting-ed">Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif

@endsection