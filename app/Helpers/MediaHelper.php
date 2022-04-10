<?php

namespace App\Helpers;

use App\Services\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

trait MediaHelper
{
    /**
     * Update $column column to the specified resource.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $column
     * @return void
     * @throws \Exception
     */
    public function updateMediaColumn(Request $request, string $column)
    {
        if ($request->hasFile('uploaded_photo') && $request->file('uploaded_photo')) {
            $this->changeModel($request, $column);
        }
    }

    /**
     * Update $column column to the specified resource.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $column
     * @return void
     * @throws \Exception
     */
    protected function changeModel(Request $request, string $column)
    {
        $this->update([
            $column => (new UploadFile)->upload($request->file('uploaded_photo'))
        ]);
    }

    /**
     * Add media to the $collection media collection.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $collection
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig
     */
    public function uploadPhotoCollection(Request $request, string $collection)
    {
        if ($request->hasFile('uploaded_photo') && $request->file('uploaded_photo')) {
            if ($this->getFirstMedia($collection)) {
                $this->clearMediaCollection($collection);
            }
            $this->addMediaToMediaCollection($request->file('uploaded_photo'), $collection);
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param string $collection
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig
     */
    public function uploadPhotosCollection(Request $request, string $collection)
    {
        if ($request->hasFile('uploaded_photos') && $request->file('uploaded_photos')) {
            foreach ($request->file('uploaded_photos') as $photo) {
                $this->addMediaToMediaCollection($photo, $collection);
            }
        }
    }

    /**
     * @param \Illuminate\Http\UploadedFile $photo
     * @param string $collection
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig
     */
    protected function addMediaToMediaCollection(UploadedFile $photo, string $collection)
    {
        $this
            ->addMedia($photo)
            ->preservingOriginal()
            ->toMediaCollection($collection);
    }
}
