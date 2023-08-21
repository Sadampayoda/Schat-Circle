<?php 


namespace App\Repositories\Chatting;
use App\Repositories\Chatting\ChattingRepositoryInterface;


class ChattingRepository implements ChattingRepositoryInterface{
    public function getAllChatting()
    {
        return [
            'name' => 'sadam payoda'
        ];
    }

    public function createChattingUser($data)
    {
        
    }
}