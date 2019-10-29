@extends('client.layout.master')
@section('content')
	


		<section class="companies-info">
			<div class="container">
				<div class="company-title">
					<h3>All Companies</h3>
				</div><!--company-title end-->
				<div class="companies-list">
					<div class="row">
					@foreach($companies as $com)
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="company_profile_info">
								<div class="company-up-info">
								<a href="client/profile/{{$com->id}}">
									<img src="images/resources/{{$com->avatar}}" alt="">
									<h3>{{$com->name}}</h3>
									<h4>{{$com->estalish}}</h4>
									<ul>
										<li><a href="#" title="" class="follow">Follow</a></li>
										<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</a>
								</div>
								<a href="client/profile/{{$com->id}}" title="" class="view-more-pro">View Profile</a>
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