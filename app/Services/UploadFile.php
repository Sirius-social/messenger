<?php

namespace App\Services;


use Illuminate\Http\UploadedFile;
use Storage;
use Str;

class UploadFile
{
    /**
     * File uploading function
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @return string
     * @throws \Exception
     */
    public function upload(UploadedFile $file)
    {
        $filePath = $this->path().$this->hash().$this->extension($file);
        $driver = Storage::disk('public');
        $driver->put($filePath, $file);
        return $driver->url($filePath);
    }

    /**
     * Get extension from the given file.
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @return string
     */
    public function extension(UploadedFile $file): string
    {
        return '.' . $file->getClientOriginalExtension();
    }

    /**
     * Get hash string.
     *
     * @return string
     * @throws \Exception
     */
    public function hash(): string
    {
        return Str::random(40);
    }

    /**
     * Get file path.
     *
     * @return string
     */
    public function path(): string
    {
        return date('Y/m/d', time()).'/';
    }
}
