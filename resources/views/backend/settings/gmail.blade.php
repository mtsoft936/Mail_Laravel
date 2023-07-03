<x-jet-form-section submit="update">
    <x-slot name="title">
        {{ __('Add Gmail') }}
    </x-slot>

    <x-slot name="description">
        {{ __('You can add gmail to use with TMail. Added gmail will be appeared to select menu for users.') }}
    </x-slot>
    
    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="gmail" value="{{ __('Gmail') }}" />
            <div class="relative">
                <select class="form-input rounded-md shadow-sm mt-1 block w-full cursor-pointer" wire:model="state.gmail">
                    <option value="delivery">{{ __('TMail Delivery') }}</option>
                    <option value="imap">{{ __('IMAP') }}</option>
                </select>
            </div>
            <x-jet-input-error for="state.gmail" class="mt-2" />
        </div>
        
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>