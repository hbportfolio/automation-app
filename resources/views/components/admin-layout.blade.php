<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GH5FX43R40"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-GH5FX43R40');
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Automate your business workflows and processes | Vexely.com - Admin</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{url('../img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('../img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('../img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{url('../img/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{url('../img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>

<div class="flex">
    @auth
        <nav class="max-w-2xl mx-auto w-1/6 h-screen bg-gray-800">
            <aside aria-label="Sidebar">
                <div class="px-3 py-4 overflow-y-auto bg-gray-800">
                    <ul class="space-y-2">
                        {{-- Main Panel Button--}}
                        <li>
                            <a href="/admin"
                                class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">
                                <svg class="mt-1 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3">User count</span>
                            </a>
                        </li>

                        {{-- Messages Button --}}
                        <li>
                            <a href="/admin/messages"
                                class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">
                                <svg class="mt-1 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-11zm5 2h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1zm-5 1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm9-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1z"/>
                                </svg>
                                <span class="ml-3">Messages</span>
                            </a>
                        </li>

                        {{-- Article Button --}}
                        <li>
                            <a href="/admin/articles"
                                class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                    <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                                    <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                                  </svg>
                                <span class="ml-3">Articles</span>
                            </a>
                        </li>

                        {{-- <li>
                            <a href="/app/transactions/categories"
                                class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">
                                <svg class="mt-1 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                                <span class="ml-3">My categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="/app/news"
                                class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700">
                                <svg class="mt-1 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                                    <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                                </svg>
                                <span class="ml-3">News</span>
                            </a>
                        </li> --}}

                        {{-- Logout Button --}}
                        <li>
                            <form method="POST" action="/admin/logout" id="Logout">
                            @csrf
                            <button
                                class="w-full flex items-center p-2 text-base font-normal rounded-lg text-red-500 hover:bg-gray-700">
                                <svg class="mt-1 flex-shrink-0 w-6 h-6 transition duration-75 text-red-500 group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-3 whitespace-nowrap">Log out</span>
                            </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </aside>
        </nav>
    @endauth

    <div class="w-full">
        <main class="p-10">
            {{$slot}}
        </main>
    </div>

</div>

</body>

</html>