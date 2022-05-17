<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Feedback\FeedbackStoreRequest;
use App\Models\Feedback;
use App\Repositories\WEB\Feedback\FeedbackRepositoryInterface;
use App\Services\Localization;

class FeedbackController extends Controller
{
    /**
     * FeedbackController constructor.
     * @param \App\Repositories\WEB\Feedback\FeedbackRepositoryInterface $feedbackRepository
     */
    public function __construct(
        protected FeedbackRepositoryInterface $feedbackRepository
    ) {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Web\Feedback\FeedbackStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FeedbackStoreRequest $request)
    {
        $this->feedbackRepository->create($request->validated());

        return redirect()->route('web.home', Localization::get());
    }
}
