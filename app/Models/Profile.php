<?php
/**
 *
 *
 * @package     Flatboard
 * @subpackage
 * @version
 * @author      Till S. <dev@till-s.de>
 * @since       18.04.2017 13:44
 */

namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $table = 'Profile';

    public function user() {
        $this->belongsTo(User::class);
    }

}