<?php

	class Controller_Blog extends Controller
	{
		public function action_category($cat = 'php', $page = '1')
		{
			return__FILE__ . '<br>' . $cat . '<br>' . $page;
		}
	}