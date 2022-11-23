@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">{{ __('Error! Tenemos algunos Algunos Problemas') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)

            @if($error=="The name field is required.")
                <li>El campo Usuario es necesario.</li>
            @endif

            @if($error=="The password field is required.")
                <li>El campo Contraseña es necesario.</li>
            @endif

            @if($error=="usuarioActiv")
                <li>El usuario del sistema se encuentra desactivado, comuncarse con el administrador del sistema.</li>
            @endif

            @if($error=="These credentials do not match our records.")
                <li>Estas credenciales no coinciden con nuestros registros.</li>
            @endif
            {{-- @else
                <li>{{ $error }}</li>
            @endif --}}
            @endforeach
        </ul>
    </div>
@endif
