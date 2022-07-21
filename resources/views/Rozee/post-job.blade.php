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
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{url('assets/css/style.css')}}" />
  </head>

  <body
    data-new-gr-c-s-check-loaded="14.1038.0"
    data-gr-ext-installed=""
    cz-shortcut-listen="true"
  >
    <div id="root">
      <div class="App">
        <header
          class="sticky-top shadow-bottom navbar py-1 px-4 bg-white shadow"
        >
          <div class="w-100 p-0 d-flex justify-content-between container">
            <a href="dashboard.html"><img src="{{url('assets/i/logo.svg')}}" class="mt-0 ml-2" /></a>
            
          </div>
        </header>
        <div class="container mt-5 pb-5">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <form action="/saveJobForm" method="post" enctype="multipart/form-data" class="form-horizontal form-material mx-2 py-4">
                    {!! csrf_field() !!}  
                                    
                                       @if(session()->has('error'))
                                       <div class="col-md-12 mt-2">
                                           <div class="alert alert-danger"> {{$error }} </div>                                                              
                                       </div>    
                        @endif     
                    <input type='hidden' value={{$postedData['userID'] ?? ''}} name='userID'>                                                              
                      
                      
                      <div class="form-group">
                      <label class="col-md-12">Job Title</label>
                      <div class="col-md-12">
                        <input
                          type="text" name="title"
                          placeholder=""
                          class="form-control form-control-line"
                          value="{{$postedData['title'] ?? ''}}"
                          
                        />
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Job Description</label>
                        <div class="col-md-12">
                          
                            <input
                          type="text" name="description"
                          placeholder=""
                          class="form-control form-control-line"
                          value="{{$postedData['description'] ?? ''}}"
                          
                        />
                        </div>
                      </div>
                    <div class="form-group">
                      <label class="col-md-12">Gender</label>
                      <div class="col-md-12">

                          <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio1" name="gender" value="Male" class="custom-control-input" @if (!empty($postedData['gender']) && $postedData['gender'] == 'Male') checked @endif >
                            <label class="custom-control-label" for="customRadio1">Male</label>
                          </div>
                          <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio2" name="gender" value="Female" class="custom-control-input" @if (!empty($postedData['gender']) && $postedData['gender'] == 'Female') checked @endif >
                            <label class="custom-control-label" for="customRadio2">Female</label>
                          </div>

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Industry</label>
                      <div class="col-md-12">
                        <select  name="industry" class="custom-select form-control">
                            <option >Select</option>
                            <option value="Computer software" @if(!empty($postedData['industry']) && $postedData['industry'] == 'Computer software') selected @endif>Computer software</option>
                            <option value="Application developer" @if(!empty($postedData['industry']) && $postedData['industry'] == 'Application developer') selected @endif>Application developer</option>
                            <option value="Information security analyst" @if(!empty($postedData['industry']) && $postedData['industry'] == 'Information security analyst') selected @endif>Information security analyst</option>
                            <option value="Web developer" @if(!empty($postedData['industry']) && $postedData['industry'] == 'Web developer') selected @endif>Web developer</option>
                          </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Apply by</label>
                      <div class="col-md-12">
                        <input
                          type="date"
                          name="date"
                          value="{{$postedData['date'] ?? ''}}"
                          class="form-control form-control-line"
                        />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Skills</label>
                      <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" value="php" id="defaultCheck1" >
                            <label class="form-check-label" for="defaultCheck1">
                              PHP
                            </label>
                          </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" value="react" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                React js
                            </label>
                          </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" value="laravel" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Laravel
                            </label>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Upload full job detail</label>
                      <div class="col-md-12">
                        <div class="custom-file mb-1">
                            <input type="file" name="pdf" class="custom-file-input" id="validatedCustomFile" >
                            <label class="custom-file-label " for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Please upload file. Note: PDF only</div>
                        </div>
                        <p class="font-12">Note: PDF file only</p>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-sm-12 text-center">
                        <button class="btn btn-success text-white px-5 py-3">
                         <span class="px-5 py-3">Post a job</span>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
