<?php get_header(); ?>

<div class="container-fluid">
		<div class="row"> 
			<div class="col-md-3">
				<!-- div class="left-colum" data-simplebar -->
				<div class="left-colum">
					<div class="left-column-item">
						<h3>Location</h3>
						<div class="input-with-icon">
							<input type="text" class="" placeholder="Location" aria-describedby="sizing-addon1">
							<span class="icon" id="sizing-addon1"><i class="fas fa-map-marker-alt"></i></span>
						</div>
					</div>

					<div class="left-column-item">
						<h3>Categories</h3>
						<select name="" multiple="" class="selectpicker">
							<option>Admin Support</option>
							<option>Sales &amp; Marketing</option><option>Customer Service</option>
							<option>Data Analytics</option>
							<option>Design &amp; Creative</option>
							<option>Legal</option>
							<option>Software Developing</option>
							<option>IT &amp; Networking</option>
							<option>Writing</option>
							<option>Translation</option>
						</select>
					</div>

					<div class="left-column-item">
						<h3>Keywords</h3>
						<div class="input-with-icon">
							<input type="text" class="" placeholder="e.g. task title" aria-describedby="sizing-addon1">
							<span class="icon" id="sizing-addon1"><button class="btn btn-primary">+</button></i></span>
						</div>
					</div>

					<div class="left-column-item">
						<h3>Hourly Rate</h3>
						<input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/>
					</div>

					<div class="skill-cloud">
						<div class="skill-cloud-item"><label>front-end-dev<input type="checkbox"></label></div>
						<div class="skill-cloud-item"><label>angular<input type="checkbox"></label></div>
						<div class="skill-cloud-item"><label>React<input type="checkbox"></label></div>
						<div class="skill-cloud-item"><label>Vue js<input type="checkbox"></label></div>
						<div class="skill-cloud-item"><label>web app<input type="checkbox"></label></div>
						<div class="skill-cloud-item"><label>design<input type="checkbox"></label></div>
						<div class="skill-cloud-item"><label>wordpress<input type="checkbox"></label></div>	
					</div>

					<div class="left-column-item">
						<h3>skills</h3>
						<div class="input-with-icon">
							<input type="text" class="" placeholder="add more skills" aria-describedby="sizing-addon1">
							<span class="icon" id="sizing-addon1"><button class="btn btn-primary">+</button></i></span>
						</div>
					</div>

					<div class="left-column-item hidden-md hidden-lg">
						<h3>Search</h3>
						<button class="btn btn-primary btn-lg btn-block">Search</button>
					</div>

					<div class="margin-spacing hidden-sm hidden-xs"></div>
				</div>
			</div>

			<div class="right-colum col-md-9">
				<h3 class="page-title">Search Results</h3>

				<div class="notify-box margin-top-15">
					<label class="switch">
					  <input id="alert-switch" type="checkbox" class="primary">
					  <span class="checkbox-slider round"></span>
					</label>
					<label for="alert-switch"> Turn on email alerts for this search</label>
				
					<div class="pull-right notification-sort">
						<select name="" class="selectpicker" id="notification-sort" data-style="notify-box-select">
							<option>Admin Support</option>
							<option>Sales &amp; Marketing</option><option>Customer Service</option>
							<option>Data Analytics</option>
							<option>Design &amp; Creative</option>
							<option>Legal</option>
							<option>Software Developing</option>
							<option>IT &amp; Networking</option>
							<option>Writing</option>
							<option>Translation</option>
						</select>
					</div>

					<div class="pull-right notification-sort">
						<label for="notification-sort">Sort by:</label>
					</div>
				</div>

				<div class="clearfix hidden-md hidden-lg"></div> 

				<!-- Search Result -->
				<div class="freelancers">

					<div class="row">
						<div class="col-md-6">

							<!-- Freelancer -->
							<div class="freelancer">

								<!-- Overview -->
								<div class="freelancer-overview">
									<div class="freelancer-overview-inner">
										
										<!-- Bookmark Icon -->
										<span class="bookmark-icon"></span>
										
										<!-- Avatar -->
										<div class="freelancer-avatar">
											<div class="verified-badge"></div>
											<a href="single-freelancer-profile.html"><img width=100 src="https://tinyfac.es/data/avatars/7D3FA6C0-83C8-4834-B432-6C65ED4FD4C3-500w.jpeg" alt="" class="img-circle"></a>
										</div>

										<!-- Name -->
										<div class="freelancer-name">
											<h4><a href="single-freelancer-profile.html">Tom Smith <img class="flag" src="https://www.countryflags.io/be/flat/64.png" class="img-rounded" width=20 alt="" data-tippy-placement="top" data-tippy="" data-original-title="United Kingdom"></i></a></h4>
											<span>UI/UX Designer</span>
										</div>

										<!-- Rating -->
										<div class="freelancer-rating">
											<div class="star-rating" data-rating="4.9">
												<span class="star"></span>
												<span class="star"></span>
												<span class="star"></span>
												<span class="star"></span>
												<span class="star"></span>
											</div>
										</div>
									</div>
								</div>

								<!-- summary -->
								<div class="freelancer-details">
									<div class="freelancer-details-list">
										<ul>
											<li>Location <strong><i class="fas fa-map-marker-alt fa-xs"></i> London</strong></li>
											<li>Rate <strong>$60 / hr</strong></li>
											<li>Job Success <strong>95%</strong></li>
										</ul>
									</div>
									<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" style="width: 360px;">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
								</div>
							</div>
							<!-- /freelancer -->

						</div>

						<div class="col-md-6">
							<!-- Freelancer -->
							<div class="freelancer">

								<!-- Overview -->
								<div class="freelancer-overview">
									<div class="freelancer-overview-inner">
										
										<!-- Bookmark Icon -->
										<span class="bookmark-icon"></span>
										
										<!-- Avatar -->
										<div class="freelancer-avatar">
											<div class="verified-badge"></div>
											<a href="single-freelancer-profile.html"><img width=100 src="https://randomuser.me/api/portraits/men/32.jpg" alt="" class="img-circle"></a>
										</div>

										<!-- Name -->
										<div class="freelancer-name">
											<h4><a href="single-freelancer-profile.html">Tom Smith </i><img class="flag" src="https://www.countryflags.io/lr/flat/64.png" class="img-rounded" width=20 alt="" data-tippy-placement="top" data-tippy="" data-original-title="United Kingdom"></a></h4>
											<span>UI/UX Designer</span>
										</div>

										<!-- Rating -->
										<div class="freelancer-rating">
											<div class="star-rating" data-rating="4.9">
												<span class="star"></span>
												<span class="star"></span>
												<span class="star"></span>
												<span class="star"></span>
												<span class="star"></span>
											</div>
										</div>
									</div>
								</div>

								<!-- summary -->
								<div class="freelancer-details">
									<div class="freelancer-details-list">
										<ul>
											<li>Location <strong><i class="fas fa-map-marker-alt fa-xs"></i> London</strong></li>
											<li>Rate <strong>$60 / hr</strong></li>
											<li>Job Success <strong>95%</strong></li>
										</ul>
									</div>
									<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" style="width: 360px;">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
								</div>
							</div>
							<!-- /freelancer -->
						</div>
					</div>


					<div class="row">
						<div class="col-md-6">

							<!-- Freelancer -->
							<div class="freelancer">

								<!-- Overview -->
								<div class="freelancer-overview">
									<div class="freelancer-overview-inner">
										
										<!-- Bookmark Icon -->
										<span class="bookmark-icon"></span>
										
										<!-- Avatar -->
										<div class="freelancer-avatar">
											<div class="verified-badge"></div>
											<a href="single-freelancer-profile.html"><img width=100 src="https://randomuser.me/api/portraits/men/64.jpg" alt="" class="img-circle"></a>
										</div>

										<!-- Name -->
										<div class="freelancer-name">
											<h4><a href="single-freelancer-profile.html">Tom Smith <img class="flag" src="https://www.countryflags.io/mf/flat/64.png" class="img-rounded" width=20 alt="" data-tippy-placement="top" data-tippy="" data-original-title="United Kingdom"></a></h4>
											<span>UI/UX Designer</span>
										</div>

										<!-- Rating -->
										<div class="freelancer-rating">
											<div class="star-rating" data-rating="4.9">
												<span class="star"></span>
												<span class="star"></span>
												<span class="star"></span>
												<span class="star empty"></span>
												<span class="star empty"></span>
											</div>
										</div>
									</div>
								</div>

								<!-- summary -->
								<div class="freelancer-details">
									<div class="freelancer-details-list">
										<ul>
											<li>Location <strong><i class="fas fa-map-marker-alt fa-xs"></i> London</strong></li>
											<li>Rate <strong>$60 / hr</strong></li>
											<li>Job Success <strong>95%</strong></li>
										</ul>
									</div>
									<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" style="width: 360px;">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
								</div>
							</div>
							<!-- /freelancer -->

						</div>

						<div class="col-md-6">
							<!-- Freelancer -->
							<div class="freelancer">

								<!-- Overview -->
								<div class="freelancer-overview">
									<div class="freelancer-overview-inner">
										
										<!-- Bookmark Icon -->
										<span class="bookmark-icon"></span>
										
										<!-- Avatar -->
										<div class="freelancer-avatar">
											<div class="verified-badge"></div>
											<a href="single-freelancer-profile.html"><img width=100 src="https://randomuser.me/api/portraits/men/74.jpg" alt="" class="img-circle"></a>
										</div>

										<!-- Name -->
										<div class="freelancer-name">
											<h4><a href="single-freelancer-profile.html">Tom Smith </i><img class="flag" src="https://www.countryflags.io/pe/flat/64.png" class="img-rounded" width=20 alt="" data-tippy-placement="top" data-tippy="" data-original-title="United Kingdom"></a></h4>
											<span>UI/UX Designer</span>
										</div>

										<!-- Rating -->
										<div class="freelancer-rating">
											<div class="star-rating" data-rating="4.9">
												<span class="star"></span>
												<span class="star"></span>
												<span class="star"></span>
												<span class="star"></span>
												<span class="star"></span>
											</div>
										</div>
									</div>
								</div>

								<!-- summary -->
								<div class="freelancer-details">
									<div class="freelancer-details-list">
										<ul>
											<li>Location <strong><i class="fas fa-map-marker-alt fa-xs"></i> London</strong></li>
											<li>Rate <strong>$60 / hr</strong></li>
											<li>Job Success <strong>95%</strong></li>
										</ul>
									</div>
									<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" style="width: 360px;">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
								</div>
							</div>
							<!-- /freelancer -->
						</div>
					</div>



					<div class="row">
						<div class="col-md-6">

							<!-- Freelancer -->
							<div class="freelancer">

								<!-- Overview -->
								<div class="freelancer-overview">
									<div class="freelancer-overview-inner">
										
										<!-- Bookmark Icon -->
										<span class="bookmark-icon"></span>
										
										<!-- Avatar -->
										<div class="freelancer-avatar">
											<div class="verified-badge"></div>
											<a href="single-freelancer-profile.html"><img width=100 src="https://randomuser.me/api/portraits/men/40.jpg" alt="" class="img-circle"></a>
										</div>

										<!-- Name -->
										<div class="freelancer-name">
											<h4><a href="single-freelancer-profile.html">Tom Smith </i><img class="flag" src="https://www.countryflags.io/ph/flat/64.png" class="img-rounded" width=20 alt="" data-tippy-placement="top" data-tippy="" data-original-title="United Kingdom"></a></h4>
											<span>UI/UX Designer</span>
										</div>

										<!-- Rating -->
										<span class="company-not-rated margin-bottom-5">Minimum of 3 votes required</span>
									</div>
								</div>

								<!-- summary -->
								<div class="freelancer-details">
									<div class="freelancer-details-list">
										<ul>
											<li>Location <strong><i class="fas fa-map-marker-alt fa-xs"></i> London</strong></li>
											<li>Rate <strong>$60 / hr</strong></li>
											<li>Job Success <strong>95%</strong></li>
										</ul>
									</div>
									<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" style="width: 360px;">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
								</div>
							</div>
							<!-- /freelancer -->

						</div>

						<div class="col-md-6">
							<!-- Freelancer -->
							<div class="freelancer">

								<!-- Overview -->
								<div class="freelancer-overview">
									<div class="freelancer-overview-inner">
										
										<!-- Bookmark Icon -->
										<span class="bookmark-icon"></span>
										
										<!-- Avatar -->
										<div class="freelancer-avatar">
											<div class="verified-badge"></div>
											<a href="single-freelancer-profile.html"><img width=100 src="https://randomuser.me/api/portraits/men/73.jpg" alt="" class="img-circle"></a>
										</div>

										<!-- Name -->
										<div class="freelancer-name">
											<h4><a href="single-freelancer-profile.html">Tom Smith </i><img class="flag" src="https://www.countryflags.io/hr/flat/64.png" class="img-rounded" width=20 alt="" data-tippy-placement="top" data-tippy="" data-original-title="United Kingdom"></a></h4>
											<span>UI/UX Designer</span>
										</div>

										<!-- Rating -->
										<div class="freelancer-rating">
											<div class="star-rating" data-rating="4.9">
												<span class="star"></span>
												<span class="star"></span>
												<span class="star"></span>
												<span class="star"></span>
												<span class="star"></span>
											</div>
										</div>
									</div>
								</div>

								<!-- summary -->
								<div class="freelancer-details">
									<div class="freelancer-details-list">
										<ul>
											<li>Location <strong><i class="fas fa-map-marker-alt fa-xs"></i> London</strong></li>
											<li>Rate <strong>$60 / hr</strong></li>
											<li>Job Success <strong>95%</strong></li>
										</ul>
									</div>
									<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect" style="width: 360px;">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
								</div>
							</div>
							<!-- /freelancer -->
						</div>
					</div>
					
					
					<!-- pagination -->
					<div class="clearfix"></div>
						<div class="pagination-container margin-top-20 margin-bottom-20">
							<nav class="pagination">
								<ul>
									<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
									<li><a href="#" class="ripple-effect">1</a></li>
									<li><a href="#" class="ripple-effect current-page">2</a></li>
									<li><a href="#" class="ripple-effect">3</a></li>
									<li><a href="#" class="ripple-effect">4</a></li>
									<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
								</ul>
							</nav>
						</div>
					<div class="clearfix"></div>
					<!-- /pagination -->

					<div class="small-footer margin-top-15">
						<div class="small-footer-copyrights">
							© 2019 <strong>Hireo</strong>. All Rights Reserved.
						</div>
						<ul class="footer-social-links">
							<li>
								<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Facebook">
								<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Twitter">
								<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="Google Plus">
								<i class="fab fa-google-plus-g"></i>
								</a>
							</li>
							<li>
								<a href="#" data-tippy-placement="top" data-tippy="" data-original-title="LinkedIn">
								<i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>


				</div>

			</div>
		</div>
</div>

<div class="container-fluid hidden-sm hidden-xs" id="fix-search-button">
	<div class="row">
		<div class="col-md-3">
			<div>
				<button class="btn btn-primary btn-lg btn-block">Search</button>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap Slider -->
<script>var slider = new Slider('#ex2', {});</script>

<?php get_footer(); ?>
