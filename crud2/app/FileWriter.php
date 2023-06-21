<?php

namespace Colors;

use App\DB\DataBase;

class FileWriter implements DataBase
{
    
    public function __construct()
    {
        
    }
    
    
    public function create(array $userData) : void
    {}

    public function update(int $userId, array $userData) : void
    {}

    public function delete(int $userId) : void
    {}

    public function show(int $userId) : array
    {}
    
    public function showAll() : array
    {}
}