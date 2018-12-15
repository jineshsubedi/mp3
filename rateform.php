<div class="card">
	<div class="card-header">
		<h4>place your review</h4>
	</div>
	<div class="card-body">
		<form action="index.php" method="post">
			<div class="form-group">
				<input type="text" name="name" class="form-control" placeholder="enter your name..">
			</div>
			<div class="form-group">
				<textarea name="review" class="form-control" placeholder="enter your review.."></textarea>
			</div>
			<div class="form-group">
				<select name="rate" class="form-control">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5" selected>5</option>
				</select>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="submit" class="btn btn-sm btn-primary">
			</div>
		</form>
	</div>
</div>