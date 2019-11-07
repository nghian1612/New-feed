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
							<div class="post-topbar">
								<div class="user-picy">
									<img src="images/resources/{{$pro->avatar}}" alt="">
								</div>
								<div class="post-st">
									<ul>
										<li><a class="feed_job" href="#" title="">Việc làm</a></li>
									
										<li><a class="feed_wh" href="#" title="">Hỏi đáp cộng đồng</a></li>
									</ul>
								</div><!--post-st end-->
							</div><!--post-topbar end-->
							<div class="posts-section">
								@foreach($allfeed as $allf)
									@foreach($userFollowing as $userflw)
										@if($allf->id_user == $userflw->id_mid || $allf->id_user == Auth::id())
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
												<!-- <ul class="bk-links">
													<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
													<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
												</ul> -->
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
												<p>{!!$allf->description!!}<br><a href="#" title="">view more</a></p>
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
													<li><a class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
												</ul>
												<a href="#"><i class="fas fa-eye"></i>Views 50</a>
											</div>
											
										</div><!--post-bar end-->
										<div class="comment-section">
												<div class="comment-sec">
													<ul>
														<li>
															<div class="comment-list">
																<div class="bg-img">
																	<img src="images/resources/bg-img4.png" alt="" style="min-width:40px;">
																</div>
																<div class="comment">
																	<h3>John Doe</h3>
																	<span><img src="images/clock.png" alt=""> 3 min ago</span>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
																</div>
															</div><!--comment-list end-->
														</li>
													</ul>
												</div><!--comment-sec end-->
												<div class="post-comment">
													<div class="cm_img">
														<img src="images/resources/bg-img4.png" alt="">
													</div>
													<div class="comment_box">
														<form>
															<input type="text" placeholder="Post a comment">
															<button type="submit">Send</button>
														</form>
													</div>
												</div><!--post-comment end-->
											</div><!--comment-section end-->
										</div>
										@elseif($allf->type_feed == 2)
									<div class="posty">
										<div class="post-bar">
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
											<!-- <div class="epi-sec">
												<ul class="bk-links">
													<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
													<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
												</ul>
											</div> -->
											<div class="job_descp">
												<h3>{{$allf->title}}</h3>
												<p>{{$allf->description}}</p>
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
													<li><a class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
												</ul>
												<a href="#"><i class="fas fa-eye"></i>Views 50</a>
											</div>
										</div><!--post-bar end-->
										<div class="comment-section">
											<div class="comment-sec">
												<ul>
													<li>
														<div class="comment-list">
															<div class="bg-img">
																<img src="images/resources/bg-img4.png" alt="" style="min-width:40px;">
															</div>
															<div class="comment">
																<h3>John Doe</h3>
																<span><img src="images/clock.png" alt=""> 3 min ago</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
															</div>
														</div><!--comment-list end-->
													</li>
												</ul>
											</div><!--comment-sec end-->
											<div class="post-comment">
												<div class="cm_img">
													<img src="images/resources/bg-img4.png" alt="">
												</div>
												<div class="comment_box">
													<form>
														<input type="text" placeholder="Post a comment">
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
								<div class="post-bar">
									<div class="post_topbar">
										<div class="usy-dt">
											<img src="images/resources/us-pic.png" alt="">
											<div class="usy-name">
												<h3>John Doe</h3>
												<span><img src="images/clock.png" alt="">3 min ago</span>
											</div>
										</div>
										<div class="ed-opts">
											<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
											<ul class="ed-options">
												<li><a href="#" title="">Edit Post</a></li>
												<li><a href="#" title="">Unsaved</a></li>
												<li><a href="#" title="">Unbid</a></li>
												<li><a href="#" title="">Close</a></li>
												<li><a href="#" title="">Hide</a></li>
											</ul>
										</div>
									</div>
									<div class="epi-sec">
										<ul class="descp">
											<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
											<li><img src="images/icon9.png" alt=""><span>India</span></li>
										</ul>
										<ul class="bk-links">
											<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
											<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
										</ul>
									</div>
									<div class="job_descp">
										<h3>Senior Wordpress Developer</h3>
										<ul class="job-dt">
											<li><a href="#" title="">Full Time</a></li>
											<li><span>$30 / hr</span></li>
										</ul>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
										<ul class="skill-tags">
											<li><a href="#" title="">HTML</a></li>
											<li><a href="#" title="">PHP</a></li>
											<li><a href="#" title="">CSS</a></li>
											<li><a href="#" title="">Javascript</a></li>
											<li><a href="#" title="">Wordpress</a></li> 	
										</ul>
									</div>
									<div class="job-status-bar">
										<ul class="like-com">
											<li>
												<a href="#"><i class="fas fa-heart"></i> Like</a>
												<img src="images/liked-img.png" alt="">
												<span>25</span>
											</li> 
											<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
										</ul>
										<a href="#"><i class="fas fa-eye"></i>Views 50</a>
									</div>
								</div><!--post-bar end-->
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
								<div class="post-bar">
									<div class="post_topbar">
										<div class="usy-dt">
											<img src="images/resources/us-pic.png" alt="">
											<div class="usy-name">
												<h3>John Doe</h3>
												<span><img src="images/clock.png" alt="">3 min ago</span>
											</div>
										</div>
										<div class="ed-opts">
											<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
											<ul class="ed-options">
												<li><a href="#" title="">Edit Post</a></li>
												<li><a href="#" title="">Unsaved</a></li>
												<li><a href="#" title="">Unbid</a></li>
												<li><a href="#" title="">Close</a></li>
												<li><a href="#" title="">Hide</a></li>
											</ul>
										</div>
									</div>
									<div class="epi-sec">
										<ul class="descp">
											<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
											<li><img src="images/icon9.png" alt=""><span>India</span></li>
										</ul>
										<ul class="bk-links">
											<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
											<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
											<li><a href="#" title="" class="bid_now">Bid Now</a></li>
										</ul>
									</div>
									<div class="job_descp">
										<h3>Senior Wordpress Developer</h3>
										<ul class="job-dt">
											<li><a href="#" title="">Full Time</a></li>
											<li><span>$30 / hr</span></li>
										</ul>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
										<ul class="skill-tags">
											<li><a href="#" title="">HTML</a></li>
											<li><a href="#" title="">PHP</a></li>
											<li><a href="#" title="">CSS</a></li>
											<li><a href="#" title="">Javascript</a></li>
											<li><a href="#" title="">Wordpress</a></li> 	
										</ul>
									</div>
									<div class="job-status-bar">
										<ul class="like-com">
											<li>
												<a href="#"><i class="fas fa-heart"></i> Like</a>
												<img src="images/liked-img.png" alt="">
												<span>25</span>
											</li> 
											<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
										</ul>
										<a href="#"><i class="fas fa-eye"></i>Views 50</a>
									</div>
								</div><!--post-bar end-->
								<div class="posty">
									<div class="post-bar no-margin">
										<div class="post_topbar">
											<div class="usy-dt">
												<img src="images/resources/us-pc2.png" alt="">
												<div class="usy-name">
													<h3>John Doe</h3>
													<span><img src="images/clock.png" alt="">3 min ago</span>
												</div>
											</div>
											<div class="ed-opts">
												<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
												<ul class="ed-options">
													<li><a href="#" title="">Edit Post</a></li>
													<li><a href="#" title="">Unsaved</a></li>
													<li><a href="#" title="">Unbid</a></li>
													<li><a href="#" title="">Close</a></li>
													<li><a href="#" title="">Hide</a></li>
												</ul>
											</div>
										</div>
										<div class="epi-sec">
											<ul class="descp">
												<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
												<li><img src="images/icon9.png" alt=""><span>India</span></li>
											</ul>
											<ul class="bk-links">
												<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
												<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
											</ul>
										</div>
										<div class="job_descp">
											<h3>Senior Wordpress Developer</h3>
											<ul class="job-dt">
												<li><a href="#" title="">Full Time</a></li>
												<li><span>$30 / hr</span></li>
											</ul>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
											<ul class="skill-tags">
												<li><a href="#" title="">HTML</a></li>
												<li><a href="#" title="">PHP</a></li>
												<li><a href="#" title="">CSS</a></li>
												<li><a href="#" title="">Javascript</a></li>
												<li><a href="#" title="">Wordpress</a></li> 	
											</ul>
										</div>
										<div class="job-status-bar">
											<ul class="like-com">
												<li>
													<a href="#"><i class="fas fa-heart"></i> Like</a>
													<img src="images/liked-img.png" alt="">
													<span>25</span>
												</li> 
												<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
											</ul>
											<a href="#"><i class="fas fa-eye"></i>Views 50</a>
										</div>
									</div><!--post-bar end-->
									<div class="comment-section">
										<a href="#" class="plus-ic">
											<i class="la la-plus"></i>
										</a>
										<div class="comment-sec">
											<ul>
												<li>
													<div class="comment-list">
														<div class="bg-img">
															<img src="images/resources/bg-img4.png" alt="" style="min-width:40px;">
														</div>
														<div class="comment">
															<h3>John Doe</h3>
															<span><img src="images/clock.png" alt=""> 3 min ago</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
														</div>
													</div><!--comment-list end-->
												</li>
											</ul>
										</div><!--comment-sec end-->
										<div class="post-comment">
											<div class="cm_img">
												<img src="images/resources/bg-img4.png" alt="">
											</div>
											<div class="comment_box">
												<form>
													<input type="text" placeholder="Post a comment">
													<button type="submit">Send</button>
												</form>
											</div>
										</div><!--post-comment end-->
									</div><!--comment-section end-->
								</div><!--posty end-->
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




<!-- Form feed job -->
<div class="post-popup job_post">
	<div class="post-project">
		<h3>Đăng việc làm</h3>
		<div class="post-project-fields">
			<form autocomplete="off" action="{{url('/client/addjob')}}" method="post">
				<input type="hidden" value="{{csrf_token()}}" name="_token">
				<input type="hidden" name="type_feed" value="1">
				<div class="row">
					<div class="col-lg-12">
						<input type="text" name="title" placeholder="Tiêu đề">
					</div>
					<div class="col-lg-6">
						<input type="text" name="location" placeholder="Địa chỉ làm việc">
					</div>
					<div class="col-lg-6">
						<input type="number" name="level" placeholder="số năm kinh nghiệp">
					</div>
					<div class="col-lg-12">
						<ul id="skills_changed"></ul>
						<input type="text" name="skills" placeholder="Kỹ năng cần có" id="country_name">
						<div id="countryList"></div>
						{{ csrf_field() }}
					</div>
					<div class="col-lg-6">
						<div class="price-br">
							<input type="text" name="salary" placeholder="Mức lương">
							<i class="la la-dollar"></i>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="inp-field">
							<select name="typejob">
								<option value="1">Full Time</option>
								<option value="2">Part time</option>
							</select>
						</div>
					</div>
					<div class="col-lg-12">
						<textarea name="description" id="editor-feed-add" placeholder="Chi tiết công việc"></textarea>
					</div>
					<div class="col-lg-12">
						<ul>
							<li><button class="active" type="submit" value="post">Đăng bài</button></li>
							<li><a title="" id="an">Hủy</a></li>
						</ul>
					</div>
				</div>
			</form>
		</div><!--post-project-fields end-->
		<a href="#" title=""><i class="la la-times-circle-o"></i></a>
	</div>
</div>
<!-- Form feed job -->


<!-- Form feed project -->
<div class="post-popup wh_post">
	<div class="post-project">
		<h3>Chia sẻ cộng đồng</h3>
		<div class="post-project-fields">
			<form autocomplete="off" action="{{url('/client/addjob')}}" method="post" enctype="multipart/form-data">
				<input type="hidden" value="{{csrf_token()}}" name="_token">
				<input type="hidden" name="type_feed" value="2">
				<div class="row">
					<div class="col-lg-12">
						<input type="text" name="title" placeholder="Tiêu đề">
					</div>
					<div class="col-lg-12">
						<ul id="skills_changed_1"></ul>
						<input type="text" name="skills" placeholder="Kỹ năng liên quan" id="country_name_1">
						<div id="countryList_1"></div>
						{{ csrf_field() }}
					</div>
					<div class="col-lg-12">
						
							<input type="file" name="hinh" id="file">
						
					</div>
					<div class="col-lg-12">
						<textarea name="description" id="editor-feed-add-1" placeholder="Chi tiết"></textarea>
					</div>
					<div class="col-lg-12">
						<ul>
							<li><button class="active" type="submit" value="post">Đăng bài</button></li>
							<li><a title="" id="an_1">Hủy</a></li>
						</ul>
					</div>
				</div>
			</form>
		</div><!--post-project-fields end-->
		<a href="#" title=""><i class="la la-times-circle-o"></i></a>
	</div>
</div>
<!-- Form feed project -->


		@endforeach
@endsection



@section('script')
<script>
// Create ckeditor for form
CKEDITOR.replace( 'editor-feed-add' );
CKEDITOR.replace( 'editor-feed-add-1' );
// CKEDITOR.replace( 'editor-feed-add' );
// Create ckeditor for form


// Begin Action form feedjob
$(document).ready(function(){
	$('#country_name').keyup(function(){ //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
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
					$('#countryList').fadeIn();  
					$('#countryList').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là countryList
				}
			});
		}
	});
	var grpskill = [];
	$(document).on('click', '.w-skill', function(){
		$('#country_name').val($(this).text());
		$('#countryList').fadeOut();  
		console.log($('#country_name').val());
		var skill = $('#country_name').val();
		grpskill.push(skill);
		console.log(grpskill);
		$('#skills_changed').append('<li class="w-skillch"><input type="checkbox" name="grpskill[]" value="'+skill+'" checked="checked"></li>');
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
	$(document).on('click','#an',function(){
		$(".post-popup.job_post").removeClass("active");
		$(".wrapper").removeClass("overlay");
	});
});

$(".feed_job").on("click", function(){
	$(".post-popup.job_post").addClass("active");
	$(".wrapper").addClass("overlay");
	return false;
});
$(".post-project > a").on("click", function(){
	$(".post-popup.job_post").removeClass("active");
	$(".wrapper").removeClass("overlay");
	return false;
});
// End Action form feedjob


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