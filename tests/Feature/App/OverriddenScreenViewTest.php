<?php

namespace Orchid\Tests\Feature\App;

use Illuminate\Support\Facades\Route;
use Orchid\Tests\App\Screens\OverriddenScreenView;
use Orchid\Tests\TestFeatureCase;

class OverriddenScreenViewTest extends TestFeatureCase
{
    public function testOverriddenScreenView(): void
    {
        Route::screen('OverriddenScreenView', OverriddenScreenView::class);

        $this->get('OverriddenScreenView')
            ->assertOk()
            ->assertViewIs('exemplar::overriding.screen')
            ->assertSee('Hello Word');
    }
}
