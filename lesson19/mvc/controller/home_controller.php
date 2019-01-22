<?php 
	include 'model/home_model.php';
	class HomeController {
		public function xuly_yeucau() {
			
			$action = isset($_GET['news_id'])?'news_detail':"home";

			if($action == "home"){
				$model = new HomeModel();
				$list_news = $model->getHomePage();
				include 'view/about.php';
			}else {
				$news_id = $_GET['news_id'];
				$model = new HomeModel();
				$news_detail = $model->getNewsDetail($news_id);
				include 'view/news_details.php';
			}
			
		}
	}
?>