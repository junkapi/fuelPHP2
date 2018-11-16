<?php

	class Controller_ViewSample3 extends Controller 
	{
		public function action_index()
		{
			//Viewオブジェクトを生成する
			$view = View::forge('viewsample');

			//Viewに変数をセットする
			$view->set('title', 'ビューのサンプル3');
			$view->set_safe('username', '<del>Azunyan</del>Azusa');

			//Viewオブジェクトを返す
			return $view;
		}
	} 