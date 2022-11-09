<?php

namespace RezaKia\LaravelUsersActivityLog\Observers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use RezaKia\LaravelUsersActivityLog\LogActivity;

class logObserver
{
    public $log;
    public function __construct()
    {
        $this->log = new LogActivity();
    }

    public function created()
    {

    }

    public function updated()
    {
//        $log = new LogActivity();
//        $log->user_id = Auth::check() ? Auth::id() : null;
//        $log->subject = $data->url;
//        $log->data = $data->data;
//        $log->crud_method = $data->crud_method;
//        $log->url = Request::fullUrl();
//        $log->request_method = Request::method();
//        $log->ip = Request::ip();
//        $log->agent = Request::header('user-agent');
//        $this->activityLogs()->save($log);
    }

    public function deleted()
    {

    }

    public function restored()
    {
        //
    }

    public function forceDeleted()
    {

    }
}
