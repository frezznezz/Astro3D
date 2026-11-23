<?php

namespace Tests\Feature;

use Tests\TestCase;

class LocaleSwitchTest extends TestCase
{
    public function test_home_defaults_to_indonesian(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertSee('Mulai Cetak', false);
        $response->assertSee('lang="id"', false);
    }

    public function test_locale_can_be_switched_to_english(): void
    {
        $response = $this->from(route('home'))
            ->get(route('locale.switch', 'en'));

        $response->assertRedirect(route('home'));

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Start Printing', false)
            ->assertSee('lang="en"', false);
    }

    public function test_locale_can_be_switched_to_chinese(): void
    {
        $response = $this->from(route('home'))
            ->get(route('locale.switch', 'zh'));

        $response->assertRedirect(route('home'));

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('开始打印', false)
            ->assertSee('lang="zh"', false);
    }

    public function test_invalid_locale_returns_not_found(): void
    {
        $this->get('/locale/fr')->assertNotFound();
    }
}
