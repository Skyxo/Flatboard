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

    /**
     * Notation:
     *  - Laravel Scout for searching (https://laravel.com/docs/5.4/scout)
     */

    /**
     * @var string
     */
    protected $table = 'Post';

    /**
     * Author of that topic
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author() {
        return $this->belongsTo(User::class);
    }

}