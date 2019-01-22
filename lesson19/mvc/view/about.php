<h1>About Page</h1>
<?php
// var_dump($list_news);exit;
	while($news = $list_news->fetch_assoc()) {
		$news_id = $news['id'];
		echo $news['id'].' -- '.$news['title'].' -- '.$news['description'].' -- '.$news['image'].' -- '.$news['created']. " : ";
		echo "<a href='index.php?news_id=$news_id'> Detail</a>";
		echo " / ";
		echo "<a href='index.php?news_id=$news_id'> Delete</a>";
		echo "<br>";
	}		
?>