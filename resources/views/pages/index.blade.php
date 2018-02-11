@extends('layout')

@section('content')

<a class="btn btn-primary" href="{{ route('pages.create') }}">Dodaj stronę</a>
<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach($pages as $page)
    <tr>
        <td>{{ $page->id }}</td>
        <td>{{ $page->title }}</td>
        <td><a class='btn btn-info' href='{{ route('pages.delete', $page) }}'>EDIT</a></td>
        <td>
            {!! Form::model($page, ['route' => ['pages.update', $page], 'method' => 'DELETE']) !!}
            <button class='btn btn-danger'>DELETE</button>
            {!! Form::close() !!}
        </td>
    </tr>
    
    @endforeach
</table>

{{ $pages->links() }}

@endsection

