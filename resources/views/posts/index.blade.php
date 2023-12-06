<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MyData</title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
crossorigin="anonymous">
</head>

<body style="background: lightgray">
<div class="container mt-5">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>{{Auth::user()->name}}
<div class="row">
<div class="col-md-12">
<div>
<h3 class="text-center my-4">HALAMAN ADMIN</h3>
<hr>
</div>
<div class="card border-0 shadow-sm rounded">
<div class="card-body">
<a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">

<form action="{{ route('logout') }}" method="POST" class="d-flex"
role="search">
@csrf
@method('DELETE')
<button class="btn btn-danger" type="submit">Logout</button>
</form>
 <form action="search" method="GET" class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" autofocus value="{{ old('search') }}">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>


  <!--  <form action="search" method="GET">
<div class="row mb-3">
<label for="search" class="col-sm-2 col-form-label">Cari data</label>
<div class="col-sm-10">
<input type="text" class="form-control form-control-sm" value="" placeholder="Pleace Input key for search data .." name="search" autofocus value="{{ old('search') }}">
</div>
</div>
</form> -->

</nav>
<table class="table table-bordered">
<thead>
<tr>
<th scope="col">GAMBAR</th>
<th scope="col">JUDUL</th>
<th scope="col">CONTENT</th>
<th scope="col">AKSI</th>
</tr>
</thead>
<tbody>
@forelse ($posts as $post)
<tr>
<td class="text-center">
<img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
</td>
<td>{{ $post->title }}</td>
<td>{!! $post->content !!}</td>
<td class="text-center col-3">
<form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
<a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
@csrf
@method('DELETE')
<button type="submit"
class="btn btn-sm btn-danger">HAPUS</button>
</form>
</td>
</tr>
@empty
<div class="alert alert-danger">
Data Post belum Tersedia.
</div>
@endforelse
</tbody>
</table>
{{ $posts->links() }}
</div>
</div>
</div>
</div>
</div>
</body>
</html>

