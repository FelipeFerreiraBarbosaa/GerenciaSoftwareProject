<?php

namespace Tests\Unit;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;


class LoginTest extends TestCase
{
    use DatabaseTransactions;
    //** @test */
    public function teste_login_form()
    {
       $this->visit("/")
       ->see("Sign In");
    }

    
}