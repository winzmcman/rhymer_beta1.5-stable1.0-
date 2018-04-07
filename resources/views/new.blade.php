@extends('layouts.structure')

@section('content')
    <div class="container">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error  }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ URL::to(route('newPost')) }}">
                {{ csrf_field() }}
                <label>Заголовок</label>
                <div class="w-100"></div>
                <input type="text" name="title">
                <div class="w-100"></div>
                <label>Текст</label>
                <div class="w-100"></div>
                <textarea name="text" cols="80" rows="5"></textarea>
                <div class="w-100"></div>
                <input type="submit">
            </form>
        </div>    
    </div>
@endsection
