<?php

namespace App\View\Components;

use App\Http\Controllers\FrontController;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class announcementsRevisor extends Component
{
    /**
     * Create a new component instance.
     */
    public $data;
    public function __construct($data)
    {
        $this=$data;
    }
    public function takeAnnouncements()
    {
        $announcement=FrontController::indexRevisor();
        return view('components.announcements-user',compact('announcement'));
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.announcements-revisor',compact('data'));
    }
}
