<x-admin-layout>

<form method="POST" action="/admin/messages/{{$message->id}}/update" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-6">
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{$message->name}}"/>
    </div>

    <div class="mb-6">
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{$message->email}}" />
    </div>

    <div class="mb-6">
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" value="{{$message->company}}"/>
    </div>

    <div class="mb-6">
        <textarea class="border border-gray-200 rounded p-2 w-full" name="message" rows="10"
        placeholder="Include tasks, requirements, salary, etc">{{$message->message}}</textarea>
    </div>

    <div class="mb-6">

        <select class="flex border-2 border-gray-200 w-4/5 text-sm text-gray-600" name="status">
            <option value="new">new</option>
            <option value="in-progress">in progress</option>
            <option value="done">done</option>
        </select>
    </div>

    <div class="mb-6">
        <button class="bg-red-300 text-black rounded py-2 px-4 hover:bg-red-200">
            Update
        </button>
    </div>
</form>


</x-admin-layout>