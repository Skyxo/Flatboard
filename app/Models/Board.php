<?php
/**
 *
 *
 * @package     Flatboard
 * @subpackage
 * @version
 * @author      Till S. <dev@till-s.de>
 * @since       18.04.2017 11:34
 */

namespace App\Models;


use Baum\Node;


class Board extends Node
{

    protected $table = 'Board';
    protected $primaryKey = 'boardID';

    protected $parentColumn = 'parentID';

    protected $leftColumn = 'left';
    protected $rightColumn = 'right';

    protected $depthColumn = 'depth';

    protected $guarded = array('boardID', 'parentID', 'left', 'right', 'depth');

    const TYPE_BOARD = 1;
    const TYPE_CATEGORY = 2;

    const CREATED_AT = "created";
    const UPDATED_AT = "updated";

    /**
     * Returns an ordered array contain the sorted list of boards and child boards
     *
     * @return \Illuminate\Support\Collection
     */
    public function childBoards() {
        return $this->descendants()->limitDepth(1)->get();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function threads() {
        return $this->hasMany(Thread::class);
    }

    /**
     * @return Thread
     */
    public function lastPost() {
        return Thread::where('boardID', $this->boardID);
    }

}