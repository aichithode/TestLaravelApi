@extends('layouts.template')

@section('content')
    <div class="portlet light bordered " id='datasection' style="padding-bottom: 3em; min-height: 700px; padding-top: 1em">

        <h3 style="border-bottom: 1px solid lightgrey; padding-bottom: 10px; margin-bottom: 10px">
            <i class="fa fa-cart-plus"></i> Fiche Produit
        </h3>

        <div class="col-md-6" style="margin-bottom: 10px; padding: 0;">
            <a href="{{url('produit')}}" class="dt-button buttons-print btn blue"> <i class="fa fa-hand-o-left"></i> Retour</a>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-binoculars"></i> Fiche du produit
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table>
                                <tr>
                                    <td><b>NOM</b>: </td>
                                    @if($product)
                                        <td class="col-sm-6"> {{$product->nom}}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td> <b>DESCRIPTION</b>: </td>
                                    @if($product)
                                        <td class="col-sm-6">{{$product->description}} </td>
                                    @endif
                                </tr>
                                <tr>
                                    <td> <b>CATÉGORIE</b>: </td>
                                    @if($product)
                                        <td class="col-sm-6"> {{\App\Models\Categorie::where('id',$product->id_categorie)->first()->libelle}}</td>
                                    @endif
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('page_javascript')
    <script src="{{url('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/clockface/js/clockface.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/pages/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
@stop

@section('css_page')
    <link href="{{url('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet"  type="text/css"/>

    <link href="{{asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}"
          rel="stylesheet" type="text/css"/>

    <link href="{{asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}"
          rel="stylesheet" type="text/css"/>

    <link href="{{asset('assets/global/plugins/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css"/>
@stop
