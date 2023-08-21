<?php

namespace App\Http\Controllers;

// use App\Repositories\Chatting\ChattingRepositoryInterface;
use App\Repositories\SocialMedia\SocialMediaRepositoryInterface;
use Illuminate\Http\Request;


class DashboardController extends Controller
{

    protected $chattingRepository;

    public function __construct(SocialMediaRepositoryInterface $chattingRepository)
    {
        $this->chattingRepository = $chattingRepository;
    }

    public function index()
    {

        // var_dump($this->chattingRepository->getAllSosmed());
        // die;

        return view('Auth.dashboard.index',[
            'page' => 'Chatting'
        ]);
    }

    public function updateAplication()
    {
        return view('Auth.dashboard.update',[
            'page' => 'Update Aplikasi',
        ]);
    }

    public function searchAccount()
    {
        return view('Auth.dashboard.search',[
            'page' => 'Search',
        ]);
    }
}
