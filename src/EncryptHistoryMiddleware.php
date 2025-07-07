<?php

namespace Inertia;

use Closure;
use GSManager\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EncryptHistoryMiddleware
{
    /**
     * Handle the incoming request.
     *
     * @return Response
     */
    public function handle(Request $request, Closure $next)
    {
        Inertia::encryptHistory();

        return $next($request);
    }
}
