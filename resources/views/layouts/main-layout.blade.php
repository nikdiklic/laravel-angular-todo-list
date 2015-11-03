<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/stickyFooter.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
        <title>To-Do list</title>
        <link rel="icon" href="http://lorempixel.com/8/8/">
    </head>
        
    <body ng-app="myApp">
        @include("layouts/header")
        
        <div class="container">
            @yield('content')
        </div>
            
        @include("layouts/footer")
        
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript" src="js/angular.js"></script>
        <script type="text/javascript" src="js/angular-resource.js"></script>
        

        <script type="text/javascript" src="js/controllers/main-controller.js"></script>
        <script type="text/javascript" src="js/services/todo-service.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        
        @yield('scripts')
    </body>
</html>