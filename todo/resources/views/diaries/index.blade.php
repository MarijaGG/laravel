<x-layout>
<x-slot:title>
    Diaries
</x-slot:title>
<h1>Visi ieraksti</h1>

<ul>
  @foreach ($diaries as $diary)
    <li>{{ $diary->title }}</li>
  @endforeach
</ul>

</x-layout>