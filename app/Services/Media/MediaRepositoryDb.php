<?php

namespace App\Services\Media;

use App\Services\Media\Interfaces\MediaRepository;
use App\Services\Media\Models\Media;

class MediaRepositoryDb implements MediaRepository
{
    public function get(int $id): Media
    {
        // TODO: Implement get() method.
    }
}