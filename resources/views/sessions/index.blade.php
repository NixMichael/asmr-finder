<x-layout>

    <section class="rounded-xl border-2 border-white w-4/12 mx-auto p-6">
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
    </section>

</x-layout>