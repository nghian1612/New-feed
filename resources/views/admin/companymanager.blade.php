@extends('admin.layout.master')
@section('content')
@if($profiles)
    
    <div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    @foreach($profiles as $profile)
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                        <a href="client/newsfeed/{{$profile->id}}" class="student-inner-std res-mg-b-30" target="_blank" style="display:block">
                            <div class="student-img" style="padding:20px;">
                                <img src="images/resources/{{$profile->avatar}}" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2>{{$profile->name}}</h2>
                                <p class="dp">{{$profile->title}}</p>
                                <p class="dp-ag">{{$profile->location}}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
@endif
@endsection