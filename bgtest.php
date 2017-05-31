<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body id="body">
    <div id="test">
        something here
    </div>
    <script>
    
var string = location.search;
var regexp = new RegExp(/\=(.*)/);
var gexed = (regexp.exec(string));
var bgColor = (gexed[1]);

document.getElementById("body").style.backgroundColor = bgColor;
</script>
</body>
</html>