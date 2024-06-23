<?php

namespace App\Models;

use App\Models\User;
use App\Models\FormInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserForm extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the form info that owns the UserForm.
     */
    public function formInfo()
    {
        return $this->belongsTo(FormInfo::class);
    }

}
