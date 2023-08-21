<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Requests\ValidasiUserRequest;

class RequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function Request(): void
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
