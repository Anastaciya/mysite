<?php
class Router{
	private $routes;
	
	public function __construct(){
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}
	
	public function run(){
		// Получить строку запоса
		if (!empty($_SERVER['REQUEST_URI'])){
			$uri = trim($_SERVER['REQUEST_URI'],'/');
		}
		echo $uri;
		// Проверить наличие такрго запроса в routes.php
		
		// Если есть совпадения опреилить какой контроллер
		
		// и action обрабатывают запрос
		
		// Подключить файл класса контроллера
		
		// Создать объект, вызвать метод(т.е. action)
	}
}

?>