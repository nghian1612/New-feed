@extends('client.layout.master')
@section('content')

@if($profile)
    <p>co</p>
@else
    <p>ko</p>
@endif
<div id="hienthi">
    @foreach($profile as $profile)
        <p>{{$profile->id}}</p>
        <p>{{$profile->name}}</p>
    @endforeach
</div>



@endsection

@section('script')
@endsection