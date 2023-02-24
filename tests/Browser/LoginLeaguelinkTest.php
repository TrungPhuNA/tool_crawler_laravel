<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginLeaguelinkTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testViewAndSetLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://leaguelink.riotgames.com/vi-vn/')
                ->pause(2000)
                ->click('#gatsby-focus-wrapper > div > main > div > div > div > button')
                ->type('username','VIANHLAGIO1295')
                ->type('password', 'danhdas1')
                ->pause(2000)
                ->click('#confirm-btn')
                ->pause(2000)
                ->assertPathIs('https://leaguelink.riotgames.com/vi-vn/choose');
        });
    }
}
