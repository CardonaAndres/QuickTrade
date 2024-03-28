
<x-form-section submit="updateProfileInformation">

            <x-slot name="title">
               
                    {{ __('Información Del Perfil') }}
                
            </x-slot>
        
            <x-slot name="description">
                {{ __('Actualice la información de perfil y la dirección de correo electrónico de su cuenta.') }}
            </x-slot>
    

    <x-slot name="form">
        
        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('Nombre') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" required autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="last_name" value="{{ __('Apellido') }}" />
            <x-input id="last_name" type="text" class="mt-1 block w-full" wire:model.defer="state.last_name" required autocomplete="last_name" />
            <x-input-error for="last_name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="cellphone" value="{{ __('Celular') }}" />
            <x-input id="cellphone" type="number" min="0" class="mt-1 block w-full" wire:model.defer="state.cellphone" required autocomplete="cellphone" />
            <x-input-error for="cellphone" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="address" value="{{ __('Direccion') }}" />
            <x-input id="address" type="text" class="mt-1 block w-full" wire:model.defer="state.address" required autocomplete="address" />
            <x-input id="document" type="text" class="mt-1 block w-full hidden" />
            <x-input-error for="address" class="mt-2" />
        </div>


        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" required autocomplete="username" />
            <x-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                <p class="text-sm mt-2">
                    {{ __('Your email address is unverified.') }}

                    <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:click.prevent="sendEmailVerification">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            @endif
        </div>
    </x-slot>
    <h3>
        <x-slot name="actions">
            <x-action-message class="mr-3" on="saved">
                {{ __('Guardado.') }}
            </x-action-message>
    
    </h3>

   
        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Guardar') }}
        </x-button>
    </x-slot>
</x-form-section>
