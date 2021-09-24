<x-layout>

    <section class="rounded-xl border-2 border-white lg:w-4/12 mx-auto p-6">
        <h1 class="text-xl">Register</h1>
        <form class="flex flex-col items-center space-y-3" action="/register" method="POST">
            @csrf
            <input class="rounded-md py-1 px-2 text-black @error('name') border border-red-300 @enderror" placeholder="Name" type="text" name="name">
            <input class="rounded-md py-1 px-2 text-black @error('email') border border-red-300 @enderror" placeholder="Email" type="email" name="email">
            <input class="rounded-md py-1 px-2 text-black" placeholder="Password" type="password" name="password">
            <button class="rounded-md py-2 px-3 bg-blue-500 hover:bg-blue-400" type="submit">Register</button>
        </form>
        <span class="text-xs text-strong">Already a member? <a class="font-bold" href="/login">Sign in here</a>.</span>
    </section>

</x-layout>