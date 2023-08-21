<?php

namespace App\Repositories\Chatting;


interface ChattingRepositoryInterface{

    public function getAllChatting();
    public function createChattingUser($data);

}