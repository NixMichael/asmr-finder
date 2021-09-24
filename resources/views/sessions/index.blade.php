<x-layout>

    <section class="m-auto lg:w-4/12">
        <div>
            @if(session()->has('unauthorised'))
                <h1 class="mb-6 py-3 px-5 rounded-md text-2xl bg-white text-blue-500">{{ session('unauthorised') }}</h1>
            @endif
        </div>
        <div class="rounded-xl border-2 border-white m-auto p-6">
            <h1 class="text-xl">Log In</h1>
            <form class="flex flex-col items-center space-y-3" action="/login" method="POST">
                @csrf
                <input class="rounded-md py-1 px-2 text-black" type="text" name="email" placeholder="email" value="{{ old('email') }}" required>
                <input class="rounded-md py-1 px-2 text-black" type="password" name="password" placeholder="password" required>
                @error('failedLogin')
                    <span class="text-xs text-red-600 text-center">{{ $message }}</span>
                @enderror
                <button class="rounded-md py-2 px-3 bg-blue-500 hover:bg-blue-400" type="submit">Log In</button>
            </form>
            <span class="text-xs text-strong">Don't have an account? <a class="font-bold" href="/register">Register here</a>.</span>
        </div>
    </section>

</x-layout>