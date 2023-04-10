<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\FactoryMethod\Publisher\Message;
use Src\FactoryMethod\Publisher\MessagePublisher;

class MessageController extends Controller
{
    public function __construct(private MessagePublisher $publisher)
    {

    }
    public function publish(Request $request)
    {
        $this->publisher->publish(new Message('test title','test file','test content'));
    }
}
