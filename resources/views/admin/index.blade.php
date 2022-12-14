<x-admin-layout>
<div class="w-full border border-1 border-gray-400 rounded-lg flex">
    <div class="flex flex-col place-items-center w-1/3 p-10 m-1 rounded-lg border border-1 border-gray-400">
        <h1 class="text-3xl text-black font-extrabold">Visitor count:</h1>
        <span class="text-5xl text-black font-extrabold my-8">{{$user_count}}</span>
    </div>
    <div class="flex flex-col place-items-center w-1/3 p-10 m-1 rounded-lg border border-1 border-gray-400">
        <h1 class="text-3xl text-black font-extrabold">Message count:</h1>
        <span class="text-5xl text-black font-extrabold my-8">{{$messages}}</span>
    </div>
    <div class="flex flex-col place-items-center w-1/3 p-10 m-1 rounded-lg border border-1 border-gray-400">
        <h1 class="text-3xl text-black font-extrabold">Newsletter signups:</h1>
        <span class="text-5xl text-black font-extrabold my-8">{{$newsletters}}</span>
    </div>
</div>
</x-admin-layout>