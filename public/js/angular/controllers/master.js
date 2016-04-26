app.controller("ctrlMaster", function ($scope, $http) {
    $('#home').addClass("active");
    $('#about').removeClass("active");
    $('#activity').removeClass("active");
    $('#contacts').removeClass("active");
    
    $("#btnLogin").click(function(){
        $("#myModal").modal();
    });
    var nameUser = $('#nameUser').text();
    if(nameUser != ''){
        console.log('vacío');
    }else {
        console.log('nombre: ',nameUser);
        $("#page-wrapper").addClass('ocultar-Menu');
        $("#nemu-Master").hide();
    }
});
