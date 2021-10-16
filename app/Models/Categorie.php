<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $table= 'categories';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public static function saveCategorie($libelle){
        $idCategorie=0;

        $input['libelle'] = $libelle;
        $input['description'] = $libelle;
        $affectedRows =Categorie::create($input);
        if($affectedRows){
            $idCategorie=$affectedRows["id"];
        }
        return $idCategorie;
    }
}
