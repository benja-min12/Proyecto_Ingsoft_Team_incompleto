<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rut',
        'status',
        'tipo_usuario',
        'carrera_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function carrera(){
        return $this->belongsTo(Carrera::class);
    }
    public function solicitudes(){
        return $this->belongsToMany(Solicitud::class)->withTimestamps()->withPivot('id','telefono' ,'estado', 'NRC', 'nombre_asignatura', 'detalles', 'calificacion_aprob', 'cant_ayudantias', 'tipo_facilidad', 'nombre_profesor', 'archivos')->orderByPivot('updated_at', 'asc');
    }

    public function getSolicitudId(String $id){
        return $this->solicitudes()->wherePivot('id', $id)->get();

    }
    public function solicitudesActivas(){
        return $this->belongsToMany(Solicitud::class)->withTimestamps()->withPivot('id','telefono' ,'estado', 'NRC', 'nombre_asignatura', 'detalles', 'calificacion_aprob', 'cant_ayudantias', 'tipo_facilidad', 'nombre_profesor', 'archivos')->wherePivot('estado', "=" ,0)->orderByPivot('updated_at', 'asc');
    }

    public function getSolicitudnumero(String $id){
        return $this->belongsToMany(Solicitud::class)->withTimestamps()->withPivot('id','telefono' ,'estado', 'NRC', 'nombre_asignatura', 'detalles', 'calificacion_aprob', 'cant_ayudantias', 'tipo_facilidad', 'nombre_profesor', 'archivos')->wherePivot('id',"=",$id);
    }
    public function getSolicitudTipo(String $Tipo){
        return $this->belongsToMany(Solicitud::class)->withTimestamps()->withPivot('id','telefono' ,'estado', 'NRC', 'nombre_asignatura', 'detalles', 'calificacion_aprob', 'cant_ayudantias', 'tipo_facilidad', 'nombre_profesor', 'archivos')->wherePivot('solicitud_id',"=",$Tipo);
    }
}
