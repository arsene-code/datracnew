<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserCategorie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * TODO: Check Super Admin
         */

        $user = Auth::user();

        if($user && $user->profil_id == 1)
        {
            return $next($request);
        }
        else {
            smilify('error', 'Vous n\'avez pas assez de droits !');

            return redirect('/login');
        }
    }
}
