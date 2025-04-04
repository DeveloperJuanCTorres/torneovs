<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img style="width: 200px;" src="assets/images/logonegro.png" alt="">
        </x-slot>
        

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form id="form-login" method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">Recordar</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif

                <!-- <x-jet-button class="ml-4" style="background-color: #1D234D;">
                    Acceso
                </x-jet-button> -->
                <x-jet-button 
                    style="background-color: #1D234D;"
                    class="g-recaptcha ml-4" 
                    data-sitekey="6LeZ4AErAAAAAOx3RC6qulKWQOKBXzhpvFNvbkeS" 
                    data-callback='onSubmit' 
                    data-action='submit'>Ingresar</x-jet-button>
            </div>
        </form>
        <br>
        <a href="{{ route('register') }}">No tienes cuenta?, Registrate aquí</a>
    </x-jet-authentication-card>
    
    
</x-guest-layout>

<script src="https://www.google.com/recaptcha/api.js"></script>

<script>
   function onSubmit(token) {
     document.getElementById("form-login").submit();
   }
 </script>
