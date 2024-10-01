@extends('layouts.app')
@section('content')
    <section class="bg-gray-50 py-12">
        <div class=" container mx-auto">
            <h1 class="text-3xl font-medium px-3">Personal Loan Calculator</h1>
            <p class="px-3 py-8">Oct 05, 2023</p>
            <p class="p-2">This personal loan calculator will help you determine the monthly payments on a loan. To see
                your estimated monthly payments and total interest you'll pay, just enter the loan amount, loan term and
                interest rate in the fields below and click calculate. </p>
            <form action="{{ route('lone.store') }}" method="post">
                @csrf
                <div class="grid grid-cols-12 gap-6">

                    <div class=" lg:col-span-4  sm:col-span-12 sm:p-5">

                        <div class="bg-gray-100 p-5  border border-gray-400">
                            <h1 class="font-bold text-xl py-5">Loan info</h1>

                            <div class="mb-5">
                                <label for="lonep"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Loan
                                    amount</label>
                                <input type="number" id="lonep" name="loan_amount"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="10,000" value="" value="{{ old('loan_amount') }}" required />

                                @error('loan_amount')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <label for="year"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Loan
                                    term (yrs)</label>
                                <input type="number" id="year" name="loan_term"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="5" value="{{ old('loan_term') }}" required />
                                @error('loan_term')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="interest"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Interest
                                    Rate</label>
                                <input type="number" id="interest" name="interest_rate"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="" value="{{ old('interest_rate') }}" required/>

                                @error('interest_rate')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>



                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full">Calculate</button>


                        </div>
                    </div>

                    <div class=" col-span-8 p-5 w-full ">

                        <div class="border border-gray-400 ">
                            <div class="bg-white p-5">
                                <h1 class="font-bold text-3xl">Your results </h1>
                            </div>

                            <div class="flex justify-between px-4 ">

                                <div>
                                    <div class="flex text-xl font-normal justify-between pb-3">
                                        <p> Total principal paid</p>

                                        <h3>${{ $loanAmount }}</h3>
                                    </div>
                                    <hr class="text-bold">
                                    <div class="flex text-xl font-normal justify-between pt-3">
                                        <p>Total interest paid</p>
                                        <h3>${{ $totalInterest }}</h3>
                                    </div>
                                </div>



                                <div class="flex px-5">

                                    <div class="mx-8">
                                        <p class="text-xl">Estimated payment</p>
                                        <h1 class="text-3xl font-bold"><sup>$</sup>{{ $monthlyPayment }}</h1>
                                    </div>
                                    <div>
                                        <p class="text-xl">Loan term (yrs)</p>
                                        <h1 class="text-3xl font-bold">{{ $loanTermYears }}</h1>
                                    </div>
                                </div>



                            </div>
                            <div class="py-8">

                                <button id="toggleButton" class="px-3 text-blue-500 text-xl underline">Show amortization
                                    schedule</button>
                            </div>
                        </div>
                        <div id="schedule" class="px-6 my-3 border border-gray-400 hidden">

                            <div class=" py-3 flex justify-between ">
                                <div class="space-y-3">
                                    <p>Start date</p>
                                    {{-- <input type="date" name="" value="{{date('Y-m-d')}}" id="" class="rounded-lg w-[250px]"> --}}
                                    <input type="date" id="start_date" name="start_date" class="rounded-lg w-[250px]"
                                    value="{{ old('start_date') }}" required>
                                </div>
                                <div class="">
                                    <p>Estimated payoff date</p>
                                    <span>{{ \Carbon\Carbon::parse($payoffDate)->format('F d, Y') }}</span>

                                </div>
                            </div>
                            <div class="flex flex-col ">
                                <div class="-m-1.5 overflow-x-auto">
                                    <div class="p-1.5 min-w-full inline-block align-middle">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                                <caption
                                                    class="py-2 text-start text-sm text-gray-600 dark:text-neutral-500">
                                                    Amortization schedule</caption>
                                                <thead>
                                                    <tr>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                            Payment Date</th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                            Payment</th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                            Principal</th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                            Interest</th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                            Total Interest </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                            Balance</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                                    {{-- @php
                                                    $today = \Carbon\Carbon::now();;
                                                @endphp --}}
                                                    @foreach ($amortizationSchedule as $payment)
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">

                                                                {{-- monthlyPayment --}}
                                                                {{ \Carbon\Carbon::parse($payment['payment_date'])->format('F  Y') }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                {{ $payment['monthly_payment'] }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                {{ $payment['principal'] }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                {{ $payment['interest'] }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                {{ $payment['totalInterest'] }}</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                {{ $payment['remaining_balance'] }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            <a href="#" class=" py-3 flex justify-end underline text-blue-600">Print
                                                schedule</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </form>
        </div>
        </div>


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
