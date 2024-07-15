<?php

namespace App\Services\Front;

use App\Repositories\Contracts\CourseInterfaceRepository;
use App\Repositories\Models\PlanRepository;
use App\Repositories\Models\AboutRepository;

class CourseServices
{
    protected $courseRepository;
    protected $planRepository;
    protected $aboutRepository;

    public function __construct(
        CourseInterfaceRepository $courseRepository,
        PlanRepository $planRepository,
        AboutRepository $aboutRepository
    ) {
        
        $this->courseRepository = $courseRepository;
        $this->planRepository = $planRepository;
        $this->aboutRepository = $aboutRepository;
    }


    /**
     * make data for course page info
     *
     * @param  int $course
     * @return array
     */
    public function getCourseInfo($course_id)
    {
        $course = $this->courseRepository->getCourseInfo($course_id);
        return compact("course");
    }

    /**
     * make data for plan page info
     *
     * @return array
     */
    public function getPlanPageInfo()
    {
        $plans = $this->planRepository->getAll();
        return compact("plans");
    }

    /**
     * make data for plan page info
     *
     * @return array
     */
    public function getaboutPageInfo()
    {
        $plans = $this->aboutRepository->getAll();
        return compact("plans");
    }
}