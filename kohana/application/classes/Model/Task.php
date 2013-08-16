<?php defined('SYSPATH')  or die('No direct script access.');

class Model_Task extends ORM {
    function due() {
        $d = new DateTime($this->due_at);
        return $d->format('n/j/Y');
    }
}
