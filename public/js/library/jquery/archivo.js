var Archivo = function($scope)
{
    this.indicador = null;
    this.tipoarchivo = null;


    this.openModal = function()
    {
        indicador = this.indicador;
        tipoarchivo = this.tipoarchivo;

        $('.ajax-upload-dragdrop').each(function()
        {
            $(this).remove();
        });

        $('#file').html('Cargar');
//        $('#modal-Upload').dialog('open'); 

        $('#file').uploadFile({
            url: C_SERVER + '/documento/upload',
            allowedTypes: "png,pdf,jpg,jpeg,xlsx,docx,xls,doc",
            fileName: "img",
            multiple: false,
            formData: {"indicador": indicador,
                "tipoarchivo": tipoarchivo},
            onSuccess: function(files, data, xhr)
            {
                setTimeout((function()
                {
//                    $('#modal-Upload').dialog('close');
                    $('#uploadcerrar').trigger('click');
                    $('#modalclose').trigger('click');
                    $('#formUpload').remove();
                    $('.ajax-upload-dragdrop').remove();
                    //var selector = $.jstree._focused().get_selected();
                    //$("#jstree_demo_div").jstree("select_node", selector).trigger("select_node.jstree");
                }), 1000);
                if (tipoarchivo == C_TIPO_DOCUMENTO) {
                    $scope.listarDocumentos();
                } if (tipoarchivo == C_TIPO_PLANTILLA) {
                    $scope.listarPlantillas();
                }
            },
            onError: function(files, status, errMsg)
            {
                console.log(errMsg);
                $('#uploadcerrar').trigger('click');
                $('#formUpload').remove();
            }
        });
    }
    this.closeModal = function()
    {
        $('#modal-Upload').dialog('open');
    }

//    this.load = function()
//    {
//        $(document).on("ready", function()
//        {
//            $('#modal-Upload').dialog(
//                    {
//                        width: 550,
//                        height: 200,
//                        autoOpen: false
//                    });
//        });
//    }
}

