/*var network_wrapper = (function () {

 function NetworkWrapper() {
 this.method = "GET";
 this.url = "/asd";
 this.data = {
 request_type: "API"
 }
 }

 NetworkWrapper.prototype.call = function () {
 var defer = $q.defer();
 $http({
 method: this.method,
 url: this.url
 }).then(function successCallback(response) {
 // this callback will be called asynchronously
 // when the response is available
 $q.resolve(response);
 }, function errorCallback(response) {
 // called asynchronously if an error occurs
 // or server returns response with an error status.
 $q.reject(reason);
 });
 return defer.promise;
 };
 return NetworkWrapper;

 })();*/

app.factory('NetworkWrapper', function ($http, $q) {
    var method = "GET";
    var url = "";
    return {
        set_method: function (data) {
            method = data;
            return this;
        },
        set_url: function (data) {
            url = data;
            return this;
        },
        call: function () {
            var defer = $q.defer();
            $http({
                method: method,
                url: url
            }).then(function successCallback(response) {
                // this callback will be called asynchronously
                // when the response is available
                defer.resolve(response);
            }, function errorCallback(response) {
                // called asynchronously if an error occurs
                // or server returns response with an error status.
                defer.reject(reason);
            });
            return defer.promise;
        }
    }
});