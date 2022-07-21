<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using create-react-app"
    />
    <link rel="apple-touch-icon" href="/logo192.png" />
    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <link rel="manifest" href="/manifest.json" />
    <!--
      Notice the use of  in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <title>React App</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body
    data-new-gr-c-s-check-loaded="14.1038.0"
    data-gr-ext-installed=""
    cz-shortcut-listen="true"
  >
    <div id="root">
      <div class="App">
        <header class="sticky-top shadow-bottom navbar py-1 px-4 bg-white shadow">
          <div class="w-100 p-0 d-flex justify-content-between container">
            <a href="dashboard.html"><img src="assets/i/logo.svg" class="mt-0 ml-2" /></a>
                <div>
                    <a href="rozee-login" class="btn-success rounded text-white px-4 py-2">Login</a>
                    <a href="rozee-postjob" class="btn-info rounded text-white px-4 py-2">Post a job</a>
                </div>
          </div>
        </header>
        
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="./assets/i/banner1.jpg" class="d-block w-100" alt="banner">
                      </div>
                      <div class="carousel-item">
                        <img src="./assets/i/banner2.jpg" class="d-block w-100" alt="banner">
                      </div>
                      <div class="carousel-item">
                        <img src="./assets/i/banner3.jpg" class="d-block w-100" alt="banner">
                      </div>
                    </div>
                   <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </button>
                  </div>
              </div>
          </div>
      </div>
          
          
          

      
      <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                    
                        <h4 class="card-title">Recent Jobs</h4>
                    </div>
                    <div class="comment-widgets scrollable px-3">
                        <!-- Comment Row -->
                            
                        
                        @foreach ($user as  $row)                          
    
        
                        <div class="d-flex flex-row comment-row m-t-0 bg-info rounded mb-3">

                            <div class="comment-text w-100 text-white p-3 ">
 
                                <h4 class="font-medium"> {{$row->title }} </h4>
                                <span class="m-b-15 d-block mb-2"> {{$row->description}} </span>
                                <div class="comment-footer">
                                    <span class="text-white float-end">
                                        <img src="assets/i/male.jpg" class="rounded-circle pr-1" width="30" />
                                      {{$row->gender}}
                                    </span> 
                                    <span class="text-white float-end border-left pl-2 ml-2">
                                        <strong>industry :</strong> {{$row->industry}}</span> 
                                    <span class="text-white float-end border-left pl-2 ml-2">
                                        <strong>Apply by :</strong> {{$row->date}}</span> 
                                    
                                    <span class="text-white float-end border-left pl-2 ml-2">
                                        <strong>Skills :</strong> 
                                        <span class="badge bg-success text-uppercase">{{$row->skills}}</span>
                                        
                                    
                                    </span> 
                                   
                                    <a href="users/{{ ($row->pdf) }}" target="_blank" class="btn-link rounded text-white text-decoration-undeline ml-2">Click here to view details</a>

                                    
                                <a href={{"deleteForm/".$row['userID']}}>    
                                    <Button  class="btn-danger rounded float-right mx-2">Delete</Button> </a>
                                    
                                  <a href={{"editForm/".$row['userID']}}>
                                      <Button class="btn-primary rounded float-right">Edit</Button> </a>
       

                                </div>

                        </div>

                             </div>                                                                        
                        @endforeach  


                        @if (empty($user))
                        <h2 class="bg-light p-5 text-center">No job available</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
      </div>          
       
      </div>
    </div>

   
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>


