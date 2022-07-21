<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000000">
    <meta name="description" content="Web site created using create-react-app">
    <link rel="apple-touch-icon" href="/logo192.png">
    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <link rel="manifest" href="/manifest.json">
    <!--
      Notice the use of  in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <title>React App</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <link rel="stylesheet" href="assets/css/style.css">
</head>

<body data-new-gr-c-s-check-loaded="14.1038.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <div class="App">
            <div dir="ltr"
                class="header-signin sticky-top bg-white d-flex align-content-center justify-content-start w-100 p-3 border-bottom">
                <a href="/dashboard"><img src="assets/i/arrow_back_two.svg" class=""></a><span
                    class="text-black font-14 fontw600 text-left pl-2">Post Your Status</span>
            </div>
       <form action="/createpost" method="POST" dir="ltr" class="mx-540 mx-auto w-100" enctype="multipart/form-data">
                   {!! csrf_field() !!}     
            
            <div class=""><input type="file" id="pImageUpload" name="pImageUpload[]" accept="image/*" multiple="">
            </div>
            <div class="position-fixed loader d-none w-100 h-100"><img src="assets/i/loader.svg" width="80"
                    class="mx-auto"></div>
            <div class="position-relative z2">
                <div class="mx-540 px-2 container">
                    <div class="bg-white w-100 raduis-6 pt-2 mt-2">
                        <div class="d-flex justify-content-start px-2 flex-row">
                            <div class="mr-3"><img src="https://tech.rozee.pk/users/29.jpg" width="46" height="46"
                                    class="rounded-circle"></div>
                            <div
                                class="flex-fill d-flex align-items-start justify-content-center flex-column text-left">
                                <h1 class="mb-1 font-14 fontw600 text-capitalize"> Fahad Hafeez</h1>
                                <div class="privacyMenu dropdown"><button id="dropdown-basic" aria-expanded="false"
                                        type="button" class="dropdown-toggle btn btn-primary"><img
                                            src="assets/i/public.svg" width="14" class=""><span
                                            class="font-11 pl-1">Public</span></button></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12"><textarea placeholder="What’s on your mind?" rows="2" name="text"
                                    class="textareaedit border-0 my-3 form-control"></textarea></div>
                            
                                    <div><input type="file" id="pImageUpload"  name="picture"  multiple="" >
            </div>
                                    
                                    
                            <div class="px-4 mt-4 pt-2 col-12"><button  type="submit"
                                    class="w-100 raduis-3 btn40 font-14 fontw500 btn btn-primary btn-lg">Post
                                    Status</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white position-absolute left-0 top-0 w-100 vh-100 z1"></div>
        </div>
    </div>

</body>

</html>