<x-layout>
<x-slot:title>Pierakstīšanās</x-slot:title>
<h1>Pierakstīšanās</h1>

<form action="" method="POST">
    @csrf

    <label for="email">E-pasts:</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}" required>

    <label for="password">Parole:</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Pierakstīties</button>
</form>

@if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

</x-layout>