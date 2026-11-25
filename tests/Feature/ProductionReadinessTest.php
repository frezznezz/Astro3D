<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProductionReadinessTest extends TestCase
{
    public function test_home_exposes_seo_and_social_meta_tags(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertSee('<link rel="canonical" href="'.route('home').'">', false);
        $response->assertSee('property="og:image" content="'.asset('images/og.jpg').'"', false);
        $response->assertSee('name="twitter:card" content="summary_large_image"', false);
    }

    public function test_open_graph_image_exists_and_is_optimized(): void
    {
        $path = public_path('images/og.jpg');

        $this->assertFileExists($path);
        $this->assertLessThan(500 * 1024, filesize($path));
    }

    public function test_forwarded_https_header_generates_secure_urls_behind_a_proxy(): void
    {
        $response = $this->withHeaders([
            'X-Forwarded-Proto' => 'https',
            'X-Forwarded-Host' => 'astro3d.id',
        ])->get('/');

        $response->assertOk();
        $response->assertSee('https://astro3d.id', false);
    }

    public function test_robots_txt_blocks_locale_switch_route(): void
    {
        $contents = file_get_contents(public_path('robots.txt'));

        $this->assertStringContainsString('Disallow: /locale/', $contents);
    }
}
