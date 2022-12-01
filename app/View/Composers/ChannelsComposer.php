<?php

namespace App\View\Composers;

use App\Models\Channel;
use Illuminate\View\View;

class ChannelsComposer
{
    // For View Composer    // For View Creator
    public function compose(View $view)
    {
        $view->with('channels',Channel::orderBy('name')->get());
    }

    // For View Creator
    public function create(View $view)
    {
        $view->with('channels',Channel::orderBy('name')->get());
    }
}
