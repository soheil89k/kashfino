<script src="{{url("js/plugin/angular/angular.min.js")}}"></script>
<script src="{{url("js/static_data.js")}}"></script>

<script>

    var app = angular.module('app', []);
    app.controller('base', function ($rootScope, $scope) {
        $scope.pageLoaded = false;
        $scope.$on('page_loaded', function (event, args) {
            $scope.pageLoaded = true;
        });
    });
</script>

<script src="{{url("js/helpers/network_wrapper.js")}}"></script>