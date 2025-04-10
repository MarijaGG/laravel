<x-layout>
    <x-slot:title>
        Visi veicamie uzdevumi
    </x-slot:title>
    
    <h1>Visi veicamie uzdevumi</h1>

    <ul>
    @foreach ($todos as $todo)
    @if ($todo->user_id === auth()->id())
        {{-- Rādīt tikai savējo --}}
        <li><a href="todos/{{ $todo->id }}">{{ $todo->content }}<a></li>
    @endif
  @endforeach
    </ul>
</x-layout>