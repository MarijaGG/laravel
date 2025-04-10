<x-layout>
<x-slot:title>
    Sākums
</x-slot:title>

@auth
  <h2>Sveiks, {{ Auth::user()->first_name}}</h2>
  <img src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExMTNxdjgxNnE2cnZ5MnYwaDNwcGd3MHltc2tnbW5jdzltbm0xZzR1aCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/xNC8CJpX82m350VdQe/giphy.gif" alt="Dante Boogie">


  <form action="/logout" method="POST">
        @csrf
        <button type="submit">Atteikties</button>
  </form>

@endauth

@guest
  <h2>Sveiks, viesi!</h2>

  <p>Sveicināts manā todo projektā! Šeit var taisīt veicamus uzdevumus un blog ierakstus!!</p>

  <a href="/login">Pierakstīties</a> <br>
  <a href="/register">Registrēties</a>
@endguest

</x-layout>