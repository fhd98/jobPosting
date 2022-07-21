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
    <title>Rozee pk</title>

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
                  
            </div>
          </header>
        <div class="position-fixed loader d-none w-100 h-100">
          <img src="/assets/i/loader.svg" width="80" class="mx-auto" />
        </div>
        <div dir="ltr" class="h-100 py-4 z2 position-relative container mt-5">
            <form method="POST" action="/rozeeLogin" dir="ltr" class="mx-540 mx-auto w-100 px-3 py-4 rounded bg-white">
            {!! csrf_field() !!}
                
                <h4 class="card-title">Login</h4>
            <div class="mb-2">
              <input
                placeholder="Username"
                name="username"
                type="text"
                id="formBasicEmail"
                class="border-0 font-12 en-input raduis-6 h45 form-control"
                value=""
              /><span class="text-danger"></span>
            </div>
            <div class="mb-4">
              <input
                placeholder="Password"
                name="password"
                type="password"
                id="formBasicPassword"
                class="border-0 font-12 en-input raduis-6 h45 form-control"
                value=""
              /><span class="text-danger"></span>
            </div>
            <button
              type="submit"
              class="w-100 font-en font-14 fontw600 h45 raduis-6 btn btn-success px-4 btn-lg"
            >
              Sign in</button
            >
          </form>
        </div>
        <div
          class="bg-light-two position-absolute left-0 top-0 w-100 vh-100 z1"
        ></div>
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
  <grammarly-desktop-integration
    data-grammarly-shadow-root="true"
  ></grammarly-desktop-integration>
</html>
