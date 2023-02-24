<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Login123codeTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://123code.net/dang-nhap.html')
                ->type('email','phupt.humg.94@gmail.com')
                ->type('password', '123456789')
                ->press('Đăng nhập')
                ->pause(1000)
                ->assertPathIs('/');
        });
    }
}
