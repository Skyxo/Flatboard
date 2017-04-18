<?php
/**
 *
 *
 * @package     Flatboard
 * @subpackage
 * @version
 * @author      Till S. <dev@till-s.de>
 * @since       18.04.2017 20:30
 */

use App\Models\Board;
use Illuminate\Support\Facades\Route;

Route::bind('user', function ($username) {
    return Board::where('username', $username)->first();
});


Route::group(
    [
        'middleware' => 'filter'
    ],

    function() {

        Route::get(

            'profile/{user}',
            [
                'as'            => 'profile',
                'uses'          => 'UserController@showProfile'
            ]

        );


    }
);
