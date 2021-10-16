<?php

namespace App\Http\Controllers;


use App\Helpers\Helper;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Appel de l'API et stockage des categories dans la base
     */
    public static function getCategory()
    {
        $response_jon = Helper::sendCurl(config('app.API_LINK').config('app.CATEGORY_LINK'));
        $response = json_decode($response_jon);

        dd($response_jon,$response);
        return $response;
    }

    /**
     * Appel de l'API et stockage des produits dans la base
     */
    public static function getProduct()
    {
        //appel de l'API pour recuperer les produits
        $response_jon = Helper::sendCurl(config('app.API_LINK').config('app.PRODUCT_LINK'));
        $response = json_decode($response_jon);
        //dd($response_jon,$response,$response->data);

        if($response){
            $linkProd='';
            $idProd=0;
            foreach ($response->data as $tab) {
                if($tab->_links[0]->rel='self'){
                    //url pour avoir les informations du produit recuperer
                    $linkProd=$tab->_links[0]->href; //dd($linkProd);

                    //reuperation de l'identifiant du produit
                    $tablo=explode('/',$linkProd); //dd($tablo);
                    $idProd=$tablo[count($tablo)-1];  //dd($idProd);
                }
            }
            //appel de l'API pour avoir les infos du produit selectionné
            $result_json = Helper::sendCurl($linkProd);
            $result = json_decode($result_json); //dd($result);
            if($result){
                //on enregistre les infos du produit si il n'existe pas deja ds la base
                $verify=Produit::where('id_produit_api',$idProd)->exists();
                if($verify==false){
                    Produit::saveProduit($result); // enregistrement du produit concerné
                }//fin si le produit n'existe pas dans la base

            }//fin si second appel de l'API reussi

        }//fin si premier appel de l'API reussi
    }
}
