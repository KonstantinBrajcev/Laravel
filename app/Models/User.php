<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    // Укажите имя таблицы
    protected $table = 'user';

    // Укажите, какие поля можно массово заполнять
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'workdata',
    ];
    public $timestamps = false; // Отключает временные метки
}
