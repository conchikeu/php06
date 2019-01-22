<h1>News detail page</h1>
<?php
	while($news = $news_detail->fetch_assoc()) {
		echo $news['id'].' ---- '.$news['title'].' ---- '.$news['description'].' ---- '.$news['image'].' ---- '.$news['created']."<br>";
	}
?>