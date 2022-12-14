<x-admin-layout>

{{-- <form action="/admin/messages" id="filter-form">
    <div class="flex space-x-0.5">
        <div class="flex border-2 border-gray-200 rounded-md">
            <input 
                type="date"
                name="filter-date1"
                class="w-full rounded-tl-md rounded-bl-md px-2 py-3 text-sm text-gray-600 focus:outline-none"
                value="{{request('filter-date1')}}"
            />
        </div>
        <div class="flex border-2 border-gray-200 rounded-md">
            <input 
                type="date"
                name="filter-date2"
                class="w-full rounded-tl-md rounded-bl-md px-2 py-3 text-sm text-gray-600 focus:outline-none"
                value="{{request('filter-date2')}}"
            />
        </div>
        <div class="flex border-2 border-gray-200 rounded-md">
            <input 
                type="text"
                name="filter-name"
                class="w-full rounded-tl-md rounded-bl-md px-2 py-3 text-sm text-gray-600 focus:outline-none"
                placeholder="Name"
                value="{{request('filter-name')}}"
            />
        </div>
        <div class="flex border-2 border-gray-200 rounded-md">
            <input 
                type="text"
                name="filter-email"
                class="w-full rounded-tl-md rounded-bl-md px-2 py-3 text-sm text-gray-600 focus:outline-none"
                placeholder="Email"
                value="{{request('filter-email')}}"
            />
        </div>

        <div class="flex border-2 border-gray-200 rounded-md">
            <input 
                type="text"
                name="filter-company"
                class="w-full rounded-tl-md rounded-bl-md px-2 py-3 text-sm text-gray-600 focus:outline-none"
                placeholder="Company"
                value="{{request('filter-company')}}"
            />
        </div>

        <div class="flex">
            <select class="flex border-2 border-gray-200 w-full text-sm text-gray-600" name="filter-status">
                <option value="new">new</option>
                <option value="in-progress">in progress</option>
                <option value="done">done</option>
            </select>
        </div>




        <div class="px-3">
            <button class="px-3 py-3 border-2 bg-slate-700 border-slate-500 rounded-md focus-within:ring-2 ring-teal-500" type="submit">

                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
            </button>
        </div>
    </div>
</form> --}}

<table class="w-full table-auto mt-4">
    <thead>
        <tr class="border-b border-black bg-gray-500 text-white uppercase text-sm leading-normal">
            <th class="py-3 text-center">Id</th>
            <th class="py-3 text-center">Date</th>
            <th class="py-3 text-center">Name</th>
            <th class="py-3 text-center">Email</th>
            <th class="py-3 text-center">Company</th>
            <th class="py-3 text-center">Message</th>
            <th class="py-3 text-center">Status</th>
            <th class="py-3 px-3"></th>
        </tr>
    </thead>

    <tbody class="text-gray-600 text-sm font-light">
        @foreach($messages as $message)
            <tr class="odd:bg-white even:bg-sky-50 hover:bg-cyan-50 w-full">
                <td class="py-3 px-6 text-center whitespace-nowrap">
                    <span class="font-medium">{{$message->id}}</span>
                </td>

                <td class="py-3 px-6 text-center whitespace-nowrap">
                    <span class="font-medium">{{date("Y-m-d", strtotime($message->created_at))}}</span>
                </td>

                <td class="py-3 px-6 text-center">
                    <span class="font-medium">{{$message->name}}</span>
                </td>

                <td class="py-3 px-6 text-center">
                    <div class="flex items-center justify-center">
                        <span  class="font-medium">{{$message->email}}</span>
                    </div>
                </td>

                <td class="py-3 px-6 text-center">
                    <span  class="font-medium">{{$message->company}}</span>
                </td>

                <td class="py-3 px-6 text-center whitespace-normal">
                    <span  class="font-medium">{{$message->message}}</span>
                </td>

                <td class="py-3 px-6 text-center whitespace-normal">
                    <span  class="font-medium">{{$message->status}}</span>
                </td>

                <td class="py-3 text-center">
                    <a href="/admin/messages/{{$message->id}}/edit">
                        <div class="flex item-center justify-center">
                            <div class="w-4 transform hover:text-red-500 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </div>
                        </div>
                    </a>
                </td>

            </tr>
        @endforeach

    </tbody>
</table>
</x-admin-layout>