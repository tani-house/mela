<?php

namespace App\Services\Media\Interfaces;

use App\Services\Media\Models\Media;

interface MediaRepository
{
    /**
     * @param int $id
     * @return Media
     */
    public function get(int $id) : Media;

}