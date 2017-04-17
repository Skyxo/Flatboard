<?php
/**
 *
 *
 * @package     Flatboard
 * @subpackage
 * @version
 * @author      Till S. <dev@till-s.de>
 * @since       15.04.2017 17:22
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Board extends Model
{

    protected $table = 'Board';

    /**
     * Returns an ordered array contain the sorted list of boards and child boards
     *
     * @return array
     */
    public function sortBoards() {
        $boards = self::all();



    }

}