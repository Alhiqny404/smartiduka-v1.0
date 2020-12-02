<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function uploads()
    {
        return $this->hasOne('App\Models\Uploads');
    }

    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }

    public function pendidikan()
    {
        return $this->hasOne('App\Models\Pendidikan');
    }
    
    public function profileCompany()
    {
        return $this->hasOne('App\Models\ProfileCompany');
    }

    public function PostLoker()
    {
        return $this->belongsTo('App\Models\PostLoker','user_id','id');
    }
}
