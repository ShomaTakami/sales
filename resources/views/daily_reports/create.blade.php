<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Daily Report') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('daily-reports.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date:</label>
                            <input type="date" name="date" id="date" class="form-input rounded-md shadow-sm w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content:</label>
                            <textarea name="content" id="content" class="form-textarea rounded-md shadow-sm w-full" rows="5" required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="sales_count" class="block text-gray-700 text-sm font-bold mb-2">Sales Count:</label>
                            <input type="number" name="sales_count" id="sales_count" class="form-input rounded-md shadow-sm w-full" required>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
