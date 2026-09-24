<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class HomePageExperienceTest extends TestCase
{
    public function test_home_page_renders_the_animated_service_deck_experience(): void
    {
        config()->set('app.url', 'http://localhost');
        URL::forceRootUrl('http://localhost');
        $compiledViews = sys_get_temp_dir().'/marinecaddie-test-views';

        if (! is_dir($compiledViews)) {
            mkdir($compiledViews, 0777, true);
        }

        config()->set('view.compiled', $compiledViews);

        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('Gateway unlocking')
            ->assertSee('Open the gate. See the ocean. Choose your next move.')
            ->assertSee('Select your service like a game mode.')
            ->assertSee('Golf-line precision. Ocean-scale execution.');
    }
}
