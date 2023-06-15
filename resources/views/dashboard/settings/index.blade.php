@extends('dashboard.layouts.main')


@section('container')
    <div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white rounded p-6">
      <h2 class="text-2xl font-bold mb-6">Pengaturan Profil Pengguna</h2>
      <form>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="photo">Foto Profil</label>
          <input type="file" id="photo" name="photo" class="border border-gray-400 p-2 rounded w-full">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nama</label>
          <input type="text" id="name" name="name" class="border border-gray-400 p-2 rounded w-full">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
          <input type="email" id="email" name="email" class="border border-gray-400 p-2 rounded w-full">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
          <input type="password" id="password" name="password" class="border border-gray-400 p-2 rounded w-full">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Simpan
        </button>
      </form>
    </div>
  </div>
@endsection