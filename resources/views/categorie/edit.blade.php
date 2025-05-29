
@extends('dashboards.admin')
@section('content')
    <div class="add-category">
    <h2>Créer une nouvelle catégorie</h2>
    <form action="{{ route('categorie.update', $categories->id) }}" method="post">
        @csrf
        @method('put')
        <label for="name">Name</label>
        <input type="text" placeholder="entrer le nom de la catégorie" name="name" value="{{ $categories->name }}">

        <label for="slug">Slug</label>
        <input type="text" placeholder="entrer le slug de la catégorie" name="slug" value="{{ $categories->slug }}">

        <button class="primary" type="submit">update</button>
    </form>
    </div>
@endsection
