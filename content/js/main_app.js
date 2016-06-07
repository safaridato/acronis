(function () {
    angular.module('acronis', [])
        .controller('MainController', ['$scope', function ($scope) {

            $scope.purchaseMethods = [{
                computersQty: 1,
                devicesQty: 3,
                updatePrice: {regularPrice: 66.99, price: 48.99},
                buyPrice: {regularPrice: 99.99, price: 69.99}
            },
                {
                    computersQty: 3,
                    devicesQty: 5,
                    updatePrice: {regularPrice: 179.99, price: 149.99},
                    buyPrice: {regularPrice: 219.99, price: 179.99}
                },
                {
                    computersQty: 5,
                    devicesQty: 10,
                    updatePrice: {regularPrice: 224.99, price: 199.99},
                    buyPrice: {regularPrice: 289.99, price: 224.99}
                }
            ];

            $scope.package = $scope.purchaseMethods[0];

        }]);

})();