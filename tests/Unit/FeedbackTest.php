<?php

namespace Tests\Unit;

use App\Models\Feedback;
use App\Services\Localization;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_full_name_is_required()
    {
        $attributes = Feedback::factory()->raw([
            'full_name' => ''
        ]);

        $this->post(
            route('web.feedback.store', Localization::get()),
            $attributes
        )->assertInvalid(['full_name']);

        $this->assertDatabaseMissing('feedback', $attributes);
    }

    /** @test */
    public function it_phone_is_required()
    {
        $attributes = Feedback::factory()->raw([
            'phone' => ''
        ]);

        $this->post(
            route('web.feedback.store', Localization::get()),
            $attributes
        )->assertInvalid(['phone']);

        $this->assertDatabaseMissing('feedback', $attributes);
    }

    /** @test */
    public function it_email_is_required()
    {
        $attributes = Feedback::factory()->raw([
            'email' => ''
        ]);

        $this->post(
            route('web.feedback.store', Localization::get()),
            $attributes
        )->assertInvalid(['email']);

        $this->assertDatabaseMissing('feedback', $attributes);
    }

    /** @test */
    public function it_company_name_is_required()
    {
        $attributes = Feedback::factory()->raw([
            'company_name' => ''
        ]);

        $this->post(
            route('web.feedback.store', Localization::get()),
            $attributes
        )->assertInvalid(['company_name']);

        $this->assertDatabaseMissing('feedback', $attributes);
    }

    /** @test */
    public function it_body_is_required()
    {
        $attributes = Feedback::factory()->raw([
            'body' => ''
        ]);

        $this->post(
            route('web.feedback.store', Localization::get()),
            $attributes
        )->assertInvalid(['body']);

        $this->assertDatabaseMissing('feedback', $attributes);
    }
}
