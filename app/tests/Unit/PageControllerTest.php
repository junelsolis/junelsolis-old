<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Mail;

class PageControllerTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function it_shows_the_homepage()
    {
        $this->get('/')->assertViewIs('homepage');
    }

    /** @test */
    public function it_accepts_contact_form_data()
    {
        Mail::fake();

        $request = $this->json('POST', '/contact-form', [
            'name' => 'John Tester',
            'email' => 'john.tester@example.org',
            'message' => 'Hey there! Let\'s work together.',
        ]);

        $request->assertJson([
            'message' => 'Thank you. Your message has been sent.'
        ]);

        $this->assertDatabaseHas('contacts', [
            'name' => 'John Tester',
            'email' => 'john.tester@example.org',
            'message' => 'Hey there! Let\'s work together.',
        ]);

        $email = config('app.contact_email_address');

        Mail::assertQueued(\App\Mail\ContactReceivedMail::class);
    
    }
}
