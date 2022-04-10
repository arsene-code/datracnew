<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class redirectUser
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
        $user = Auth::user();
        if($user)
        {
            switch ($user->profil_id) {
                case 15:
                    smilify('success', 'Bon retour Parmi Nous Cher Assuré!');
                    return redirect('/home');
                    break;
                case 3:
                    smilify('success', 'Bon retour Parmi Nous !');
                    return redirect('/dashboard');
                    break;
                case 1:
                    smilify('success', 'Bon retour Parmi Nous !');
                    return redirect('/dashboard-superadmin');
                    break;
                case 10:
                    smilify('success', 'Bon retour Parmi Nous !');
                    return redirect('/caisse');
                    break;
            }
        } else {
            smilify('success', 'BienVenu Sur Datrac, Votre Plaforme Médicale !');
//            return redirect('/');
            return $next($request);

        }
    }
}
