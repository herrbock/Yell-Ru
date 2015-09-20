<?php

/**
 * Родительский класс фигур
 *
 * @author Alexey.Luciancikov
 */
abstract class Outputer {

    /**
     *
     * @var array экземпляры классов вывода
     */
    protected static $_instances = array();

    /**
     * Вывод результата
     */
    abstract public function output(\Figure $figure);

    /**
     * 
     * @param string $name имя вида вывода
     * @return \Figure\Image|\Figure\PointArray
     * @throws Exception
     */
    public static function createOutputer($name) {
        $class = "\\Output\\" . $name;

        if (empty(static::$_instances[$name])) {
            if (!class_exists($class)) {
                throw new Exception('Unknown class');
            }
            static::$_instances[$name] = new $class();
        }
        return static::$_instances[$name];
    }

}
