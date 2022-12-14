<x-admin-layout>

<a href="/admin/articles/new"><button class="bg-green-300 text-black rounded py-2 px-4 hover:bg-green-200 mt-4">Write New</button></a>

<table class="w-full table-auto mt-4">
    <thead>
        <tr class="border-b border-black bg-gray-500 text-white uppercase text-sm leading-normal">
            <th class="py-3 text-center">Id</th>
            <th class="py-3 text-center">Date</th>
            <th class="py-3 text-center">Name</th>
            <th class="py-3 text-center">Article</th>
            <th class="py-3 px-3"></th>
            <th class="py-3 px-3"></th>
        </tr>
    </thead>

    <tbody class="text-gray-600 text-sm font-light">
        @foreach($articles as $article)
            <tr class="odd:bg-white even:bg-sky-50 hover:bg-cyan-50 w-full">
                <td class="py-3 px-6 text-center whitespace-nowrap">
                    <span class="font-medium">{{$article->id}}</span>
                </td>

                <td class="py-3 px-6 text-center whitespace-nowrap">
                    <span class="font-medium">{{date("Y-m-d", strtotime($article->created_at))}}</span>
                </td>

                <td class="py-3 px-6 text-center">
                    <span class="font-medium">{{$article->article_head}}</span>
                </td>
                
                <td class="py-3 px-6 text-center">
                    <span class="font-medium">{{Str::limit($article->article_body, 100)}}</span>
                </td>

                <td class="py-3 text-center">
                    <a href="/admin/articles/{{$article->id}}/edit">
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

                <td class="py-3 text-center">
                    <form method="POST" action="/admin/articles/{{$article->id}}">
                    @csrf
                    @method('DELETE')
                        <div class="flex item-center justify-center">
                            <button type="submit">
                                <div class="w-4 transform hover:text-red-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </form>
                </td>

            </tr>
        @endforeach

    </tbody>
</table>

</x-admin-layout>