<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use App\Models\UnitSale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    public function index(Request $request){
        //$input=$request->All();

        $this->viewdata['liste'] =Categorie::where('status',1)->orderby('libelle')->paginate(config('app.NBRE_PAGINATE'));
        return view('index')->with($this->viewdata);
    }

    public function listeProduit(Request $request){
        $input=$request->All();

        $this->viewdata['id_categorie']=0;
        if (isset($input['id_categorie'])&& ($input['id_categorie']!=0)) {
            $this->viewdata['id_categorie']= $input['id_categorie'];
        }

        $hasSearch = false;
        $searchtxt = null;
        if (isset($_GET['searchtxt']) && trim($_GET['searchtxt'])) {
            $searchtxt = trim($_GET['searchtxt']);
            $hasSearch = true;
        }
        $this->viewdata['hasSearch'] = $hasSearch;
        $this->viewdata['search'] = $searchtxt;

        if($this->viewdata['id_categorie']==0){
            $this->viewdata['liste'] =Produit::where(function ($query) use ($searchtxt) {
                $query->where(function ($q) use ($searchtxt) {
                    $q->where('nom', 'like', '%' . $searchtxt . '%');
                });

            })->where('status',1)->orderby('id_categorie')
              ->orderby('nom')->paginate(config('app.NBRE_PAGINATE'));
        }else{
            $this->viewdata['liste'] =Produit::where(function ($query) use ($searchtxt) {
                $query->where(function ($q) use ($searchtxt) {
                    $q->where('nom', 'like', '%' . $searchtxt . '%');
                });
            })->where('status',1)->where('id_categorie',$this->viewdata['id_categorie'])
                ->orderby('nom')->paginate(config('app.NBRE_PAGINATE'));
        }
        return view('productList')->with($this->viewdata);
    }

    public function ficheProduit(Request $request){
        $input=$request->All();

        $this->viewdata['id_produit']=0;
        if (isset($input['id_produit'])&& ($input['id_produit']!=0)) {
            $this->viewdata['id_produit']= $input['id_produit'];
        }

        if(Produit::where('status',1)->where('id',$this->viewdata['id_produit'])->exists()){
            $this->viewdata['product'] =Produit::where('status',1)->where('id',$this->viewdata['id_produit'])->first();
        }
        return view('productFiche')->with($this->viewdata);
    }

    public function ajouterProduit(Request $request){
        $this->viewdata['id_categorie']=0;

        $this->viewdata['listCategory'] =Categorie::where('status',1)->orderby('libelle')->get();
        $this->viewdata['listUnitSale'] =UnitSale::orderby('id')->get();

        if($request->isMethod('post')){
            $input=$request->All();
            $affectedRows = Produit::create($input);
            if ($affectedRows) {
                return redirect('produit')->with('status', 'un nouveau produit a été ajouté.');
            }
        }
        return view('addProduct')->with($this->viewdata);
    }

    public function modifierProduit(Request $request){
        $input=$request->All();//dd($input);

        if (isset($input['id'])&& ($input['id']!=0)) {
            $id= $input['id'];
        }

        if(!$id){
            return redirect('produit');
        }

        if($request->isMethod('post')){
            array_forget($input,'_token'); //dd($input);

            $affectedRows = Produit::where('id',$id)->update($input);
            if ($affectedRows) {
                return redirect('produit')->with('status', 'un produit a été modifié.');
            }
        }

        $this->viewdata['productItem']=Produit::where('id',$id)->first();
        if(!$this->viewdata['productItem']){
            return redirect('produit');
        }

        $this->viewdata['listCategory'] =Categorie::where('status',1)->orderby('libelle')->get();
        $this->viewdata['listUnitSale'] =UnitSale::orderby('id')->get();
        return view('updProduct')->with($this->viewdata);
    }

    public function supprProduit(Request $request){

        if ($request->isMethod('post')) {
            $input = $request->All();

            $affectedRows = Produit::where('id',$input['id'])->update($input);
            if ($affectedRows) {
                return response()->json(['response' => 1]);
            }
        }
        return response()->json(['response' => 0]);
    }

}
