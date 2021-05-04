<?php

namespace Core;

use System\Redirect;

class View
{
    protected $title;

    public function __construct(string $title)
    {
        $this->title = ucfirst($title);
    }

    public function render(string $path, array $data = [])
    {
        $fullPathTemplate = ROOT . '/app/layout/master.php';


        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $$key = $value;
            }
        }

        var_dump($status);

        require_once $fullPathTemplate;
    }

    public function getBP()
    {
        return Route::getBasePath();
    }

    public function getTitle()
    {
        return $this->title;
    }

    private function getTasks($id = null): string
    {
        $path = ROOT . '/app/config/tasks.php';
        $tasks = [];

        if (file_exists($path)) {
            $tasks = require_once $path;
        }

        if (!isset($id)) {
            (int)$id = mb_substr($this->title, mb_strlen('task'));
        }

        if (isset($tasks) && isset($id) && is_array($tasks) && count($tasks) >= $id) {
            return $tasks[$id];
        } else {
            return '';
        }
    }
}
