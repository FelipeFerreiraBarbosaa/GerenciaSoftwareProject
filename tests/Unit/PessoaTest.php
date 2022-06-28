<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Pessoa;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PessoaTest extends TestCase
{
    use DatabaseTransactions;
    public function teste_create_pessoa(){

        $pessoa = \App\Models\Pessoa::create([
            'nome'=>'Felipe',
            'sobrenome'=>'teste',
            'email'=>'teste@teste.com',
            'Sexo'=>'M',
            'Idade'=>'12'

            
    ]);
    $this->assertDatabaseHas('pessoas',['nome'=>'Felipe']);
}
}