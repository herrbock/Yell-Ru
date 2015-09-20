<?php

/**
 * Родительский класс фигур
 *
 * @author Alexey.Luciancikov
 */
abstract class Figure {
    /**
     * 
     * Вывод в виде изображения
     * 
     * @return string Контент изображения
     */
    abstract public function drawImage();
    
    
    /**
     * 
     * Вывод в виде массива точек
     * 
     * @return array Массив точек
     */
    abstract public function returnArray();
    
    /**
     *
     * @var array Набор свойств фигуры
     */
    protected $_properties = array();
    
    /**
     * 
     * @param array  $properties свойства фигуры
     */
    public function __construct($properties = array()) {
        $this->_properties = $properties;
    }
    
    /**
     * 
     * @param string $name имя фигуры
     * @param array $properties свойства фигуры
     * @return \Figure\Circle|\Figure\Rectangle
     * @throws Exception
     */
    public static function makeFigure($name, $properties = array())
    {
        $class = "\\Figure\\".$name;
        if(!class_exists($class))
        {
            throw new Exception('Unknown class');
        }
        return new $class($properties);
    }
    
}
