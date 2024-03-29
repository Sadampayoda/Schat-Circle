<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Requests\ValidasiUserRequest;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function RequestValidasi(): void
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
