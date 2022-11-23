<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"
style=" background-image: url('{{ asset('/images/fondo2.jpg') }}');    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

        <center>
            <label style="font-size:28px; display:inline-block;">
                <b>PLATAFORMA VIRTUAL</b>
            </label> 
            <br>
            <img src="{{ asset('/images/logo2.png') }}" alt="" style="padding:10px; width: 100px; display:inline-block;">
            <br>
            <label>
                <b>REPOSITORIO DE DOCUMENTOS</b>
            </label>
            <br>
            <label>
                <b>CSJAN ANCASH</b>
            </label>
        </center>
        {{ $slot }}
    </div>
</div>
