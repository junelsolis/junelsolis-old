<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomepageControllerTest extends TestCase
{
   /** @test */
   public function it_shows_the_homepage()
   {
       $this->get('/')->assertViewIs('homepage');
   }

   /** @test */
   public function it_accepts_contact_form_data()
   {
       $request = $this->json('POST', '/contact-form', [
                        'name' => 'John Tester',
                        'email' => 'john.tester@example.org',
                        'message' => 'Hey there! Let\'s work together.',
                        'contact_options' => false,
                    ]);

        $request->assertJson([
            'status' => 'OK',
            'message' => 'Thank you. Your message has been sent.'
        ]);

        // Later this will be expanded to test sending notifications

   }
}
