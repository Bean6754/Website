<!DOCTYPE html>
<html lang="yi-YI">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <textarea id="input" rows="10" cols="60"></textarea>
    <textarea id="output" readonly rows="10" cols="60"></textarea>
    <button id="button1" onClick="function1()">Go</button>
    
    <script>
        function function1() {
            var output = raw_input.replace(/א/g, 'a'),(/א/g, 'a');
            var raw_input = document.getElementById("input").value;
            // var raw_output = raw_input;
            document.getElementById("output").innerHTML = output;
        }
    </script>
</body>
</html>
