@extends('layouts.app')

@section('content')
<h2 class="text-xl font-semibold mb-4">Dashboard {{ ucfirst($user->role) }}</h2>

@if($user->role === 'mahasiswa')
  <p class="mb-3">Selamat datang, {{ $user->name }}. Berikut laporan yang kamu buat:</p>
@else
  <p class="mb-3">Selamat datang Admin DPA, berikut semua laporan mahasiswa:</p>
@endif

<table class="w-full border-collapse bg-white rounded shadow">
  <thead>
    <tr class="bg-gray-100 text-left">
      <th class="px-4 py-2 border">Nomor</th>
      <th class="px-4 py-2 border">Judul</th>
      <th class="px-4 py-2 border">Pelapor</th>
      <th class="px-4 py-2 border">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($laporans as $laporan)
      <tr>
        <td class="px-4 py-2 border font-mono">{{ $laporan->nomor_laporan }}</td>
        <td class="px-4 py-2 border">{{ $laporan->judul }}</td>
        <td class="px-4 py-2 border">{{ optional($laporan->mahasiswa)->nama }}</td>
        <td class="px-4 py-2 border">{{ ucfirst($laporan->status) }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection