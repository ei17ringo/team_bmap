<?php

 session_start();

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
   			$controller->choose($id);
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
      case 'mypage':
        $controller->mypage($id);
        break;
   		default:
   			# code...
   			break;
   	}

	class PostsController {
      function home() {
       // モデルを呼び出す
          $post = new post();
          $viewOptions = $post->home();
          $resource = 'posts';
          $action = 'home';
          // var_dump($viewOptions);
          require('views/layout/CustomApplication.php');
      }
      // ↑ここで使えるようにもう一度記入  URLで指示されたファイルを呼び出す処理をしている

      function choose($id) {
          $post = new Post();
          $viewOptions = $post->choose($id);

          $spot = array();
          $gourmet = array();

          foreach ($viewOptions as $data) {
            if ($data['genre']=='0') {
              $spot[] = $data;
            }elseif ($data['genre']=='1') {
              $gourmet[] = $data;
            }
          }
          // var_dump($viewOptions);

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
          $post = new post();
          $viewOptions = $post->gourmet($id);
          $resource = 'posts';
          $action = 'gourmet';
//          var_dump($viewOptions);
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
      function mypage($id){
          $post = new Post();
          $posts_data = $post->mypage($id);
          $resource = 'posts';
          $action = 'mypage';
          require('views/layout/application.php');
      }
   }
?>