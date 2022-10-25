<div>
    <div class="flex justify-between px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Create Disbursement</h1>
        <div>
            <x-button-link href="{{ url('admin/mortuary/disbursements') }}"
                >Back</x-button-link
            >
        </div>
    </div>

    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
        <div class="py-4 space-y-8">
            <div>
                <dl class="grid grid-cols-1 gap-5 mt-5 sm:grid-cols-3">
                    <div
                        class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6"
                    >
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Total Members
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            {{ $total_contributors }}
                        </dd>
                    </div>
    
                    <div
                        class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6"
                    >
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Contribution per Head
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            {{ Helpers::money($contribution) }}
                        </dd>
                    </div>

                    <div
                        class="px-4 py-5 overflow-hidden bg-green-100 border-2 border-green-300 rounded-lg shadow sm:p-6"
                    >
                        <dt class="text-sm font-medium text-green-500 truncate">
                            Claimant's Receivable
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-green-600">
                            {{ Helpers::money( $contribution * $total_contributors) }}
                        </dd>
                    </div>
                </dl>
            </div>
    
        </div>
    </div>
    
    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
        
        <x-alert-errors/>

        <div>
            <div class="p-4 mt-8 bg-white rounded-md">
                <div class="lg:grid lg:grid-cols-2">
                    <div>
                        <header class="flex items-center gap-4">
                            <h4 class="font-bold text-gray-900">Search Claimant:</h4>
                
                            
                            <div x-data="{ isOpen: false }" class="relative">
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <input type="text" 
                                        wire:model.lazy="search_keyword" 
                                        wire:keydown.enter="search"  
                                        @input="isOpen = true" 
                                        @keydown.enter="isOpen = true";
                                        class="block w-full border-gray-300 rounded-md pl-7 focus:ring-indigo-500 focus:border-indigo-500 pr-7 sm:text-sm" 
                                    placeholder="Search by {{ $search_option }}">
                                </div>
                                <div x-show="isOpen" 
                                    class="absolute z-30 bg-white border shadow-lg w-96">
                                    <div class="divide-y">
                                        <div class="px-2 py-3 text-sm" wire:loading wire:target="search()">Searching ...</div>
                                        @forelse($search_person_results as $search_person)
                                        <div @click="isOpen = false" wire:click="selectPerson('{{ $search_person->id }}')"  wire:key="person-{{ $search_person->id }}"
                                            class="grid grid-cols-3 px-2 py-3 text-sm cursor-pointer hover:bg-indigo-100">
                                            <p class="font-bold">{{ $search_person->virtual_id }}</p>
                                            <p class="col-span-2">{{ $search_person->getFullName() }}</p>
                                        </div>
                                        @empty
                                        <div class="px-2 py-3 text-sm">No results found</div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="py-4 bg-white">
                            @if($user)
                            <div class="flex gap-8">
                                <div class="w-24 h-24 bg-gray-200"></div>
                                <div class="space-y-1">
                                    <div class="flex">
                                        <h5 class="text-xl font-bold">{{ $person->getFullName() }}</h5>
                
                                        <x-button.button-link href="{{ url('member', $person->uuid) }}">
                                            View 
                                        </x-button.button-link>
                                    </div>
                                    <p class="text-sm">
                                        <strong>Age:</strong> <span>{{ Carbon\Carbon::parse($person->date_of_birth)->age }}</span>
                                    </p>
                                    <p class="text-sm">
                                        <strong>Barangay:</strong> <span>{{ $person->barangay->name }}</span>
                                    </p>
                                    <p class="text-sm">
                                        <strong>Purok:</strong> <span>{{ $person->purok }}</span>
                                    </p>
                                    <p class="text-sm">
                                        <strong>Status:</strong>
                                        <x-label-status status="{{ $person->user->labelStatus() }}">
                                            {{ $person->user->status }}
                                        </x-label-status>
                                    </p>
                                </div>
                            </div>
                            @else
                            <div>
                                <div class="flex gap-8 animate-pulse">
                                    <div class="w-24 h-24 bg-gray-200"></div>
                                    <div class="space-y-1">
                                        <div class="h-6 bg-gray-200 w-96"></div>
                                        <div class="h-6 bg-gray-200 w-96"></div>
                                        <div class="h-6 bg-gray-200 w-96"></div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="pl-8 border-l">
                        <header class="flex items-center gap-4">
                            <h4 class="font-bold text-gray-900">Claimant's Info</h4>
                        </header>
                        <div x-data="{ authorized: false }">
                            <x-form.form-inline-group label="Authorized Person">
                                <x-form.input-text value="{{ $person?->receiving_person }}" required readonly class="bg-gray-100"/>
                            </x-form.form-inline-group>
                            
                            <label>
                                <input type="checkbox" x-model="authorized">
                                <span class="ml-2 text-sm">The Authorized Person is the one claiming this?</span>
                            </label>

                            <div x-show="!authorized" x-cloak class="space-y-2">
                                <x-form.form-inline-group label="Receiving Person">
                                    <x-form.input-text wire:model.defer="receiving_person" required placeholder="Full Name" />
                                </x-form.form-inline-group>
                                <x-form.form-inline-group label="Relationship to the Deceased Person">
                                    <x-form.input-text wire:model.defer="receiving_person_relationship" required placeholder="e.g. Father, Mother, Child" />
                                </x-form.form-inline-group>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
