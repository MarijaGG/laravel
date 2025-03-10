<x-layout>
<x-slot:title>
    Diaries
</x-slot:title>
<h1>Visi ieraksti</h1>

<ul>
  @foreach ($diaries as $diary)
    <li><a href="diaries/{{ $diary->id }}">{{ $diary->title }}<a></li>
  @endforeach
</ul>

</x-layout>