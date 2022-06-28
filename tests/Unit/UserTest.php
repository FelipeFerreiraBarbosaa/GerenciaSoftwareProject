<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;
    public function teste_create_user(){

        $pessoa = \App\Models\User::create([
            'username'=>'Admin User',
            'password'=>'12344534343',
            'name'=>'teste',
            'surname'=>'felps',
            'email'=>'branco@hotmail.com'

            
    ]);
    $this->assertDatabaseHas('users',['username'=>'Admin User']);
}
}