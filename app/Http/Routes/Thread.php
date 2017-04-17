<?php
/**
 * Thread routes
 *
 * @package     Flatboard
 * @subpackage  Routes
 * @version     0.0.1
 * @author      Till S. <dev@till-s.de>
 * @since       15.04.2017 17:11
 */

Route::group(

    [
        'as' => 'thread',
        'middleware' => 'filter'
    ],

    function() {

        Route::get(

            'thread/{threadID}',
            [
                'as'            => 'singlethread',
                'uses'          => 'ThreadController@showThread'
            ]

        );

    }

);