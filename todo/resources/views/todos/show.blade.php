<x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>

  <li><a href="edit/{{ $todo->id }}">Rediģēt<a></li>

  <form action="/todos/{{ $todo->id }}" method="POST">
    @method('delete')
    @csrf
    <button type="submit">Izdzēst</button>
  </form>

</x-layout>