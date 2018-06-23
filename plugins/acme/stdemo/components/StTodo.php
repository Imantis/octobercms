<?php namespace Acme\StDemo\Components;

use Cms\Classes\ComponentBase;

class StTodo extends ComponentBase
{
    public $name;
    
    public $tasks;

    public function componentDetails()
    {
        return [
            'name'        => 'stTodo Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->name = 'st';

        $this->tasks = [
            'task1',
            'task2',
            'task3'
        ];
    }
}
