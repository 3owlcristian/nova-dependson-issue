<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Nova\Auth\Impersonatable;
use Laravel\Sanctum\HasApiTokens;
use Pktharindu\NovaPermissions\Traits\HasRoles;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, InteractsWithMedia, Impersonatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'username',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getFullNameAttribute()
    {
        return implode(' ', [$this->name, $this->surname]);
    }

    public function isDeveloper()
    {
        return ($this->roles && $this->roles->contains('slug', 'developer'));
    }

    public function isAdmin()
    {
        return ($this->roles && $this->roles->contains('slug', 'admin'));
    }

    public function selected_roles()
    {
        $this->belongsToMany(Role::class, config('nova-permissions.table_names.role_user', 'role_user'), 'user_id')->with('getPermissions')->where('slug', '!=', 'developer');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(150)
            ->height(150);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')->singleFile();
    }

    /**
     * Get the User's clinics.
     */
    public function clinics()
    {
        return $this->belongsToMany(Clinic::class);
    }

    /**
     * @return bool
     */
    public function canImpersonate($impersonated = null)
    {
        if ($this->isAdmin() && $impersonated && $impersonated->isDeveloper()) {

            return false;
        }

        // For example
        if ($this->id && $impersonated) {
            return $this->id != $impersonated->id;
        } else {
            return true;
        }

    }

    /**
     * @return string
     */
    public function impersonateName()
    {
        // For example
        return $this->email;
    }

    public function scopeIsStaff($query)
    {
        $query->whereHas('roles', function ($query) {
            $query->where('slug', 'staff');
        });
    }

    public function scopeIsCollection($query)
    {
        $query->whereHas('roles', function ($query) {
            $query->where('slug', 'collections');
        });
    }

    public function scopeIsMarketing($query)
    {
        $query->whereHas('roles', function ($query) {
            $query->where('slug', 'marketing');
        });
    }

    public function scopeIsNegotiator($query)
    {
        $query->whereHas('roles', function ($query) {
            $query->where('slug', 'negotiator');
        });
    }

}