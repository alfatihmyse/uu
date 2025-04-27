<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_guru extends Model
{
    use HasFactory;
    protected $table ="guru";
    protected $fillable = ['name','jabatan','email','nip','pendidikan','alamat','foto'];
    protected $primaryKey = 'id';
}
