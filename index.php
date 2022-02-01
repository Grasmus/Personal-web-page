<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log in</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon.png">
    <link rel="stylesheet" href="styles/authorization.css">
    <script>
        if(localStorage.getItem('isDarkTheme') === 'true')
        {
            document.write('<link id="pageStyle" rel="stylesheet" href="styles/styleDark.css">');
        }
        else
        {
            document.write('<link id="pageStyle" rel="stylesheet" href="styles/styleLight.css">');
        }
    </script>
</head>
<body>
    <form id="regForm">
        <input aria-label="Login" type="text" id="login" required placeholder="Login">
        <input aria-label="Password" type="password" id="pass" required placeholder="Password">
        <button type="submit">Enter</button>
    </form>
</body>