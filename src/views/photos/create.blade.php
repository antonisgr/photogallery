@extends('layouts.scaffold')

@section('main')

<h1>Create Photo</h1>
yey!
{{ Form::open(array('action' => 'Ffy\Photogallery\PhotosController@store')) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('url', 'Url:') }}
            {{ Form::file('url', array('Files'=> true)) }}
        </li>

        <li>
            {{ Form::label('alt', 'Alt:') }}
            {{ Form::text('alt') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


