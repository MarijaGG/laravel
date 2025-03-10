<x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>

  <li><a href="edit/{{ $todo->id }}">Rediģēt<a></li>
</x-layout>