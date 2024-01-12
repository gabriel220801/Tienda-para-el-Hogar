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
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Verificar si el usuario no está autenticado o no tiene el rol requerido
        if (!$user || !in_array($user->rol->nombre, $roles)) {
            // Si el usuario no tiene el rol requerido, redirigir o hacer algo más.
            return redirect('/'); // Puedes personalizar la redirección según tus necesidades.
        }

        // Si el usuario tiene el rol requerido, continuar con la solicitud
        return $next($request);
    }
}
