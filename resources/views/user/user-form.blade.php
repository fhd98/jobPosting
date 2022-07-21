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
   
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href=="{{url('assets/css/style.css')}}">
</head>

<body data-new-gr-c-s-check-loaded="14.1038.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <div class="App">
            <div dir="ltr"
                class="header-signin sticky-top bg-white d-flex align-content-center justify-content-start w-100 p-3 border-bottom">
                <a href="/register"><img src="{{url('assets/i/arrow_back_two.svg')}}" class=""></a><span
                    class="text-black font-14 fontw600 text-left pl-2">Please fill the form</span></div>
            <div class="position-fixed loader d-none w-100 h-100"><img src="{{url('assets/i/loader.svg')}}" width="80"
                    class="mx-auto"></div>
            <div dir="ltr" class=" h-100 py-4 z2  position-relative container">
                <form  action="/saveForm" method="post" enctype="multipart/form-data" class="row g-3 bg-white rounded p-5">
                                       {!! csrf_field() !!}  
                                    
                                       @if(session()->has('error'))
                                       <div class="col-md-12 mt-2">
                                           <div class="alert alert-danger"> {{$error }} </div>                                                              
                                       </div>                      
                                                                             @endif     
                    <input type='hidden' value={{$postedData['userID'] ?? ''}} name='userID'>
                                       
                    <div class="col-md-6 mt-2">
                      <label for="inputEmail4" class="form-label">Name</label>
                      <input type="text" name="name" class="form-control" id="name" value="{{$postedData['name'] ?? ''}}">
                    </div>
                                       
                    <div class="col-md-6 mt-2 ">
                        <label for="inputEmail4" class="form-label">Gender</label>
                      <div class="d-flex">
                        <div class="form-check mr-3">
                          <input type="radio" value="male" name="gender" class="form-check-input" id="inputPassword4" @if (!empty($postedData['gender']) && $postedData['gender'] == 'male') checked @endif>
                          <label for="inputPassword4" class="form-check-label">Male</label>
                      </div>
                      <div class="form-check">
                          <input type="radio" name="gender" value="female" class="form-check-input" id="inputPassword4" @if (!empty($postedData['gender']) && $postedData['gender'] == 'female') checked @endif>
                        <label for="inputPassword4" class="form-check-label">Female</label>
                       </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6 mt-2">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail4" name="email" value="{{$postedData['email'] ?? ''}}">
                    </div>
                    <div class="col-md-6 mt-2">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" class="form-control" id="inputPassword4" name="password">
                    </div>
                    <div class="col-6 mt-2">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="{{$postedData['address'] ?? ''}}">
                      
                    </div>
                    <div class="col-md-6 mt-2">
                      <label for="inputState" class="form-label">City</label>
                      <select name="city" class="form-control" id="userpic">
                        <option value="lahore" @if(!empty($postedData['city']) && $postedData['city'] == 'lahore') selected @endif>Lahore</option>
                        <option value="karachi" @if(!empty($postedData['city']) && $postedData['city'] == 'karachi') selected @endif>Karachi</option>
                        <option value="islamabad" @if(!empty($postedData['city']) && $postedData['city'] == 'islamabad') selected @endif>Islamabad</option>
                      </select>
                    </div>
                    <div class="col-md-2 mt-2">
                      <label for="inputZip" class="form-label">Picture</label>
                      <input type="file" name="picture" class="form-control" id="inputZip">
                    </div>
                    <div class="col-md-2 mt-2">
                      <label for="inputZip" class="form-label">Zip</label>
                      <input type="text" class="form-control" id="inputZip" name="zip" value="{{$postedData['zip'] ?? ''}}">
                    </div>
                    
                    
                    <div class="col-12 mt-3">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
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



