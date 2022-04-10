<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class Cover extends Component
{
    use WithFileUploads;

    public $cover;
    public $model;
    public $fileUrl;
    public $title;
    public string $name = 'uploaded_photo';
    public $disabled = false;
    public $has_cover = false;

    public function mount()
    {
        if ($this->model && $this->model->getFirstMedia('cover')) {
            $this->fileUrl = $this->model->getFirstMedia('cover')->getFullUrl();
        }
    }

    public function updatedCover()
    {
        $this->validate([
            'cover' => 'image|max:10240'
        ]);
        $this->fileUrl = $this->cover->temporaryUrl();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.cover');
    }

    public function deleteCover(string $collection)
    {
        if ($this->has_cover) {
            $this->model->clearMediaCollection($collection);
        }
        $this->fileUrl = '';
    }
}
