/**
 * Created by Phanton II on 15/02/2017.
 */

var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.firstName= "John";
    $scope.lastName= "Doe";
});