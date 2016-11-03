<?php

namespace Flagrow\Upload\Contracts;

use Flagrow\Upload\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

interface UploadAdapter
{
    /**
     * Whether the upload adapter works on a specific mime type.
     *
     * @param string $mime
     * @return bool
     */
    public function forMime($mime);

    /**
     * Attempt to upload to the (remote) filesystem.
     *
     * @param File $file
     * @param UploadedFile $upload
     * @return File|bool
     */
    public function upload(File $file, UploadedFile $upload);

    /**
     * In case deletion is not possible, return false.
     *
     * @param File $file
     * @return File|bool
     */
    public function delete(File $file);
}