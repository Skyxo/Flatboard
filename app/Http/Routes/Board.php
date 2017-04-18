<?php
/**
 * Board routes
 *
 * @package     Flatboard
 * @subpackage  Routes
 * @version     0.0.1
 * @author      Till S. <dev@till-s.de>
 * @since       15.04.2017 17:00
 */

Route::group(

    [
        'as' => 'board',
        'middleware' => 'filter'
    ],

    function() {

        Route::get(

            '/',
            [
                'as'            => 'index',
                'uses'          => 'BoardController@showBoard'
            ]

        );

        Route::get(

            'board',
            [
                'as'            => 'board',
                'uses'          => 'BoardController@showBoard'
            ]

        );

        Route::get(

            'board/{boardID}',
            [
                'as'            => 'singleboard',
                'uses'          => 'BoardController@showSingleBoard'
            ]

        );

    }

);