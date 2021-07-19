<?php /** @noinspection PhpUndefinedVariableInspection */
/** @noinspection PhpIncludeInspection */

/** @noinspection PhpPropertyOnlyWrittenInspection */


class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/Framework/Router/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI(): string
    {
        return (!empty($_SERVER['REQUEST_URI'])) ? trim($_SERVER['REQUEST_URI'], '/') : false;
    }

    public function run()
    {
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {
                $segments = explode('/', $path);
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action'.ucfirst(array_shift($segments));

                $controllerFile = ROOT.'/App/Controller/'.$controllerName.'.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                $controllerObject = new $controllerName;
                $result = $controllerObject->$actionName();
                if ($result != null) {
                    break;
                }
            }
        }
    }
}