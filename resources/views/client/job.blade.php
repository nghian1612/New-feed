@extends('client.layout.master')
@section('content')



		<!-- <div class="search-sec">
			<div class="container">
				<div class="search-box">
					<form action="{{url('/client/job/searchjob/')}}" method="get">
						<input type="text" name="search" placeholder="Search keywords">
						<button type="submit">Search</button>
					</form>
				</div>
			</div>
		</div> -->


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="filter-secs">
									<div class="filter-heading">
										<h3>Filters</h3>
										<a href="#" title="">Clear all filters</a>
									</div><!--filter-heading end-->
									<div class="paddy">
										<div class="filter-dd">
											<form  action="{{url('/client/job/searchjob/')}}" method="get">
												<div class="filter-ttl">
													<h3>Tìm kiếm</h3>
												</div>
												<div class="input-group">
													<input class="form-control" type="text" name="search" placeholder="Search keywords">
													<div class="input-group-append">
														<button type="submit" class="btn btn-primary p-0"><i class="fas fa-search px-2"></i></button>
													</div>
												</div>
												<div class="filter-ttl mt-4">
													<h3>Skills</h3>
													<a href="#" title="">Clear</a>
												</div>
												<div class="input-group">
													<ul id="skills_changed_2"></ul>
													<input type="hidden" value="{{csrf_token()}}" name="_token">
													<input type="text" id="search-skills" placeholder="Search skills">
												</div>
												<div id="skillList"></div>

												<div class="filter-ttl mt-4">
													<h3>Availabilty</h3>
													<a href="#" title="">Clear</a>
												</div>
												<ul class="avail-checks">
													<li>
														<input type="radio" name="type_job" id="c2" value="1">
														<label for="c2">
															<span></span>
														</label>
														<small>Full Time</small>
													</li>
													<li>
														<input type="radio" name="type_job" id="c3" value="2">
														<label for="c3">
															<span></span>
														</label>
														<small>Part Time</small>
													</li>
												</ul>
												<div class="filter-ttl mt-4">
													<h3>Lương</h3>
													<a href="#" title="">Clear</a>
												</div>
											
												<select name="salary">
													<option value="">Chọn lương</option>
													<option value="1">1.000.000đ - 5.000.000đ</option>
													<option value="2">5.000.000đ - 10.000.000đ</option>
													<option value="3">10.000.000đ - 15.000.000đ</option>
													<option value="4">15.000.000đ - 20.000.000đ</option>
												</select>
											</form>	
										</div>
									</div>
								</div><!--filter-secs end-->
							</div>




							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="posts-section">
									@if($alljob)
										@foreach($alljob as $alljob)
										<div class="post-bar posty">
											<div class="post_topbar">
												<div class="usy-dt">
													<img src="images/resources/{{$alljob->user->avatar}}">
													<div class="usy-name">
														<h3>{{$alljob->user->name}}</h3>
														<span><i class="fas fa-clock mr-2"></i>{{$alljob->updated_at}}</span>
													</div>
												</div>
												<div class="ed-opts">
													<a href="#" title="" class="ed-opts-open "><i class="la la-ellipsis-v"></i></a>
													@if($alljob->user->id == Auth::id())
													<ul class="ed-options">
														<li><a href="#" title="">Chinhr sửa</a></li>
														<li><a href="#" title="">Xóa</a></li>
													</ul>
													@endif
												</div>
											</div>
											<div class="epi-sec">
												<ul class="descp">
													<li><img src="images/icon8.png" alt=""><span>{{$alljob->time_off}}</span></li>
													<li><img src="images/icon9.png" alt=""><span>{{$alljob->location}}</span></li>
												</ul>
												<ul class="bk-links d-none">
													<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
													<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
												</ul>
											</div>
											<div class="job_descp">
												<h3>{{$alljob->title}}</h3>
												<ul class="job-dt">
													@if($alljob->type_job == 1)
													<li><a href="#" title="">Full Time</a></li>
													@else
													<li><a href="#" title="">Part Time</a></li>
													@endif
													<li><span>{{$alljob->salary}}đ / giờ</span></li>
												</ul>
												<p>{!!$alljob->description!!}</p>
												<a href="/client/detailjob/{{$alljob->id}}">chi tiết</a>
												<ul class="skill-tags">
													@foreach($feedskill as $fskill)
													@if($fskill->id_feed == $alljob->id)
													<li><a href="#" title="">{{$fskill->skill->name}}</a></li>
													@endif
													@endforeach	
												</ul>
											</div>
											<div class="job-status-bar">
												<ul class="like-com">
													<li>
														<a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
														<img src="images/liked-img.png" alt="">
														<span>25</span>
													</li>
													<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
												</ul>
												<a href="#"><i class="fas fa-eye"></i>Views 50</a>
											</div>
										
										</div><!--post-bar end-->
										@endforeach
									@endif

										<div class="process-comm">
											<div class="spinner">
												<div class="bounce1"></div>
												<div class="bounce2"></div>
												<div class="bounce3"></div>
											</div>
										</div><!--process-comm end-->
									</div><!--posts-section end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div class="right-sidebar">
									<div class="widget widget-about">
										<img src="images/quangcao.jpg" alt="">
										
									</div><!--widget-about end-->
									<div class="widget widget-jobs">
										<div class="sd-title">
											<h3>Top Jobs</h3>
											<i class="la la-ellipsis-v"></i>
										</div>
										<div class="jobs-list">
											<div class="job-info">
												<div class="job-details">
													<h3>Senior Product Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Senior UI / UX Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Junior Seo Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Senior PHP Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Senior Developer Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
										</div><!--jobs-list end-->
									</div><!--widget-jobs end-->
									<div class="widget widget-jobs">
										<div class="sd-title">
											<h3>Most Viewed This Week</h3>
											<i class="la la-ellipsis-v"></i>
										</div>
										<div class="jobs-list">
											<div class="job-info">
												<div class="job-details">
													<h3>Senior Product Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Senior UI / UX Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Junior Seo Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
										</div><!--jobs-list end-->
									</div><!--widget-jobs end-->
								</div><!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>

		</div><!--post-project-popup end-->


@endsection