<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
     use HasFactory;
     protected $table='tbl_postingan';
    protected $fillable =[
'id_post',
'judul',
'isi',
'tgl_post',
'link'
 ];
}
