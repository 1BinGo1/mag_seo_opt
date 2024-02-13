<!doctype html>
<html lang="ru">

<head>
    <meta charSet="utf-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, shrink-to-fit=no, viewport-fit=cover'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <style>
        html,
        body {
            background: #eee;
        }
    </style>
    <script src="https://yastatic.net/s3/passport-sdk/autofill/v1/sdk-suggest-with-polyfills-latest.js"></script>
</head>

<body>
<script>
    window.onload = function() {
        window.YaAuthSuggest.init({
                client_id: '0d3729b7d635429da589263f12ba5e2f',
                response_type: 'token',
                redirect_uri: 'http://localhost:8000/auth_ya_token'
            },
            'http://localhost:8000'
        )
        .then(function(result) {
            return result.handler();
        })
        .then(function(data) {
            console.log('Сообщение с токеном: ', data);
            document.body.innerHTML += `Сообщение с токеном: ${JSON.stringify(data)}`;
        })
        .catch(function(error) {
            console.log('Что-то пошло не так: ', error);
            console.log(JSON.stringify(error));
            document.body.innerHTML += `Что-то пошло не так: ${JSON.stringify(error)}`;
        });
    };
</script>
</body>

</html>
