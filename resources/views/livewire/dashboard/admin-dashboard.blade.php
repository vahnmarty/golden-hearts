<div>
    <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Overview</h1>
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
                            11,190
                        </dd>
                    </div>

                    <div
                        class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6"
                    >
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Total Collected
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            {{ Helpers::money(71897) }}
                        </dd>
                    </div>

                    <div
                        class="px-4 py-5 overflow-hidden bg-white rounded-lg shadow sm:p-6"
                    >
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Total Disbursed
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            {{ Helpers::money(21224) }}
                        </dd>
                    </div>
                </dl>
            </div>
    
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div>
                <div class="flex flex-col mt-8">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div
                            class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8"
                        >
                            <div
                                class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg"
                            >
                                <table class="min-w-full divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th
                                                scope="col"
                                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6"
                                            >
                                                Barangay
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                            >
                                                Members
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                            >
                                                Claims
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                            >
                                                Collected
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200"
                                    >
                                        @foreach(Helpers::get_barangays() as $brgy)
                                        <tr>
                                            <td
                                                class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-6"
                                            >
                                                {{ $brgy->name }}
                                            </td>
                                            <td
                                                class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap"
                                            >
                                                {{ rand(500, 1000) }}
                                            </td>
                                            <td
                                                class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap"
                                            >
                                                P{{ number_format(rand(1500, 5000),2) }}
                                            </td>
                                            <td
                                                class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap"
                                            >
                                                P{{ number_format(rand(1500, 5000),2) }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /End replace -->
    </div>
</div>
