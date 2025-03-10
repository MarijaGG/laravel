<x-layout>
<x-slot:title>
    Rediģēt ierakstu
  </x-slot:title>

  <h1>
    Rediģēt uzdevuma ierakstu
  </h1>

  <form method="POST" action="/todos/{{ $todo->id }}">
    @csrf
    @method('PUT')
    <label>
        Rediģēt uzdevumu:
        <input name="content" type="text"  value="<?php echo htmlspecialchars($todo->content); ?>">
        @error("content")
            <p>{{ $message }}</p>
        @enderror
    </label>

    <label>
        Izpildīts:
        <input name="completed" type="hidden" value="0">
        <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? 'checked' : '' }}>
    </label>

  <br> <br>  <button type="submit">Saglabāt</button>
  </form>

</x-layout>