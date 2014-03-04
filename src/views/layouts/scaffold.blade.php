<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <style>
            form{display:inline-block;}.img-uploaded{margin-bottom: 5px;}h4, p{margin-bottom: 0;}hr{margin-top: 5px;}.row{margin-top: 15px;}.bottom-sm{margin-bottom: 5px;}
        </style>
	</head>
	<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Ffy photogallery</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{action('Ffy\Photogallery\AlbumsController@index')}}">Albums</a></li>
                    <li><a href="{{action('Ffy\Photogallery\PhotosController@index')}}">Photos</a></li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container">
			@if (Session::has('message'))
				<div class="flash alert">
					<p>{{ Session::get('message') }}</p>
				</div>
			@endif
			@yield('main')
		</div>
	</body>
</html>