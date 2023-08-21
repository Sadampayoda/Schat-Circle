<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Http\Requests\ValidasiUserRequest;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $classRequest = new ValidasiUserRequest();
        
        $data = [
            'username' => 'Sadam payoda',
            'password' => 'Sadam123456/',
            'Konfirmasi' => 'Sadam123456/'
        ];

        $this->assertEquals($data,$classRequest->rules());
    }
}
