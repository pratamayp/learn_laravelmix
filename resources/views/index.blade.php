<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel UI - Vue</title>
    <style>
        body{
            font-family: sans-serif;
            margin: 15%;
        }
    </style>
</head>
<body>
    
    <div id="app">
        <header-cpnt></header-cpnt>
        <h2>Welcome @{{ role }}</h2>
        <h2 v-text="'Hello, ' + name"></h2>
        <h5>Welcome to Laravel UI - Vue 8 learn program</h5>
        <p>Enjoy and goodluck!!</p><br>
        <router-view></router-view>
        <footer-cpnt></footer-cpnt>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>