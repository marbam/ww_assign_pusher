<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Bristol Werewolf</title>

    </head>
    <body>
    	<div id="app">
    		<player-list></player-list>
            <faction-list></faction-list>
    	</div>
    </body>
	<script src="/js/app.js"></script>

</html>