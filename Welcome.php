<?php
?>
<html>
<body>
<script>
window.fbAsyncInit = function() {
    FB.init({
            appId            : '2309654015919528',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v3.2'
        });
    };
}
</script>
<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
<link rel="stylesheet" href="index.css">
<div style="text-align: center;">
    <img src="images/background.jpg" alt="SKOPIK" class="responsive" width="1080" height="1080"><br>
    <h1 id="continue" onclick="redirect()"><< CONTINUE >></h1>
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
<div class="fb-like" data-href="https://www.facebook.com/skopiknz" data-width="600" data-layout="button"
data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
</div>
</html>