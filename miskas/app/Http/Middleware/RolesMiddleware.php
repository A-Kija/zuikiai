<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Services\RolesService;

class RolesMiddleware
{

    private RolesService $rolesService;

    public function __construct(RolesService $rolesService)
    {
      $this->rolesService = $rolesService;
    }


    public function handle(Request $request, Closure $next, string $role): Response
    {
        
       
        $user = $request->user();
        if (!$user) {
            $userRole = User::ROLES[0];
        } else {
            $userRole = User::ROLES[$user->role];
        }
        $role = explode('|', $role);
        $this->rolesService->routeRoles = $role;
        $this->rolesService->userRole = $userRole;
        if (!in_array($userRole, $role)) {
            if ($userRole == User::ROLES[0]) {
                return redirect()->route('login');
            }
            abort(403, 'You are not allowed to access this page!');
        }
        return $next($request);
        
    }
}
