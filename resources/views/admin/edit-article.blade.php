<x-admin-layout>

    <form method="POST" action="/admin/articles/{{$article->id}}/update" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <input type="text" class="border border-gray-200 rounded p-2 w-full" placeholder="Article name" name="article_head" value="{{$article->article_head}}"/>
        </div>
    
        <div class="mb-6">
            <textarea class="border border-gray-200 rounded p-2 w-full" name="article_body" rows="10"
            placeholder="Article goes here..">{{$article->article_body}}</textarea>
        </div>

        <div class="mb-6">
            <input type="text" class="border border-gray-200 rounded p-2 w-full" placeholder="Slug" name="article_slug" value="{{$article->article_slug}}"/>
        </div>
    

        <div class="mb-6">
            <button class="bg-red-300 text-black rounded py-2 px-4 hover:bg-red-200">
                Update
            </button>
        </div>
    </form>

</x-admin-layout>