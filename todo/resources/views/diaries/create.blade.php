<x-layout>

<x-slot:title>Izveidot ierakstu</x-slot:title>
<h1>Izveidot dienasgrāmatas ierakstu</h1>

<form method="POST" action="/diaries">
  @csrf
  Title: <input name="title" />
  Content: <textarea name="body" /></textarea>
  Date: <input type="date" name="date" /> <br>
  @error("title")
  <p>{{ $message }}</p>
  @enderror
  @error("body")
  <p>{{ $message }}</p>
  @enderror
  @error("date")
  <p>{{ $message }}</p>
  @enderror
  <br> <button>Saglabāt</button>
</form>
         
</x-layout>