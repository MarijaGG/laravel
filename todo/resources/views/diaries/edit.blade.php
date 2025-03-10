<x-layout>
<x-slot:title>
    Rediģēt ierakstu
  </x-slot:title>

  <h1>
    Rediģēt dienasgrāmatas ierakstu
  </h1>

  <form method="POST" action="/diaries/{{ $diary->id }}">
    @csrf
    @method('PUT')
    <label>
        Rediģēt titulu:
        <input name="title" type="text"  value="<?php echo htmlspecialchars($diary->title); ?>">
    </label>

    <label>
        Rediģēt saturu:
        <textarea name="body"/><?php echo htmlspecialchars($diary->body); ?></textarea>
    </label>

    <label>
        Rediģēt datumu:
        <input name="date" type="date"  value="<?php echo htmlspecialchars($diary->date); ?>">
    </label> <br>
    
    @error("title")
        <p>{{ $message }}</p>
    @enderror
    @error("body")
        <p>{{ $message }}</p>
    @enderror  
        
   <br>  <button type="submit">Saglabāt</button>
  </form>

</x-layout>