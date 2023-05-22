<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'surname',
        'password', 
        'age',
        'gender',
        'phone', 
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'username',
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
    ];
    
    /*
     * metodo aggiunto che prede come parametri il ruolo che gli passo durante l attivazione e ritorna il valore true se il ruolo asscoiato a quell utente è equivakente al parametro passato.
     * 
     * è un array perchè posso vedere se un utente è o admin o user
     */
    
    public function hasRole($role) {
        $role = (array)$role;
        return in_array($this->role, $role);
    }

    public function getUsername($username){
        return User::where('username',$username)->first();
    }

    public function getEmail($password){
        return User::where('password',$password)->first();
    }


}
