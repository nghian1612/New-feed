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
                                                                            <th>Liên kết</th>
                                                                            <th>Setting</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                            </td>

                                                                    </table>
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
                        <form action="" style="background:#FFF; padding:15px; min-height:200px;">
                            <label for="">Liên kết</label>
                            <input type="text" class="form-control" placeholder="Nhập liên kết"><br>
                            <input type="submit" value="Thêm" class=" btn btn-primary waves-effect waves-light">
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection