<?php

namespace Output;


/**
 * Класс вывода массива точек
 *
 * @author Alexey.Luciancikov <bock89@mail.ru>
 */
class PointArray extends \Outputer{
    /**
     * 
     * @param \Figure $figure Фигура вывода
     * @return array массив точек
     */
    public function output(\Figure $figure)
    {
        return $figure->returnArray();
    }
}
