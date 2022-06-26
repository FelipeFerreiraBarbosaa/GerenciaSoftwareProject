<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Veiculo;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VeiculoTest extends TestCase
{
    use DatabaseTransactions;
    public function teste_create_veiculo(){

        $veiculo = \App\Models\Veiculo::create([
            'placa'=>'Admin User',
            'renavam'=>'12344534343',
            'marca'=>'toyota',
            'modelo'=>'hilux',
            'ano'=>'2001',
            'cor'=>'branco'
    ]);
    $this->assertDatabaseHas('veiculos',['placa'=>'Admin User']);
}
}
