<?php
/**
 *
 *
 * @package     Flatboard
 * @subpackage
 * @version
 * @author      Till S. <dev@till-s.de>
 * @since       18.04.2017 20:14
 */

namespace App\Http\Controllers;


use App\Models\Thread;

class ThreadController extends Controller
{

    /**
     * Show's posts of a thread
     *
     * @param Thread $thread
     */
    public function showThread($thread) {
        var_dump($thread->posts()->paginate(30));
    }

}