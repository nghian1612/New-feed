@extends('client.layout.master')
@section('content')
@foreach($profile as $pro)
@if(Auth::id()==$pro->id)

<section class="cover-sec">
	<img src="images/resources/{{$pro->background}}" alt=""> 
	<div class="add-pic-box">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-12 col-sm-12">					
					<input type="file" id="file">
					<label for="file">Đổi ảnh</label>				
				</div>
			</div>
		</div>
	</div>
</section>

<main>
	<div class="main-section">
		<div class="container">
			<div class="main-section-data">
				<div class="row">

					<div class="col-lg-3">
						<div class="main-left-sidebar">
							<div class="user_profile">
								<div class="user-pro-img">
									<img src="images/resources/{{$pro->avatar}}" alt="">
									<div class="add-dp" id="OpenImgUpload">
										<input type="file" id="file">
										<label for="file"><i class="fas fa-camera"></i></label>												
									</div>
								</div><!--user-pro-img end-->
								<h3>{{$pro->name}}</h3>
								<div class="star-descp">
									<span>{{$pro->title}}</span>
								</div><!--star-descp end-->
								<div class="user_pro_status">
									<ul class="flw-status">
										<li>
											<span>Following</span>
											<b>{{$countFollowing}}</b>
										</li>
										<li>
											<span>Followers</span>
											<b>{{$countFollowed}}</b>
										</li>
									</ul>
								</div><!--user_pro_status end-->
								<ul class="social_links">
									@foreach($externallink as $link)
									<li><a href="{{$link->link}}" title=""> {{$link->link}}</a></li>
									<!-- <li><a href="" title=""><i class="la la-globe"></i></a></li> -->
									@endforeach
									
								</ul>
							</div><!--user_profile end-->
							<div class="suggestions full-width">
								<div class="sd-title">
									<h3>People Viewed Profile</h3>
									<i class="la la-ellipsis-v"></i>
								</div><!--sd-title end-->
								<div class="suggestions-list">
								@foreach($follows as $fol)
									<div class="suggestion-usd">
										<img src="images/resources/{{$fol->user->avatar}}" alt="">
										<div class="sgt-text">
											<h4>{{$fol->user->name}}</h4>
											<span>{{$fol->user->title}}</span>
										</div>
										<span><i class="la la-plus"></i></span>
									</div>
								@endforeach
									<!-- <div class="view-more">
										<a href="#" title="">View More</a>
									</div> -->
								</div><!--suggestions-list end-->
							</div><!--suggestions end-->
						</div><!--main-left-sidebar end-->
					</div>

					<div class="col-lg-6">
						<div class="main-ws-sec">

							<div class="user-tab-sec rewivew">
								<div class="tab-feed st2 settingjb">
									<ul>
										<li data-tab="feed-dd" class="active">
											<a href="#" title="">
												<img src="images/ic1.png" alt="">
												<span>Feed</span>
											</a>
										</li>
										<li data-tab="info-dd">
											<a href="#" title="">
												<img src="images/ic2.png" alt="">
												<span>Info</span>
											</a>
										</li>
										<li data-tab="portfolio-dd">
											<a  title="">
												<img src="images/ic3.png" alt="">
												<span>Portfolio</span>
											</a>
										</li>	
									</ul>
								</div><!-- tab-feed end-->
							</div><!--user-tab-sec end-->

							<div class="product-feed-tab current" id="feed-dd">
								<div class="post-topbar">
									<div class="user-picy">
										<img src="images/resources/user-pro-img.png" alt="">
									</div>
										<div class="post-st">
											<ul>
												<li><a class="feed_job" href="#" title="">Việc làm</a></li>
											
												<li><a class="feed_wh" href="#" title="">Hỏi đáp cộng đồng</a></li>
											</ul>
										</div><!--post-st end-->
									</div><!--post-topbar end-->
								<div class="posts-section">
								@foreach($myfeeds as $mfeed)
									@if($mfeed->type_feed == 1)
									<div class="post-bar">
										<div class="post_topbar">
											<div class="usy-dt">
												<img src="images/resources/{{$mfeed->user->avatar}}" alt="">
												<div class="usy-name">
													<h3>{{$mfeed->user->name}}</h3>
													<span><img src="images/clock.png" alt="">3 min ago</span>
												</div>
											</div>
											<div class="ed-opts">
												<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
												<ul class="ed-options">
													<li><a href="#" title="">Edit Post</a></li>
													<li><a href="#" title="">Delete Post</a></li>
												</ul>
											</div>
										</div>
										<div class="epi-sec">
											<ul class="descp">
												<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
												<li><img src="images/icon9.png" alt=""><span>{{$mfeed->location}}</span></li>
											</ul>
											<ul class="bk-links">
												<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
												<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
											</ul>
										</div>
										<div class="job_descp">
											<h3>{{$mfeed->title}}</h3>
											<ul class="job-dt">
												@if($mfeed->type_job == 1)
												<li><a href="#" title="">Full Time</a></li>
												@else
												<li><a href="#" title="">Part Time</a></li>
												@endif
												<li><span>{{$mfeed->salary}}đ / tháng</span></li>
											</ul>
											<p>{{$mfeed->description}}<br><a href="#" title="">view more</a></p>
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
										<!-- <div class="comment-content close">
											<div class="post_topbar post-reply">
												<div class="usy-dt">
													<img src="images/resources/bg-img4.png" alt="">
													<div class="usy-name">
														<h3>John Doe</h3><span><i class="la la-clock-o"></i>3 min ago</span>	
														<div class="epi-sec epi2">									   
															<p class="tahnks">Thanks :)</p>
														</div>
													</div>
												</div>
											</div>
											<div class="post_topbar rep-post rep-thanks">
												<hr>
												<div class="usy-dt">
													<img src="images/resources/bg-img4.png" alt="">														
													<input class="reply" type="text" placeholder="Reply">
													<a class="replybtn" href="#">Send</a>
												</div>
											</div>
										</div> -->
									</div><!--post-bar end-->
									@elseif($mfeed->type_feed == 2)
									<div class="post-bar">
										<div class="post_topbar">
											<div class="usy-dt">
												<img src="images/resources/{{$mfeed->user->avatar}}" alt="">
												<div class="usy-name">
													<h3>{{$mfeed->user->name}}</h3>
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
											<ul class="bk-links">
												<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
												<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
											</ul>
										</div>
										<div class="job_descp">
											<h3>{{$mfeed->title}}</h3>
											<p>{{$mfeed->description}}<br><a href="{{$mfeed->link_project}}" title="" target="blank">{{$mfeed->link_project}}</a></p>
											<ul class="skill-tags">
												<li><a href="#" title="">HTML</a></li>
												<li><a href="#" title="">PHP</a></li>
												<li><a href="#" title="">CSS</a></li>
												<li><a href="#" title="">Javascript</a></li>
												<li><a href="#" title="">Wordpress</a></li> 	
											</ul>
											<img src="images/resources/{{$mfeed->image}}" alt="">
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
										<!-- <div class="comment-content close">
											<div class="post_topbar post-reply">
												<div class="usy-dt">
													<img src="images/resources/bg-img4.png" alt="">
													<div class="usy-name">
														<h3>John Doe</h3><span><i class="la la-clock-o"></i>3 min ago</span>	
														<div class="epi-sec epi2">									   
															<p class="tahnks">Thanks :)</p>
														</div>
													</div>
												</div>
											</div>
											<div class="post_topbar rep-post rep-thanks">
												<hr>
												<div class="usy-dt">
													<img src="images/resources/bg-img4.png" alt="">														
													<input class="reply" type="text" placeholder="Reply">
													<a class="replybtn" href="#">Send</a>
												</div>
											</div>
										</div> -->
									</div><!--post-bar end-->
									@elseif($mfeed->type_feed == 3)
									<div class="post-bar">
										<div class="post_topbar">
											<div class="usy-dt">
												<img src="images/resources/{{$mfeed->user->avatar}}" alt="">
												<div class="usy-name">
													<h3>{{$mfeed->user->name}}</h3>
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
											<ul class="bk-links">
												<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
												<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
											</ul>
										</div>
										<div class="job_descp">
											<h3>{{$mfeed->title}}</h3>
											<p>{{$mfeed->description}}<br><a href="#" title="">view more</a></p>
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
										<!-- <div class="comment-content">
											<div class="post_topbar post-reply">
												<div class="usy-dt">
													<img src="images/resources/bg-img4.png" alt="">
													<div class="usy-name">
														<h3>John Doe</h3><span><i class="la la-clock-o"></i>3 min ago</span>	
														<div class="epi-sec epi2">									   
															<p class="tahnks">Thanks :)</p>
														</div>
													</div>
												</div>
											</div>
											<div class="post_topbar rep-post rep-thanks">
												<hr>
												<div class="usy-dt">
													<img src="images/resources/bg-img4.png" alt="">														
													<input class="reply" type="text" placeholder="Reply">
													<a class="replybtn" href="#">Send</a>
												</div>
											</div>
										</div> -->
									</div><!--post-bar end-->
									@endif
								@endforeach
									<div class="process-comm">
										<div class="spinner">
											<div class="bounce1"></div>
											<div class="bounce2"></div>
											<div class="bounce3"></div>
										</div>
									</div><!--process-comm end-->
								</div><!--posts-section end-->
							</div><!--product-feed-tab end-->

							<div class="product-feed-tab" id="info-dd">
							@if(Auth::user()->type_user == 1)
								<div class="user-profile-ov">
									<h3><a href="#" title="" class="overview-open">GIỚI THIỆU</a> <a href="#" title="" class="overview-open"><i class="fa fa-pencil"></i></a></h3>
									<p >{!!$pro->about_yourself!!}</p>
								</div><!--user-profile-ov end-->
								<div class="user-profile-ov st2">
									<h3>KINH NGHIỆM <a  title="" class="exp-bx-open-add"><i class="fa fa-plus-square"></i></a></h3>
									@foreach($experiences as $exp)
									<h4>{{$exp->subject}}<button value="{{$exp->id}}" title="" class="exp-bx-open"><i class="fa fa-pencil"></i></button><a href="/client/deleteexp/{{$exp->id}}">xoa</a></h4>
									<input type="hidden" class="idexp"value="{{$exp->id}}">
									<p>{!!$exp->detail!!} </p>
									@endforeach
								</div><!--user-profile-ov end-->
								<div class="user-profile-ov">
									<h3>HỌC VẤN<a title="" class="edu-bx-open-add"><i class="fa fa-plus-square"></i></a></h3>
									@foreach($educations as $edu)
										@if($edu->graduated == 1)
									<p>Tốt nghiệp</p>
										@else
									<p>Đang học tại</p>									
										@endif
									<h4>{{$edu->name_school}}<button value="{{$edu->id}}" title="" class="edu-bx-open"><i class="fa fa-pencil"></i></button><a href="/client/deleteedu/{{$edu->id}}">xoa</a></h4>
									<input type="hidden" class="idexp"value="{{$edu->id}}">
									<span>Chuyên ngành {{$edu->career}}</span>
									<p>	{!!$edu->description!!}</p>
									@endforeach
								</div><!--user-profile-ov end-->
								<div class="user-profile-ov">
									<h3><a href="#" title="" class="skills-open">KỸ NĂNG</a> <a href="#" title="" class="skills-open"><i class="fa fa-pencil"></i></a> <a href="#"><i class="fa fa-plus-square"></i></a></h3>
									<ul>
										<li><a href="#" title="">HTML</a></li>
										<li><a href="#" title="">PHP</a></li>
										<li><a href="#" title="">CSS</a></li>
										<li><a href="#" title="">Javascript</a></li>
										<li><a href="#" title="">Wordpress</a></li>
										<li><a href="#" title="">Photoshop</a></li>
										<li><a href="#" title="">Illustrator</a></li>
										<li><a href="#" title="">Corel Draw</a></li>
									</ul>
								</div><!--user-profile-ov end-->
								<div class="user-profile-ov">
									<h3><a href="#" title="" class="lct-box-open">Liên hệ</a> <a href="#" title="" class="lct-box-open"><i class="fa fa-pencil"></i></a></h3>
									<!-- <h4>India</h4> -->
									<p>{!!$pro->location!!} </p>
								</div><!--user-profile-ov end-->
							@endif
							@if(Auth::user()->type_user == 2)
								<div class="user-profile-ov">
									<h3><a href="#" title="" class="overview-open">GIỚI THIỆU</a> <a href="#" title="" class="overview-open"><i class="fa fa-pencil"></i></a></h3>
									<p >{!!$pro->about_yourself!!}</p>
								</div><!--user-profile-ov end-->
								<div class="user-profile-ov st2">
									<h3><a href="#" title="" class="esp-bx-open">Thành lập</a><a href="#" title="" class="esp-bx-open"><i class="fa fa-pencil"></i></a> <a href="#" title="" class="esp-bx-open"><i class="fa fa-plus-square"></i></a></h3>
									<span>{{date_format(date_create($pro->estalish),'d-m-Y')}}</span>
								</div><!--user-profile-ov end-->
								<div class="user-profile-ov">
									<h3><a href="#" title="" class="lct-box-open">Liên hệ</a> <a href="#" title="" class="lct-box-open"><i class="fa fa-pencil"></i></h3>
									<!-- <h4>India</h4> -->
									<p>{!!$pro->location!!} </p>
								</div><!--user-profile-ov end-->
							@endif
							</div><!--product-feed-tab end-->
							

							<div class="product-feed-tab" id="portfolio-dd">
								<div class="portfolio-gallery-sec">
									<h3>Portfolio</h3>
									<div class="portfolio-btn">
										<a href="#" title=""><i class="fas fa-plus-square"></i> Add Portfolio</a>
									</div>
									<div class="gallery_pf">
										<div class="row">
										@foreach($myfeeds as $mfeed)
											@if($mfeed->type_feed == 2)
											<div class="col-lg-4 col-md-4 col-sm-6 col-6">
												<div class="gallery_pt">
													<img src="images/resources/{{$mfeed->image}}" alt="">
													<a href="#" title=""><img src="images/all-out.png" alt="">{{$mfeed->title}}</a>
												</div><!--gallery_pt end-->
											</div>
											@endif
										@endforeach	
										</div>
									</div><!--gallery_pf end-->
								</div><!--portfolio-gallery-sec end-->
							</div><!--product-feed-tab end-->
						
						</div><!--main-ws-sec end-->
					</div>


					<div class="col-lg-3">
						<div class="right-sidebar">
			
							<div class="widget widget-portfolio">
								<div class="wd-heady">
									<h3>Portfolio</h3>
									<img src="images/photo-icon.png" alt="">
								</div>
								<div class="pf-gallery">
									<ul>
									@foreach($myfeeds as $mfeed)
										@if($mfeed->type_feed ==2)
										<li><a href="#" title=""><img src="images/resources/{{$mfeed->image}}" alt=""></a></li>
										@endif
									@endforeach
									</ul>
								</div><!--pf-gallery end-->
							</div><!--widget-portfolio end-->
						</div><!--right-sidebar end-->
					</div>
				</div>
			</div><!-- main-section-data end-->
		</div> 
	</div>
</main>


<!-- Form AboutYourseft -->
<div class="overview-box" id="overview-box">
	<div class="overview-edit">
		<h3>GIỚI THIỆU</h3>
		<span>5000 character left</span>
		<form action="{{url('/client/updateabout')}}" method="post">
		<input type="hidden" value="{{csrf_token()}}" name="_token">
		<input type="hidden" name="id" value="{{$pro->id}}">
			<textarea name="about" id="editor-about-update" >{{$pro->about_yourself}}</textarea>
			<button type="submit" class="save">Save</button>
		</form>
		<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
	</div>
</div>
<!-- Form AboutYourseft -->


<!-- Form Exp -->
<div class="overview-box" id="experience-box"></div>
<div class="overview-box" id="experience-box-add">
	<div class="overview-edit">
		<h3>KINH NGHIỆM</h3>
		<form action="{{url('/client/addexp')}}" method="post">
			<input type="hidden" value="{{csrf_token()}}" name="_token">
			<input type="text" name="subject" placeholder="Subject">
			<textarea name="detail" id="editor-exp-insert"></textarea>
			<button type="submit" class="save">Save</button>
			<button type="button" class="cancel">Cancel</button>
		</form>
		<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
	</div>
</div>
<!-- Form Exp -->


<!-- Form Education -->
<div class="overview-box" id="education-box"></div>
<div class="overview-box" id="education-box-add">
	<div class="overview-edit">
		<h3>Education</h3>
		<form action="{{url('/client/addedu')}}" method="post">
			<input type="hidden" value="{{csrf_token()}}" name="_token">
			<input type="text" name="school" placeholder="School / University">
			<input type="text" name="career" placeholder="chuyen nganh">
			<textarea name="description" placeholder="Description" id="editor-edu-insert"></textarea>
			<input type="checkbox" name="graduated" value="1"><span>Đã tốt nghiệp</span>
			<button type="submit" class="save">Save</button>
			<button type="submit" class="cancel">Cancel</button>
		</form>
		<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
	</div><!--overview-edit end-->
</div>
<!-- Form Education -->

<!-- Form thanh lap -->
<div class="overview-box" id="establish-box">
	<div class="overview-edit">
		<h3>Establish Since</h3>
		<form action="{{url('/client/updatestalish')}}" method="post">
			<div class="daty">
				<input type="date" name="estalish" placeholder="Select Date" class="datepicker">
				<i class="fa fa-calendar"></i>
			</div>
			
			<input type="hidden" value="{{csrf_token()}}" name="_token">
			<input type="hidden" name="id" value="{{$pro->id}}">
			<button type="submit" class="save">Save</button>
			<button type="button" class="cancel">Cancel</button>
		</form>
		<a title="" class="close-box"><i class="la la-close"></i></a>
	</div><!--overview-edit end-->
</div><!--overview-box end-->

<!-- thanh lập -->
<!-- Form Location -->
<div class="overview-box" id="location-box">
	<div class="overview-edit">
		<h3>Location</h3>
		<form action="{{url('/client/updatelocation')}}" method="post">
			<input type="hidden" value="{{csrf_token()}}" name="_token">
			<input type="hidden" name="id" value="{{$pro->id}}">
			<textarea name="location" placeholder="Liên hệ" id="editor-location-update"></textarea>
			<button type="submit" class="save">Save</button>
			
		</form>
		<a title="" class="close-box"><i class="la la-close"></i></a>
	</div><!--overview-edit end-->
</div>
<!-- Form Location -->


<!-- Form Skill -->
<div class="overview-box" id="skills-box">
	<div class="overview-edit">
		<h3>Skills</h3>
		<ul>
			<li><a href="#" title="" class="skl-name">HTML</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
			<li><a href="#" title="" class="skl-name">php</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
			<li><a href="#" title="" class="skl-name">css</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
		</ul>
		<form>
			<input type="text" name="skills" placeholder="Skills">
			<button type="submit" class="save">Save</button>
			<button type="submit" class="save-add">Save & Add More</button>
			<button type="submit" class="cancel">Cancel</button>
		</form>
		<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
	</div><!--overview-edit end-->
</div>
<!-- Form Skill -->


<!-- Form feed job -->
<div class="post-popup job_post">
	<div class="post-project">
		<h3>Đăng việc làm</h3>
		<div class="post-project-fields">
			<form>
				<div class="row">
					<div class="col-lg-12">
						<input type="text" name="title" placeholder="Tiêu đề">
					</div>
					<div class="col-lg-12">
						<input type="text" name="location" placeholder="Địa chỉ làm việc">
					</div>
					<div class="col-lg-12">
						<input type="text" name="skills" placeholder="Kỹ năng cần có">
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
						<textarea name="description" placeholder="Chi tiết công việc"></textarea>
					</div>
					<div class="col-lg-12">
						<ul>
							<li><button class="active" type="submit" value="post">Đăng bài</button></li>
							<li><a href="#" title="">Hủy</a></li>
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
<div class="post-popup project_post">
	<div class="post-project">
		<h3>Chia sẽ dự án</h3>
		<div class="post-project-fields">
			<form>
				<div class="row">
					<div class="col-lg-12">
						<input type="text" name="title" placeholder="Tiêu đề">
					</div>
					<div class="col-lg-12">
						<input type="text" name="link" placeholder="Đường dẫn tới dự án(nếu có)">
					</div>
					<div class="col-lg-12">
						<input type="text" name="skills" placeholder="Kỹ năng cần có">
					</div>
					<div class="col-lg-6">
						<div class="file-submit">
							<input type="file" id="file">
							<label for="file">Choose File</label>	
						</div>
					</div>
					<div class="col-lg-12">
						<textarea name="description" placeholder="Mô tả dự án"></textarea>
					</div>
					<div class="col-lg-12">
						<ul>
							<li><button class="active" type="submit" value="post">Đăng bài</button></li>
							<li><a href="#" title="">Hủy</a></li>
						</ul>
					</div>
				</div>
			</form>
		</div><!--post-project-fields end-->
		<a href="#" title=""><i class="la la-times-circle-o"></i></a>
	</div>
</div>
<!-- Form feed project -->


<!-- Form feed project -->
<div class="post-popup wh_post">
	<div class="post-project">
		<h3>Hỏi đáp cộng đồng</h3>
		<div class="post-project-fields">
			<form>
				<div class="row">
					<div class="col-lg-12">
						<input type="text" name="title" placeholder="Tiêu đề">
					</div>
					<div class="col-lg-12">
						<input type="text" name="skills" placeholder="Kỹ năng liên quan">
					</div>
					<div class="col-lg-12">
						<textarea name="description" placeholder="Chi tiết"></textarea>
					</div>
					<div class="col-lg-12">
						<ul>
							<li><button class="active" type="submit" value="post">Đăng bài</button></li>
							<li><a href="#" title="">Hủy</a></li>
						</ul>
					</div>
				</div>
			</form>
		</div><!--post-project-fields end-->
		<a href="#" title=""><i class="la la-times-circle-o"></i></a>
	</div>
</div>
<!-- Form feed project -->


<div class="overview-box" id="create-portfolio">
	<div class="overview-edit">
		<h3>Create Portfolio</h3>
		<form>
			<input type="text" name="pf-name" placeholder="Portfolio Name">
			<div class="file-submit">
				<input type="file" id="file">
				<label for="file">Choose File</label>	
			</div>
			<div class="pf-img">
				<img src="images/resources/np.png" alt="">
			</div>
			<input type="text" name="website-url" placeholder="htp://www.example.com">
			<button type="submit" class="save">Save</button>
			<button type="submit" class="cancel">Cancel</button>
		</form>
		<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
	</div><!--overview-edit end-->
</div>
<!-- Form feed job -->

@else
<section class="cover-sec">
	<img src="images/resources/{{$pro->background}}" alt=""> 
	<!-- <div class="add-pic-box">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-12 col-sm-12">					
					<input type="file" id="file">
					<label for="file">Đổi ảnh</label>				
				</div>
			</div>
		</div>
	</div> -->
</section>
<main>
	<div class="main-section">
		<div class="container">
			<div class="main-section-data">
				<div class="row">

					<div class="col-lg-3">
						<div class="main-left-sidebar">
							<div class="user_profile">
								<div class="user-pro-img">
									<img src="images/resources/{{$pro->avatar}}" alt="">
									<!-- <div class="add-dp" id="OpenImgUpload">
										<input type="file" id="file">
										<label for="file"><i class="fas fa-camera"></i></label>											
									</div> -->
								</div><!--user-pro-img end-->
								<h3>{{$pro->name}}</h3>
								<div class="star-descp">
									<span>{{$pro->title}}</span>
								</div><!--star-descp end-->
								<div class="user_pro_status">
									<ul class="flw-hr">
										@if(empty($checkFollow))
											<li><a href="/client/followon/{{$pro->id}}" title="" class="flww"><i class="la la-plus"></i> Follow</a></li>
										@else
											<li><a href="/client/followoff/{{$pro->id}}" title="" class="flww"><i class="la la-minus"></i> UnFollow</a></li>
										@endif	
									</ul>
									<ul class="flw-status">
										<li>
											<span>Following</span>
											<b>{{$countFollowing}}</b>
										</li>
										<li>
											<span>Followers</span>
											<b>{{$countFollowed}}</b>
										</li>
									</ul>
								</div><!--user_pro_status end-->
								<ul class="social_links">
									@foreach($externallink as $link)
									<li><a href="{{$link->link}}" title=""> {{$link->link}}</a></li>
									<!-- <li><a href="" title=""><i class="la la-globe"></i></a></li> -->
									@endforeach
									
								</ul>
							</div><!--user_profile end-->
							<div class="suggestions full-width">
								<div class="sd-title">
									<h3>People Viewed Profile</h3>
									<i class="la la-ellipsis-v"></i>
								</div><!--sd-title end-->
								<div class="suggestions-list">
								@foreach($follows as $fol)
									<div class="suggestion-usd">
										<img src="images/resources/{{$fol->user->avatar}}" alt="">
										<div class="sgt-text">
											<h4>{{$fol->user->name}}</h4>
											<span>{{$fol->user->title}}</span>
										</div>
										<span><i class="la la-plus"></i></span>
									</div>
								@endforeach
									<!-- <div class="view-more">
										<a href="#" title="">View More</a>
									</div> -->
								</div><!--suggestions-list end-->
							</div><!--suggestions end-->
						</div><!--main-left-sidebar end-->
					</div>

					<div class="col-lg-6">
						<div class="main-ws-sec">

							<div class="user-tab-sec rewivew">
								<div class="tab-feed st2 settingjb">
									<ul>
										<li data-tab="feed-dd" class="active">
											<a href="#" title="">
												<img src="images/ic1.png" alt="">
												<span>Feed</span>
											</a>
										</li>
										<li data-tab="info-dd">
											<a href="#" title="">
												<img src="images/ic2.png" alt="">
												<span>Info</span>
											</a>
										</li>
										<li data-tab="portfolio-dd">
											<a  title="">
												<img src="images/ic3.png" alt="">
												<span>Portfolio</span>
											</a>
										</li>	
									</ul>
								</div><!-- tab-feed end-->
							</div><!--user-tab-sec end-->

							<div class="product-feed-tab current" id="feed-dd">
								<div class="posts-section">
								@foreach($myfeeds as $mfeed)
									@if($mfeed->type_feed == 1)
									<div class="post-bar">
										<div class="post_topbar">
											<div class="usy-dt">
												<img src="images/resources/{{$mfeed->user->avatar}}" alt="">
												<div class="usy-name">
													<h3>{{$mfeed->user->name}}</h3>
													<span><img src="images/clock.png" alt="">3 min ago</span>
												</div>
											</div>
										</div>
										<div class="epi-sec">
											<ul class="descp">
												<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
												<li><img src="images/icon9.png" alt=""><span>{{$mfeed->location}}</span></li>
											</ul>
											<ul class="bk-links">
												<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
												<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
											</ul>
										</div>
										<div class="job_descp">
											<h3>{{$mfeed->title}}</h3>
											<ul class="job-dt">
												@if($mfeed->type_job == 1)
												<li><a href="#" title="">Full Time</a></li>
												@else
												<li><a href="#" title="">Part Time</a></li>
												@endif
												<li><span>{{$mfeed->salary}}đ / tháng</span></li>
											</ul>
											<p>{{$mfeed->description}}<br><a href="#" title="">view more</a></p>
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
										<!-- <div class="comment-content close">
											<div class="post_topbar post-reply">
												<div class="usy-dt">
													<img src="images/resources/bg-img4.png" alt="">
													<div class="usy-name">
														<h3>John Doe</h3><span><i class="la la-clock-o"></i>3 min ago</span>	
														<div class="epi-sec epi2">									   
															<p class="tahnks">Thanks :)</p>
														</div>
													</div>
												</div>
											</div>
											<div class="post_topbar rep-post rep-thanks">
												<hr>
												<div class="usy-dt">
													<img src="images/resources/bg-img4.png" alt="">														
													<input class="reply" type="text" placeholder="Reply">
													<a class="replybtn" href="#">Send</a>
												</div>
											</div>
										</div> -->
									</div><!--post-bar end-->
									@elseif($mfeed->type_feed == 2)
									<div class="post-bar">
										<div class="post_topbar">
											<div class="usy-dt">
												<img src="images/resources/{{$mfeed->user->avatar}}" alt="">
												<div class="usy-name">
													<h3>{{$mfeed->user->name}}</h3>
													<span><img src="images/clock.png" alt="">3 min ago</span>
												</div>
											</div>
										</div>
										<div class="epi-sec">
											<ul class="bk-links">
												<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
												<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
											</ul>
										</div>
										<div class="job_descp">
											<h3>{{$mfeed->title}}</h3>
											<p>{{$mfeed->description}}<br><a href="{{$mfeed->link_project}}" title="" target="blank">{{$mfeed->link_project}}</a></p>
											<ul class="skill-tags">
												<li><a href="#" title="">HTML</a></li>
												<li><a href="#" title="">PHP</a></li>
												<li><a href="#" title="">CSS</a></li>
												<li><a href="#" title="">Javascript</a></li>
												<li><a href="#" title="">Wordpress</a></li> 	
											</ul>
											<img src="images/resources/{{$mfeed->image}}" alt="">
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
										<!-- <div class="comment-content close">
											<div class="post_topbar post-reply">
												<div class="usy-dt">
													<img src="images/resources/bg-img4.png" alt="">
													<div class="usy-name">
														<h3>John Doe</h3><span><i class="la la-clock-o"></i>3 min ago</span>	
														<div class="epi-sec epi2">									   
															<p class="tahnks">Thanks :)</p>
														</div>
													</div>
												</div>
											</div>
											<div class="post_topbar rep-post rep-thanks">
												<hr>
												<div class="usy-dt">
													<img src="images/resources/bg-img4.png" alt="">														
													<input class="reply" type="text" placeholder="Reply">
													<a class="replybtn" href="#">Send</a>
												</div>
											</div>
										</div> -->
									</div><!--post-bar end-->
									@elseif($mfeed->type_feed == 3)
									<div class="post-bar">
										<div class="post_topbar">
											<div class="usy-dt">
												<img src="images/resources/{{$mfeed->user->avatar}}" alt="">
												<div class="usy-name">
													<h3>{{$mfeed->user->name}}</h3>
													<span><img src="images/clock.png" alt="">3 min ago</span>
												</div>
											</div>
										</div>
										<div class="epi-sec">
											<ul class="bk-links">
												<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
												<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
											</ul>
										</div>
										<div class="job_descp">
											<h3>{{$mfeed->title}}</h3>
											<p>{{$mfeed->description}}<br><a href="#" title="">view more</a></p>
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
										<!-- <div class="comment-content">
											<div class="post_topbar post-reply">
												<div class="usy-dt">
													<img src="images/resources/bg-img4.png" alt="">
													<div class="usy-name">
														<h3>John Doe</h3><span><i class="la la-clock-o"></i>3 min ago</span>	
														<div class="epi-sec epi2">									   
															<p class="tahnks">Thanks :)</p>
														</div>
													</div>
												</div>
											</div>
											<div class="post_topbar rep-post rep-thanks">
												<hr>
												<div class="usy-dt">
													<img src="images/resources/bg-img4.png" alt="">														
													<input class="reply" type="text" placeholder="Reply">
													<a class="replybtn" href="#">Send</a>
												</div>
											</div>
										</div> -->
									</div><!--post-bar end-->
									@endif
								@endforeach
									<div class="process-comm">
										<div class="spinner">
											<div class="bounce1"></div>
											<div class="bounce2"></div>
											<div class="bounce3"></div>
										</div>
									</div><!--process-comm end-->
								</div><!--posts-section end-->
							</div><!--product-feed-tab end-->

							<div class="product-feed-tab" id="info-dd">
							@if($pro->type_user == 1)
								<div class="user-profile-ov">
									<h3>GIỚI THIỆU</h3>
									<p >{!!$pro->about_yourself!!}</p>
								</div><!--user-profile-ov end-->
								<div class="user-profile-ov st2">
									<h3>KINH NGHIỆM</h3>
									@foreach($experiences as $exp)
									<h4>{{$exp->subject}}<button value="{{$exp->id}}" title="" class="exp-bx-open"><i class="fa fa-pencil"></i></button><a href="/client/deleteexp/{{$exp->id}}">xoa</a></h4>
									<input type="hidden" class="idexp"value="{{$exp->id}}">
									<p>{!!$exp->detail!!} </p>
									@endforeach
								</div><!--user-profile-ov end-->
								<div class="user-profile-ov">
									<h3>HỌC VẤN</h3>
									@foreach($educations as $edu)
										@if($edu->graduated == 1)
									<p>Tốt nghiệp</p>
										@else
									<p>Đang học tại</p>									
										@endif
									<h4>{{$edu->name_school}}</h4>
									<span>Chuyên ngành {{$edu->career}}</span>
									<p>	{{$edu->description}}</p>
									@endforeach
								</div><!--user-profile-ov end-->
								<div class="user-profile-ov">
									<h3>KỸ NĂNG</h3>
									<ul>
										<li><a href="#" title="">HTML</a></li>
										<li><a href="#" title="">PHP</a></li>
										<li><a href="#" title="">CSS</a></li>
										<li><a href="#" title="">Javascript</a></li>
										<li><a href="#" title="">Wordpress</a></li>
										<li><a href="#" title="">Photoshop</a></li>
										<li><a href="#" title="">Illustrator</a></li>
										<li><a href="#" title="">Corel Draw</a></li>
									</ul>
								</div><!--user-profile-ov end-->
								<div class="user-profile-ov">
									<h3>Liên hệ</h3>
									<!-- <h4>India</h4> -->
									<p>{{$pro->location}} </p>
								</div><!--user-profile-ov end-->
							@endif
							@if($pro->type_user == 2)
								<div class="user-profile-ov">
									<h3>GIỚI THIỆU</h3>
									<p >{!!$pro->about_yourself!!}</p>
								</div><!--user-profile-ov end-->
								<div class="user-profile-ov st2">
									<h3>Thành lập</h3>
									<span>{{$pro->estalish}}</span>
								</div><!--user-profile-ov end-->
								<div class="user-profile-ov">
									<h3>Liên hệ</h3>
									<!-- <h4>India</h4> -->
									<p>{{$pro->location}} </p>
								</div><!--user-profile-ov end-->
							@endif
							</div><!--product-feed-tab end-->
							

							<div class="product-feed-tab" id="portfolio-dd">
								<div class="portfolio-gallery-sec">
									<h3>Portfolio</h3>
									<div class="gallery_pf">
										<div class="row">
										@foreach($myfeeds as $mfeed)
											@if($mfeed->type_feed == 2)
											<div class="col-lg-4 col-md-4 col-sm-6 col-6">
												<div class="gallery_pt">
													<img src="images/resources/{{$mfeed->image}}" alt="">
													<a href="#" title=""><img src="images/all-out.png" alt="">{{$mfeed->title}}</a>
												</div><!--gallery_pt end-->
											</div>
											@endif
										@endforeach	
										</div>
									</div><!--gallery_pf end-->
								</div><!--portfolio-gallery-sec end-->
							</div><!--product-feed-tab end-->
						
						</div><!--main-ws-sec end-->
					</div>


					<div class="col-lg-3">
						<div class="right-sidebar">
			
							<div class="widget widget-portfolio">
								<div class="wd-heady">
									<h3>Portfolio</h3>
									<img src="images/photo-icon.png" alt="">
								</div>
								<div class="pf-gallery">
									<ul>
									@foreach($myfeeds as $mfeed)
										@if($mfeed->type_feed ==2)
										<li><a href="#" title=""><img src="images/resources/{{$mfeed->image}}" alt=""></a></li>
										@endif
									@endforeach
									</ul>
								</div><!--pf-gallery end-->
							</div><!--widget-portfolio end-->
						</div><!--right-sidebar end-->
					</div>
				</div>
			</div><!-- main-section-data end-->
		</div> 
	</div>
</main>
@endif
@endforeach
@endsection


@section('script')
<script>
// Create ckeditor for form
CKEDITOR.replace( 'editor-about-update' );
CKEDITOR.replace( 'editor-location-update' );
// Create ckeditor for form


// Begin Action form EXp
	$(document).ready(function(){
		$(".exp-bx-open").on("click", function(){
			var idExp = $(this).val();
			alert (idExp);
			$.get("client/ajax/exp/"+idExp, function(data){
				$("#experience-box").addClass("open");
				$("#experience-box").html(data);
				$(".wrapper").addClass("overlay");
				CKEDITOR.replace( 'editor-exp-update' );

				$(".close-box").on("click", function(){
					$("#experience-box").removeClass("open");
					$(".wrapper").removeClass("overlay");
				});
				$(".cancel").on("click", function(){
					$("#experience-box").removeClass("open");
					$(".wrapper").removeClass("overlay");
				});
			});
		});
		$(".exp-bx-open-add").on("click", function(){
			$("#experience-box-add").addClass("open");
			$(".wrapper").addClass("overlay");
			CKEDITOR.replace( 'editor-exp-insert' );

			$(".close-box").on("click", function(){
				$("#experience-box-add").removeClass("open");
				$(".wrapper").removeClass("overlay");
			});
			$(".cancel").on("click", function(){
				$("#experience-box-add").removeClass("open");
				$(".wrapper").removeClass("overlay");
			});
		});
	});
// End Action Exp

// Begin Action form Education
$(document).ready(function(){
		$(".edu-bx-open").on("click", function(){
			var idEdu = $(this).val();
			alert (idEdu);
			$.get("client/ajax/edu/"+idEdu, function(data){
				$("#education-box").addClass("open");
				$("#education-box").html(data);
				$(".wrapper").addClass("overlay");
				CKEDITOR.replace( 'editor-edu-update' );

				$(".close-box").on("click", function(){
					$("#education-box").removeClass("open");
					$(".wrapper").removeClass("overlay");
				});
				$(".cancel").on("click", function(){
					$("#education-box").removeClass("open");
					$(".wrapper").removeClass("overlay");
				});
			});
		});
		$(".edu-bx-open-add").on("click", function(){
			$("#education-box-add").addClass("open");
			$(".wrapper").addClass("overlay");
			CKEDITOR.replace( 'editor-edu-insert' );

			$(".close-box").on("click", function(){
				$("#education-box-add").removeClass("open");
				$(".wrapper").removeClass("overlay");
			});
			$(".cancel").on("click", function(){
				$("#education-box-add").removeClass("open");
				$(".wrapper").removeClass("overlay");
			});
		});
	});
// End Action form Education

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


$(".feed_project").on("click", function(){
	$(".post-popup.project_post").addClass("active");
	$(".wrapper").addClass("overlay");
	return false;
});
$(".post-project > a").on("click", function(){
	$(".post-popup.project_post").removeClass("active");
	$(".wrapper").removeClass("overlay");
	return false;
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




// $(".com").on("click", function(){
// 	$(".comment-content").removeClass("close");
// 	$(".comment-content").addClass("open");
// 	return false;
// });
// $(".post-project > a").on("click", function(){
// 	$(".post-popup.wh_post").removeClass("active");
// 	$(".wrapper").removeClass("overlay");
// 	return false;
// });

</script>
@endsection