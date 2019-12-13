	
@extends('client.layout.master')
@section('content')

	



		<section class="companies-info">
			<div class="container">
				<div class="company-title">
					<h3>All Companies</h3>
				</div><!--company-title end-->
				<div class="companies-list">
					<div class="row">
					@foreach($users as $user)
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="company_profile_info">
								<div class="company-up-info">
									<a href="client/profile/{{$user->id}}">
									<img src="images/resources/{{$user->avatar}}" alt="">
									<h3>{{$user->name}}</h3>
									<h4>{{$user->title}}</h4>
									<ul>
										<li><a href="#" title="" class="follow">Theo dõi</a></li>
										<!-- <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li> -->
										<!-- <li><a href="#" title="" class="hire-us">Profile</a></li> -->
									</ul>
									</a>
								</div>
								<a href="client/profile/{{$user->id}}" title="" class="view-more-pro">View Profile</a>
							</div><!--company_profile_info end-->
						</div>
					@endforeach
					</div>
				</div><!--companies-list end-->
				<div class="process-comm">
					<div class="spinner">
						<div class="bounce1"></div>
						<div class="bounce2"></div>
						<div class="bounce3"></div>
					</div>
				</div><!--process-comm end-->
			</div>
		</section><!--companies-info end-->


@endsection

