<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //serve per consentire l'aggiunta di dati nella table
    protected $fillable = [
        'nome', 'cognome', 'eta','descrizione'
    ];
}
