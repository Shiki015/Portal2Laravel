<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if(session()->has("user")){
            $user = session()->get("user");

            if($user->id_role == 1){
                return $next($request);

            }
        }
        \Log::critical("Pokusan neautorizan pristup korisnik: ".session('user')->firstName." sa Id-jem: ".session('user')->id_user);

        return redirect()->back()->with("message", "There is a problem !");

    }
}
