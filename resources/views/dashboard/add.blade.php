@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<h1>Add new Book!</h1>
This site for add new books!
<hr>
{!!Form::open(['url' => 'books/add'])!!}
{{Form::label('title','Title')}}
{{Form::text('title','',array('class'=>'form-control'))}}
{{Form::label('author','Author')}}
{{Form::text('author','',array('class'=>'form-control'))}}
{{Form::label('publisher','Publisher')}}
{{Form::text('publisher','',array('class'=>'form-control'))}}
{{Form::label('isbn','ISBN')}}
{{Form::text('isbn','',array('class'=>'form-control'))}}
{{Form::label('date_launch','Date Publish')}}
{{Form::date('date_launch','',array('class'=>'form-control'))}}
{{Form::label('description','Description')}}
{{Form::textarea('description','',array('class'=>'form-control'))}}
{{Form::label('price','Price')}}
{{Form::text('price','',array('class'=>'form-control'))}}
{{Form::label('image','Image')}}
{{Form::file('image','',array('class'=>'form-control'))}}
 
{{Form::submit('Add Book',array('class'=>'btn btn-primary'))}}
{{Form::close()}}</div>
</div>
</div>
@endsection