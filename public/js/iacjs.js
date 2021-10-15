var IACjs =  function(){
    this.showHideFormPart = function (el, data_attrib_hide, data_attrib_show) {
        $('#' + el.attr(data_attrib_hide)).css('display', 'none');
        $('#' + el.attr(data_attrib_show)).css('display', 'block');
    }

    this.validateForm = function (theform, ruleData, ruleMessages, submitAction) {
        var form = theform;
        var error2 = $('.alert-danger', form);
        var success2 = $('.alert-success', form);

        form.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",  // validate all fields including form hidden input
            rules: ruleData,
            messages: ruleMessages,

            invalidHandler: function (event, validator) { //display error alert on form submit
                success2.hide();
                error2.show();
            },

            errorPlacement: function (error, element) { // render error placement for each input type

                error.insertAfter(element); // for other inputs, just perform default behavior

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
                if (submitAction)
                    eval(submitAction + "()");
                else
                    form.submit();

            }
        });
    }

    this.modalAjaxSubmit = function (url, data, type, dataType, waitDiv, waitText, successDiv, successTest, errorDiv, errorTest, page_url, actionAfterModal) {

        $(waitDiv).html('<div class="text-center" style="color:lightgrey">   <i class="fa fa-spin fa-spinner"></i> ' + waitText + '</div>');

        $.ajax({
            url: url,
            data: data,
            type: type,
            dataType: dataType,
            success: function (e) {
                IACjs.formatResponse(e, successDiv, successTest, errorDiv, errorTest);

            },
            error: function (e) {
                $(errorDiv).html('<div class="text-center" style="color:red"> <i class="fa fa-warning"></i> ' + errorTest + '</div>');
            }
        })
    }

    this.formatResponse = function (response, successDiv, successTest, errorDiv, errorTest) {
        //check whether it's json data
        if (/^[\],:{}\s]*$/.test(response.replace(/\\["\\\/bfnrtu]/g, '@').
            replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']').
            replace(/(?:^|:|,)(?:\s*\[)+/g, ''))) {

            if (response.response === 0) {
                $(errorDiv).html('<div class="text-center" style="color:red"> <i class="fa fa-warning"></i> ' + errorTest + '</div>');
            } else {
                $(successDiv).html('<div class="text-center" style="color:green"> <i class="fa fa-check"></i> ' + successTest + '</div>');
            }
        } else {

            $(successDiv).html(response);

        }
    }

    this.generateModal = function (initialContent) {
        //récupérer l'ID du dernier modal dans le document
        var idLastMoadl = $(document).fin('div.modal.genModal:last-child').attr('data-id');
        //
        var themodal = '<div id="genModal' + (parseInt(idLastMoadl) + 1) + '" class="modal fade genModal" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">' +
            '<div class="modal-body text-center">';
        if (initialContent)
            themodal += initialContent;
        themodal += '</div><div class="modal-footer">' +
            '<button type="button" data-dismiss="modal" class="btn btn-outline dark">Annuler</button></div>' +
            '</div>';

        $(document).append(themodal);
        return 'genModal' + (parseInt(idLastMoadl) + 1);
    }

    this.destroyModal = function (idModal) {
        $(document).find('#' + idModal).remove();
    }

    this.fillModalBox = function (content) {
        $(document).find('#' + idModal).find('div.modal-body').html(content);
    }

    this.showModalBox = function (content) {
        $(document).find('#' + idModal).modal('show');
    }
};

