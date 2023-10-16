<?php

namespace RelishInc\NovaTranslation\Http\Middleware;

use RelishInc\NovaTranslation\NovaTranslation;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(NovaTranslation::class)->authorize($request) ? $next($request) : abort(403);
    }
}
