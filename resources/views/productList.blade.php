@extends('layouts.template')

@section('content')

    <div class="portlet light bordered " id='datasection' style="padding-bottom: 3em; min-height: 700px; padding-top: 1em">

        <h3 style="border-bottom: 1px solid lightgrey; padding-bottom: 10px; margin-bottom: 10px">
            <i class="fa fa-cart-plus"></i> Liste des produits
        </h3>

        <div class="col-md-6" style="margin-bottom: 10px; padding: 0;">
            <a href="{{url('/')}}" class="dt-button buttons-print btn blue"> <i class="fa fa-hand-o-left"></i> Retour</a>
        </div>

        <div class="col-md-6 pull-right" style="margin-bottom: 10px; padding: 0;">
            <a class="dt-button buttons-print btn blue" href="{{url('produit/add')}}"><span><i
                        class="icon-plus"></i> Nouveau</span></a>
        </div>

        <div class="clearfix"></div>

        {!! Form::open(['url'=>'produit', 'method'=>'get', 'class'=>"col-xs-12",'style'=>"margin-bottom: 1em; background-color: #f3f3f3; border-bottom: 1px solid lightgrey; border-top: 1px solid lightgrey;
            padding-bottom: 5px; padding-top: 5px; padding-right:0" ]) !!}

        <div class="col-md-5">
            <input type="text" class="form-control input-md" placeholder="rechercher" name="searchtxt"
                   value="{{$search}}">
        </div>

        <div class="col-md-3">
            <button class="btn btn-md green"><i class="fa fa-search"></i> Rechercher</button>
        </div>

        {!! Form::close() !!}

        @if($hasSearch)
            <div class="col-xs-12" style="padding: 0; margin-bottom: 10px">
                <a href="{{url('produit')}}"> &lt;&lt;&lt;Liste complète des produits</a>
            </div>
        @endif

        <div class="row">
            <div class="col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="sample_3" >
                        <thead>
                        <tr>
                            <th class="col-sm-1" style="font-size: 1em">Id</th>
                            <th class="col-sm-2" style="font-size: 1em">Nom</th>
                            <th class="col-sm-2" style="font-size: 1em">Description</th>
                            <th class="col-sm-1" style="font-size: 1em">Fiche</th>
                            <th class="col-sm-1" style="font-size: 1em">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($liste as $item)
                            <tr>
                                <td style="font-size: 1em">{{$item->id}}</td>
                                <td style="font-size: 1em">{{$item->nom}}</td>
                                <td style="font-size: 1em">{{$item->description}}</td>
                                <td style="font-size: 1em">
                                    <a href="{{url('fiche?id_produit='.$item->id)}}" id="fiche">
                                        <span class="btn green btn-xs"><i class="fa fa-binoculars"></i> Voir</span>
                                    </a>
                                </td>
                                <td style="font-size: 1em">
                                    <a href="{{url('produit/upd?id='.$item->id)}}" id="modifier">
                                        <span class="btn blue btn-xs"><i class="fa fa-edit"></i></span>
                                    </a>
                                    <span class="btn red btn-xs deleteProd" data-id='{{$item->id}}'>
                                        <i class="fa fa-times"></i>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$liste->render()}}
                </div>
            </div>
        </div>

    </div>

@stop

@section('page_javascript')
    <script src="{{asset('assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
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
    <link href="{{asset('assets/layouts/layout3/css/themes/default.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{asset('assets/layouts/layout3/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
@stop
