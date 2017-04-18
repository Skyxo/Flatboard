<?php
/**
 *
 *
 * @package     Flatboard
 * @subpackage
 * @version
 * @author      Till S. <dev@till-s.de>
 * @since       18.04.2017 13:25
 */

namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{

    protected $table = 'Thread';

    public function author() {
        return $this->belongsTo(User::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }

}