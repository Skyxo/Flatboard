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

use App\Models\Board;
use Illuminate\Support\Facades\Route;

Route::bind('board', function ($permalink) {
    return Board::where('permalink', $permalink)->first();
});

Route::get(

    '/',
    [
        'as'            => 'index',
        'uses'          => 'BoardController@showBoard'
    ]

);


Route::group(
    [
        'middleware' => 'filter'
    ],

    function() {

        Route::get(

            'board',
            [
                'as'            => 'board.index',
                'uses'          => 'BoardController@showBoard'
            ]

        );

        Route::get(

            'board/{board}',
            [
                'as'            => 'board.single',
                'uses'          => 'BoardController@showSingleBoard'
            ]

        );

        /**
         *
         */
        Route::get(

            'announcements',
            [
                'as'            => 'board.announcements',
                'uses'          => 'BoardController@showAnnouncements'
            ]

        );

        Route::get(

            'subscribed',
            [
                'as'            => 'board.subscribed',
                'uses'          => 'BoardController@showSubscribed'
            ]

        );

        Route::get(

            'activetopics',
            [
                'as'            => 'board.activetopics',
                'uses'          => 'BoardController@showActiveTopics'
            ]

        );

    }
);
