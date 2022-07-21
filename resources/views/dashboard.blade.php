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
            <header class="sticky-top shadow-bottom navbar 
 py-3 px-4 bg-primary">
                <div class="w-100 p-0 d-flex justify-content-start container"><button type="button"
                        class="p-0 btn btn-primary"><img src="assets/i/menu_white.svg" class=""></button><img
                        src="assets/i/logo.svg" class="mt-2 ml-2"></div>
            </header>
            <div class="mainmenu left">
                <div class="menu">
                    <div class="list-group list-group-en"><button type="button"
                            class="list-group-item list-group-item-action btn-logout btn btn-link">Logout</button></div>
                </div>
            </div>
            <div class="menu-overlay d-none"></div>
            <div class="position-relative z2">
                <div class="scrollable">
                    <div class="mx-540 bg-white pt-3 pb-4 container">
                        <div class="d-flex justify-content-start flex-row">
                            <div class="mr-3 position-relative"><img src="assets/i/male.jpg" width="68"
                                    height="68" class="rounded-circle"><button type="button" class="d-flex justify-content-center align-items-center editbtn 
 position-absolute font-11 text-black py-1 px-2 m-0 btn btn-link"><img src="assets/i/pencil_black.svg" width="10"
                                        height="10" class="mr-1"><span>Edit</span></button></div>
                            <div
                                class="flex-fill d-flex align-items-start justify-content-center flex-column text-left">
                                <h1 class="mb-0 font-16 fontw600 text-capitalize">Muhammad Saad Qadeer</h1>
                                <h3 class="font-14 fontw500 m-0">jeff heights <span
                                        class="px-1 fontw700 font-26">.</span> lahore</h3><a
                                    class="font-12 text-primary fontw500" href="/tel:03012345678">03007097302</a>
                            </div>
                        </div>
                    </div>
                    <div class="mx-540 px-2 container">
                        <div class="bg-white w-100 raduis-6 p-2 mt-2"><button type="button"
                                class="w-100 raduis-3 btn40 font-14 fontw500 btn btn-primary btn-lg"><a
                                    class="text-white" href="/create-post">Add Post</a></button></div>
                    </div>
                                          @foreach($user as $row)    

                    
                    <div class="mx-540 px-2 container">
                        <div class="bg-white w-100 raduis-6 pt-2 mt-2">
                            <div class="d-flex justify-content-start px-3 flex-row">
                                <div class="mr-3"><img src="assets/i/male.jpg" width="42" height="42"
                                        class="rounded-circle"></div>
                                <div
                                    class="flex-fill d-flex align-items-start justify-content-center flex-column text-left">
                                    <h1 class="mb-0 font-16 fontw600 text-capitalize">Muhammad Saad Qadeer</h1>
                                    <h3 class="font-12 fontw500 m-0">lahore <span class="px-2 fontw400 font-11">- 10 Nov
                                            2021 07:41 AM</span></h3>
                                </div>
                                <div class="ml-3">
                                    <button type="button" class="btn btn-link p-0 bg-transparent" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <img src="assets/i/del-black.svg" width="20" class="mt-2">
                                    </button>
                                </div>
                            </div>
                    
                            
                            <div class="w-100 px-3 my-3 row">
                                <div class="col">
                                    <p class="font-14 lh-lg fontw500 text-left  mb-0"> {{$row->content }} </p>
                                </div>
                            </div>
                            <div class="w-100 px-3 my-3 mx-0 pb-3 row">
                                <div class="col"><img src="users/{{$row->image}}" class="w-100 rounded"></div>
                            </div>
                        </div>
                    </div> 
                    
                            @endforeach
                            
                    
                        </div>

                </div>
                      
        </div>                     

            </div>

                        

            <div class="bg-light-two position-absolute left-0 top-0 w-100 h-100 z1 py-2"></div>
        </div>
    </div>


                     
    
                     
                     
                     
                     
                     
                     
                     
                     
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog d-flex align-items-center w-100 h-100">
            <div class="modal-content">
                <div class="d-flex justify-content-between align-items-center modal-header">
                    <div class="font-16 fontw600 modal-title h4">Delete Post</div>
                    <button type="button" class="btn btn-link p-0 bg-transparent"  data-dismiss="modal">
                        <img src="assets/i/cross_black.svg" class="" /></button>
                </div>
                <div class="modal-body">Are you sure you want to delete this post?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"  data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-danger">Yes</button></div>
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>