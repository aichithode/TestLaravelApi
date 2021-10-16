<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table= 'produits';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public static function saveProduit($objet){
        //creation de la categorie si elle n'existe pas
        $verifCat=Categorie::where('libelle',$objet->category);
        if($verifCat->exists()==false){
            $input['id_categorie']=Categorie::saveCategorie($objet->category);
        }else{
            $input['id_categorie']= $verifCat->first()->id;
        }
        //dd($input['id_categorie'] ,$result->category);

        // recuperation de l'ID du unitSale
        $input['id_unitSal']=UnitSale::where('code',$objet->unitSale)->first()->id;

        $input['nom'] = $objet->label;
        $input['description'] = $objet->administrativeLabel;
        $input['letterRange'] = $objet->letterRange;
        $input['unitCapacity'] = $objet->unitCapacity;
        $input['capacityQuantity'] = $objet->capacityQuantity;
        $input['id_produit_api'] =$objet->id ;

        $affectedRows =Produit::create($input);
        if($affectedRows){
            return true;
        }
    }
}
