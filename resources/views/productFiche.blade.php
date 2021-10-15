@extends('layouts.template')

@section('content')
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-file-o"></i>Fiche du produit
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-md-6">
                    <table>
                        <tr>
                            <td><b> Type de document</b>: </td>
                            @if($bfu)
                                <td class="col-sm-6"> {{$bfu->lib_type_doc}}</td>
                            @endif
                        </tr>
                        <tr>
                            <td> <b>Identifiant BFU</b>: </td>
                            @if($bfu)
                                <td class="col-sm-6">{{$bfu->id_bfu}} </td>
                            @endif
                        </tr>
                        <tr>
                            <td><b>Date de création</b>:</td>
                            @if($bfu)
                                <td class="col-sm-6"> {{($bfu->horodatage!=Null)? date("d/m/Y H:i:s",strtotime($bfu->horodatage)):""}}</td>
                            @endif
                        </tr>

                        <tr>
                            <td><b>Référence BFU</b>:</td>
                            @if($bfu)
                                <td class="col-sm-6">{{$bfu->ref_bfu}} </td>
                            @endif
                        </tr>

                        <tr>
                            <td><b>Statut du BFU</b>:</td>
                            @if($bfu)
                                <td class="col-sm-6">{{$bfu->lib_stat_bfu}} </td>
                            @endif
                        </tr>
                        <tr>
                            <td><b>Date du statut</b>:</td>
                            @if($bfu)
                                <td class="col-sm-6"> {{($bfu->date_statut!=Null)? date("d/m/Y H:i:s",strtotime($bfu->date_statut)):""}}</td>
                            @endif
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table>
                        <tr>
                            <td class="col-sm-6"><b>Total HT</b> :</td>
                            @if($bfu)
                                <td class="col-sm-6">{{strrev(wordwrap(strrev((isset($bfu->total_ht)?$bfu->total_ht:0)), 3, ' ', true))}}</td>
                            @endif
                        </tr>
                        <tr>
                            <td class="col-sm-6"><b> Total TVA</b></td>
                            @if($bfu)
                                <td class="col-sm-6">{{strrev(wordwrap(strrev((isset($bfu->total_tva)?$bfu->total_tva:0)), 3, ' ', true))}}</td>
                            @endif
                        </tr>
                        <tr>
                            <td class="col-sm-6"><b>Total TTC</b>:</td>
                            @if($bfu)
                                <td class="col-sm-6">{{strrev(wordwrap(strrev((isset($bfu->total_ttc)?$bfu->total_ttc:0)), 3, ' ', true))}}</td>
                            @endif
                        </tr>

                        <tr>
                            <td class="col-sm-6"> <b>Total dû</b>:</td>
                            @if($bfu)
                                <td class="col-sm-6">{{strrev(wordwrap(strrev((isset($bfu->total_du)?$bfu->total_du:0)), 3, ' ', true))}}</td>
                            @endif
                        </tr>

                        <tr>
                            <td class="col-sm-6"><b>Total differé</b>:</td>
                            @if($bfu)
                                <td class="col-sm-6">{{strrev(wordwrap(strrev((isset($bfu->total_differer)?$bfu->total_differer:0)), 3, ' ', true))}}</td>
                            @endif
                        </tr>
                        <tr>
                            <td class="col-sm-6"><b>Total réglé:</b></td>
                            @if($bfu)
                                <td class="col-sm-6">{{strrev(wordwrap(strrev((isset($bfu->total_regler)?$bfu->total_regler:0)), 3, ' ', true))}}</td>
                            @endif
                        </tr>
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
