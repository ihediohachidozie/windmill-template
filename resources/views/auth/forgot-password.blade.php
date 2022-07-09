<x-guest-layout>
    <div class="h-32 md:h-auto md:w-1/2">
        <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{asset('assets/img/forgot-password-office.jpeg')}}" alt="Office" />
        <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="{{asset('assets/img/forgot-password-office-dark.jpeg')}}" alt="Office" />
    </div>
    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
        <div class="w-full">
            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Forgot password
            </h1>
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

          

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Email</span>
                    <input type="email" name="email" :value="old('email')" required autofocus class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="janedoe@example.com" />
                </label>

                <!-- You should use a button here, as the anchor is only used for the example  -->
                <button class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" href="./login.html">
                    Recover password
                </button>
            </form>
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif
        </div>
    </div>

</x-guest-layout>