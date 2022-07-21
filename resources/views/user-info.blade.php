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
                <a href="/register"><img src="assets/i/arrow_back_two.svg" class=""></a><span
                    class="text-black font-14 fontw600 text-left pl-2">User Information</span></div>
            <div class="position-fixed loader d-none w-100 h-100"><img src="/assets/i/loader.svg" width="80"
                    class="mx-auto"></div>
            <div dir="ltr" class=" h-100 py-4 z2  position-relative container">
                <div class="row g-3 bg-white rounded p-4">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Zip</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                    @foreach ($user as  $row)    
                      <tr> 
                        <th scope="row">{{$row->userID }}</th>
                        <td> {{$row->name }}</td>
                        <td>{{$row->gender }}</td>
                        <td>{{$row->email }}.com</td>
                        <td>{{$row->password }}</td>
                        <td>{{$row->address }}</td>
                        <td>{{$row->city }}</td>
                       
                        <td>
                          <Image src="users/{{ ($row->pictureName) }}" width="40" />

                        </td>
                         <td>{{$row->zip }}</td>

                        <td> <a href={{"editForm/".$row['userID']}}> Edit </a> </td>
                        <td> <a href={{"deleteForm/".$row['userID']}}> Delete </a> </td>


                      </tr>
                      
                    @endforeach  
                    </tbody>
                  </table>
                  </div>
            </div>
            <div class="bg-light-two position-absolute left-0 top-0 w-100 vh-100 z1"></div>
        </div>
    </div>
    <!--
      This HTML file is a template.
      If you open it directly in the browser, you will see an empty page.

      You can add webfonts, meta tags, or analytics to this file.
      The build step will place the bundled scripts into the <body> tag.

      To begin the development, run `npm start` or `yarn start`.
      To create a production bundle, use `npm run build` or `yarn build`.
    -->
    <script src="/static/js/bundle.js"></script>
    <script src="/static/js/vendors~main.chunk.js"></script>
    <script src="/static/js/main.chunk.js"></script>

</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>