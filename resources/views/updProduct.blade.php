@extends('layouts.template')

@section('content')
    <h3 style="border-bottom: 1px solid lightgrey; padding-bottom: 10px; margin-bottom: 10px">
        <i class="fa fa-pencil"></i> Modifier un produit
    </h3>

    @if(session('status'))
        <div class="alert alert-success text-center col-xs-12 " style='color: #070609;'>
            {{session('status')}}
        </div>
    @endif

    @if(session('statusError'))
        <div class="alert alert-danger text-center col-xs-12" style='color: #070609;'>
            {{session('statusError')}}
        </div>
    @endif

    <div class="alert alert-info text-center col-xs-12" id="message" style="display:none;" >Veuillez patienter s.v.p.</div>

    <div class="clearfix"></div>

    <div class="col-xs-12" style="margin-bottom: 10px; padding: 0;">
            <a href="{{url('produit')}}" class="dt-button buttons-print btn blue"> <i class="fa fa-hand-o-left"></i> Retour</a>
    </div>

    <div class="portlet light bordered col-xs-12" id='datasection' style="padding-bottom: 3em; min-height: 535px; padding-top: 3em">

        <div class="col-md-8">
            @if(session('error'))
                <div class="col-xs-12 alert alert-danger " style="font-size: 1.5em;">
                    <i class="fa fa-warning"></i> {!! session('error') !!}
                </div>
            @endif

            {!! Form::open(['url'=>'produit/upd?id='.$productItem->id, 'role'=>'form ','class'=>'form-horizontal ', 'method'=>'post', 'style'=>'margin-top:0em; margin-bottom: 3em','id'=>'formUpd']) !!}

            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <div class="errorpart">
                    Vous avez des erreurs dans le formulaire
                </div>
            </div>

            <div class="form-body">
                <div class="col-xs-12 step" data-num-step="1" style="padding: 0;">
                    <div class="col-xs-12" style="border: 1px solid #56635E; padding-bottom:3em; padding-top: 3em; ">
                        <div class="col-sm-9 col-sm-offset-1" style="padding:0">
                            <p id='warn'></p>

                            <div class="form-group col-xs-12" style="margin-bottom: 1em; padding-left:0">
                                <label for="nom">
                                    <b>Nom</b>
                                </label>

                                <div class="col-md-12" style="padding: 0;">
                                    <input id="nom"  name="nom" type="text" class="form-control" value="{{$productItem->nom}}" placeholder="nom du produit">
                                </div>
                            </div>

                            <div class="form-group col-xs-12" style="margin-bottom: 1em; padding-left:0">
                                <label for="description">
                                    <b>Description</b>
                                </label>

                                <div class="col-md-12" style="padding: 0;">
                                    <input id="description"  name="description" type="text" class="form-control"  value="{{$productItem->description}}" placeholder="description" >
                                </div>
                            </div>

                            <div class="form-group col-xs-12" style="margin-bottom: 1em; padding-left:0">
                                <label for="Catégorie">
                                    <b>Catégorie</b>
                                </label>

                                <div class="col-md-12" style="padding: 0;">
                                    <select class='form-control select2' name="id_categorie" id="id_categorie" >
                                        <option>--Catégorie--</option>
                                        @foreach($listCategory as $each)
                                            @if (isset($productItem->id_categorie) && ($productItem->id_categorie==$each->id))
                                                <option selected=selected value="{{$each->id}}">{{$each->libelle}}</option>
                                            @else
                                                <option value="{{$each->id}}">{{$each->libelle}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group text-center" id="groupbutton">
                                <button type="reset" class="btn red" id="BtnReset">  <i class="icon-close"></i> Annuler</button>
                                <button type="submit" class="btn blue" id="BtnValider">  <i class="icon-check"></i> Valider</button>
                            </div>

                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>

        </div>

        <div class="clearfix"></div>
    </div>
@stop


@section ('page_javascript')
    <script src="{{asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('assets\global\plugins\moment.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}"
            type="text/javascript"></script>
    <script>
        var searchAll = null;
        var getRemoteUserInfo = null;
    </script>

    <script src="{{asset('assets/global/plugins/select2/js/select2.full.min.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"
            type="text/javascript"></script>

    <script type="text/javascript">
        var handleValidation2 = function () {

            var form2 = $('#formUpd');
            var error2 = $('.alert-danger', form2);
            var success2 = $('.alert-success', form2);

            form2.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    id_pays: {
                        required: true
                    },
                    num_ordre: {
                        required: true
                    },
                    libelle: {
                        required: true
                    },
                    sens: {
                        required: true
                    },
                    num_compte: {
                        required: true
                    },
                    montant: {
                        required: true
                    },
                    txn_code: {
                        required: true
                    }
                },
                messages: {
                    id_pays: {
                        required: "Veuillez choisir le pays"
                    },
                    num_ordre: {
                        required: "Veuillez saisir le numéro d'ordre"
                    },
                    libelle: {
                        required: "Veuillez saisir le libellé de l'opération"
                    },
                    sens: {
                        required: "Veuillez choisir le sens de l'écriture"
                    },
                    num_compte: {
                        required: "Veuillez saisir le numéro de compte"
                    },
                    montant: {
                        required: "Veuillez saisir le montant"
                    },
                    txn_code: {
                        required: "Veuillez saisir le code de transaction"
                    }

                },

                invalidHandler: function (event, validator) { //display error alert on form submit
                    success2.hide();
                    error2.show();
                    App.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    error.insertAfter(element);
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    error2.hide();
                    $(form).find('div#buttongroup').html('<i class="fa fa-spin fa-spinner" style="color: lightgrey; font-size: 1.8em"></i>');
                    form.submit(); // submit the form
                    document.getElementById('sendForm').className = "visible";
                    document.getElementById('BtnValider').className = "hidden";
                    document.getElementById('BtnReset').className = "hidden";
                }
            });
        }
        //--------------------------
        $(function () {
            handleValidation2();
            $.fn.select2.defaults.set("theme", "bootstrap");

            $(".select2").select2({
                width: null
            });

            $(".select2").on("select2:open", function () {
                if ($(this).parents("[class*='has-']").length) {
                    var classNames = $(this).parents("[class*='has-']")[0].className.split(/\s+/);

                    for (var i = 0; i < classNames.length; ++i) {
                        if (classNames[i].match("has-")) {
                            $("body > .select2-container").addClass(classNames[i]);
                        }
                    }
                }
            });

        })
    </script>

    <script type="text/javascript">
        $(function () {

            $('input#num_ordre').on('keyup',function(e){
                if (e.keyCode == 13) {
                    e.preventDefault();
                    return false;
                }
                var valeur=$('input#num_ordre').val();
                var reg = new RegExp("[^0-9]", "gi" );
                if(valeur.match(reg))
                {
                    $('#warn').html("<span style='color: red;'>Attention ! Le champ ordre ne doit contenir que des chiffres !</span>");
                }
                else
                {
                    $('#warn').html("");
                }
            });

            $('input#libelle').on('keyup',function(e){
                if (e.keyCode == 13) {
                    e.preventDefault();
                    return false;
                }
                var valeur=$('input#libelle').val();
                var reg = new RegExp("[^a-z]", "gi" );
                if(valeur.match(reg)) {
                    $('#warn').html("<span style='color: red;'>Attention ! Le champ libellé ne doit contenir que des lettres !</span>");
                } else {
                    $('#warn').html("");
                }
            });
        })
    </script>

@stop

@section('css_page')
    <link href="{{asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css')}}"
          rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css')}}" rel="stylesheet"
          type="text/css"/>

    <link href="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet"
          type="text/css"/>
@stop
