@extends('layout')

@section('content')

{!! Form::open(['route' => 'pages.store']) !!}

    @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="btn btn-danger">{{ $error }}</div>
        @endforeach
    @endif

    <div class='form-group'>
         {!! Form::label('title', "Title:") !!}
         {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class='form-group'>
         {!! Form::label('content', "Treść:") !!}
         {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <div class='form-group'>
         {!! Form::submit('Zapisz', ['class' => 'btn btn-primary']) !!}
         {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-light']) !!}
    </div>

{!! Form::close() !!}

@endsection
