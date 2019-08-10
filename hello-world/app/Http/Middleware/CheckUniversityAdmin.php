<?php

namespace App\Http\Middleware;

use Closure;

class CheckUniversityAdmin
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
        $user = $request->user();
        if ($user -> university != 'fpt') {
            return abort(403, 'Không có quyền gì nè :>> ');
        }
        return $next($request);
    }
}
