<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Projects extends Controller {

    public function action_list() {
        $projects = ORM::factory('project')->find_all();

        $view = View::factory('projects/list')
            ->bind('projects', $projects);
		$this->response->body($view);
	}
}
