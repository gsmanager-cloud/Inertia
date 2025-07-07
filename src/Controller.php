<?php

namespace Inertia;

use GSManager\Http\Request;

class Controller
{
    public function __invoke(Request $request): Response
    {
        return Inertia::render(
            $request->route()->defaults['component'],
            $request->route()->defaults['props']
        );
    }
}
