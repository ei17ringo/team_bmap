<?php
class Post{
		//プロパティ（db接続オブジェクト)
		private $dbconnect = '';
		//コンストラクタ
		function __construct(){

      // DB接続ファイルを読み込む
			require('dbconnect.php');

		  // DB接続設定の値をプロパティに代入
			$this->dbconnect = $db;
		}

		function mypage($id){
			$sql = sprintf('SELECT * FROM `posts` WHERE `userid` = %d', $id);
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
			$rtn = array();
			while ($result = mysqli_fetch_assoc($results)) {
				$rtn[] = $result;
			}
			return $rtn;
		}

		// 一覧表示に必要なデータを取得
		function home(){
			// SQLの記述(SELECT文)
			$sql = 'SELECT *
							FROM `posts`';
			// SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
			// 実行結果を取得し、配列に格納
			$rtn = array();
			while ($result = mysqli_fetch_assoc($results)) {
						 $rtn[] = $result;
			}
			// 取得結果を返す
			return $rtn;
		}
    function choose(){

    $sql = 'SELECT `id`, `title`, `contents`, `mainPictureAddress`, `area`, `genre`, `userid`, `createdate`, `updatedate` FROM `posts` WHERE 1';

    $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

      //実行結果を取得し、配列に格納
      $rtn = array();
      while ($result = mysqli_fetch_assoc($results)) {
        $rtn[] = $result;
      }

      //取得結果を返す
      return $rtn;
      }
}
?>