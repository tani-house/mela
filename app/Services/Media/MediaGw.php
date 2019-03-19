<?php
namespace App\Services\Media;

use App\Services\Media\Interfaces\MediaRepository;

class MediaGw
{
    /**
     * @var MediaRepository
     */
    protected $mediaRepo;

    /**
     * MediaGw constructor.
     * @param MediaRepository $mediaRepo
     */
    public function __construct(MediaRepository $mediaRepo)
    {
        $this->mediaRepo = $mediaRepo;
    }

    public function greeting() : string
    {
        return "hello from mediaGw";
    }
}