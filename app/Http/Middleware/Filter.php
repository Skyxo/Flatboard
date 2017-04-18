<?php
/**
 * Filtering blocked ip addresses and users
 *
 * @package     Flatboard
 * @subpackage  Middleware
 * @version     0.0.1
 * @author      Till S. <dev@till-s.de>
 * @since       15.04.2017 17:16
 */

namespace App\Http\Middleware;

use Closure;

class Filter
{

    /**
     * Handle request for filtering
     *
     * @param $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        $response = $next($request);

        return $response;
    }

}