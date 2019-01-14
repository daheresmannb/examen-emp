<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model {
    protected $fillable = [
    	"codlib",
		"titlib",
		"codtem",
		"codaut"
    ];
    protected $primaryKey = 'codlib';
    
}
