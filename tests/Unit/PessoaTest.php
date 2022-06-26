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
            'nome'=>'Admin User',
            'sobrenome'=>'12344534343',
            'email'=>'toyota',
            'Sexo'=>'2001',
            'Idade'=>'branco'

            
    ]);
    $this->assertDatabaseHas('pessoas',['nome'=>'Admin User']);
}
}