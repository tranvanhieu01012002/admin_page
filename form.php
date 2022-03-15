<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="./insert.php" method="POST">
        <div class="form">
            <div class="title">Welcome</div>
            <div class="subtitle">Let's input your data!</div>
            <div class="input-container ic1">
                <input id="firstname" class="input" name="firstname" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="firstname" class="placeholder">First name</label>
            </div>
            <div class="input-container ic2">
                <input id="lastname" name="lastname" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="lastname" class="placeholder">Last name</label>
            </div>
            <div class="input-container ic2">
                <input id="email" name="email" class="input" type="text" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="email" class="placeholder">Email</>
            </div>
            <button type="text" class="submit">submit</button>
        </div>
    </form>
</body>

</html>