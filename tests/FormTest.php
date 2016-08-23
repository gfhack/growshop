<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FormTest extends TestCase {
    public function testLogin() {
      $this->visit('/login')
       ->type('user@email.com', 'email')
       ->type('senha', 'password')
       ->press('Entrar')
       ->seePageIs('/');
    }

    public function testCreate() {
      $user = factory(App\User::class)->create();

      $this->actingAs($user)
       ->withSession(['foo' => 'bar'])
       ->visit('/create')
       ->type('Escovão', 'name')
       ->type('5.56', 'price')
       ->press('Cadastrar')
       ->seePageIs('/create');
    }
}
