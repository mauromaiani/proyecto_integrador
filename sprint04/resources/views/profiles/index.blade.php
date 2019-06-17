@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
    </div>
    <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
          <h1>{{ $user->username }}</h1>
          @can('update', $user->profile)
          <a href="/post/create">Subir Nuevo Post</a>
          @endcan


        </div>
        @can('update', $user->profile)
        <a href="/profile/{{ $user->id }}/edit">Editar Perfil</a>
        @endcan
        <div class="d-flex">
          <div class="pr-4"> <strong>{{ $user->posts->count() }}</strong> posts</div>
          <div class="pr-4"> <strong>200</strong> followers</div>
          <div class="pr-4"> <strong>300</strong> followings</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url }}</a></div>
    </div>
  </div>
  <div class="row pt-5">
    @foreach($user->posts as $post)
      <div class="col-4 pb-4">
        <a href="/post/{{ $post->id }}">
          <img src="/storage/{{ $post->image }}" class="w-100">
        </a>
      </div>
    @endforeach

  </div>
</div>
@endsection
