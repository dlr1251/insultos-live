<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insult extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body'
    ];
    public function messages()
    {
        return [
            'title.required' => 'Hagale pues mij@, no deje eso en blanco, pusilánime',
            'title.unique:insults' => 'uy no, sea creativo, ese ya lo dijieron'
            
        ];
    }
}
