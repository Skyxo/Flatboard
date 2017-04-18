<?php
/**
 *
 *
 * @package     Flatboard
 * @subpackage
 * @version
 * @author      Till S. <dev@till-s.de>
 * @since       18.04.2017 13:45
 */

namespace App\Models;


use App\User;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{

    protected $table = 'PasswordReset';

    public function user() {
        return $this->belongsTo(User::class);
    }

}