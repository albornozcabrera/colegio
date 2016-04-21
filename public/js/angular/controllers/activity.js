app.controller("ctrActivity", function ($scope, $http) {
    $('#home').removeClass("active");
    $('#about').removeClass("active");
    $('#activity').addClass("active");
    $('#contacts').removeClass("active");
});
