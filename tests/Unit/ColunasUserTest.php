<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class ColunasUserTest extends TestCase
{
    //** @test */
    public function testeColunasUsuarioCorretas()
    {
        $user = new User;

        $expected = [
        'id',
        'username',
        'password',
        'name',
        'surname',
        'email',
        ];

        $arrayCompared = array_diff($expected, $user->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }

    
}