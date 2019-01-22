<div id="content">
	<h2>Edit news</h2>
	<?php $news = $newEdit->fetch_assoc()?>
	<form action="admin.php?controller=news&action=edit&id=<?php echo $id?>" method="POST">
		<p>Title <input type="text" name="title" placeholder="Please input news title" value="<?php echo $news['title']?>"></p>
		<p><input type="submit" name="edit" value="Edit news"></p>
	</form>
</div>