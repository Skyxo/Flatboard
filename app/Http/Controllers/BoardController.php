<?php
/**
 *
 *
 * @package     Flatboard
 * @subpackage
 * @version
 * @author      Till S. <dev@till-s.de>
 * @since       15.04.2017 17:15
 */

namespace App\Http\Controllers;


class BoardController extends Controller
{

    public function showBoard() {
        return view('board');
    }

    public function showSingleBoard($boardID) {

    }

}