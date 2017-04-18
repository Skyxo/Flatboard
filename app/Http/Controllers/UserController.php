<?php
/**
 *
 *
 * @package     Flatboard
 * @subpackage
 * @version
 * @author      Till S. <dev@till-s.de>
 * @since       18.04.2017 20:32
 */

namespace App\Http\Controllers;


use App\User;

class UserController extends Controller
{

    /**
     * Show's the profile of given user
     *
     * @param User $user
     */
    public function showProfile($user) {
        var_dump($user);
    }

}