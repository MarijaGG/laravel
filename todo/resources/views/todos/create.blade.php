<x-layout>

<x-slot:title>Izveidot ierakstu</x-slot:title>
<h1>Izveidot bloga ierakstu</h1>

<form method="POST" action="/todos">
  @csrf
  <input name="content" /> <br>
  @error("content")
  <p>{{ $message }}</p>
  @enderror
  <br> <button>Saglabāt</button>
</form>
         
</x-layout>