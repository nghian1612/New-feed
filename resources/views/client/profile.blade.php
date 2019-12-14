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
												<li><a class="feed_job">Việc làm</a></li>
											
												<li><a class="feed_wh" href="#" title="">Hỏi đáp cộng đồng</a></li>
											</ul>
										</div><!--post-st end-->
									</div><!--post-topbar end-->
								<div class="posts-section">
								@foreach($myfeeds as $mfeed)
									@if($mfeed->type_feed == 1)
									<div class="posty mb-3">
										<div class="post-bar no-margin">
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
													@if($mfeed->id_user == Auth::id())
													<ul class="ed-options">
														<li><a href="#" title="">Chỉnh sửa</a></li>
														<li><a href="client/deletefeed/{{$mfeed->id}}" title="">Xóa</a></li>
													</ul>
													@endif
												</div>
											</div>
											<div class="epi-sec">
												<ul class="descp">
													<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
													<li><img src="images/icon9.png" alt=""><span>{{$mfeed->location}}</span></li>
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
												<p>{!!$mfeed->description!!}<br><a href="#" title="">view more</a></p>
												<ul class="skill-tags">
													@foreach($feedskill as $fskill)
													@if($fskill->id_feed == $mfeed->id)
													<li><a href="#" title="">{{$fskill->skill->name}}</a></li>
													@endif
													@endforeach	
												</ul>
											</div>
											<div class="job-status-bar">
												<ul class="like-com">
													<li>
														<a href="client/likefeed/{{$mfeed->id}}"><i class="fas fa-heart"></i> Like</a>
														<img src="images/liked-img.png" alt="">
														<span>25</span>
													</li> 
													<li><a class="com"><i class="fas fa-comment-alt"></i> 
														Comment 
														<?php 
															$i = [];
															foreach($comments as $comment)
															{
																if($comment->id_feed == $mfeed->id){
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
														@if($comment->id_feed == $mfeed->id)
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
															<input type="hidden" value="{{$mfeed->id}}" name="idfeed">
															<input type="text" placeholder="Post a comment" name="comment">
															<button type="submit">Send</button>
														</form>
													</div>
												</div><!--post-comment end-->
											</div><!--comment-section end-->
										</div>
									@elseif($mfeed->type_feed == 2)
									<div class="posty mb-3">
										<div class="post-bar no-margin">
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
													@if($mfeed->id_user == Auth::id())
													<ul class="ed-options">
														<li><a href="#" title="">Chỉnh sửa</a></li>
														<li><a href="client/deletefeed/{{$mfeed->id}}" title="">Xóa</a></li>
													</ul>
													@endif
												</div>
											</div>
											<div class="job_descp">
												<h3>{{$mfeed->title}}</h3>
												<p>{!!$mfeed->description!!}<br><a href="#" title="">view more</a></p>
												<ul class="skill-tags">
													@foreach($feedskill as $fskill)
													@if($fskill->id_feed == $mfeed->id)
													<li><a href="#" title="">{{$fskill->skill->name}}</a></li>
													@endif
													@endforeach		
												</ul>
												<img src="images/feedimage/{{$mfeed->image}}" alt="">
											</div>
											<div class="job-status-bar">
												<ul class="like-com">
													<li>
														<a href="client/likefeed/{{$mfeed->id}}"><i class="fas fa-heart"></i> Like</a>
														<img src="images/liked-img.png" alt="">
														<span>25</span>
													</li> 
													<li><a class="com"><i class="fas fa-comment-alt"></i> Comment 
													<?php 
															$i = [];
															foreach($comments as $comment)
															{
																if($comment->id_feed == $mfeed->id){
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
														@if($comment->id_feed == $mfeed->id)
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
														<input type="hidden" value="{{$mfeed->id}}" name="idfeed">
														<input type="text" placeholder="Post a comment" name="comment">
														<button type="submit">Send</button>
													</form>
												</div>
											</div><!--post-comment end-->
										</div><!--comment-section end-->
									</div>
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
									<h3>GIỚI THIỆU <a  title="" class="overview-open"><i class="fa fa-pencil"></i></a></h3>
									<div id="userAbout">{!!$pro->about_yourself!!}</div>
								</div><!--user-profile-ov end-->
								<div class="user-profile-ov st2">
									<h3>KINH NGHIỆM <a  title="" class="exp-bx-open-add"><i class="fa fa-plus-square"></i></a></h3>
									<div id="infoExp">
										@foreach($experiences as $exp)
										<h4>{{$exp->subject}}<button type="button" value="{{$exp->id}}" class="exp-bx-open"><i class='fa fa-pencil'></i></button><a href="/client/deleteexp/{{$exp->id}}">xoa</a></h4>
										<input type="hidden" class="idexp"value="{{$exp->id}}">
										<div>{!!$exp->detail!!} </div>
										@endforeach
									</div>
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
									<h3>KỸ NĂNG <a href="#" class="skills-open"><i class="fa fa-plus-square"></i></a></h3>
									<ul>
									@if($userskill)
									@foreach($userskill as $skill)
										<li style='position:relative; padding-right:10px;'>
											<a href="#" title="" style="">{{$skill->skill->name}}</a>
											<a href="/client/deleteski/{{$skill->id}}" title="" style="position:absolute; right:0; top:-10px ;background:#bbb;padding:3px;border:1px solid #ccc; border-radius:50%"><i class="la la-close" style="padding-left:0px; font-size:14px;" ></i></a>
										</li>
									@endforeach
									@endif
									</ul>
								</div><!--user-profile-ov end-->
								<div class="user-profile-ov">
									<h3>Liên hệ<a href="#" title="" class="lct-box-open"><i class="fa fa-pencil"></i></a></h3>
									<!-- <h4>India</h4> -->
									<p>{!!$pro->location!!} </p>
								</div><!--user-profile-ov end-->
							@endif
							@if(Auth::user()->type_user == 2)
								<div class="user-profile-ov">
									<h3>GIỚI THIỆU<a  title="" class="overview-open"><i class="fa fa-pencil"></i></a></h3>
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
@include('client.popup.about')
<!-- Form AboutYourseft -->


<!-- Form Exp -->
@include('client.popup.experience')
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
			<button class="cancel">Cancel</button>
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
		<form action="{{url('/client/addski')}}" method="post">
			<input type="hidden" value="{{csrf_token()}}" name="_token">
			<input type="text" name="skills" placeholder="Skills">
			<button type="submit" class="save">Save</button>
			<button type="button" class="cancel">Cancel</button>
		</form>
		<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
	</div><!--overview-edit end-->
</div>
<!-- Form Skill -->


<!-- Form feed job -->
@include('client.popup.postjob')
<!-- Form feed job -->


<!-- Form feed project -->
@include('client.popup.postnomal')
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
									<div class="posty mb-3">
										<div class="post-bar no-margin">
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
													@if($mfeed->id_user == Auth::id())
													<ul class="ed-options">
														<li><a href="#" title="">Chỉnh sửa</a></li>
														<li><a href="client/deletefeed/{{$mfeed->id}}" title="">Xóa</a></li>
													</ul>
													@endif
												</div>
											</div>
											<div class="epi-sec">
												<ul class="descp">
													<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
													<li><img src="images/icon9.png" alt=""><span>{{$mfeed->location}}</span></li>
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
												<p>{!!$mfeed->description!!}<br><a href="#" title="">view more</a></p>
												<ul class="skill-tags">
													@foreach($feedskill as $fskill)
													@if($fskill->id_feed == $mfeed->id)
													<li><a href="#" title="">{{$fskill->skill->name}}</a></li>
													@endif
													@endforeach	
												</ul>
											</div>
											<div class="job-status-bar">
												<ul class="like-com">
													<li>
														<a href="client/likefeed/{{$mfeed->id}}"><i class="fas fa-heart"></i> Like</a>
														<img src="images/liked-img.png" alt="">
														<span>25</span>
													</li> 
													<li><a class="com"><i class="fas fa-comment-alt"></i> 
														Comment 
														<?php 
															$i = [];
															foreach($comments as $comment)
															{
																if($comment->id_feed == $mfeed->id){
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
														@if($comment->id_feed == $mfeed->id)
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
															<input type="hidden" value="{{$mfeed->id}}" name="idfeed">
															<input type="text" placeholder="Post a comment" name="comment">
															<button type="submit">Send</button>
														</form>
													</div>
												</div><!--post-comment end-->
											</div><!--comment-section end-->
										</div>
									@elseif($mfeed->type_feed == 2)
									<div class="posty mb-3">
										<div class="post-bar no-margin">
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
													@if($mfeed->id_user == Auth::id())
													<ul class="ed-options">
														<li><a href="#" title="">Chỉnh sửa</a></li>
														<li><a href="client/deletefeed/{{$mfeed->id}}" title="">Xóa</a></li>
													</ul>
													@endif
												</div>
											</div>
											<div class="job_descp">
												<h3>{{$mfeed->title}}</h3>
												<p>{!!$mfeed->description!!}<br><a href="#" title="">view more</a></p>
												<ul class="skill-tags">
													@foreach($feedskill as $fskill)
													@if($fskill->id_feed == $mfeed->id)
													<li><a href="#" title="">{{$fskill->skill->name}}</a></li>
													@endif
													@endforeach		
												</ul>
												<img src="images/feedimage/{{$mfeed->image}}" alt="">
											</div>
											<div class="job-status-bar">
												<ul class="like-com">
													<li>
														<a href="client/likefeed/{{$mfeed->id}}"><i class="fas fa-heart"></i> Like</a>
														<img src="images/liked-img.png" alt="">
														<span>25</span>
													</li> 
													<li><a class="com"><i class="fas fa-comment-alt"></i> Comment 
													<?php 
															$i = [];
															foreach($comments as $comment)
															{
																if($comment->id_feed == $mfeed->id){
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
														@if($comment->id_feed == $mfeed->id)
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
														<input type="hidden" value="{{$mfeed->id}}" name="idfeed">
														<input type="text" placeholder="Post a comment" name="comment">
														<button type="submit">Send</button>
													</form>
												</div>
											</div><!--post-comment end-->
										</div><!--comment-section end-->
									</div>
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
									<h4>{{$exp->subject}}</h4>
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
									@if($userskill)
									@foreach($userskill as $skill)
										<li style='position:relative; padding-right:10px;'>
											<a href="#" title="" style="">{{$skill->skill->name}}</a>
										</li>
									@endforeach
									@endif
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

CKEDITOR.replace( 'editor-location-update' );
// CKEDITOR.replace( 'editor-feed-add' );

// CKEDITOR.replace( 'editor-feed-add' );
// Create ckeditor for form




// Begin Action form EXp

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

// Begin Action form feedjob
$(document).ready(function(){
	// $('#country_name').keyup(function(){ //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
 	// 	var query = $(this).val(); //lấy gía trị ng dùng gõ
 	// 	if(query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
	// 	{	
	// 		var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
	// 		$.ajax({
	// 			url:"{{ route('search') }}", // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
	// 			method:"POST", // phương thức gửi dữ liệu.
	// 			data:{query:query, _token:_token},
	// 			success:function(data){ //dữ liệu nhận về
	// 				$('#countryList').fadeIn();  
	// 				$('#countryList').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là countryList
	// 			}
	// 		});
	// 	}
	// });
	// var grpskill = [];
	// $(document).on('click', '.w-skill', function(){
	// 	$('#country_name').val($(this).text());
	// 	$('#countryList').fadeOut();  
	// 	console.log($('#country_name').val());
	// 	var skill = $('#country_name').val();
	// 	grpskill.push(skill);
	// 	console.log(grpskill);
	// 	$('#skills_changed').append('<li class="w-skillch"><input type="checkbox" name="grpskill[]" value="'+skill+'" checked="checked"></li>');
	// 	return grpskill;
	// }); 
	// $(document).on('click', '.w-skillch', function(){
	// 	var skill = $(this).text();
	// 	var i = grpskill.indexOf(skill);
	// 	if (i != -1) {
	// 		grpskill.splice(i,1);
	// 		console.log(grpskill);
	// 		return grpskill;
	// 	}
	// 	$($(this)).remove();	
	// });
	
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