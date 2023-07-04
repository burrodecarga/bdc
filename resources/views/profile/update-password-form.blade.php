<x-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Update Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            {{-- <x-label for="current_password" value="{{ __('Current Password') }}" /> --}}
            <x-inputs.password  label="{{ __('Current Password') }}" id="current_password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            {{-- <x-input-error for="current_password" class="mt-2" /> --}}
        </div>

        <div class="col-span-6 sm:col-span-4">
            {{-- <x-label for="password" value="{{ __('New Password') }}" /> --}}
            <x-inputs.password  label="{{ __('New Password') }}" id="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            {{-- <x-input-error for="password" class="mt-2" /> --}}
        </div>

        <div class="col-span-6 sm:col-span-4">
            {{-- <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" /> --}}
            <x-inputs.password  label="{{ __('Confirm Password') }}" id="password_confirmation" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            {{-- <x-input-error for="password_confirmation" class="mt-2" /> --}}
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button primary icon="check" label="{{ __('Save') }}" type="submit"></x-button>
    </x-slot>
</x-form-section>