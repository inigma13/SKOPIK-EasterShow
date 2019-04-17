<?php
?>
<html>
<body>
<link rel="stylesheet" href="index.css">
<script>
window.fbAsyncInit = function() {
    FB.init({
            appId            : '2309654015919528',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v3.2'
        });
    };
</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=2309654015919528&autoLogAppEvents=1"></script>

    <div style="text-align: center;">
    <img src="images/background.jpg" alt="SKOPIK" class="responsive" width="1080" height="1080"><br>
    <h1>1. LIKE OUR FACEBOOK PAGE</h1>
    <div id="step1" class="center"><tr>
        <td>
            <img style="text-align: center;" alt="arrow" class="imgResponsive" src="images/leftarrow.png"/></td>
        <td style="padding-bottom: 100px">
            <div class="fb-like" data-href="https://www.facebook.com/skopiknz" data-width="600" data-layout="button"
                 data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
        </td>
        <td>
            <img style="text-align: center;" alt="arrow" class="imgResponsive" src="images/arrow.png"/>
        </td>
    </tr></div>
    <div id="step2" class="center">
       <tr><td>
                <h1 id="continue">2. </h1>
           </td>
           <td>
                   <button class="login100-form-btn" onclick="redirect()">CLICK HERE TO CONNECT</button>
       </td></tr>
    </div>


    <script>
        function redirect() {
            document.getElementById("continue").innerHTML = "Please Wait...";
            var url_string = window.location.href;
            var url = new URL(url_string);
            var macAddy = url.searchParams.get("mac");
            var ipAddy = url.searchParams.get("ip");
            window.location.href = "AuthAndRedirect.php?mac=" + macAddy + "&ip=" + ipAddy;
        }
    </script>
</div>
</body>
</html>