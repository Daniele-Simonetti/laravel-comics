@extends('guest.layout.base')

@section('documentTitle')
  {{$nomePagina}}
@endsection

@section('content')
    {{-- @php
        dd($comic);
    @endphp --}}
    <main>
      <div class="jumbo">
        <div class="currentser">
          <span>Current series</span>
        </div>
      </div>
      <div class="container-80">
        <div class="cards">
          @foreach ($comic as $item_comic)
          <div class="card">
            <div>
            <img src="{{$item_comic['thumb']}}" alt="{{$item_comic['title']}}">
            </div>
            <span>{{ $item_comic['series'] }}</span>
          </div>
              
          @endforeach
        </div>
        <div class="load-more">
          <button>Load More</button>
        </div>
      </div>
    </main>
@endsection