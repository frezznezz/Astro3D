<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactLinkProtectionTest extends TestCase
{
    public function test_home_obfuscates_whatsapp_and_email_links(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertDontSee('https://wa.me/6282297065801', false);
        $response->assertDontSee('mailto:astro3d.id@gmail.com', false);
        $response->assertSee('data-protect-contact="', false);
        $response->assertSee(base64_encode('mailto:astro3d.id@gmail.com'), false);
    }
}
