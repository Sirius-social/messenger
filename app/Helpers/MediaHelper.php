<?php

namespace App\Helpers;

use App\Services\UploadFile;
use Illuminate\Http\Request;

trait MediaHelper
{
    /**
     * Update photo column to the specified resource.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $attribute
     * @return void
     * @throws \Exception
     */
    public function updatePhoto(Request $request, string $attribute)
    {
        if ($request->hasFile($attribute) && $request->file($attribute)) {
            $this->changeModel($request, $attribute, 'photo');
        }
    }

    /**
     * Update photo_path column to the specified resource.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $attribute
     * @return void
     * @throws \Exception
     */
    public function updatePhotoPath(Request $request, string $attribute)
    {
        if ($request->hasFile($attribute) && $request->file($attribute)) {
            $this->changeModel($request, $attribute, 'photo_path');
        }
    }

    /**
     * Update $column column to the specified resource.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $attribute
     * @param string $column
     * @return void
     * @throws \Exception
     */
    protected function changeModel(Request $request, string $attribute, string $column)
    {
        $this->update([
            $column => (new UploadFile)->upload($request->file($attribute))
        ]);
    }
}
