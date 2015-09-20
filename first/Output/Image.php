<?php

namespace Output;

/**
 * Класс вывода изображения
 *
 * @author Alexey.Luciancikov <bock89@mail.ru>
 */
class Image extends \Outputer{
    /**
     * 
     * @param \Figure $figure Фигура вывода
     * @return string контент изображения
     */
    public function output(\Figure $figure)
    {
        return $figure->drawImage();
    }
}
