@if(Auth::check())
	@if(isset($products))
		{{"co bien user"}}
	@endif
<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="client/profile/{{Auth::id()}}" title=""><img src="images/logo.png" alt=""></a>
					</div><!--logo end-->
					<div class="search-bar" style="position:relative;">
						<form autocomplete="off">
							<input type="text" id="search" name="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div><!--search-bar end-->
					
					<nav>
						<ul>
							<li>
								<a href="client/newsfeed/{{Auth::id()}}" title="">
									<span><img src="images/icon1.png" alt=""></span>
									Home
								</a>
							</li>
							<li>
								<a href="client/companies" title="">
									<span><img src="images/icon2.png" alt=""></span>
									Companies
								</a>
							</li>
							<li>
								<a href="client/allprofile" title="">
									<span><img src="images/icon4.png" alt=""></span>
									Top profile
								</a>
							</li>
							<li>
								<a href="client/job" title="">
									<span><img src="images/icon5.png" alt=""></span>
									Jobs
								</a>
							</li>
							<li>
								<a href="#" title="" class="not-box-open">
									<span><img src="images/icon7.png" alt=""></span>
									Notification
								</a>
								<div class="notification-box noti" id="notification">
									<div class="nt-title">
										<h4>Setting</h4>
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img1.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img3.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="view-all-nots">
						  					<a href="#" title="">View All Notification</a>
						  				</div>
									</div><!--nott-list end-->
								</div><!--notification-box end-->
							</li>
						</ul>
					</nav><!--nav end-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info">
						
							<img src="images/resources/{{Auth::user()->avatar}}" alt="" style="width:30px;">
							<a  title="">{{Auth::user()->name}}</a>
							<i class="la la-sort-down"></i>
						
						
						</div>

						<div class="user-account-settingss" id="users">
							
							<h3 class="tc"><a href="client/profile/{{Auth::id()}}" title="">Trang Cá Nhân</a></h3>
							<h3 class="tc"><a href="logout" title="">Logout</a></h3>
						</div><!--user-account-settingss end-->
					</div>
				</div><!--header-data end-->
			</div>
		</header><!--header end-->	
		@endif