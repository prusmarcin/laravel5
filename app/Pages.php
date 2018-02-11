<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = [
        'title', 'content'
    ];//mowi nam ktore requesty sluza do dodawania rekordu
    //wszystkie dodatkowe zeczy z formularza typu token i inne zostana odrzucone
}
