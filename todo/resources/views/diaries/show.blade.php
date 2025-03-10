<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>

  <h1>{{ $diary->title }}</h1>
  <b>{{ $diary->body }}</b> <br> <br>
  
  <li><a href="edit/{{ $diary->id }}">Rediģēt<a></li>
</x-layout>