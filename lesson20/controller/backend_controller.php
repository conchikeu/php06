<?php
	require_once 'model/news_model.php';
	class BackendController {
		/*
			* Description: Xu ly yeu cau o backend
			* Created by CanhLH
			* Created 15/01/2019
		*/
		public function handleRequest() {
			$controller = isset($_GET['controller'])?$_GET['controller']:'dashboard';
			$action = isset($_GET['action'])?$_GET['action']:'list';

			if ($controller == 'dashboard') {
					// day la trang dashboard
					include 'view/admin/dashboard.php';
			} else if ($controller == 'news'){
					// Xu ly them sua xoa news
					$this->handleNews($action);

			} else if ($controller == 'products'){
					// Xu ly them sua xoa products				 
				  $this->handleProduct($action);

			}
		}
		public function handleNews($action) {
			switch ($action) {
				case 'list':
					$newsModel = new NewsModel();
					$listNews = $newsModel->listNews();
					include 'view/admin/news/list.php';
					break;
				case 'add':
					// xu ly add news
					if (isset($_POST['add'])) {
						$title = $_POST['title'];
						$newsModel = new NewsModel();
						if ($newsModel->add($title) === TRUE) {
							header("Location: admin.php?controller=news&action=list");
						}
					}
					include 'view/admin/news/add.php';
					break;
				case 'edit':
					# code...
					$id = isset($_GET['id'])?$_GET['id']:"";
					$newsModel = new NewsModel();
					$newEdit = $newsModel->getNewsInfo($id);
					if (isset($_POST['edit'])) {
						$title = $_POST['title'];
						$newsModel = new NewsModel();
						if ($newsModel->edit($id, $title) === TRUE) {
							header("Location: admin.php?controller=news&action=list");
						}
					}
					include 'view/admin/news/edit.php';

					break;
				case 'delete':
					$id = isset($_GET['id'])?$_GET['id']:"";
					if (!empty($id)) {
						$newsModel = new NewsModel();
						if ($newsModel->deleteNews($id) === TRUE) {
							header("Location: admin.php?controller=news&action=list");
						}
					} else {
						echo "id nay khong ton tai";
					}
					# code...
					break;
				default:
					$newsModel = new NewsModel();
					$listNews = $newsModel->listNews();
					include 'view/admin/news/list.php';
					break;
			}
		}
		public function handleProduct($action) {
			echo $action;
		}
	}
?>