<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>

  <h1>{{ $diary->title }}</h1>
  <b>{{ $diary->body }}</b> <br> <br>
  
  <li><a href="edit/{{ $diary->id }}">Rediģēt<a></li>

  <form action="/diaries/{{ $diary->id }}" method="POST">
    @method('delete')
    @csrf
    <button type="submit">Izdzēst</button>
  </form>

</x-layout>