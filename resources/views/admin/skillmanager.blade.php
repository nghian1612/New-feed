@extends('admin.layout.master')
@section('content')
@if($skills)
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-status-wrap">
                @if(isset($skilledit))
                    @foreach($skilledit as $skilledit)
                <form action="{{url('admin/skillmanager/update')}}" method="post">
                    <input type="hidden" value="{{$skilledit->id}}" name="idskill">
                    <input type="hidden" value="{{csrf_token()}}" name="_token">
                    <input type="text" placeholder="Thêm kỹ năng" name="name" class="form-control" value="{{$skilledit->name}}">
                    <input type="submit" value="Chỉnh sửa" class="btn">
                </form>
                    @endforeach
                @else
                <form action="{{url('admin/skillmanager/add')}}" method="post">
                    <input type="hidden" value="{{csrf_token()}}" name="_token">
                    <input type="text" placeholder="Thêm kỹ năng" name="name" class="form-control">
                    <input type="submit" value="Thêm" class="btn">
                </form>
                @endif
            </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Danh sách kỹ năng</h4>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>Stt</th>
                                <th>Tên kỹ năng</th>
                                <th>Cài đặt</th>
                            </tr>
                            @foreach($skills as $skill)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$skill->name}}</td>
                                <td>
                                    <a href="admin/skillmanager/edit/{{$skill->id}}" class="pd-setting-ed">Chỉnh sửa</a>
                                    <a href="admin/skillmanager/delete/{{$skill->id}}" class="pd-setting-ed">Xóa</a>
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