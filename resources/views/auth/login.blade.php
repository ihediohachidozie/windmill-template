<x-guest-layout>
    <div class="h-32 md:h-auto md:w-1/2">
        <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{asset('assets/img/login-office.jpeg')}}" alt="Office" />
        <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="{{asset('assets/img/login-office-dark.jpeg')}}" alt="Office" />
    </div>
    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
        <div class="w-full">
            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Login
            </h1>
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Email</span>
                    <input name="email" :value="old('email')" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="janedoe@example.com" required autofocus />
                </label>
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Password</span>
                    <input name="password" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="***************" type="password" required autocomplete="current-password" />
                </label>

                <!-- You should use a button here, as the anchor is only used for the example  -->
                <button class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Log in
                </button>
            </form>
            <hr class="my-2" />



            <p class="mt-4">
                <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            </p>
            <p class="mt-1">
                <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ route('register') }}">
                    Create account
                </a>
            </p>
        </div>
    </div>

</x-guest-layout>