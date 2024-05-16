@extends('layouts.app')
@section('content')
    <section class="bg-white">
        <div class=" container mx-auto">
            <h1 class="text-3xl font-medium px-3">Personal Loan Calculator</h1>
            <p class="px-3 py-8">Oct 05, 2023</p>
            <p class="p-2">This personal loan calculator will help you determine the monthly payments on a loan. To see
                your estimated monthly payments and total interest you'll pay, just enter the loan amount, loan term and
                interest rate in the fields below and click calculate. </p>

            <div class="grid grid-cols-12 gap-6">

                <div class=" lg:col-span-4  sm:col-span-12 sm:p-5">

                    <div class="bg-gray-100 p-5  border border-gray-400">
                        <h1 class="font-bold text-xl py-5">Loan info</h1>
                        <form class="max-w-sm ">
                            <div class="mb-5">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Loan
                                    amount</label>
                                <input type="email" id="email"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="10,000" required />
                            </div>

                            <div class="mb-5">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Loan
                                    term (yrs)</label>
                                <input type="email" id="email"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="5" required />
                            </div>
                            <div class="mb-5">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Interest
                                    Rate</label>
                                <input type="email" id="email"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                    placeholder="" required />
                            </div>



                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full">Calculate</button>
                        </form>

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

                                    <h3>$10,000</h3>
                                </div>
                                <hr class="text-bold">
                                <div class="flex text-xl font-normal justify-between pt-3">
                                    <p>Total interest paid</p>
                                    <h3>$1,585.74</h3>
                                </div>
                            </div>



                            <div class="flex px-5">

                                <div class="mx-8">
                                    <p class="text-xl">Estimated payment</p>
                                    <h1 class="text-3xl font-bold"><sup>$</sup>193</h1>
                                </div>
                                <div>
                                    <p class="text-xl">Loan term (yrs)</p>
                                    <h1 class="text-3xl font-bold">5</h1>
                                </div>
                            </div>

                        </div>
                        <div class="py-8">

                            <a href="#" class="px-3 text-blue-500 text-xl"><u>Show amortization schedule</u></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        </div>
    </section>
@endsection
