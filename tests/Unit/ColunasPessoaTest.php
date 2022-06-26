<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Pessoa;

class ColunasPessoaTest extends TestCase
{
    //** @test */
    public function testeColunasUsuarioCorretas()
    {
        $pessoa = new Pessoa;

        $expected = [
            'id',
            'nome',
            'sobrenome',
            'email',
            'Sexo',
            'Idade'
        ];

        $arrayCompared = array_diff($expected, $pessoa->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }

    
}