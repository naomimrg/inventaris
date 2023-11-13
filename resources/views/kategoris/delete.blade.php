@extends('layouts.app')
@section('title', 'Delete Kategori')
@section('contents')
    <h3>Confirm Deletion</h3>
    <p>Are you sure you want to delete the category {{ $kategoris->nama }}?</p>

    <form action="{{ route('kategoris.delete', $kategoris->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('kategoris') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
