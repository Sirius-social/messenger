<?php

namespace Tests\Feature;

use App\Mail\FeedbackResponseMail;
use App\Models\Feedback;
use App\Models\FeedbackResponse;
use App\Models\User;
use App\Services\Localization;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Notification;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function a_guests_can_create_feedback()
    {
        $attributes = Feedback::factory()->raw();

        $this->post(
            route('web.feedback.store', Localization::get()),
            $attributes
        )->assertRedirect(route('web.home', Localization::get()));

        $this->assertDatabaseHas('feedback', $attributes);
    }

    /** @test */
    public function a_guests_cannot_see_feedbacks_list()
    {
        $this->get('/dashboard/feedback')->assertRedirect('/dashboard/login');
    }

    /** @test */
    public function a_guests_cannot_see_feedback_show()
    {
        $feedback = Feedback::factory()->create();

        $this->get('/dashboard/feedback/' . $feedback)->assertRedirect(
            '/dashboard/login'
        );
    }

    /** @test */
    public function a_user_can_see_feedbacks_list()
    {
        $this->actingAs(User::factory()->create())
            ->get('/dashboard/feedback')
            ->assertStatus(200);
    }

    /** @test */
    public function a_user_can_response_feedback()
    {
        Mail::fake();
        $feedback = Feedback::factory()->create();
        $response = [
            'response_title' => $this->faker->sentence,
            'response_note' => $this->faker->paragraph
        ];

        $this->actingAs(User::factory()->create())
            ->post(
                route('dashboard.feedback.response.store', $feedback),
                $response
            )
            ->assertValid(['response_title', 'response_note'])
            ->assertRedirect(route('dashboard.feedback.show', $feedback));

        Mail::assertSent(FeedbackResponseMail::class);

        $this->assertDatabaseHas('feedback_responses', [
            'title' => $response['response_title'],
            'note' => $response['response_note']
        ]);
    }
}
