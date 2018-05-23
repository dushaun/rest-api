<?php
/**
 * Created by PhpStorm.
 * User: dushaun
 * Date: 22/05/2018
 * Time: 22:50
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title', 'body'];
    public $timestamps = false;
}