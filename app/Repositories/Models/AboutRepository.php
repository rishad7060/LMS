<?php

namespace App\Repositories\Models;

use App\Models\About;
use App\Repositories\BaseRepository;

class AboutRepository extends BaseRepository
{

    protected $model;

    public function __construct(About $about)
    {
        $this->model = $about;
    }

    /**
     * get abouts
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getAll()
    {
        return null;
    }
}