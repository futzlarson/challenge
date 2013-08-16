<?php defined('SYSPATH')  or die('No direct script access.');

class Model_Project extends ORM {
    function tasks() {
        return ORM::factory('task')->where('project_id', '=', $this->id)->find_all();
    }
}
