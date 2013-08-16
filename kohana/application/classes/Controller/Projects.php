<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Projects extends Controller {

    public function action_edit() {
        $id = $this->request->param('id');
        $project = ORM::factory('project', $id);

        if ($_POST) {
            $project->name = $_POST['name'];
            $project->save();

            $this->redirect("/projects/$id");
        }

        $view = View::factory('projects/edit')
            ->bind('project', $project);
        $this->response->body($view);
    }
    public function action_list() {
        $projects = ORM::factory('project')->find_all();

        $view = View::factory('projects/list')
            ->bind('projects', $projects);
		$this->response->body($view);
	}
    public function action_tasks() {
        $id = $this->request->param('id');
        $project = ORM::factory('project', $id);

        if ($_POST) {
            $task = ORM::factory('task');
            $task->project_id = $_POST['project_id'];
            $task->name = $_POST['name'];
            $task->due_at = $_POST['due_at'];
            $task->save();
        }

        $view = View::factory('projects/tasks')
            ->bind('project', $project);
		$this->response->body($view);
    }
}
