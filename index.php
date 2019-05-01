<?php get_header(); ?>

<div class="container-fluid">
		<div class="row"> 
			<div class="col-md-3">
				<div class="left-colum" data-simplebar>
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

					<div class="left-column-item">
						<h3>skills</h3>
						<div class="input-with-icon">
							<input type="text" class="" placeholder="add more skills	" aria-describedby="sizing-addon1">
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
