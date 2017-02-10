<?php

  session_start();

  //モデルの呼び出し
  require('models/user.php');

  // コントローラのクラスをインスタンス化
    $controller = new UsersController();
    //$controller->index();
    //アクション名によって、呼び出すメソッドを変える
    switch ($action) {
      case 'register':
        $controller->register();
        break;
      case 'create':
        $controller->create($_POST);
        break;
      case 'login':
        $controller->login($_POST);
        break;
      case 'logout':
        $controller->logout($_SESSION);
        break;
      case 'profilechg':
        $controller->profilechg($id);
        break;
      case 'profileud':
        $controller->profileud($id,$_POST);
        break;
      case 'userdel':
        $controller->userdel($id);
        break;
      case 'update':
        $controller->update($_POST,$id);
        break;
      default:
        # code...
        break;
    }

  class UsersController {
      function register() {
          $resource = 'users';
          $action = 'register';
          require('views/layout/application.php');
      }

      function create($user_data){
        $user = new User($user_data);
        $return = $user->create($user_data);
        if($return == $_SESSION['error']){
          header('Location: /b_map/users/register');
        } else {
          header('Location: /b_map/posts/home');
        }
      }


      function login($user_data){
        $resource = 'users';
        $action = 'login';
        $errorMessage = "";
        // 入力チェックのプログラムを書く
        if (!empty($user_data)) {
          // var_dump("po");
          // $email = htmlspecialchars($_POST['email']);
          // ログインの処理
          if (isset($user_data['email']) && $user_data['password'] != '') {
            // モデルを呼び出す
            $user = new User();
            // モデルのprofilechgメソッドを実行する
            $viewOptions = $user->login($user_data);
            // var_dump($viewOptions);
            //if文を書く
            if ($viewOptions == NULL){
              $errorMessage = "Please enter again.";
              $resource = 'users';
              $action = 'login';
            }else{

              $_SESSION['userid']=$viewOptions['userid'];
              $_SESSION['nickname']=$viewOptions['nickname'];
              $_SESSION['email']=$viewOptions['email'];
              // $resource = 'posts';
              // $action = 'home';

              header('Location: ../posts/home');
            }
          }
        }
        require('views/layout/application.php');

      }


      function logout($user_id){
        $user = new User();
        $return = $user->logout($user_id);
        header('Location: /b_map/posts/home');

      }

      function profilechg($id){

        $user = new User();
        // モデルのprofilechgメソッドを実行する
        $viewOptinons = $user->profilechg($id);
        $resource = 'users';
        $action = 'profilechg';
        require('views/layout/application.php');
      }

      function profileud($id,$user_data){
        $user = new User();
        $return = $user->profileud($id,$user_data);
        header('Location: /b_map/posts/home');
      }

      function userdel($id){
        $user = new User();
        $return = $user->userdel($id);
        header('Location: /b_map/posts/home');
      }

   }
 

?>