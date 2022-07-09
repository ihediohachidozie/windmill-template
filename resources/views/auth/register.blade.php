<x-guest-layout>
    <div class="h-32 md:h-auto md:w-1/2">
        <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{asset('assets/img/create-account-office.jpeg')}}" alt="Office" />
        <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="{{asset('assets/img/create-account-office-dark.jpeg')}}" alt="Office" />
    </div>
    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
        <div class="w-full">
            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Create account
            </h1>
            <form method="POST" action="{{ route('register') }}">
            @csrf
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input type="text" name="name" :value="old('name')" required class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Jane Doe" />
            </label>
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input type="email" name="email" :value="old('email')" required class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="janedoe@example.com" />
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Password</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="***************" type="password" name="password" required autocomplete="new-password" />
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                    Confirm password
                </span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="***************" type="password" name="password_confirmation" required autocomplete="new-password" />
            </label>

            <div class="flex mt-6 text-sm">
                <label class="flex items-center dark:text-gray-400">
                    <input type="checkbox" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" />
                    <span class="ml-2">
                        I agree to the
                        <span class="underline">privacy policy</span>
                    </span>
                </label>
            </div>

            <!-- You should use a button here, as the anchor is only used for the example  -->
            <button class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Create account
            </button>
            </form>
            <hr class="my-2" />

            <p class="mt-4">
                <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{route('login')}}">
                    Already have an account? Login
                </a>
            </p>
        </div>
    </div>

</x-guest-layout>