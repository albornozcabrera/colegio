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
        console.log('nombre: ',nameUser);
    }else {
        console.log('vacío');
        $("#page-wrapper").addClass('ocultar-Menu');
        $("#nemu-Master").hide();
    }
    console.log('array --> vec = [LUNES,MARTES,MIERCOLES,JUEVES,VIERNES];');
    console.log('---------------------------------------------------------');
    var vec = ['LUNES','MARTES','MIERCOLES','JUEVES','VIERNES'];
    var i;
    var acum = "";
    
     for (i = 0; i < 5; i++) {
         acum = acum + vec[i];
         console.log('acumulador: ',i,' ',acum);
     }
      var sum = acum;
     console.log('TOTAL: ',sum);
     
});
