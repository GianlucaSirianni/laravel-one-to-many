@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Crea un Post</h1>
    </div>

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div>
            <label class="form-label" for="">Nome</label>
            <input class="form-control" type="text" name="name">
        </div>

        <div>
            <label class="form-label" for="">Data</label>
            <input class="form-control" type="date" name="date">
        </div>

        <div>
            <label class="form-label" for="">Descrizione</label>
            <textarea class="form-control" type="text" name="description"></textarea>
        </div>
        <div class="my-3">
            <label for="">Socials</label>
            <select name="category_id" id="">
                <option value="">Seleziona il tuo social preferito</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Crea post</button>
    </form>
@endsection
