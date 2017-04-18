<?php
/**
 *
 *
 * @package     Flatboard
 * @subpackage
 * @version
 * @author      Till S. <dev@till-s.de>
 * @since       18.04.2017 13:26
 */

namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'Post';

    public function author() {
        return $this->belongsTo(User::class);
    }

}