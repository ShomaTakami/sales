<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __("Dashboard") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200 bg-white p-6">
                    <h3>{{ $userInfo->name }} ({{ ucfirst($userRole) }})</h3>

                    <form class="mb-4" method="GET" action="{{ route("dashboard") }}">
                        <label class="mb-2 block text-sm font-bold text-gray-700" for="date">Select Date:</label>
                        <input class="form-input w-full rounded-md shadow-sm" id="date" name="date"
                            type="date" value="{{ $selectedDate }}">
                        <button class="btn btn-primary mt-2" type="submit">Filter</button>
                    </form>

                    <h4>Your Daily Reports:</h4>
                    @foreach ($dailyReports as $report)
                        <div>
                            <p>Date: {{ $report->date }}</p>
                            <p>Content: {{ $report->content }}</p>
                            <p>Sales Count: {{ $report->sales_count }}</p>
                        </div>
                        <hr>
                    @endforeach
                    {{ $dailyReports->links() }}
                    <a class="btn btn-primary" href="{{ route("daily-reports.create") }}">Create Daily Report</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
