<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;


class RolesService
{

    public $routeRoles, $userRole;

    public function auth(array $roles) : bool
    {
        return in_array($this->userRole, $roles);
    }

}