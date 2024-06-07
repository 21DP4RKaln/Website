<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nickname',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'password',
        'profile_picture',
        'job_title',
        'location',
        'github_username',
        'twitter_username',
        'instagram_username',
        'facebook_username',
        'address',
        'mobile',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sellingItems()
    {
        return $this->hasMany(SellingItem::class);
    }

    public function wishListItems()
    {
        return $this->hasMany(WishListItem::class);
    }

    public function getProfilePictureUrlAttribute()
    {
        return $this->profile_picture ? asset('storage/' . $this->profile_picture) : asset('images/default-avatar.png');
    }
}






