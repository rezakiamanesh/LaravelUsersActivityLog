<?php

namespace RezaKia\LaravelUsersActivityLog;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogActivity extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "log_activities";
    public $timestamps = true;
    protected $dates = ['deleted_at', 'created_at'];
    protected $casts = ['data' => 'array'];

    public function logable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
