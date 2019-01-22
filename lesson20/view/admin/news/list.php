<div id="content">
	<h2>List news</h2>
</div>
<?php
	while($news = $listNews->fetch_assoc()) {
		$news_id = $news['id'];
		echo $news['id'].' ---- '.$news['title'];
		echo "<a href='admin.php?controller=news&action=delete&id=$news_id'> DELETE</a>";
		echo " | <a href='admin.php?controller=news&action=edit&id=$news_id'> EDIT</a>";
		echo "<br>";
	}
?>