<svg class="h-24 w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" style="fill: #f7f4fb;">
    <path d="M320 28c320 0 320 84 640 84 160 0 240-21 320-42v70H0V70c80-21 160-42 320-42z"></path>
</svg>
<section style="background: #f7f4fb;">
    <div class="container mx-auto py-16 px-4">
        <livewire:frontend.subscription-form />
    </div>
</section>

<footer class="font-semibold text-opacity-90" style="background-color: #f7f4fb; color: #455880;">
    <div class="container mx-auto py-16 px-4">
        <div class="grid grid-cols-12 gap-3 md:gap-4">
            {{-- First Column --}}
            <div class="col-span-12 sm:col-span-5">
                <h1 class="text-xl text-secondary font-bold tracking-wide uppercase mb-4">{{ siteName() }}</h1>
                <div class="text-primary">
                    <ul class="space-y-2 text-sm">
                        @if (appSettings('mobile'))
                        <li class="flex items-center space-x-2">
                            <span class="text-secondary">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z"></path>
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </span>
                            <span><a class="hover:underline" href="tel:{{ appSettings('mobile') }}">{{ appSettings('mobile') }}</a></span>
                        </li>
                        @endif
                        <li class="flex items-center space-x-2">
                            <span class="text-secondary">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </span>
                            <span><a class="hover:underline" href="mailto:{{ appSettings('email') }}">{{ appSettings('email') }}</a></span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <span class="text-secondary">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span>{{ appSettings('address') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- Second Column --}}
            <div class="col-span-6 sm:col-span-4 hidden sm:block">
                <div>
                    <a class="inline-block h-12 w-auto" href="https://www.guidestar.org/profile/83-2193218" target="_blank">
                        <img src="https://widgets.guidestar.org/gximage2?o=9818920&l=v4" alt="Guidestar">
                    </a>
                </div>
            </div>
            {{-- Third Column --}}
            <div class="col-span-6 sm:col-span-3 grid place-items-center">
                <ul class="flex space-x-3 text-sm">
                    <li class="flex items-center space-x-2 justify-center">
                        <a class="p-1 border-2 border-blue-700 bg-blue-700 text-gray-50 hover:bg-transparent hover:text-blue-700 transition" href="{{ appSettings('facebook_url') }}" target="_blank"><span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" " fill=" currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    @if(appSettings('twitter_url'))
                    <li class="flex items-center space-x-2 justify-center">
                        <a class="p-1 border-2 border-blue-500 bg-blue-500 text-gray-50 hover:bg-transparent hover:text-blue-500 transition" href="{{ appSettings('twitter_url') }}" target="_blank"><span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    @endif
                    <li class="flex items-center space-x-2 justify-center">
                        <a class="p-1 border-2 border-pink-500 bg-pink-500 text-gray-50 hover:bg-transparent hover:text-pink-500 transition" href="{{ appSettings('instagram_url') }}" target="_blank"><span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="flex items-center space-x-2 justify-center">
                        <a class="p-1 border-2 border-red-500 bg-red-500 text-gray-50 hover:bg-transparent hover:text-red-500 transition" href="{{ appSettings('youtube_url') }}" target="_blank"><span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    @if(appSettings('linkedin_url'))
                    <li class="flex items-center space-x-2 justify-center">
                        <a class="p-1 border-2 border-blue-500 bg-blue-500 text-gray-50 hover:bg-transparent hover:text-blue-500 transition" href="{{ appSettings('linkedin_url') }}" target="_blank"><span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                  </svg>
                            </span>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>

        <div class="mt-12 text-center text-xs text-primary">
            *Disclaimer: Dhana Yoga Foundation is a nonprofit 501(c)(3) charitable organization with EIN number 83-2193218. All contributions are tax deductible to the fullest extent allowed by law.
        </div>
        <div class="container mx-auto py-3 px-4 text-center text-xs text-primary">
            Copyright ?? {{ date('Y') }} {{ siteName() }}. All rights reserved.
            <a class="hover:underline" href="{{ route('contact-us.index') }}">Contact Us</a>
            <span>-</span>
            <a class="hover:underline" href="#">Search</a>
            <span>-</span>
            <a class="hover:underline" href="{{ getPageUrlBySlug(appSettings('state_disclosures_page_url')) }}" target="_blank">State Disclosures</a>
            <span>-</span>
            <a class="hover:underline" href="{{ getPageUrlBySlug(appSettings('privacy_policy_page_url')) }}" target="_blank">Privacy Policy</a>
            <span>-</span>
            <a class="hover:underline" href="{{ getPageUrlBySlug(appSettings('terms_and_conditions_page_url')) }}" target="_blank">Terms of Use</a>
            <span>-</span>
            <a class="hover:underline" href="{{ route('vacancy.index') }}">Job Oppurtunities</a>
            <span>-</span>
            <a class="hover:underline" href="{{ route('login') }}">Sign In</a>
        </div>
    </div>
</footer>

<div class="py-3 px-4 text-center mb-18 md:mb-9 bg-secondary text-white tracking-wider">
    Designed & Developed with <span style="display: inline-block; animation:  heartbeat .5s infinite ease; ">??????</span> by <a class=" hover:underline" href="https://outofboxdesign.com">Outofbox Design</a>
</div>
<style>
    @keyframes heartbeat {
        from {
            transform: scale(1);
        }

        to {
            transform: scale(1.1);
        }
    }

</style>

<div class="fixed-bottom-ribbon h-9 bg-primary fixed bottom-0 left-0 w-full flex flex-col md:flex-row justify-around gap-5 px-20 py-px text-white">
<a href="" class="w-120 bg-secondary px-10 border border-white rounded-sm flex items-center">Make a Donation</a>
<a href="" class="w-120 bg-secondary px-10  border border-white rounded-sm flex items-center">Volunteer</a>
</div>