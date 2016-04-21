app.controller("ctrlHome", function ($scope, $http) {
    $('#home').addClass("active");
    $('#about').removeClass("active");
    $('#activity').removeClass("active");
    $('#contacts').removeClass("active");
});
