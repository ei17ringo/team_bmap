<?php

	//モデルの呼び出し
	require('models/post.php');

	// コントローラのクラスをインスタンス化
   	$controller = new PostsController();
   	//$controller->index();
   	//アクション名によって、呼び出すメソッドを変える
   	switch ($action) {
   		case 'home':
   			$controller->home();
   			break;
   		case 'choose':
   			$controller->choose();
   			break;
   		case 'spot':
   			$controller->spot($id);
   			break;
      case 'gourmet':
        $controller->gourmet($id);
        break;
   		case 'add':
   			$controller->add();
   			break;
      case 'create':
        $controller->create($_POST);
        break;
      case 'edit':
        $controller->edit($id);
        break;
      case 'update':
        $controller->update($id,$_POST);
        break;
      case 'delete':
        $controller->delete($id);
        break;
   		default:
   			# code...
   			break;
   	}

	class PostsController {
      function home() {
          $resource = 'posts';
          $action = 'home';
          require('views/layout/CustomApplication.php');
      }

      function choose() {
          $resource = 'posts';
          $action = 'choose';
          require('views/layout/CustomApplication.php');
      }

      function spot($id) {
          $resource = 'posts';
          $action = 'spot';
          require('views/layout/application.php');
      }

      function gourmet($id) {
          $resource = 'posts';
          $action = 'gourmet';
          require('views/layout/application.php');
      }

      function add(){
          $resource = 'posts';
          $action = 'add';
          require('views/layout/application.php');
      }

      function create($post_data){

      }

      function edit($id){
          $resource = 'posts';
     	    $action = 'edit';
          require('views/layout/application.php');
      }

      function update($id,$post_data){

      }

      function delete($id){

      }
   }
?>