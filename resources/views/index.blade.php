@extends('layouts.template')

@section('content')

    <div class="portlet light bordered " id='datasection' style="padding-bottom: 3em; min-height: 700px; padding-top: 1em">

        <h3 style="border-bottom: 1px solid lightgrey; padding-bottom: 10px; margin-bottom: 10px">
            <i class="fa fa-list"></i> Liste des catégories
        </h3>

        <div class="row">
            <div class="col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="sample_3" >
                        <thead>
                        <tr>
                            <th class="col-sm-1" style="font-size: 1em">Id Catégorie</th>
                            <th class="col-sm-2" style="font-size: 1em">Libellé Catégorie</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($liste as $item)
                            <tr>
                                <td style="font-size: 1em">{{$item->id}}</td>
                                <td style="font-size: 1em">
                                    <a href="{{url('produit?id_categorie='.$item->id)}}"
                                       id="modifier">
                                        <i class="fa fa-list"></i> {{$item->libelle}}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
