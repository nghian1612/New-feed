@extends('client.layout.master')
@section('content')

@foreach($profile as $pro)
<main>
	<div class="main-section">
		<div class="container">
			<div class="main-section-data">
				<div class="row">
					<div class="col-lg-3 col-md-4 pd-left-none no-pd">
						<div class="main-left-sidebar no-margin">
							<div class="user-data full-width">
								<div class="user-profile">
									<div class="username-dt">
										<div class="usr-pic">
											<img src="images/resources/{{$pro->avatar}}" alt="">
										</div>
									</div><!--username-dt end-->
									<div class="user-specs">
										<h3>{{$pro->name}}</h3>
										<span>{{$pro->title}}</span>
									</div>
								</div><!--user-profile end-->
								<ul class="user-fw-status">
									<li>
										<h4>Following</h4>
										<span>{{$countFollowing}}</span>
									</li>
									<li>
										<h4>Followers</h4>
										<span>{{$countFollowed}}</span>
									</li>
									<li>
										<a href="client/profile/{{$pro->id}}" title="">View Profile</a>
									</li>
								</ul>
							</div><!--user-data end-->
							<div class="suggestions full-width">
								<div class="sd-title">
									<h3>Suggestions</h3>
									<i class="la la-ellipsis-v"></i>
								</div><!--sd-title end-->
								<div class="suggestions-list">
									<div class="suggestion-usd">
										<img src="images/resources/s1.png" alt="">
										<div class="sgt-text">
											<h4>Jessica William</h4>
											<span>Graphic Designer</span>
										</div>
										<span><i class="la la-plus"></i></span>
									</div>
									<div class="suggestion-usd">
										<img src="images/resources/s2.png" alt="">
										<div class="sgt-text">
											<h4>John Doe</h4>
											<span>PHP Developer</span>
										</div>
										<span><i class="la la-plus"></i></span>
									</div>
									<div class="suggestion-usd">
										<img src="images/resources/s3.png" alt="">
										<div class="sgt-text">
											<h4>Poonam</h4>
											<span>Wordpress Developer</span>
										</div>
										<span><i class="la la-plus"></i></span>
									</div>
									<div class="suggestion-usd">
										<img src="images/resources/s4.png" alt="">
										<div class="sgt-text">
											<h4>Bill Gates</h4>
											<span>C & C++ Developer</span>
										</div>
										<span><i class="la la-plus"></i></span>
									</div>
									<div class="suggestion-usd">
										<img src="images/resources/s5.png" alt="">
										<div class="sgt-text">
											<h4>Jessica William</h4>
											<span>Graphic Designer</span>
										</div>
										<span><i class="la la-plus"></i></span>
									</div>
									<div class="suggestion-usd">
										<img src="images/resources/s6.png" alt="">
										<div class="sgt-text">
											<h4>John Doe</h4>
											<span>PHP Developer</span>
										</div>
										<span><i class="la la-plus"></i></span>
									</div>
									<div class="view-more">
										<a href="#" title="">View More</a>
									</div>
								</div><!--suggestions-list end-->
							</div><!--suggestions end-->
							<div class="tags-sec full-width">
								<ul>
									<li><a href="#" title="">Help Center</a></li>
									<li><a href="#" title="">About</a></li>
									<li><a href="#" title="">Privacy Policy</a></li>
									<li><a href="#" title="">Community Guidelines</a></li>
									<li><a href="#" title="">Cookies Policy</a></li>
									<li><a href="#" title="">Career</a></li>
									<li><a href="#" title="">Language</a></li>
									<li><a href="#" title="">Copyright Policy</a></li>
								</ul>
								<div class="cp-sec">
									<img src="images/logo2.png" alt="">
									<p><img src="images/cp.png" alt="">Copyright 2019</p>
								</div>
							</div><!--tags-sec end-->
						</div><!--main-left-sidebar end-->
					</div>
					<div class="col-lg-6 col-md-8 no-pd">
						<div class="main-ws-sec">
							<div class="posts-section">
							<div class="top-profiles">
									<div class="pf-hd">
										<h3>Top Profiles</h3>
										<i class="la la-ellipsis-v"></i>
									</div>
									<div class="profiles-slider">
										<div class="user-profy">
											<img src="images/resources/user1.png" alt="">
											<h3>John Doe</h3>
											<span>Graphic Designer</span>
											<ul>
												<li><a href="#" title="" class="followw">Follow</a></li>
												<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
												<li><a href="#" title="" class="hire">hire</a></li>
											</ul>
											<a href="#" title="">View Profile</a>
										</div><!--user-profy end-->
										<div class="user-profy">
											<img src="images/resources/user2.png" alt="">
											<h3>John Doe</h3>
											<span>Graphic Designer</span>
											<ul>
												<li><a href="#" title="" class="followw">Follow</a></li>
												<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
												<li><a href="#" title="" class="hire">hire</a></li>
											</ul>
											<a href="#" title="">View Profile</a>
										</div><!--user-profy end-->
										<div class="user-profy">
											<img src="images/resources/user3.png" alt="">
											<h3>John Doe</h3>
											<span>Graphic Designer</span>
											<ul>
												<li><a href="#" title="" class="followw">Follow</a></li>
												<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
												<li><a href="#" title="" class="hire">hire</a></li>
											</ul>
											<a href="#" title="">View Profile</a>
										</div><!--user-profy end-->
										<div class="user-profy">
											<img src="images/resources/user1.png" alt="">
											<h3>John Doe</h3>
											<span>Graphic Designer</span>
											<ul>
												<li><a href="#" title="" class="followw">Follow</a></li>
												<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
												<li><a href="#" title="" class="hire">hire</a></li>
											</ul>
											<a href="#" title="">View Profile</a>
										</div><!--user-profy end-->
										<div class="user-profy">
											<img src="images/resources/user2.png" alt="">
											<h3>John Doe</h3>
											<span>Graphic Designer</span>
											<ul>
												<li><a href="#" title="" class="followw">Follow</a></li>
												<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
												<li><a href="#" title="" class="hire">hire</a></li>
											</ul>
											<a href="#" title="">View Profile</a>
										</div><!--user-profy end-->
										<div class="user-profy">
											<img src="images/resources/user3.png" alt="">
											<h3>John Doe</h3>
											<span>Graphic Designer</span>
											<ul>
												<li><a href="#" title="" class="followw">Follow</a></li>
												<li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
												<li><a href="#" title="" class="hire">hire</a></li>
											</ul>
											<a href="#" title="">View Profile</a>
										</div><!--user-profy end-->
									</div><!--profiles-slider end-->
								</div><!--top-profiles end-->
								@foreach($allfeed as $allf)
									@foreach($userFollowing as $userflw)
										@if($allf->id_user == $userflw->id_mid)
											@if($allf->type_feed == 1)
											<div class="posty mb-3">
												<div class="post-bar no-margin">
													<div class="post_topbar">
														<div class="usy-dt">
															<img src="images/resources/{{$allf->user->avatar}}" alt="">
															<div class="usy-name">
																<h3>{{$allf->user->name}}</h3>
																<span><img src="images/clock.png" alt="">3 min ago</span>
															</div>
														</div>
														<div class="ed-opts">
															<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
															@if($allf->id_user == Auth::id())
															<ul class="ed-options">
																<li><a href="#" title="">Chỉnh sửa</a></li>
																<li><a href="client/deletefeed/{{$allf->id}}" title="">Xóa</a></li>
															</ul>
															@endif
														</div>
													</div>
													<div class="epi-sec">
														<ul class="descp">
															<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
															<li><img src="images/icon9.png" alt=""><span>{{$allf->location}}</span></li>
														</ul>
													</div>
													<div class="job_descp">
														<h3>{{$allf->title}}</h3>
														<ul class="job-dt">
															@if($allf->type_job == 1)
															<li><a href="#" title="">Full Time</a></li>
															@else
															<li><a href="#" title="">Part Time</a></li>
															@endif
															<li><span>{{$allf->salary}}đ / tháng</span></li>
														</ul>
														<p>{!!$allf->description!!}<br><a href="/client/detailjob/{{$allf->id}}" title="">view more</a></p>
														<ul class="skill-tags">
															@foreach($feedskill as $fskill)
															@if($fskill->id_feed == $allf->id)
															<li><a href="#" title="">{{$fskill->skill->name}}</a></li>
															@endif
															@endforeach	
														</ul>
													</div>
													<div class="job-status-bar">
														<ul class="like-com">
															<li>
																<a href="client/likefeed/{{$allf->id}}"><i class="fas fa-heart"></i> Like</a>
																<img src="images/liked-img.png" alt="">
																<span>25</span>
															</li> 
															<li><a class="com"><i class="fas fa-comment-alt"></i> 
																Comment 
																<?php 
																	$i = [];
																	foreach($comments as $comment)
																	{
																		if($comment->id_feed == $allf->id){
																			array_push($i,$comment->id_feed);
																		}
																	}
																	echo count($i);
																?>
																
															</a></li>
														</ul>
														<a href="#"><i class="fas fa-eye"></i>Views 50</a>
													</div>									
												</div><!--post-bar end-->
												<div class="comment-section">
														<div class="comment-sec">
															<ul>
															@foreach($comments as $comment)
																@if($comment->id_feed == $allf->id)
																<li>
																	<div class="comment-list">
																		<div class="bg-img">
																			<img src="images/resources/{{$comment->user->avatar}}" alt="" style="min-width:40px;">
																		</div>
																		<div class="comment">
																			<h3>{{$comment->user->name}}</h3>
																			<span><img src="images/clock.png" alt=""> 3 min ago</span>
																			<p>{{$comment->comment}}</p>
																		</div>
																	</div><!--comment-list end-->
																</li>
																@endif
															@endforeach
															</ul>
														</div><!--comment-sec end-->
														<div class="post-comment">
															<div class="cm_img">
																<img src="images/resources/bg-img4.png" alt="">
															</div>
															<div class="comment_box">
																<form action="{{url('/client/addcomment')}}" method="post">
																	<input type="hidden" value="{{csrf_token()}}" name="_token">
																	<input type="hidden" value="{{$allf->id}}" name="idfeed">
																	<input type="text" placeholder="Post a comment" name="comment">
																	<button type="submit">Send</button>
																</form>
															</div>
														</div><!--post-comment end-->
													</div><!--comment-section end-->
												</div>
											@elseif($allf->type_feed == 2)
											<div class="posty mb-3">
												<div class="post-bar no-margin">
													<div class="post_topbar">
														<div class="usy-dt">
															<img src="images/resources/{{$allf->user->avatar}}" alt="">
															<div class="usy-name">
																<h3>{{$allf->user->name}}</h3>
																<span><img src="images/clock.png" alt="">3 min ago</span>
															</div>
														</div>
														<div class="ed-opts">
															<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
															@if($allf->id_user == Auth::id())
															<ul class="ed-options">
																<li><a href="#" title="">Chỉnh sửa</a></li>
																<li><a href="client/deletefeed/{{$allf->id}}" title="">Xóa</a></li>
															</ul>
															@endif
														</div>
													</div>
													<div class="job_descp">
														<h3>{{$allf->title}}</h3>
														<p>{!!$allf->description!!}<br><a href="/client/detailpost/{{$allf->id}}" title="">view more</a></p>
														<ul class="skill-tags">
															@foreach($feedskill as $fskill)
															@if($fskill->id_feed == $allf->id)
															<li><a href="#" title="">{{$fskill->skill->name}}</a></li>
															@endif
															@endforeach		
														</ul>
														<img src="images/feedimage/{{$allf->image}}" alt="">
													</div>
													<div class="job-status-bar">
														<ul class="like-com">
															<li>
																<a href="client/likefeed/{{$allf->id}}"><i class="fas fa-heart"></i> Like</a>
																<img src="images/liked-img.png" alt="">
																<span>25</span>
															</li> 
															<li><a class="com"><i class="fas fa-comment-alt"></i> Comment 
															<?php 
																	$i = [];
																	foreach($comments as $comment)
																	{
																		if($comment->id_feed == $allf->id){
																			array_push($i,$comment->id_feed);
																		}
																	}
																	echo count($i);
																?>
															</a></li>
														</ul>
														<a href="#"><i class="fas fa-eye"></i>Views 50</a>
													</div>
												</div><!--post-bar end-->
												<div class="comment-section">
													<div class="comment-sec">
														<ul>
														@foreach($comments as $comment)
																@if($comment->id_feed == $allf->id)
																<li>
																	<div class="comment-list">
																		<div class="bg-img">
																			<img src="images/resources/{{$comment->user->avatar}}" alt="" style="min-width:40px;">
																		</div>
																		<div class="comment">
																			<h3>{{$comment->user->name}}</h3>
																			<span><img src="images/clock.png" alt=""> 3 min ago</span>
																			<p>{{$comment->comment}}</p>
																		</div>
																	</div><!--comment-list end-->
																</li>
																@endif
															@endforeach
														</ul>
													</div><!--comment-sec end-->
													<div class="post-comment">
														<div class="cm_img">
															<img src="images/resources/bg-img4.png" alt="">
														</div>
														<div class="comment_box">
															<form action="{{url('/client/addcomment')}}" method="post">
																<input type="hidden" value="{{csrf_token()}}" name="_token">
																<input type="hidden" value="{{$allf->id}}" name="idfeed">
																<input type="text" placeholder="Post a comment" name="comment">
																<button type="submit">Send</button>
															</form>
														</div>
													</div><!--post-comment end-->
												</div><!--comment-section end-->
											</div>
											@endif
										@elseif($allf->id_user == Auth::id())
										@if($allf->type_feed == 1)
											<div class="posty mb-3">
												<div class="post-bar no-margin">
													<div class="post_topbar">
														<div class="usy-dt">
															<img src="images/resources/{{$allf->user->avatar}}" alt="">
															<div class="usy-name">
																<h3>{{$allf->user->name}}</h3>
																<span><img src="images/clock.png" alt="">3 min ago</span>
															</div>
														</div>
														<div class="ed-opts">
															<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
															@if($allf->id_user == Auth::id())
															<ul class="ed-options">
																<li><a href="#" title="">Chỉnh sửa</a></li>
																<li><a href="client/deletefeed/{{$allf->id}}" title="">Xóa</a></li>
															</ul>
															@endif
														</div>
													</div>
													<div class="epi-sec">
														<ul class="descp">
															<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
															<li><img src="images/icon9.png" alt=""><span>{{$allf->location}}</span></li>
														</ul>
													</div>
													<div class="job_descp">
														<h3>{{$allf->title}}</h3>
														<ul class="job-dt">
															@if($allf->type_job == 1)
															<li><a href="#" title="">Full Time</a></li>
															@else
															<li><a href="#" title="">Part Time</a></li>
															@endif
															<li><span>{{$allf->salary}}đ / tháng</span></li>
														</ul>
														<p>{!!$allf->description!!}<br><a href="/client/detailjob/{{$allf->id}}" title="">view more</a></p>
														<ul class="skill-tags">
															@foreach($feedskill as $fskill)
															@if($fskill->id_feed == $allf->id)
															<li><a href="#" title="">{{$fskill->skill->name}}</a></li>
															@endif
															@endforeach	
														</ul>
													</div>
													<div class="job-status-bar">
														<ul class="like-com">
															<li>
																<a href="client/likefeed/{{$allf->id}}"><i class="fas fa-heart"></i> Like</a>
																<img src="images/liked-img.png" alt="">
																<span>25</span>
															</li> 
															<li><a class="com"><i class="fas fa-comment-alt"></i> 
																Comment 
																<?php 
																	$i = [];
																	foreach($comments as $comment)
																	{
																		if($comment->id_feed == $allf->id){
																			array_push($i,$comment->id_feed);
																		}
																	}
																	echo count($i);
																?>
																
															</a></li>
														</ul>
														<a href="#"><i class="fas fa-eye"></i>Views 50</a>
													</div>									
												</div><!--post-bar end-->
												<div class="comment-section">
														<div class="comment-sec">
															<ul>
															@foreach($comments as $comment)
																@if($comment->id_feed == $allf->id)
																<li>
																	<div class="comment-list">
																		<div class="bg-img">
																			<img src="images/resources/{{$comment->user->avatar}}" alt="" style="min-width:40px;">
																		</div>
																		<div class="comment">
																			<h3>{{$comment->user->name}}</h3>
																			<span><img src="images/clock.png" alt=""> 3 min ago</span>
																			<p>{{$comment->comment}}</p>
																		</div>
																	</div><!--comment-list end-->
																</li>
																@endif
															@endforeach
															</ul>
														</div><!--comment-sec end-->
														<div class="post-comment">
															<div class="cm_img">
																<img src="images/resources/bg-img4.png" alt="">
															</div>
															<div class="comment_box">
																<form action="{{url('/client/addcomment')}}" method="post">
																	<input type="hidden" value="{{csrf_token()}}" name="_token">
																	<input type="hidden" value="{{$allf->id}}" name="idfeed">
																	<input type="text" placeholder="Post a comment" name="comment">
																	<button type="submit">Gửi</button>
																</form>
															</div>
														</div><!--post-comment end-->
													</div><!--comment-section end-->
												</div>
											@elseif($allf->type_feed == 2)
											<div class="posty mb-3">
												<div class="post-bar no-margin">
													<div class="post_topbar">
														<div class="usy-dt">
															<img src="images/resources/{{$allf->user->avatar}}" alt="">
															<div class="usy-name">
																<h3>{{$allf->user->name}}</h3>
																<span><img src="images/clock.png" alt="">3 min ago</span>
															</div>
														</div>
														<div class="ed-opts">
															<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
															@if($allf->id_user == Auth::id())
															<ul class="ed-options">
																<li><a href="#" title="">Chỉnh sửa</a></li>
																<li><a href="client/deletefeed/{{$allf->id}}" title="">Xóa</a></li>
															</ul>
															@endif
														</div>
													</div>
													<div class="job_descp">
														<h3>{{$allf->title}}</h3>
														<p>{!!$allf->description!!}<br><a href="/client/detailpost/{{$allf->id}}" title="">view more</a></p>
														<ul class="skill-tags">
															@foreach($feedskill as $fskill)
															@if($fskill->id_feed == $allf->id)
															<li><a href="#" title="">{{$fskill->skill->name}}</a></li>
															@endif
															@endforeach		
														</ul>
														<img src="images/feedimage/{{$allf->image}}" alt="">
													</div>
													<div class="job-status-bar">
														<ul class="like-com">
															<li>
																<a href="client/likefeed/{{$allf->id}}"><i class="fas fa-heart"></i> Like</a>
																<img src="images/liked-img.png" alt="">
																<span>25</span>
															</li> 
															<li><a class="com"><i class="fas fa-comment-alt"></i> Comment 
															<?php 
																	$i = [];
																	foreach($comments as $comment)
																	{
																		if($comment->id_feed == $allf->id){
																			array_push($i,$comment->id_feed);
																		}
																	}
																	echo count($i);
																?>
															</a></li>
														</ul>
														<a href="#"><i class="fas fa-eye"></i>Views 50</a>
													</div>
												</div><!--post-bar end-->
												<div class="comment-section">
													<div class="comment-sec">
														<ul>
														@foreach($comments as $comment)
																@if($comment->id_feed == $allf->id)
																<li>
																	<div class="comment-list">
																		<div class="bg-img">
																			<img src="images/resources/{{$comment->user->avatar}}" alt="" style="min-width:40px;">
																		</div>
																		<div class="comment">
																			<h3>{{$comment->user->name}}</h3>
																			<span><img src="images/clock.png" alt=""> 3 min ago</span>
																			<p>{{$comment->comment}}</p>
																		</div>
																	</div><!--comment-list end-->
																</li>
																@endif
															@endforeach
														</ul>
													</div><!--comment-sec end-->
													<div class="post-comment">
														<div class="cm_img">
															<img src="images/resources/bg-img4.png" alt="">
														</div>
														<div class="comment_box">
															<form action="{{url('/client/addcomment')}}" method="post">
																<input type="hidden" value="{{csrf_token()}}" name="_token">
																<input type="hidden" value="{{$allf->id}}" name="idfeed">
																<input type="text" placeholder="Post a comment" name="comment">
																<button type="submit">Send</button>
															</form>
														</div>
													</div><!--post-comment end-->
												</div><!--comment-section end-->
											</div>
											@endif				
										@endif
									@endforeach
								@endforeach

								
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
					<div class="col-lg-3 pd-right-none no-pd">
						<div class="right-sidebar">
							<div class="widget widget-about">
								<img src="images/wd-logo.png" alt="">
								<h3>Track Time on Workwise</h3>
								<span>Pay only for the Hours worked</span>
								<div class="sign_link">
									<h3><a href="sign-in.html" title="">Sign up</a></h3>
									<a href="#" title="">Learn More</a>
								</div>
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
							<div class="widget suggestions full-width">
								<div class="sd-title">
									<h3>Most Viewed People</h3>
									<i class="la la-ellipsis-v"></i>
								</div><!--sd-title end-->
								<div class="suggestions-list">
									<div class="suggestion-usd">
										<img src="images/resources/s1.png" alt="">
										<div class="sgt-text">
											<h4>Jessica William</h4>
											<span>Graphic Designer</span>
										</div>
										<span><i class="la la-plus"></i></span>
									</div>
									<div class="suggestion-usd">
										<img src="images/resources/s2.png" alt="">
										<div class="sgt-text">
											<h4>John Doe</h4>
											<span>PHP Developer</span>
										</div>
										<span><i class="la la-plus"></i></span>
									</div>
									<div class="suggestion-usd">
										<img src="images/resources/s3.png" alt="">
										<div class="sgt-text">
											<h4>Poonam</h4>
											<span>Wordpress Developer</span>
										</div>
										<span><i class="la la-plus"></i></span>
									</div>
									<div class="suggestion-usd">
										<img src="images/resources/s4.png" alt="">
										<div class="sgt-text">
											<h4>Bill Gates</h4>
											<span>C &amp; C++ Developer</span>
										</div>
										<span><i class="la la-plus"></i></span>
									</div>
									<div class="suggestion-usd">
										<img src="images/resources/s5.png" alt="">
										<div class="sgt-text">
											<h4>Jessica William</h4>
											<span>Graphic Designer</span>
										</div>
										<span><i class="la la-plus"></i></span>
									</div>
									<div class="suggestion-usd">
										<img src="images/resources/s6.png" alt="">
										<div class="sgt-text">
											<h4>John Doe</h4>
											<span>PHP Developer</span>
										</div>
										<span><i class="la la-plus"></i></span>
									</div>
									<div class="view-more">
										<a href="#" title="">View More</a>
									</div>
								</div><!--suggestions-list end-->
							</div>
						</div><!--right-sidebar end-->
					</div>
				</div>
			</div><!-- main-section-data end-->
		</div> 
	</div>
</main>

@endforeach
@endsection



@section('script')
<script>



// Begin Action form feedshare
$(document).ready(function(){
	$('#country_name_1').keyup(function(){ //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
 		var query = $(this).val(); //lấy gía trị ng dùng gõ
 		if(query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
		{	
			console.log(query);
			var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
			$.ajax({
				url:"{{ route('search') }}", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
				method:"POST", // phương thức gửi dữ liệu.
				data:{query:query, _token:_token},
				success:function(data){ //dữ liệu nhận về
					$('#countryList_1').fadeIn();  
					$('#countryList_1').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là countryList
				}
			});
		}
	});
	var grpskill = [];
	$(document).on('click', '.w-skill', function(){
		$('#country_name_1').val($(this).text());
		$('#countryList_1').fadeOut();  
		console.log($('#country_name_1').val());
		var skill = $('#country_name_1').val();
		grpskill.push(skill);
		console.log(grpskill);
		$('#skills_changed_1').append('<li class="w-skillch"><input type="checkbox" name="grpskill[]" value="'+skill+'" checked="checked"></li>');
		return grpskill;
	}); 
	$(document).on('click', '.w-skillch', function(){
		var skill = $(this).text();
		var i = grpskill.indexOf(skill);
		if (i != -1) {
			grpskill.splice(i,1);
			console.log(grpskill);
			return grpskill;
		}
		$($(this)).remove();	
	});
	$(document).on('click','#an_1',function(){
		$(".post-popup.wh_post").removeClass("active");
		$(".wrapper").removeClass("overlay");
	});
});
$(".feed_wh").on("click", function(){
	$(".post-popup.wh_post").addClass("active");
	$(".wrapper").addClass("overlay");
	return false;
});
$(".post-project > a").on("click", function(){
	$(".post-popup.wh_post").removeClass("active");
	$(".wrapper").removeClass("overlay");
	return false;
});
// End Action form feedshare


$(document).ready(function(){
	$('.comment-section').hide();
	$(".post-bar > .job-status-bar > .like-com > li > .com").on("click", function(){
		$(this).parentsUntil(".posty").next('.comment-section').slideToggle();
	})
});

</script>
@endsection