<?php

namespace App\Listeners;

use App\Events\ExamCompleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GrandExamPermission
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ExamCompleted $event): void
    {
        // $exam = $event->exam;
        $user = $event->user;
        $category = $event->category;

        $user->givePermissionTo($category);
    }
}
