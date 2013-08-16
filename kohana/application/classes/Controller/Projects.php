<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Projects extends Controller {

    public function action_list() {
        $projects = ORM::factory('project')->find_all();

        $view = View::factory('projects/list')
            ->bind('projects', $projects);
		$this->response->body($view);
	}
    public function action_tasks() {
        $id = $this->request->param('id');
        $project = ORM::factory('project', $id);

        $view = View::factory('projects/tasks')
            ->bind('project', $project);
		$this->response->body($view);

    }
}
