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

use Illuminate\Support\Facades\Route;
use \App\Models\Thread;

Route::bind('thread', function ($permalink) {
    return Thread::where('permalink', $permalink)->first();
});

Route::group(

    [
        'middleware' => 'filter'
    ],

    function() {

        Route::get(

            'thread/{thread}/{page?}',
            [
                'as'            => 'thread.single',
                'uses'          => 'ThreadController@showThread'
            ]

        )->where(
            [
                'page' => '[0-9]+'
            ]
        );

    }

);