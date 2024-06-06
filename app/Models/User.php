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
        return $this->avatar ? asset('storage/' . $this->avatar) : asset('images/default-avatar.png');
    }
}




