<h1>Home page</h1>
<?php 
	while($news = $list_news->fetch_assoc()) {
		echo $news['id'].' ---- '.$news['tittle']."<br>";
	}
?>