<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('button').click(function() {
                $.get('test.txt', function(data, status) {
                    $("#test").html(data);
                    alert('status');
                })
            });

            $('input').keyup(function() {
                let name = $('input').val();
                $.post("suggestion.php", {
                    suggestion: name
                }, function(data, status) {
                    $("#test_post").html(data);
                })
            });
        });
    </script>
</head>

<body>
    <h2>get in ajax</h2>
    <button type="button">Click me to get data</button>
    <p id="test"></p>
    <br>
    <h2>post in ajax</h2>
    <input type="text" name='name'>
    <p id="test_post"></p>
</body>

</html>