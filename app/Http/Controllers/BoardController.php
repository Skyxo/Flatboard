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

    /**
     * Show's the board
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showBoard() {
        $boardList = Board::roots()->get();

        $view = view('board', [ 'boardList' => $boardList ]);

        return $view;
    }

    /**
     * Show's a single board
     *
     * @param Board $board
     */
    public function showSingleBoard($board) {
        $boardList = $board->childBoards();

        $threadList = $board->threads()->paginate(20);

        var_dump($boardList);
        var_dump($threadList);
    }

    /**
     * Announcements
     */
    public function showAnnouncements() {

    }

    /**
     * Subscribed topics
     */
    public function showSubscribed() {

    }

    /**
     * Active topics
     */
    public function showActiveTopics() {

    }

}