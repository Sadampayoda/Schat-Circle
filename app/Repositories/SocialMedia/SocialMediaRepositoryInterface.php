<?php

namespace App\Repositories\SocialMedia;

interface SocialMediaRepositoryInterface{


    public function getAllSosmed($type = 'all');
    public function createSosmed(array $data);
    public function updateSosmed(array $data,int $id);
    public function deleteSosmed(int $id);
}