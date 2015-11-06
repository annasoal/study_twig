<?php


namespace Core;

use Twig_SimpleFunction;
use Twig_SimpleFilter;
use Twig_SimpleTest;


class MyTwigExtension
    extends \Twig_Extension {

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'myTwigExt';
    }

    public function getGlobals() {

        return [
            'app' => include (__DIR__ .'/../app.php')
        ];

    }
    public function getFunctions(){

        return [
            new Twig_SimpleFunction('fewWords',
                                      function($str,$numberOfWords) {
                                          $substr = explode( ' ', $str, $numberOfWords+1);
                                          array_pop($substr);
                                          return implode($substr,' ');
                                      }
            ),
            new Twig_SimpleFunction('goodsForTags',
                function($tags) {
                    return $listOfGoods;
                }
            ),

        ];


    }
    public function getFilters(){
        return [
            new Twig_SimpleFilter('convertUsd',
                                    function ($priceRub){
                                         return '<span class="currencyPrice">' . round($priceRub / USD * 1000,2) .' USD</span>';
                                    }
            ),
            new Twig_SimpleFilter('convertEuro',
                                    function($priceRub){
                                        return  '<span class="currencyPrice">' . round($priceRub / EURO * 1000,2) .' EURO</span>';
                                    }
            ),


        ];

    }

    public function getTests(){
        return [
            new Twig_SimpleTest('recommend',
                                 function($goods) {
                                     return $goods['price'] >= 100;
                                 }
            ),
        ];
    }
}