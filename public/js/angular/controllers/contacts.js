app.controller("ctrlContacts", function ($scope, $http) {
    $('#home').removeClass("active");
    $('#about').removeClass("active");
    $('#activity').removeClass("active");
    $('#contacts').addClass("active");
});
