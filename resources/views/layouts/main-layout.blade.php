<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="css/stickyFooter.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"> 
    	<title>To-Do list</title>
    	<link rel="icon" href="http://lorempixel.com/16/16/">
    </head>
        
    <body>
        @include("layouts/header")
    	
        <div class="container">
            @yield('content')
        </div>
            
        @include("layouts/footer")
        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        @yield('scripts')
    </body>
</html>

 