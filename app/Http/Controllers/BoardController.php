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


use App\Models\Board;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{

    public function showBoard() {
        $boardList = Board::roots()->get();

        $view = view('board', [ 'boardList' => $boardList ]);

        return $view;
    }

    public function showSingleBoard($boardID) {

    }

}