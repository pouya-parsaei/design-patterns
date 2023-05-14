<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Src\Adapter\Notification\NotificationService;

class NotificationController extends Controller
{
//    public function __construct(private NotificationService $notificationService)
//    {
//
//    }

    public function notify()
    {
       return App::call([new NotificationService(), 'notify']);
    }
}
