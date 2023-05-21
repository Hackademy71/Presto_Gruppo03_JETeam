<?php

namespace App\View\Components;

use App\Http\Controllers\FrontController;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class announcementsUser extends Component
{
    /**
     * Create a new component instance.
     */
    public $data;
    public function __construct($data)
    {
        $this->data=$data;
    }
    public function takeAnnouncements()
    {
        $announcements=FrontController::userAnnouncements();
        return view('components.announcements-user',compact('announcements'));
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.announcements-user',compact('data'));
    }
}
