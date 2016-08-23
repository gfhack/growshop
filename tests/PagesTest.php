<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PagesTest extends TestCase {
     public function testRegisterPage() {
         $this->visit('/')->click('Cadastro')->seePageIs('/register');
     }

     public function testLoginPage() {
         $this->visit('/')->click('Login')->seePageIs('/login');
     }

     public function testProductsListPage() {
         $this->visit('/')->click('Produtos')->click('Listar')->seePageIs('/products');
     }
}
