<?php

namespace App\Http\Middleware;

use App\Supplyer;
use Closure;

class VerifySupply
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
        if(Supplyer::all()-> Count()==0 ){
            session()->flash('error', 'You need to add supplyers to be able to create a product list');
            return redirect(route('product.index'));
        }
        return $next($request);
    }
}
