<x-layout>

    <section class="rounded-xl border-2 border-white w-4/12 mx-auto p-6">
        <h1 class="text-xl">Log In</h1>
        <form class="flex flex-col items-center space-y-3" action="/login" method="POST">
            @csrf
            <input class="rounded-md py-1 px-2 text-black @error('email') border border-red-300 @enderror" type="text" name="email" placeholder="email" required>
            <input class="rounded-md py-1 px-2 text-black @error('password') border border-red-600 @enderror" type="password" name="password" placeholder="password" required>
            <button class="rounded-md py-2 px-3 bg-blue-500 hover:bg-blue-400" type="submit">Log In</button>
        </form>
        <span class="text-xs text-strong">Don't have an account? <a class="font-bold" href="/register">Register here</a>.</span>
    </section>

</x-layout>