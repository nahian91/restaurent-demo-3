<?php include('header.php');?>

    <?php include('parts/breadcumb.php');?>

	<section class="online-booking reservation pt-100">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="headding-part text-center">
						<p class="headding-sub">Make Online Reservation</p>
						<h2 class="headding-title text-uppercase font-weight-bold">Book a table</h2>
					</div>
				</div>
			</div>
			<form>
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<select name="sources" class="custom-select sources form-control" data-placeholder="Hour">
								   <option value="profile">Hour</option>
								   <option value="word">minute</option>
								   <option value="hashtag">second</option>
							</select>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<select name="sources" class="custom-select sources form-control" data-placeholder="Number Of People">
								   <option value="profile">1</option>
								   <option value="word">2</option>
								   <option value="hashtag">3</option>
							</select>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Pick a Date" required>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Phone Number " required>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="name" placeholder="Name" required>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="email" placeholder="Email Address" required>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Coments" required>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 text-center">
						<input type="submit" name="submit" value="Book a table" class="table-book">
					</div>
				</div>
			</form>
		</div>
	</section>

    <?php include('footer.php');?>