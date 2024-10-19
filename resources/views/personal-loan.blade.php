@extends('layouts.app')
@section('content')
    <section class="bg-gray-50 sm:py-6 ">
        <div class="container mx-auto">
            <h1 class="text-3xl font-medium px-3">Personal Loan Calculator</h1>

            <p class="px-3 py-2 text-sm">
                This personal loan calculator will help you determine the monthly payments on a loan. To see your estimated
                monthly payments and total interest you'll pay, just enter the loan amount, loan term, and interest rate in
                the fields below and click calculate.
            </p>

            <form action="{{ route('lone.store') }}" method="post">
                @csrf
                <div class="grid grid-cols-12 lg:gap-6 py-3">
                    <!-- Loan Info Section -->
                    <div class="col-span-12 lg:col-span-4 sm:col-span-6 lg:px-5 px-3 w-full">
                        <div class="bg-gray-100 px-5 border rounded border-gray-400">
                            <h1 class="font-semibold text-gray-800 text-xl py-5">Loan Info</h1>

                            <!-- Loan Amount -->
                            <div class="mb-5">
                                <label for="loan_amount"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Loan Amount
                                </label>
                                <input type="number" id="loan_amount" name="loan_amount"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="10,000" value="{{ old('loan_amount', 100) }}" min="0" required />

                                @error('loan_amount')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Loan Term -->
                            <div class="mb-5">
                                <label for="loan_term" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Loan Term (Years)
                                </label>
                                <input type="number" id="loan_term" name="loan_term"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="5" value="{{ old('loan_term') }}" min="1" required />
                                @error('loan_term')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Interest Rate -->
                            <div class="mb-5">
                                <label for="interest_rate"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Interest Rate (%)
                                </label>
                                <input type="number" id="interest_rate" name="interest_rate" step="0.01"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="5.00" value="{{ old('interest_rate') }}" min="0" required />

                                @error('interest_rate')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Calculate Button -->
                            <button type="submit"
                                class="text-white my-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full">
                                Calculate
                            </button>
                        </div>
                    </div>

                    <!-- Results Section -->
                    <div class=" col-span-12 lg:col-span-8 sm:col-span-6 sm:px-5 px-3 w-full ">
                        <div class="border border-gray-400">
                            <!-- Results Header -->
                            <div class="bg-white p-5">
                                <h1 class="font-bold text-3xl">Your Results</h1>
                            </div>

                            <!-- Results Details -->
                            <div
                                class="flex flex-col sm:flex-row justify-between px-2 sm:px-4 py-3 space-y-6 sm:space-y-0 space-x-4">
                                <!-- Principal and Interest Section -->
                                <div class="w-full sm:w-2/3 space-y-4">
                                    <!-- Total Principal Paid -->
                                    <div class="flex justify-between text-lg font-normal">
                                        <p>Total Principal Paid</p>
                                        <h3>${{ number_format($loanAmount ?? 0, 2) }}</h3>
                                    </div>
                                    <hr class="border-gray-300 dark:border-neutral-700">
                                    <!-- Total Interest Paid -->
                                    <div class="flex justify-between text-lg font-normal">
                                        <p>Total Interest Paid</p>
                                        <h3>${{ number_format($totalInterest ?? 0, 2) }}</h3>
                                    </div>
                                </div>

                                <!-- Payment and Loan Term Section -->
                                <div class="w-full sm:w-1/2 flex justify-between space-x-4">
                                    <!-- Estimated Payment -->
                                    <div class="text-center">
                                        <p class="text-lg font-medium">Estimated Payment</p>
                                        <h1 class="text-xl sm:text-3xl font-semibold">
                                            <sup>$</sup>{{ number_format($monthlyPayment ?? 0, 2) }}
                                        </h1>
                                    </div>
                                    <!-- Loan Term (Years) -->
                                    <div class="text-center">
                                        <p class="text-xl font-medium">Loan Term (Years)</p>
                                        <h1 class="text-xl sm:text-3xl font-semibold">{{ $loanTermYears ?? 0 }}</h1>
                                    </div>
                                </div>
                            </div>


                            <!-- Toggle Amortization Schedule -->
                            <div class="py-8">
                                <button id="toggleButton" class="px-3 text-blue-500 text-lg underline focus:outline-none">
                                    Show Amortization Schedule
                                </button>
                            </div>
                        </div>

                    </div>

                    <!-- Amortization Schedule -->
                    <div id="schedule" class="px-6 my-3 border border-gray-400 col-span-12 sm:mx-3  hidden">
                        <!-- Schedule Header -->
                        <div class="py-3 flex justify-between">
                            <div class="space-y-3">
                                <p>Start Date</p>
                                <input type="date" name="start_date" value="{{ old('start_date', date('Y-m-d')) }}"
                                    id="start_date" class="rounded-lg w-[250px]">
                            </div>
                            <div>
                                <p>Estimated Payoff Date</p>
                                <span>{{ $estimatedPayoffDate ?? 'N/A' }}</span>
                            </div>
                        </div>

                        <!-- Amortization Table -->
                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                            <caption class="py-2 text-start text-sm text-gray-600 dark:text-neutral-500">
                                                Amortization Schedule
                                            </caption>
                                            <thead>
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                        Payment Date
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                        Payment
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                        Principal
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                        Interest
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                        Total Interest
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                        Balance
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                                {{-- @forelse ($amortizationSchedule as $payment) --}}
                                                <tr>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                        {{-- {{ $payment['payment_date'] }} --}}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                        {{-- ${{ number_format($payment['payment'], 2) }} --}}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                        {{-- ${{ number_format($payment['principal'], 2) }} --}}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                        {{-- ${{ number_format($payment['interest'], 2) }} --}}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                        {{-- ${{ number_format($payment['total_interest'], 2) }} --}}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                        {{-- ${{ number_format($payment['balance'], 2) }} --}}
                                                    </td>
                                                </tr>
                                                {{-- @empty --}}
                                                <tr>
                                                    <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                                                        No data available.
                                                    </td>
                                                </tr>
                                                {{-- @endforelse --}}
                                            </tbody>
                                        </table>

                                        <!-- Print Schedule Link -->
                                        <a href="#" class="py-3 flex justify-end underline text-blue-600">Print
                                            Schedule</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>
@endsection
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('plugin/Sortable.min.js') }}"></script>


    <script>
        const toggleButton = document.getElementById('toggleButton');
        const table = document.getElementById('schedule');

        toggleButton.addEventListener('click', function() {

            event.preventDefault();
            if (table.classList.contains('hidden')) {
                table.classList.remove('hidden');
                toggleButton.textContent = 'Hide amortization schedule';
            } else {
                table.classList.add('hidden');
                toggleButton.textContent = 'Show amortization schedule';
            }
        });
    </script>
@endpush
