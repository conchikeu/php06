<div id="content">
	<h2>Edit news</h2>
	<?php $newsHere = $newEdit->fetch_assoc()?>
	<form action="admin.php?controller=news&action=edit&id=<?php echo $id?>" method="POST">
		<p>Title <input type="text" name="title" placeholder="Please input news title" value="<?php echo $newsHere['title']?>"></p>
		<p><input type="submit" name="editNews" value="Edit news"></p>
	</form>
</div>