'use strict';

var easyWineDirectives = angular.module('easyWineDirectives', []);

/**
 * @name ngSeed.directives:passwordMatch
 * @description
 *
 * Checks if password_confirmation field
 * has the same value as password field
 */
easyWineDirectives.directive('passwordMatch', [function(){
    return {
        restrict: 'A',
        scope:true,
        require: 'ngModel',
        link: function (scope, elem, attrs, control){
            var checker = function () {
 
                //get the value of the first password
                var e1 = scope.$eval(attrs.ngModel); 
 
                //get the value of the other password  
                var e2 = scope.$eval(attrs.passwordMatch);
                return e1 == e2;
            };
            scope.$watch(checker, function (n) {
 
                //set the form control to valid if both 
                //passwords are the same, else invalid
                control.$setValidity("unique", n);
            });
        }
    };
}]);


/**
 * @ngdoc directive
 * @name ngSeed.directives:emailUnique
 * @description
 * Checks if an email is already present in the database.
 */
easyWineDirectives.directive('emailUnique', ['$http', function($http){
    return {
        restrict: 'A',
        require: 'ngModel',
        link: function(scope, elem, attrs, control){
            var $elem = $(elem);

            // Trigger on blur of email input
            $elem.on('blur', function(evt){

                //check if email field has valid email value
                if(!scope.registerForm.email.$error.required && !scope.registerForm.email.$error.email){
                    scope.$apply(function(){
                        //Ajax request to check if email is alread existed
                        $http({
                            method: 'POST',
                            url: 'validate-email',
                            data: {
                                "email": $elem.val(),
                                "_token": scope.csrf_token,
                            }
                        }).
                        success(function(data){
                            console.log('ajax success...' + data.status);
                            //set email is avaliable or not avaliable
                            control.$setValidity('emailUnique', data.status);
                        }).
                        error(function(data){
                             console.log('ajax fails...' );
                            control.$setValidity('emailUnique', false);
                        });
                    });
                }
                
                //hide the emailUnique fail error message in the UI
                else
                {
                    control.$setValidity('emailUnique', true);
                }
            });
        }
    }
}]);

easyWineDirectives.directive('checkList', ['$http', function($http) {
  return {
    scope: {
      list: '=checkList',
      value: '@'
    },
    link: function(scope, elem, attrs) {
      var handler = function(setup) {
        var checked = elem.prop('checked');
        var index = scope.list.indexOf(scope.value);

        if (checked && index == -1) {
          if (setup) elem.prop('checked', false);
          else scope.list.push(scope.value);
        } else if (!checked && index != -1) {
          if (setup) elem.prop('checked', true);
          else scope.list.splice(index, 1);
        }
      };

      var setupHandler = handler.bind(null, true);
      var changeHandler = handler.bind(null, false);

      elem.bind('change', function() {
        scope.$apply(changeHandler);
        scope.$apply(function(){
            $http({
                    method: 'POST',
                    url: window.location.origin+'/wines/test-variety',
                    data: {
                        "varieties": scope.list,
                    }
                }).
                success(function(data){
                    console.log('ajax success...' + data);
                });
        });
      });
      scope.$watch('list', setupHandler, true);
    }
  };
}]);