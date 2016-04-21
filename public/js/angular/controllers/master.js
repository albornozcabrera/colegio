app.controller("ctrlMaster", function ($scope, $http) {
    $('#home').addClass("active");
    $('#about').removeClass("active");
    $('#activity').removeClass("active");
    $('#contacts').removeClass("active");
    
    $("#btnLogin").click(function(){
        $("#myModal").modal();
    });
});
