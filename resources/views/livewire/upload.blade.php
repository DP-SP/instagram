


<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('Upload File') }}
    </h2>
</x-slot>

<div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
    <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
        aria-modal="true" aria-labelledby="headline">
        <form>
            <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                @if (session()->has('message'))
                    <div class="px-4 py-3 my-3 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md"
                        role="alert">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ session('message') }}</p>
                                <br>
                                <p class="text-sm">{{ session('files') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="mb-4">
                    <div x-data="{ isUploading: false, progress: 0 }"
                        x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false"
                        x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                        <div class="flex">
                            <label for="photos" class="block mb-2 text-sm font-bold text-gray-700">Select
                                Images:</label>
                            <div class="px-2" wire:loading wire:target="photos">
                                Uploading...</div>
                            {{-- <div x-show="isUploading" class="px-2">
                                <progress max="100" x-bind:value="progress"></progress>
                            </div> --}}
                        </div>
                        <input type="file" multiple name="photos" id="photos"
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            wire:model="photos">
                        @error('photos') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                    <button wire:click.prevent="store()" type="button"
                        class="inline-flex items-center px-4 py-2 my-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                        Upload
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>

