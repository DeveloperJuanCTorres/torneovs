
<x-guest-layout>  
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img style="width: 200px;" src="assets/images/logonegro.png" alt="">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form id="form-registrar" method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <select class="block mt-1 w-full" name="tipo_doc" id="type_doc">
                    <option value="0">Seleccionar tipo de documento</option>
                    <option value="1">DNI</option>
                    <option value="2">PASAPORTE</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="documento" value="Número de documento" />
                <x-jet-input id="numero_doc" class="block mt-1 w-full" type="number" name="numero_doc" :value="old('numero_doc')" required autofocus autocomplete="numero_doc" />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="nickname" value="Nick Name" />
                <x-jet-input id="nick_name" class="block mt-1 w-full" type="text" name="nick_name" :value="old('nick_name')" required autofocus autocomplete="nick_name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-jet-label for="phone" value="Celular" />
                <x-jet-input class="block mt-1 w-full" id='phone' type="number" name="phone" :value="old('phone')"/>
                <!-- <x-jet-input id="celular" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" /> -->
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    ¿Ya estas registrado?
                </a>

                <!-- <x-jet-button class="ml-4">
                    Registrarme
                </x-jet-button> -->

                <x-jet-button 
                    style="background-color: #1D234D;"
                    class="g-recaptcha ml-4" 
                    data-sitekey="6LeZ4AErAAAAAOx3RC6qulKWQOKBXzhpvFNvbkeS" 
                    data-callback='onSubmit' 
                    data-action='submit'>Registrarme</x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

<script src="https://www.google.com/recaptcha/api.js"></script>

<script>
   function onSubmit(token) {
     document.getElementById("form-registrar").submit();
   }
 </script>