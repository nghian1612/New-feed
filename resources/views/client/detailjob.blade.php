@extends('client.layout.master')
@section('content')
@if($thisJob)
    @foreach($thisJob as $thisJob)
    <main>
            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-12">
                                <div class="bids-detail">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul>
                                                <li>
                                                    <h3>Bids</h3>
                                                    <br>
                                                    <p>4</p>
                                                </li>
                                                <li>
                                                    <h3>Avg Bid (USD)</h3>
                                                    <br>
                                                    <p>$510</p>
                                                </li>
                                                <li>
                                                    <h3>Project Budget (USD)</h3>
                                                    <br>
                                                    <p>$500 - $600</p>
                                                </li>
                                                <li>
                                                    <h3>Views</h3>
                                                    <br>
                                                    <p>104</p>
                                                </li>
                                            </ul>
                                            <div class="bids-time">
                                                <h3>{{$thisJob->created_at}}</h3>
                                                <br>
                                                <p>Open</p>
                                            </div>
                                        </div>
                                            
                                    </div>
                                </div>
                                <div class="main-ws-sec">
                                    <div class="posts-section">
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="images/resources/{{$thisJob->user->avatar}}" alt="">
                                                    <div class="usy-name">
                                                        <h3>{{$thisJob->user->name}}</h3>
                                                        <span><img src="images/clock.png" alt="">{{$thisJob->created_at}}</span>
                                                    </div>
                                                </div>
                                                <!-- <div class="ed-opts">
                                                    <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                    <ul class="ed-options">
                                                        <li><a href="#" title="">Edit Post</a></li>
                                                        <li><a href="#" title="">Unsaved</a></li>
                                                        <li><a href="#" title="">Unbid</a></li>
                                                        <li><a href="#" title="">Close</a></li>
                                                        <li><a href="#" title="">Hide</a></li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                            <div class="epi-sec">
                                                <ul class="descp">
                                                    <li><img src="images/icon8.png" alt=""><span>{{$thisJob->time_off}}</span></li>
                                                    <li><img src="images/icon9.png" alt=""><span>{{$thisJob->location}}</span></li>
                                                </ul>
                                                <!-- <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    <li><a href="#" title="" class="bid_now">Bid Now</a></li>
                                                </ul> -->
                                            </div>
                                            <div class="job_descp accountnone">
                                                <h3>{{$thisJob->title}}</h3>
                                                <ul class="job-dt">
                                                    <li><span>{{$thisJob->salary}}đ</span></li>
                                                </ul>
                                                <p>{!!$thisJob->description!!}</p>
                                                <ul class="skill-tags">
                                                            @foreach($feedskill as $fskill)
															@if($fskill->id_feed == $thisJob->id)
															<li><a href="#" title="">{{$fskill->skill->name}}</a></li>
															@endif
															@endforeach	
                                                </ul>
                                            </div>
                                            <div class="job-status-bar btm-line">                                               
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
                                            @foreach($comments as $comment)
											@if($comment->id_feed == $thisJob->id)
                                            <div class="comment-area">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/{{$comment->user->avatar}}" alt="">
                                                        <div class="usy-name">
                                                            <h3>{{$comment->user->name}}</h3>
                                                            <span><img src="images/clock.png" alt="">{{$comment->created_at}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reply-area">
                                                    <p>{{$comment->comment}}</p>
                                                </div>
                                            </div>
                                            @endif
											@endforeach
                                            <!-- <div class="comment-area">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/bg-img3.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <span><img src="images/clock.png" alt="">3 min ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reply-area">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
                                                    <span><i class="la la-mail-reply"></i>Reply</span>
                                                </div>
                                            </div> -->
                                            <div class="postcomment w-100 float-left">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img src="images/resources/bg-img4.png" alt="">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <form class="row" action="{{url('/client/addcomment')}}" method="post">
                                                            <div class="col-md-10">
                                                                <input type="hidden" value="{{csrf_token()}}" name="_token">
                                                                <input type="hidden" value="{{$thisJob->id}}" name="idfeed">
                                                                <input type="text" name="comment" class="form-control" id="inputPassword" placeholder="Post a comment">
                                                            </div>
                                                            <div class="col-md-2">
                                                                    <input type="submit" value="Gửi" class="btn btn-primary">
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--post-bar end-->
                                </div>
                                <!--posts-section end-->
                            </div>
                            <!--main-ws-sec end-->
                            <div class="col-xl-3 col-lg-3 col-md-12">
                                <div class="right-sidebar">
                                     <div class="widget widget-about bid-place">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#applyjob" data-whatever="@mdo">Place a Bid</button>
                                    </div>
                                    <!--widget-about end-->
                                    <div class="widget widget-projectid">
                                        <h3>Project ID : 123456789</h3>
                                        <p>Report Project</p>
                                    </div>
                                    <!--widget-about end-->
                                    <div class="widget widget-jobs">
                                        <div class="sd-title">
                                            <h3>About the Client</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="sd-title paymethd">
                                            <h4>Payment Method</h4>                                            
                                            <p>Verified</p>
                                            <ul class="star">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                                <li><a href="#">5.00 of 5 Reviews</a></li>
                                            </ul>
                                        </div>
                                        <div class="sd-title">
                                            <h4>India</h4>
                                            <p>SKS Nagar, Ludhiana 1 AM</p>
                                        </div>
                                        <div class="sd-title">
                                            <h4>20 Projects Posted | 15 Jobs Posted</h4>
                                            <p>85% Hire Rate, 15% Open Jobs</p>
                                        </div>
                                        <div class="sd-title">
                                            <h4>Member Since</h4>                                          
                                            <p>August 24, 2017</p>
                                        </div>
                                    </div>
                                    <!--widget-jobs end-->
                                    <div class="widget widget-jobs">
                                        <div class="sd-title">
                                            <h3>Project Link</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="sd-title copylink">
                                            <P>Http://www.workwise.com/pro...</P>
                                            <span><a href="#">Copy Link</a></span>
                                        </div>
                                    </div>
                                    <!--widget-jobs end-->
                                    <div class="widget widget-jobs">
                                        <div class="sd-title">
                                            <h3>Share</h3>
                                        </div>
                                        <div class="sd-title copylink">
                                            <ul>
                                            	<li>
                                                <img src="images/social3.png" alt="image"></li>
                                                <li>
                                                <img src="images/social5.png" alt="image"></li>
                                                <li>
                                                <img src="images/social1.png" alt="image"></li>
                                                <li>
                                                <img src="images/social4.png" alt="image"></li>
                                                <li>
                                                <img src="images/social2.png" alt="image">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--widget-jobs end-->
                                </div>
                                <!--right-sidebar end-->
                            </div>
                        </div>
                        <!-- freelancerbiding -->
                        <div class="col-12">
                        <div class="freelancerbiding">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <h3>Freelancers Bidding (4)</h3>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="repcent">
                                        <h3>Reputation<i class="la la-angle-down"></i></h3>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="bidrit">
                                        <h3>Bid (USD)</h3>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="usy-dt">
                                        <img src="images/resources/jass.png" alt="">
                                        <div class="usy-name">
                                            <h3>Jass Singh</h3>
                                            <span><img src="images/icon9.png" alt="">India</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="repcent">
                                        <ul class="star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                        <span>4.5</span>
                                        <p>3 Reviews</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="bidrit">
                                        <h3>$510</h3>
                                        <p>In 10 Days</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="usy-dt">
                                        <img src="images/resources/jassica.jpg" alt="">
                                        <div class="usy-name">
                                            <h3>Jassica William</h3>
                                            <span><img src="images/icon9.png" alt="">New York</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="repcent">
                                        <ul class="star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                        <span>5</span>
                                        <p>12 Reviews</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="bidrit">
                                        <h3>$510</h3>
                                        <p>In 10 Days</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="usy-dt">
                                        <img src="images/resources/rock.jpg" alt="">
                                        <div class="usy-name">
                                            <h3>Afzal Ahmad</h3>
                                            <span><img src="images/icon9.png" alt="">India</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="repcent">
                                        <ul class="star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                        <span>4.5</span>
                                        <p>2 Reviews</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="bidrit">
                                        <h3>$510</h3>
                                        <p>In 10 Days</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="usy-dt">
                                        <img src="images/resources/smith.png" alt="">
                                        <div class="usy-name">
                                            <h3>Rock Smith</h3>
                                            <span><img src="images/icon9.png" alt="">Australia</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="repcent noreview">
                                        <ul class="star">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-o"></i></li>
                                        </ul>
                                        <span>No rating</span>
                                        <p>0 Reviews</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="bidrit">
                                        <h3>$510</h3>
                                        <p>In 10 Days</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    </div><!-- main-section-data end-->
                </div>
            </div>
        </main>
    @endforeach
@endif



@endsection