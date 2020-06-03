<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="6; URL=index.php" />
<title>Submit Form</title>
<link rel="stylesheet" href="scripts/css/main.css">
<script type="text/javascript" src="scripts/js/main.js"></script>
</head>
<body>

<div class="container">
    <div class="contact">
        <form id="userForm" action="#">
            <h3>მონაცემები</h3>
            <div id="finish" class="tab">
                <label for="fname">თქვენი სახელი: <span> <?php echo $_GET["name"]; ?> </span></label>
                <label for="lname">თქვენი გვარი: <span> <?php echo $_GET["surname"]; ?> </span></label>
                <label for="fname">მომხმარებლის სახელი: <span> <?php echo $_GET["user_name"]; ?> </span></label>
                <label for="lname">პაროლი: <span> <?php echo $_GET["user_password"]; ?> </span></label>
            </div>
        </form>
    </div>
</div>

