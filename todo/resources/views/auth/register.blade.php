<x-layout>
<x-slot:title>Registrēties</x-slot:title>

<h1>Reģistrēties</h1>
    <form method="POST" action="">
        @csrf

        <label for="first_name">Vārds:</label>
        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
            <br>
        <label for="last_name">Uzvārds:</label>
        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
            <br>
        <label for="email">E-pasts:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            <br>
        <label for="password">Parole:</label>
        <input type="password" id="password" name="password" required>
            <br>
        <label for="password_confirmation">Apstiprināt paroli:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
            <br>
        <button type="submit">Reģistrēties</button>
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</x-layout>