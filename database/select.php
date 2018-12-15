<?php include('connection.php'); ?>
<?php
	if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
    } else {
        $pageno = 1;
    }
    $no_of_records_per_page = 5;
    $offset = ($pageno-1) * $no_of_records_per_page;
    $total_pages_sql = "SELECT COUNT(*) FROM ratings";
    $result = mysqli_query($conn,$total_pages_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);


$sql = "SELECT * FROM ratings ORDER BY id DESC LIMIT ".$offset.", ".$no_of_records_per_page;
$result = $conn->query($sql);


?><div class="col-md-12"><?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
<div class="review-box">
	<p><b><?php echo $row["name"]; ?> </b> &nbsp;&nbsp; <small><?php echo $row["created_at"]; ?></small> <span class="pull-right">
		<?php
		$stars = '<i class="fa fa-star"></i>';
		if($row['rate']==1){ echo $stars; }
		elseif($row['rate']==2) { echo $stars.$stars; } 
		elseif($row['rate']==2) { echo $stars.$stars.$stars; } 
		elseif($row['rate']==2) { echo $stars.$stars.$stars.$stars; } 
		else{ echo $stars.$stars.$stars.$stars.$stars; } 
		?>
	</span></p>
	<p><?php echo $row["review"]; ?> </p>
</div>
<?php } ?>
<ul class="pagination">
    <li><a class="btn btn-sm btn-warning" href="?pageno=1">First</a></li>
	<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
	    <a class="btn btn-sm btn-primary" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
	</li>
	<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
	    <a class="btn btn-sm btn-info" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
	</li>
	<li><a class="btn btn-sm btn-danger" href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
</ul>
<?php }else{

	echo "<div class='review-box'><p>no reiview yet</p></div>";
}
?>
</div>
<style>
	.review-box{
		/*border: 1px solid grey;*/
		padding:10px;
		border-radius: 10px;
		box-shadow: 0px 3px 3px black;
		margin-bottom: 15px;
	}
</style>