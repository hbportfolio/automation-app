<x-article-layout>
@section('title') {{$article->article_head}}@endsection
@section('meta'){{substr($article->article_body, 3, 160)}}@endsection


<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Article",
    "name": "Vexely",
    "headline": "{{$article->article_head}}",
    "articleBody": "<?php echo $article->article_body; ?>",
    "author": {
        "@type": "Organization",
        "name": "Vexely"
    }, 
    "publisher": {
        "@type": "Organization",
        "name": "Vexely",
        "logo": {
            "@type": "ImageObject",
            "url": "https://www.vexely.com/img/vexely_logo.webp"
        }
    },
    "datePublished": "{{$article->created_at}}",
    "dateModified": "{{$article->updated_at}}"
    }
</script>

    <div>
        <h1 class="article-header">{{$article->article_head}}</h1>
        <div class="article-body">
            <?php echo $article->article_body; ?>
            <div class="article-small-div">
                <small>{{date("Y m d", strtotime($article->updated_at))}}</small>
            </div>
        </div>
    </div>

    <section class="cta-section-article">
        <div class="cta-section-container">
            <h2 class="cta-section-article-h2">
                Want to automate your business?
            </h2>
            <div class="cta-section-header-dash-2"></div>

    
            <div class="cta-section-container-content">
                <div class="cta-section-container-content-div-1">
                    <h3>
                        Jump on a call with us to learn more
                    </h3>
                    <p>
                        Don't miss out on the benefits of automation! Take the first step today
                        and discover how automating your processes can save time, reduce errors,
                        and improve efficiency. Contact us to learn more and get started.
                    </p>
                    <a href="https://calendly.com/vexely/introduction-call"><button type="button"aria-label="book a call">Book a call</button></a>
                </div>
                <div class="cta-section-container-content-div-2">
                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="400" viewBox="0 0 868.9803 474.6702" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M212.96892,644.94753c-18.51744,15.78973-22.36087,41.687-22.36087,41.687s26.17921.29707,44.69665-15.49269,22.36087-41.687,22.36087-41.687S231.48637,629.15783,212.96892,644.94753Z" transform="translate(-165.50985 -212.6649)" fill="#f2f2f2"/><path d="M221.52563,651.22973c-7.88774,23.02161-30.565,36.10537-30.565,36.10537s-9.88865-24.24161-2.00091-47.26322,30.56494-36.10536,30.56494-36.10536S229.41338,628.20813,221.52563,651.22973Z" transform="translate(-165.50985 -212.6649)" fill="#f2f2f2"/><path d="M414.81075,310.62528c-4.18994-5.429-10.11133-10.45227-10.48633-17.15155-.34375-6.14447,4.2378-12.245,2.30567-18.12342-1.48584-4.51983-6.38721-7.24707-11.17676-8.69128a43.43919,43.43919,0,0,0-27.91553,1.07471l.48486-.34192c-5.45214-1.94214-11.82519.0628-16.11474,3.7763-4.29,3.71344-6.83936,8.86072-8.81738,14.01886-1.97852,5.15815-3.51123,10.505-6.25977,15.34076-2.749,4.83582-6.95752,9.23358-12.51025,10.90485,1.85888,3.70795,7.66992,4.98,11.07812,2.425a14.01368,14.01368,0,0,0,2.33106-2.40985q3.40943-4.146,6.81933-8.29194c2.33887,4.15979-1.15527,9.90113,1.71973,13.7522,1.48242,1.986,4.18994,2.74017,6.70459,3.28113a121.27714,121.27714,0,0,0,59.33105-2.20068c1.5503-.45685,3.26075-1.086,3.90381-2.4892C416.95089,313.8793,415.91231,312.05289,414.81075,310.62528Z" transform="translate(-165.50985 -212.6649)" fill="#2f2e41"/><path d="M470.53815,331.812a10.52739,10.52739,0,0,0-.2393,1.64013l-42.95744,24.782L416.9,352.22322,405.76883,366.7955,423.21917,379.233a8,8,0,0,0,9.59819-.23384l44.29652-34.94583a10.4971,10.4971,0,1,0-6.57573-12.24133Z" transform="translate(-165.50985 -212.6649)" fill="#ffb7b7"/><path d="M425.90529,359.40791l-13.88374,17.994a4.5,4.5,0,0,1-6.80392.37268l-15.71732-16.32121A12.49742,12.49742,0,0,1,404.827,341.7092l19.713,11.02278a4.5,4.5,0,0,1,1.36538,6.67593Z" transform="translate(-165.50985 -212.6649)" fill="#6c63ff"/><polygon points="241.288 460.267 253.548 460.266 259.38 412.978 241.286 412.979 241.288 460.267" fill="#ffb7b7"/><path d="M403.67036,668.92892l24.144-.001h.001a15.3873,15.3873,0,0,1,15.38647,15.38623v.5l-39.53076.00147Z" transform="translate(-165.50985 -212.6649)" fill="#2f2e41"/><polygon points="157.288 460.267 169.548 460.266 175.38 412.978 157.286 412.979 157.288 460.267" fill="#ffb7b7"/><path d="M319.67036,668.92892l24.144-.001h.001a15.3873,15.3873,0,0,1,15.38647,15.38623v.5l-39.53076.00147Z" transform="translate(-165.50985 -212.6649)" fill="#2f2e41"/><circle cx="378.3738" cy="301.62837" r="21.18784" transform="translate(-128.2503 432.16527) rotate(-83.7356)" fill="#ffb7b7"/><path d="M390.77111,333.39136l12.48227,6.18372s13.94651,24.237,5.94651,47.237c-3.8841,11.16678,7.05349,46.763,7.05349,46.763s16.94651,161.237,17,211c-21.05349,3.237-41.05349,7.237-42.05349-2.763s-11.94651-128.237-11.94651-128.237-15.05349,131.237-27.05349,133.237-36-1-36-1,19.05349-192.237,32.05349-204.237l2-10-.05349-89.763,14.97759-7.14766Z" transform="translate(-165.50985 -212.6649)" fill="#2f2e41"/><path d="M346.11823,469.66164a10.74266,10.74266,0,0,0,3.29112-16.1405l14.51672-96.76189-18.96578-.91048-11.31613,96.36138a10.80091,10.80091,0,0,0,12.47407,17.45149Z" transform="translate(-165.50985 -212.6649)" fill="#ffb7b7"/><path d="M363.514,381.00414l-22.68238-1.432a4.5,4.5,0,0,1-4.11751-5.42941l4.72623-22.1603a12.49741,12.49741,0,0,1,24.94035,1.648l1.901,22.50531a4.5,4.5,0,0,1-4.76764,4.86845Z" transform="translate(-165.50985 -212.6649)" fill="#6c63ff"/><path d="M990.39582,289.249H488.80218a13.806,13.806,0,0,0-13.806,13.806V582.53364a13.806,13.806,0,0,0,13.806,13.806H990.39582a13.806,13.806,0,0,0,13.806-13.806V303.055a13.806,13.806,0,0,0-13.806-13.806Z" transform="translate(-165.50985 -212.6649)" fill="#3f3d56"/><rect x="327.99594" y="100.98308" width="492.18639" height="277.64361" fill="#fff"/><circle cx="573.66845" cy="88.36291" r="5.04805" fill="#fff"/><polygon points="679.425 378.627 327.996 378.627 327.996 100.983 679.425 378.627" fill="#f2f2f2" style="isolation:isolate"/><path d="M1018.02127,586.24353H969.987v-3.46086a.68617.68617,0,0,0-.68614-.68619h-16.469a.68618.68618,0,0,0-.68624.68614v3.46091H941.85279v-3.46086a.68618.68618,0,0,0-.68619-.68619H924.69772a.68618.68618,0,0,0-.6862.68619h0v3.46086h-10.293v-3.46086a.68618.68618,0,0,0-.6862-.68619H896.56338a.68618.68618,0,0,0-.6862.68619h0v3.46086h-10.293v-3.46086a.68618.68618,0,0,0-.68619-.68619H868.42909a.68617.68617,0,0,0-.6862.68614v3.46091h-10.293v-3.46086a.68618.68618,0,0,0-.6862-.68619H840.2948a.68618.68618,0,0,0-.6862.68619h0v3.46086H829.31553v-3.46086a.68618.68618,0,0,0-.68619-.68619H812.16046a.68618.68618,0,0,0-.6862.68619h0v3.46086h-10.293v-3.46086a.68618.68618,0,0,0-.6862-.68619H671.48891a.68618.68618,0,0,0-.6862.68619h0v3.46086H660.50964v-3.46086a.68618.68618,0,0,0-.6862-.68619H643.35462a.68618.68618,0,0,0-.6862.68619h0v3.46086H632.37535v-3.46086a.68617.68617,0,0,0-.68615-.68619H615.22028a.68618.68618,0,0,0-.6862.68619h0v3.46086H604.241v-3.46086a.68618.68618,0,0,0-.6862-.68619H587.08594a.68618.68618,0,0,0-.6862.68619h0v3.46086h-10.293v-3.46086a.68618.68618,0,0,0-.6862-.68619H558.95165a.68618.68618,0,0,0-.6862.68619h0v3.46086H547.97238v-3.46086a.68618.68618,0,0,0-.6862-.68619H530.81731a.68619.68619,0,0,0-.6862.68614v3.46091h-10.293v-3.46086a.68618.68618,0,0,0-.68617-.68619H502.683a.6862.6862,0,0,0-.6862.68619h0v3.46086H470.43146a16.46886,16.46886,0,0,0-16.46885,16.46887v7.44683a16.46885,16.46885,0,0,0,16.46885,16.46883h547.58981a16.46888,16.46888,0,0,0,16.46888-16.46883V602.7124A16.46885,16.46885,0,0,0,1018.02127,586.24353Z" transform="translate(-165.50985 -212.6649)" fill="#3f3d56"/><path d="M749.06641,554.88582a12.08948,12.08948,0,0,1-.55394,1.14324,14.6271,14.6271,0,0,1-4.433,4.987,14.56389,14.56389,0,0,1-22.94594-11.9105V546.755h1.99475A50.94173,50.94173,0,0,0,749.06641,554.88582Z" transform="translate(-165.50985 -212.6649)" fill="#3f3d56"/><path d="M777.5304,547.44323v1.66232a14.55908,14.55908,0,0,1-27.34415,6.97014,12.16026,12.16026,0,0,1-.57729-1.17239c.42578.01168.84557.01752,1.27164.01752A51.01779,51.01779,0,0,0,777.5304,547.44323Z" transform="translate(-165.50985 -212.6649)" fill="#3f3d56"/><path d="M797.15156,371.65583c-.43746-.06415-.88061-.105-1.32405-.13414a48.98222,48.98222,0,0,1,.97431,36.57714c.44315-.05247.88061-.12246,1.31807-.20413a18.37443,18.37443,0,0,0-.96833-36.23887Z" transform="translate(-165.50985 -212.6649)" fill="#3f3d56"/><path d="M705.9334,371.52169c-.44344.02915-.88659.07-1.32405.13414a18.37448,18.37448,0,0,0-.96832,36.23887c.43745.08167.87491.15166,1.31806.20413a48.98583,48.98583,0,0,1,.97431-36.57714Z" transform="translate(-165.50985 -212.6649)" fill="#3f3d56"/><path d="M797.15156,371.65583a50.15582,50.15582,0,1,0,3.89068,19.36473A50.22821,50.22821,0,0,0,797.15156,371.65583Zm-.34974,36.443a48.98222,48.98222,0,1,1,3.07387-17.07827A49.06652,49.06652,0,0,1,796.80182,408.09883Z" transform="translate(-165.50985 -212.6649)" fill="#3f3d56"/><path d="M776.5447,379.6467H725.2165a10.20731,10.20731,0,0,0,0,20.41462h51.3282a10.20731,10.20731,0,0,0,0-20.41462Z" transform="translate(-165.50985 -212.6649)" fill="#3f3d56"/><path d="M796.80182,478.18517q-.28025-.51623-.57758-1.01489c-.00569-.01168-.01167-.01752-.01737-.02916a52.4736,52.4736,0,1,0-47.6944,78.88794c.55394.02915,1.11386.04663,1.67378.04663.23354.01168.46081.01168.69435.01168a52.10841,52.10841,0,0,0,26.6498-7.2851A52.84318,52.84318,0,0,0,797.91,526.9003c.00569-.01167.01168-.01751.01737-.02919.17515-.35.34433-.70574.5135-1.06737a52.41937,52.41937,0,0,0-1.639-47.61857Zm.50154,47.29774q-.25376.54251-.52489,1.06741a51.68613,51.68613,0,0,1-19.24807,20.89291,51.01779,51.01779,0,0,1-26.6498,7.47759c-.42607,0-.84586-.00584-1.27164-.01752q-.27128,0-.54255-.01748a51.32636,51.32636,0,1,1,45.97391-77.41807c.0057.01164.01168.01748.01737.02916.20421.33247.40243.67074.58926,1.00905a51.263,51.263,0,0,1,1.65641,46.97695Z" transform="translate(-165.50985 -212.6649)" fill="#3f3d56"/><path d="M791.22568,479.73667A6.06692,6.06692,0,0,0,787.726,478.611H764.78578a6.02524,6.02524,0,1,0,0,12.05048H787.726a5.95878,5.95878,0,0,0,1.21895-.1225,6.61944,6.61944,0,0,0,1.16655-.36747,6.02282,6.02282,0,0,0,1.11415-10.43479Z" transform="translate(-165.50985 -212.6649)" fill="#3f3d56"/><circle cx="600.80328" cy="271.97097" r="3.05895" fill="#f1f1f1"/><circle cx="610.74487" cy="271.97097" r="3.05895" fill="#f1f1f1"/><circle cx="620.68647" cy="271.97097" r="3.05895" fill="#6c63ff"/><path d="M901.40674,383.8181c-7.955,4.7708-22.128,10.74873-36.61127,4.60532l-9.36232-3.9713,18.76142-21.03134a89.60221,89.60221,0,1,1,27.21217,20.39732Z" transform="translate(-165.50985 -212.6649)" fill="#fff"/><path d="M901.45553,384.95169c-7.64392,4.4878-22.20508,10.68994-37.05054,4.39209l-10.647-4.51611,19.09448-21.4043a90.60242,90.60242,0,1,1,128.58,6.91406h0a90.19848,90.19848,0,0,1-99.97692,14.61426Zm104.74011-141.24951A88.60227,88.60227,0,1,0,874.93526,362.74906l.60425.6665-18.43115,20.66113L865.186,387.503c14.33753,6.082,28.52527-.23584,35.70643-4.54248l.46423-.27881.48706.23682a88.6021,88.6021,0,0,0,104.35193-139.21631Z" transform="translate(-165.50985 -212.6649)" fill="#6c63ff"/><path d="M1016.20873,302.66717a82.46016,82.46016,0,0,0-75.16848-82.13206c2.40185-.2104,4.83137-.32424,7.28779-.32424a82.4563,82.4563,0,0,1,0,164.91257c-2.45272,0-4.87807-.11531-7.27628-.32526A82.4602,82.4602,0,0,0,1016.20873,302.66717Z" transform="translate(-165.50985 -212.6649)" opacity="0.1" style="isolation:isolate"/><rect x="727.77166" y="73.55937" width="58.91966" height="5.47153" fill="#6c63ff"/><rect x="727.77166" y="92.48718" width="102.69201" height="5.47153" fill="#6c63ff"/><rect x="727.77166" y="111.41497" width="102.59147" height="5.47153" fill="#6c63ff"/><path d="M547.50985,685.85892h-381a1,1,0,0,1,0-2h381a1,1,0,0,1,0,2Z" transform="translate(-165.50985 -212.6649)" fill="#cbcbcb"/><path d="M400.58028,287.85538c-.82568-3.74536-3.50732-6.84851-6.59668-9.12116a27.0167,27.0167,0,0,0-34.53711,2.10022,17.64907,17.64907,0,0,0-5.334,8.5492,10.48615,10.48615,0,0,0,2.23486,9.54809l.42334.26514c-.38379-1.628.88086-3.25476,2.3916-3.973a19.10971,19.10971,0,0,1,4.87842-1.09381,17.935,17.935,0,0,0,12.15674-8.57837,20.25436,20.25436,0,0,0,11.60742,12.09656c2.80029,1.09509,10.4917,2.601,13.15772,1.21063C404.36348,297.08554,401.406,291.6008,400.58028,287.85538Z" transform="translate(-165.50985 -212.6649)" fill="#2f2e41"/></svg>
                </div>
            </div>
        </div>
    </section>

    <div class="article-back">
        <a href="/articles"><< Back</a>
    </div>

</x-article-layout>