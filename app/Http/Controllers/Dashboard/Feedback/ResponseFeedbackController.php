<?php

namespace App\Http\Controllers\Dashboard\Feedback;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Feedback\ResponseFeedbackStoreRequest;
use App\Mail\FeedbackResponseMail;
use App\Models\Feedback;
use App\Repositories\Dashboard\Feedback\FeedbackRepositoryInterface;
use App\Services\SenderMail;
use Illuminate\Support\Facades\Mail;

class ResponseFeedbackController extends Controller
{
    /**
     * ResponseFeedbackController constructor.
     * @param \App\Repositories\Dashboard\Feedback\FeedbackRepositoryInterface $repository
     */
    public function __construct(
        protected FeedbackRepositoryInterface $repository
    ) {
    }

    /**
     * Handle the incoming request.
     *
     * @param \App\Http\Requests\Web\Feedback\ResponseFeedbackStoreRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ResponseFeedbackStoreRequest $request, int $id)
    {
        $this->repository->createResponse($id, $request->validated());

        $this->sendEmail($this->repository->find($id));

        return redirect()
            ->route('dashboard.feedback.show', $this->repository->find($id))
            ->with('success', 'Response created.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(int $id)
    {
        $this->repository->deleteResponse($id);

        return redirect()->route(
            'dashboard.feedback.show',
            $this->repository->find($id)
        );
    }

    public function sendEmail(Feedback $feedback)
    {
        Mail::to($feedback->email)->send(new FeedbackResponseMail($feedback));
    }
}
