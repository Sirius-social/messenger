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
     * @return string|false
     * @throws \Exception
     */
    public function upload(UploadedFile $file): bool|string
    {
        if (!$file) {
            return false;
        }

        $file_name = $this->hash() . $this->extension($file);

        $file_path = $file->storeAs($this->path(), $file_name, ['disk' => 'public']);
        return Storage::disk('public')->url($file_path);
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

    /**
     * Clean given json string.
     *
     * @param string $file_str
     * @return array|string|null
     */
    public static function clean(string $file_str): array|string|null
    {
        $file_str = str_replace("\/","/", $file_str);
        $file_str = str_replace('"',"", $file_str);
        if (!$file_str || trim($file_str) == '')
            return null;
        if (str_contains($file_str, config('app.url').'/storage/')) {
            $file_str = str_replace(config('app.url').'/storage/', '', $file_str);
        }

        return $file_str;
    }
}
