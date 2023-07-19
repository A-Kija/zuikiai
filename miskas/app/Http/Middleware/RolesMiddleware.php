<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class RolesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        
        $user = $request->user();
        if (!$user) {
            $userRole = User::ROLES[0];
        } else {
            $userRole = User::ROLES[$user->role];
        }
        $role = explode('|', $role);
        if (!in_array($userRole, $role)) {
            if ($userRole == User::ROLES[0]) {
                return redirect()->route('login');
            }
            abort(403, 'You are not allowed to access this page!');
        }
        return $next($request);

    }
}
