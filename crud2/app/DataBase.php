<?php
namespace App\DB;

interface DataBase
{
    function create(array $userData) : void;

    function update(int $userId, array $userData) : void;

    function delete(int $userId) : void;

    function show(int $userId) : array;
    
    function showAll() : array;
}
