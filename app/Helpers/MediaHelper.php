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
        if (
            $request->hasFile('uploaded_photo') &&
            $request->file('uploaded_photo')
        ) {
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
            $column => (new UploadFile())->upload(
                $request->file('uploaded_photo')
            )
        ]);
    }
}
