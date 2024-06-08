@extends('layouts.app')

@section('title', 'Create Petisi')

@section('content')
<div class="header-wrapper">
    <div class="header-title">
        <span>Petisi dan Kampanye</span>
        <span>Create</span>
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
    <h3 class="main-title">Create Petisi</h3>
    <form action="{{ route('petisi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" value="{{ old('judul') }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" required>{{ old('deskripsi') }}</textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" required>
                <option value="open">Open</option>
                <option value="closed">Closed</option>
            </select>
        </div>
        <button type="submit" class="submit-button">Create</button>
    </form>
</div>
@endsection
