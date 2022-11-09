<?php

namespace RezaKia\LaravelUsersActivityLog;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

trait Logable
{
    public function activityLogs()
    {
        return $this->morphMany(LogActivity::class, 'logable');
    }

    public function log($data = null)
    {
        if ($data) {
            $log = new LogActivity();
            $log->user_id = Auth::check() ? Auth::id() : null;
            $log->subject = $data->url;
            $log->data = $data->data;
            $log->crud_method = $data->crud_method;
            $log->url = Request::fullUrl();
            $log->request_method = Request::method();
            $log->ip = Request::ip();
            $log->agent = Request::header('user-agent');
            $this->activityLogs()->save($log);
            return $log;
        }
        return false;
    }
}
