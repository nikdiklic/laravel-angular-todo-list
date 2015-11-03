angular.module('myApp.controllers', []).controller('MainController', ['$scope', 'TodoService',
  function($scope, TodoService) {

    $scope.values = ['1','2','3','4','5','6','7','8','9','10'];
    $scope.newTodoItem = {
      'name' : '',
      'priority' : '5',
      'done' : 0
    };

    var initialize = function() {
      $scope.todoItems = [];
      TodoService.query().$promise.then(function(data) {
        $scope.todoItems = data;
      });
    };

    initialize();

    $scope.addTodoItem = function() {
      var todoItem = angular.copy($scope.newTodoItem);
      if(todoItem.name){
        $scope.todoItems.push(todoItem);
        $scope.newTodoItem.name = '';
        $scope.newTodoItem.priority = '5';
        TodoService.save(todoItem).$promise.then(function(item) {
          $scope.todoItems.splice(-1, 1, item);
        });
      }
    };

      
    $scope.toggleEditMode = function(item) {
      if(!item.edited) {
        item.backupName = item.name;
        item.backupPriority = item.priority;
      }
      item.edited = !item.edited;
    }


    $scope.check = function (item) {
      item.$update();
    }

    $scope.okChange = function (item) {
      item.$update();
      $scope.toggleEditMode(item);
    }

    $scope.cancelChange = function (item) {
      item.name = item.backupName;
      item.Priority = item.backupPriority;
      $scope.toggleEditMode(item);
    }


    $scope.deleteTodo = function(item, index) {
      item.$remove();
      $scope.todoItems.splice(index,1);
    };

    

    
}]);