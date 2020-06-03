<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Submit Form</title>
<link rel="stylesheet" href="scripts/css/main.css">
<script type="text/javascript" src="scripts/js/main.js"></script>
</head>
<body>

<div class="container">
    <div class="contact">
        <form id="userForm" action="users.php">
            <h3>რეგისტრაცია</h3>
            <div class="tab" id="first_tab">
                <input placeholder="სახელი" type="text" oninput="this.className = ''" name="name">
                <input placeholder="გვარი" type="text" oninput="this.className = ''" name="surname">
                <div class="wrapper">
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">შემდეგი</button>
                </div>
            </div>
            <div class="tab">
                <input placeholder="მომხმარებლის სახელი" type="text" oninput="this.className = ''" name="user_name">
                <input placeholder="პაროლი" oninput="this.className = ''" name="user_password" type="password">
                <div class="wrapper">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">უკან</button>
                    <button type="submit" id="nextBtn" onclick="nextPrev(1)">დასრულება</button>
                </div>
            </div>
            <div class="steps">
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
    </div>
</div>