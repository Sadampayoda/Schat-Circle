<?php

namespace Tests\Feature;

use App\Http\Requests\ValidasiUserRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ValidasiUserRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function ValidasiUser(): void
    {
        $classRequest = new ValidasiUserRequest();
        
        $data = [
            'username' => 'Sadam payoda',
            'password' => 'Sadakdm123456/',
            'Konfirmasi' => 'Sadam13456/'
        ];

        $this->assertEquals($data,$classRequest->rules());
    }
}
