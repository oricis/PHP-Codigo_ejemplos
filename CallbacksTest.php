<?php namespace ironwoods\tests;

/**
 * @info: uso de "callbacks" desde una clase
 *
 * @utor: Moisés Alcocer, 2018
 * https://www.ironwoods.es
 */

class CallbacksTest
{

    /**
     * Array with data to use in the tests
     *
     * @var array
     */
    private $arr_fruits = [
        "a" => "lemon",
        "b" => "orange",
        "c" => "banana",
    ];


    /**
     * Runs the tests
     *
     */
    public function run()
    {

        /**
         * Llamando a método de la misma clase (no static)
         *
         */
        $callback = [
            $this,
            'showFruits'
        ];
        echo get_class() . ' / ' . $callback[1] . '<br>';
        array_walk(
            $this->arr_fruits,
            $callback
        );
        echo '<hr>';

        /**
         * Llamando a método de la misma clase (static usando self)
         *
         */
        $callback = [
            'self',
            'showFruitsStatic'
        ];
        echo get_class() . ' / ' . $callback[1] . '<br>';
        array_walk(
            $this->arr_fruits,
            $callback
        );
        echo '<hr>';

        /**
         * Llamando a método de la misma clase (static usando nombre de clase)
         *
         */
        $callback = [
            '\\ironwoods\\tests\\CallbacksTest',
            'showFruitsStatic'
        ];
        echo get_class() . ' / ' . $callback[1] . '<br>';
        array_walk(
            $this->arr_fruits,
            $callback
        );
        echo '<hr>';


        /**
         * Llamando a método de otra clase (método no static)
         *
         */
        $callback = [
            '\\ironwoods\\tests\\Xxx',
            'showValues'
        ];
        echo $callback[0] . ' / ' . $callback[1] . '<br>';
        array_walk(
            $this->arr_fruits,
            $callback
        );
        echo '<hr>';

        /**
         * Llamando a método de otra clase (método static)
         *
         */
        $callback = [
            '\\ironwoods\\tests\\Xxx',
            'showValuesStatic'
        ];
        echo $callback[0] . ' / ' . $callback[1] . '<br>';
        array_walk(
            $this->arr_fruits,
            $callback
        );
        echo '<hr>';


        /**
         * Llamando a función nativa
         *
         */
        $callback = 'strpos';
        echo 'function ' . $callback . '()<br>';
        array_walk(
            $this->arr_fruits,
            $callback
        );
        echo '<hr>';


        /**
         * Llamando a función propia
         *
         */
        $callback = '\\ironwoods\\tests\\showKeys';
        echo 'function ' . $callback . '()<br>';
        array_walk(
            $this->arr_fruits,
            $callback
        );
    }

    private function showFruits($value, $key)
    {
        echo '<b>' . $value . '</b><br>';
    }

    private static function showFruitsStatic($value, $key)
    {
        echo '<b>' . $value . '</b><br>';
    }
} //class


class Xxx
{
    public static function showValues($value, $key)
    {
        echo '<b>' . $value . '</b><br>';
    }

    public static function showValuesStatic($value, $key)
    {
        echo '<b>' . $value . '</b><br>';
    }
} //class


function showKeys($value, $key)
{
    echo '<b>' . $key . '</b><br>';
}


/**
 * Runs test
 *
 */
$test = new CallbacksTest();
$test->run();
