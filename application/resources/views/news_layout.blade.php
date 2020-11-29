<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
    <div id="hearder">
        <h2>Header Section</h2>
    </div>
    <div id="container">
        @section('container')
        <h2>Container Data</h2>
        @show
    </div>
    <div id="footer">
        <h2>Footer Section</h2>
    </div>
    </body>
</html>
