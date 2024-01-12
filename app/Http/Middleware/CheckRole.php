<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        if (!$user || !in_array($user->rol->nombre, $roles)) {
            // Si el usuario no tiene el rol requerido, redirigir o hacer algo más.
            return redirect('/'); // Puedes personalizar la redirección según tus necesidades.
        }

        return $next($request);
    }
}
