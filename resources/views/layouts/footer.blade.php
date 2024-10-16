@php
    use App\Models\Setting\WebsiteSetting;
    $site = WebsiteSetting::first();
@endphp

<footer class='md:hidden grid grid-cols-5 border-t border-gray-200 dark:border-gray-600 text-sm text-gray-800    bg-white dark:bg-gray-700 inset-x-0 bottom-0 fixed pt-2'>
    <a to='/' class='col-span-1 flex flex-col items-center'>
        <HomeModernIcon class="h-5 hover:bg-gray-200 hover:dark:bg-gray-50 text-gray-500 dark:text-gray-400" />
        <span>Home</span>
    </a>
    <a to='/profile' class='col-span-1 flex flex-col items-center'>
        <WalletIcon class="h-5 hover:bg-gray-200 hover:dark:bg-gray-50 text-gray-500 dark:text-gray-400" />
        <span>Wallet</span>
    </a>
    <a to='/deposit' class='col-span-1 flex flex-col items-center'>
        <BanknotesIcon class="h-5 hover:bg-gray-200 hover:dark:bg-gray-50 text-gray-500 dark:text-gray-400" />
        <span>Deposite</span>
    </a>
    <a to='/statement' class='col-span-1 flex flex-col items-center'>
        <ClipboardIcon class="h-5 hover:bg-gray-200 hover:dark:bg-gray-50 text-gray-500 dark:text-gray-400" />
        <span>Statement</span>
    </a>

    <div class="hs-dropdown relative inline-flex">

        <button id="hs-dropdown-with-icons" type="button" class="hs-dropdown-toggle pl-2 inline-flex justify-center items-center  align-middle  transition-all col-span-1 flex-col">
            <UserCircleIcon class="h-5 hover:bg-gray-200 hover:dark:bg-gray-50 text-gray-500 dark:text-gray-400" />
            <span>Account</span>
        </button>

        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700" aria-labelledby="hs-dropdown-with-icons">
            <div class="py-2 first:pt-0 last:pb-0">
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                    <UserIcon class="h-5 text-gray-800 hover:dark:bg-gray-50  dark:text-gray-400" />
                    Login
                </a>
                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="#">
                    <UserIcon class="h-5 text-gray-800 hover:dark:bg-gray-50 dark:text-gray-400" />
                    Register
                </a>
            </div>
        </div>
    </div>
</footer>

<section class="w-full border-t dark:border-t-gray-700 bg-gray-100 dark:bg-slate-900">
    <footer class="hidden container lg:block  px-4 sm:px-6 lg:px-8 mx-auto">

        <div class="grid grid-cols-12 py-12">
            <div class="col-span-5">
                <div class=" space-y-6">
                    <div class=" flex items-center space-x-3 text-sm">
                        <img class='h-12' src="{{ asset('uploads/logo/' . $site->logo) }}" alt="dfgdh" srcSet="" />

                    </div>

                    <p class='text-sm text-gray-800 leading-7  font-light dark:text-gray-400   capitalize  '>Boost Care It is here to offer services  just for you!  <br />Our team of skilled professionals is ready  to give <br /> you the best creative design, digital marketing <br /> development,  and more.</p>
                    <div class="flex space-x-2 items-center">
                        <a href="https://x.com/boostcareit" target="_blank">
                            <svg class="w-5 h-5 text-gray-800  dark:text-gray-400 capitalize " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/boostcareit" target="_blank">
                            <svg class="w-6 h-6 text-gray-800  dark:text-gray-400 capitalize " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fillRule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clipRule="evenodd" />
                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                            </svg>

                        </a>

                        <a href="">
                            <svg class="w-6 h-6 text-gray-800  dark:text-gray-400 capitalize " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fillRule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clipRule="evenodd" />
                                <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/boostcareit/" target="_blank">
                        <svg class="w-6 h-6 text-gray-800  dark:text-gray-400 capitalize " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" fillRule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clipRule="evenodd" />
                        </svg>
                        </a>
                        <a href="https://www.facebook.com/topboostcareit/" target="_blank">
                        <svg class="w-5 h-5 text-gray-800  dark:text-gray-400 capitalize " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fillRule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clipRule="evenodd" />
                        </svg>
                        </a>

                        <a href="https://www.youtube.com/@boostcareit" target="_blank">
                        <svg class="w-6 h-6 text-gray-800 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fillRule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clipRule="evenodd" />
                        </svg>
                        </a>


                    </div>
                </div>

            </div>
            <div class="col-span-4 pl-10">
                <h6 class='text-gray-800   font-bold dark:text-gray-400  capitalize  pb-5'>Resources</h6>
                <p><a href="#" class='text-gray-800  dark:text-gray-400  capitalize  text-sm'>About Us</a></p>
                <p><a href="#" class='text-gray-800   dark:text-gray-400 capitalize  text-sm'>Contact Us
                </a></p>
                <p><a href="#" class='text-gray-800  dark:text-gray-400  capitalize  text-sm'>Our Team
                </a></p>

                <p><a href="#" class='text-gray-800  dark:text-gray-400  capitalize  text-sm'>Privacy Policy
                </a></p>
                <p><a href="#" class='text-gray-800  dark:text-gray-400  capitalize  text-sm'>Sitemap
                </a></p>
                <p><a href="#" class='text-gray-800  capitalize   dark:text-gray-400 text-sm'>FAQs

                </a></p>
                <p><a href="#" class='text-gray-800   dark:text-gray-400 capitalize  text-sm'>Disclaimer

                </a></p>

                <p><a href="#" class='text-gray-800  text-sm dark:text-gray-400'>Terms and Conditions
                </a></p>
            </div>
            <div class="col-span-3">
                <h6 class='text-gray-800   font-bold dark:text-gray-400 capitalize  pb-5'>Services</h6>

                <div class="space-y-1">
                    {{-- {
                        categories.map((item, index) => {
                            return <Link href={route('servicepage', { category: item.id })} class='text-gray-800 block dark:text-gray-400 u text-sm'>
                                <span class=" capitalize">{item.name}</span>
                            </Link>
                        })
                    } --}}


                    <p><a href="#" class='text-gray-800  dark:text-gray-400  capitalize  text-sm'>About Us</a></p>
                    <p><a href="#" class='text-gray-800   dark:text-gray-400 capitalize  text-sm'>Contact Us
                    </a></p>
                    <p><a href="#" class='text-gray-800  dark:text-gray-400  capitalize  text-sm'>Our Team
                    </a></p>

                    <p><a href="#" class='text-gray-800  dark:text-gray-400  capitalize  text-sm'>Privacy Policy
                    </a></p>
                    <p><a href="#" class='text-gray-800  dark:text-gray-400  capitalize  text-sm'>Sitemap
                    </a></p>
                    <p><a href="#" class='text-gray-800  capitalize   dark:text-gray-400 text-sm'>FAQs

                    </a></p>
                    <p><a href="#" class='text-gray-800   dark:text-gray-400 capitalize  text-sm'>Disclaimer

                    </a></p>

                    <p><a href="#" class='text-gray-800  text-sm dark:text-gray-400'>Terms and Conditions
                    </a></p>
                </div>

            </div>
            {{-- <div class="col-span-3">
                <div class="space-y-3 ">
                    <h6 class='text-gray-800   font-bold dark:text-gray-400  capitalize '>Subscribe</h6>
                    <form>
                        <div class="mt-4 flex flex-col items-center gap-2 sm:flex-row sm:gap-3 bg-white p-2 dark:bg-slate-800 dark:border rounded border-gray-700">
                            <div class="w-full">
                                <label htmlFor="hero-input" class="sr-only capitalize ">Subscribe</label>
                                <input type="text" id="hero-input" name="hero-input" class="py-1 px-4 block w-full border-transparent dark:border-gray-700 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-800  " placeholder="Enter Address" />
                            </div>
                            <a class="w-full sm:w-auto whitespace-nowrap rounded px-6 p-2 inline-flex justify-center items-center gap-x-2 text-sm  border border-transparent dark:bg-slate-900 bg-gray-200  hover:text-white font-extrabold  hover:text-gray-400 text-gray-800 focus:outline-none focus:bg-blue-700 disabled:opacity-50 hover:bg-blue-500 dark:text-gray-400 disabled:pointer-events-none" href="#">
                                Send
                            </a>
                        </div>

                    </form>
                </div>

            </div> --}}

        </div>

    </footer>
    <div class=" mt-1 dark:bg-slate-800 bg-gray-200">
        <div class="py-3 flex justify-center">
            <p class='text-center text-base font-bold text-gray-800 dark:text-gray-400'> Bankingscoop 2024 | All right reserved.</p>
        </div>

    </div>
</section>
