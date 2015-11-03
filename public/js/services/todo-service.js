angular.module('myApp.services', []).factory('TodoService', ['$resource', function($resource) {
	return $resource('todo/:idItem', { 'idItem': '@id'}, 
    {
      query: {method:'GET', isArray:true},
      save: {method:'POST'},
      'update': {method: 'PUT'},
      remove:{method: 'DELETE'}
    });
}]);