<x-article-layout>
@section('title') {{'Resources'}} @endsection
@section('meta'){{"Let's automate your workflow! Our team of Business Process Automation experts will help you reduce time spent on repetitive tasks. Start today!"}}@endsection

<div>  
    <h1 class="article-list-header">Our articles</h1>
    <table class="article-list-table">
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>
                        <a href="/articles/{{$article->article_slug}}">
                            <button aria-label="open article">
                                <h2>{{$article->article_head}}</h2>
                                <p><?php echo Str::limit($article->article_body, 200); ?></p>
                            </button>
                        </a>
                    </td>   
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



</x-article-layout>