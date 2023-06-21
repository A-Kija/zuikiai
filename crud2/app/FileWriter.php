<?php

namespace Colors;

use App\DB\DataBase;
use Ramsey\Uuid\Uuid;

class FileWriter implements DataBase
{
    private $data, $fileName;
    
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        if (!file_exists(__DIR__ . '/../data/' . $fileName . '.json')) {
            $this->data = [];
        } else {
            $this->data = json_decode(file_get_contents(__DIR__ . '/../data/' . $fileName . '.json'), 1);
        }
    }

    public function __destruct()
    {
        $this->data = array_values($this->data);
        file_put_contents(__DIR__ . '/../data/' . $this->fileName . '.json', json_encode($this->data));
    }

    
    
    public function create(array $userData) : void
    {
        $id = Uuid::uuid4()->toString();
        $userData['id'] = $id;
        $this->data[] = $userData;
    }

    public function update(int $userId, array $userData) : void
    {
        foreach ($this->data as $key => $user) {
            if ($user['id'] == $userId) {
                $userData['id'] = $userId; // for safety
                $this->data[$key] = $userData;
            }
        }
    }

    public function delete(int $userId) : void
    {
        foreach ($this->data as $key => $user) {
            if ($user['id'] == $userId) {
                unset($this->data[$key]);
            }
        }
    }

    public function show(int $userId) : array
    {
        foreach ($this->data as $key => $user) {
            if ($user['id'] == $userId) {
                return $this->data[$key];
            }
        }
    }
    
    public function showAll() : array
    {
        return $this->data;
    }
}