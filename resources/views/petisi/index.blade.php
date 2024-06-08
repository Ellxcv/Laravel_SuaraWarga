@extends('layouts.app')

@section('title', 'Petisi dan Kampanye')

@section('content')
<div class="header-wrapper">
    <div class="header-title">
        <span>Petisi dan Kampanye</span>
        <span>Dashboard</span>
    </div>
    <div class="user-info">
        <div class="search">
            <i class="bx bx-search-alt"></i>
            <input type="text" placeholder="Search">
        </div>
        <img src="{{ asset('image/government64px.png') }}" alt="">
    </div>
</div>
<div class="tabel-wrapper">
    <h3 class="main-title">Petisi dan Kampanye</h3>
    <div class="button-container">
        <button class="move-button" onclick="window.location.href='{{ route('petisi.create') }}'">Input Data</button>
        <button class="move-button" onclick="window.location.href='{{ route('petisi.print') }}'">Print</button>
    </div>
    <div class="tabel-container">
        <table>
            <thead>
                <tr>
                    <th>ID Petisi</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($petisis as $petisi)
                    <tr>
                        <td>{{ $petisi->id }}</td>
                        <td>{{ $petisi->judul }}</td>
                        <td>{{ $petisi->deskripsi }}</td>
                        <td>
                            <span class="status status-{{ strtolower($petisi->status) }}">
                                {{ ucfirst($petisi->status) }}
                            </span>
                        </td>
                        <td>
                            <div class="button-container">
                                <a href="{{ route('petisi.edit', $petisi->id) }}" class="edit-button">Edit</a>
                                <form id="removeForm_{{ $petisi->id }}" action="{{ route('petisi.destroy', $petisi->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="remove-button" onclick="confirmRemove({{ $petisi->id }})">Remove</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">Total Petisi: {{ $petisis->count() }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<script>
function confirmRemove(id) {
    if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
        document.getElementById('removeForm_' + id).submit();
    }
}
</script>
@endsection

