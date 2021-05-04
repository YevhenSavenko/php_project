<?php

namespace System;

class App
{
    protected static $controller;
    protected static $action;

    private static function initialDefault()
    {
        self::$controller = 'index';
        self::$action = 'index';
    }


    private static function getURI(): string
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim(($_SERVER['REQUEST_URI']), '/');
        }
    }

    private static function checkParams(array $data): void
    {
        if (count($data) > 2) {
            Redirect::redirectPage('/error');
        }

        if (isset($data[0]) && !empty($data[0])) {
            self::$controller = $data[0];
        }

        if (isset($data[1]) && !empty($data[1])) {
            self::$action = $data[1];
        }
    }

    public static function run()
    {
        $uri = self::getURI();
        $pathPart = explode('?', $uri);
        $pathHead = explode('/', array_shift($pathPart));

        self::initialDefault();
        self::checkParams($pathHead);

        self::$controller = 'Controllers\\' . ucfirst(self::$controller) . 'Controller';
        self::$action = 'action' . ucfirst(self::$action);


        if (!class_exists(self::$controller)) {
            Redirect::redirectPage('/error');
        }

        $controllerClass = new self::$controller;

        if (!method_exists($controllerClass, self::$action)) {
            Redirect::redirectPage('/error');
        }

        $actionName = self::$action;
        $controllerClass->$actionName();
    }
}
