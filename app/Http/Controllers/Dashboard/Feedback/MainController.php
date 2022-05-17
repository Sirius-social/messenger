<?php

namespace App\Http\Controllers\Dashboard\Feedback;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Repositories\Dashboard\Feedback\FeedbackRepositoryInterface;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * MainController constructor.
     * @param \App\Repositories\Dashboard\Feedback\FeedbackRepositoryInterface $feedbackRepository
     */
    public function __construct(
        protected FeedbackRepositoryInterface $feedbackRepository
    ) {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard.feedback.index', [
            'feedbacks' => $this->feedbackRepository->paginated()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(int $id)
    {
        $feedback = $this->feedbackRepository->find($id, 'response');
        return view('dashboard.feedback.show', compact('feedback'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Feedback $feedback
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return redirect()->route('dashboard.feedback.index');
    }
}
