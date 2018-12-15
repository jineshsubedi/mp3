<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('database/insert.php'); ?>
<section id="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 banner"><br>	
				<div class=" container banner-content">
					<form>
						<div class="card col-md-6 col-md-offset-3"><br>
							<h4>Download Youtube Mp3 from here</h4>
							
							<div class="form-group">
								<input type="search" id="youtube_url" class="form-control" placeholder="https://www.youtube.com/watch?v=moTcYv5opb0" required>
							</div>	
							<div class="form-group">
								<a href="javascript:void(0)" class="btn btn-success" id="button">Convert</a>
							</div>
							<p id="iframe"></p>
							<p>Want to download youtube video as mp3, dont wory just copy and paste youtube url to search box to conver and download mp3 songs. No any annoying ads, simple as it seems. Enjoy!</p>
						</div>	
					</form>
					
					<br><br>	
				</div>
			</div> 
			<div class="clearfix"></div>
			<div class="col-md-8">
				<?php include('service.php'); ?>
			</div>
			<div class="col-md-4 card">
				<div class="sidebar">
					<h4>Like & Support My Favourite Art Page</h4>
					<div class="fb-page" data-href="https://www.facebook.com/anupamQishore/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/anupamQishore/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/anupamQishore/">Anupam Art</a></blockquote></div>
				</div>
				<div class="sidebar">
	                <?php include('rateform.php'); ?>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h4>Reviews</h4>
			<?php include('database/select.php') ?>
			</div>
		</div>
        <br/>
	</div>
</section>
<?php 
include('footer.php'); 
include('database/close.php'); 
?>