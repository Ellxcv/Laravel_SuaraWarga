@extends('layouts.app')

@section('title', 'Edit Petisi')

@section('content')
<div class="header-wrapper">
    <div class="header-title">
        <span>Petisi dan Kampanye</span>
        <span>Edit</span>
    </div>
    <div class="user-info">
        <div class="search">
            <i class="bx bx-search-alt"></i>
            <input type="text" placeholder="Search">
        </div>
        <img src="{{ asset('image/government64px.png') }}" alt="">
    </div>
</div>
<div class="form-wrapper">
    <h3 class="main-title">Edit Petisi</h3>
    <form action="{{ route('petisi.update', $petisi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" value="{{ $petisi->judul }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" required>{{ $petisi->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" required>
                <option value="open" {{ $petisi->status == 'open' ? 'selected' : '' }}>Open</option>
                <option value="closed" {{ $petisi->status == 'closed' ? 'selected' : '' }}>Closed</option>
            </select>
        </div>
        <button type="submit" class="submit-button">Update</button>
    </form>
</div>
@endsection
