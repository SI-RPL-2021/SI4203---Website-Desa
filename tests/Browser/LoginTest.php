<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group LoginTest
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                // ->assertSee('CEK CEK')
                // ->type('email', '1202184146@mail.com')
                // ->type('password', '111')
                // ->press('Login')
                ->click('a', 'Register')
                ->assertSee('Form Register');
        });
    }
}
