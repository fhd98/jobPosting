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
                <a href="/login"><img src="assets/i/arrow_back_two.svg" class=""></a><span
                    class="text-black font-14 fontw600 text-left pl-2">Create your Account</span></div>
            
            <div class="position-fixed loader d-none w-100 h-100"><img src="assets/i/loader.svg" width="80"
                    class="mx-auto"></div>
            <div dir="ltr" class="h-100 bg-light-two py-2 z2 position-relative container">
                <form action="/signup" method="POST" dir="ltr" class="mx-540 mx-auto w-100" enctype="multipart/form-data">
                   {!! csrf_field() !!}
           <div><input type="file" id="pImageUpload"  name="picture"  multiple="" >
            </div>
                    
                   <div class="mb-4 text-center position-relative"><img src="https://tech.rozee.pk/male.jpg" width="80"
                            class="mx-auto my-0 rounded-circle"><button type="button" class="d-flex justify-content-center align-items-center editbtn 
 position-absolute font-11 text-black py-1 px-3 m-0 shadow-sm btn btn-link"><img src="assets/i/pencil_black.svg"
                                width="10" height="10" class="mr-1"></button></div>
                    <div class="mb-2"><input placeholder="Username" name="username" type="text" id="formBasicEmail"
                            class="border-0 font-12 en-input raduis-6 h45 form-control" value=""><span
                            class="text-danger"></span></div>
                    <div class="mb-2"><input placeholder="E-mail" name="Email" type="email" id="formBasicEmail"
                            class="border-0 font-12 en-input raduis-6 h45 form-control" value=""><span
                            class="text-danger"></span></div>
                    <div class="mb-2"><input placeholder="Password" name="password" type="password"
                            id="formBasicPassword" class="border-0 font-12 en-input raduis-6 h45 form-control"
                            value=""><span class="text-danger"></span></div>
                    <div class="mb-2"><input placeholder="Phone Number" name="phone" type="tel" id="formBasicEmail"
                            class="border-0 font-12 en-input raduis-6 h45 form-control" value=""><span
                            class="text-danger"></span></div>
                    <div class="d-flex align-content-center justify-content-center">
                        <div class="mb-2 p-2 text-left bg-white raduis-6 h45 flex-fill mr-2">
                            <div
                                class="radioDefault text-grey-two position-relative font-12 fontw400 pt-1 pl-4 form-check">
                                <input name="Gender" type="radio" id="genderMale" class="form-check-input"
                                    value="Male"><label title="" for="genderMale" class="form-check-label">Male</label>
                            </div>
                        </div>
                        <div class="mb-2 p-2 text-left bg-white raduis-6 h45 flex-fill">
                            <div
                                class="radioDefault text-grey-two position-relative font-12 fontw400 pt-1 pl-4 form-check">
                                <input name="Gender" type="radio" id="genderFeMale" class="form-check-input"
                                    value="Female"><label title="" for="genderFeMale"
                                    class="form-check-label">Female</label></div>
                        </div>
                    </div><span class="text-danger mt-1 mb-2"></span>
                    <div class="d-flex align-content-center justify-content-center mb-2"><select name="day"
                            class="mr-2 text-grey-two border-0 bg-white raduis-6 h45 flex-fill font-12 fontw400 form-control">
                            <option>Date</option>
                            <option value="01">1</option>
                            <option value="02">2</option>
                            <option value="03">3</option>
                            <option value="04">4</option>
                            <option value="05">5</option>
                            <option value="06">6</option>
                            <option value="07">7</option>
                            <option value="08">8</option>
                            <option value="09">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select><select name="month"
                            class="mr-2 text-grey-two border-0 bg-white raduis-6 h45 flex-fill font-12 fontw400 form-control">
                            <option value="">Month</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select><select name="year"
                            class="mr-0 text-grey-two border-0 bg-white raduis-6 h45 flex-fill font-12 fontw400 form-control">
                            <option>Year</option>
                            <option value="1921">1921</option>
                            <option value="1922">1922</option>
                            <option value="1923">1923</option>
                            <option value="1924">1924</option>
                            <option value="1925">1925</option>
                            <option value="1926">1926</option>
                            <option value="1927">1927</option>
                            <option value="1928">1928</option>
                            <option value="1929">1929</option>
                            <option value="1930">1930</option>
                            <option value="1931">1931</option>
                            <option value="1932">1932</option>
                            <option value="1933">1933</option>
                            <option value="1934">1934</option>
                            <option value="1935">1935</option>
                            <option value="1936">1936</option>
                            <option value="1937">1937</option>
                            <option value="1938">1938</option>
                            <option value="1939">1939</option>
                            <option value="1940">1940</option>
                            <option value="1941">1941</option>
                            <option value="1942">1942</option>
                            <option value="1943">1943</option>
                            <option value="1944">1944</option>
                            <option value="1945">1945</option>
                            <option value="1946">1946</option>
                            <option value="1947">1947</option>
                            <option value="1948">1948</option>
                            <option value="1949">1949</option>
                            <option value="1950">1950</option>
                            <option value="1951">1951</option>
                            <option value="1952">1952</option>
                            <option value="1953">1953</option>
                            <option value="1954">1954</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select></div><span class="text-danger"></span>
                    <div class="mb-2"><input placeholder="City" name="city" type="text" id="formBasicEmail"
                            class="border-0 font-12 en-input raduis-6 h45 form-control" value=""><span
                            class="text-danger"></span></div>
                    <div class="mb-4"><input placeholder="Address" name="Address" type="text" id="formBasicEmail"
                            class="border-0 font-12 en-input raduis-6 h45 form-control" value=""><span
                            class="text-danger"></span></div><button type="submit"
                        class="w-100 font-en font-14 fontw600 h45 raduis-6 btn btn-primary btn-lg">Register</button><small
                        class="text-muted font-12 pb-4 mt-3 text-center form-text">Do you already have an account?<a
                            class="font-14 fontw600 ml-2" href="/login">Sign in</a></small>
                </form>
            </div>
            <div class="bg-light-two position-absolute left-0 top-0 w-100 vh-100 z1 py-5"></div>
        </div>
    </div>


</body>

</html>