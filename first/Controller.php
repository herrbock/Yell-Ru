<?php

require_once __DIR__.DIRECTORY_SEPARATOR.'Autoloader.php';

Autoloader::register();

// Предположим получение входных данных и валидацию здесь
$name_figure = 'Rectangle';
$params = array();
$outpuer = 'Image';

$figure = \Figure::makeFigure($name_figure, $params);

\Outputer::createOutputer($outpuer)->output($figure);
