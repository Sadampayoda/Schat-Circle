<?php

namespace App\Repositories\SocialMedia;
use App\Repositories\SocialMedia\SocialMediaRepositoryInterface;


class SocialMediaRepository implements SocialMediaRepositoryInterface{
    public function getAllSosmed($type = 'all')
    {
        return [
            'berhasil' => 'oke',
        ];
    }

    public function createSosmed(array $data)
    {
        
    }

    public function updateSosmed(array $data, int $id)
    {
        
    }

    public function deleteSosmed(int $id)
    {
        
    }
}