<?php
$name = '';
$password = '';
$gender = '';
$color = '';
$massage_type = '';
$languages = [];
$comments = '';
$tc = '';


if (isset($_POST['submit'])) {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    };
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    };
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    };
    if (isset($_POST['color'])) {
        $color = $_POST['color'];
    };
    if (isset($_POST['languages'])) {
        $languages = $_POST['languages'];
    };
    if (isset($_POST['massage_type'])) {
        $massage_type = $_POST['massage_type'];
    };
    if (isset($_POST['comments'])) {
        $comments = $_POST['comments'];
    };
    if (isset($_POST['tc'])) {
        $tc = $_POST['tc'];
    };

    printf('Username: %s
        <br>Password: %s
        <br>Gender: %s
        <br>Color: %s
        <br>Massage Type: %s
        <br>Languages: %s
        <br>Comments: %s
        <br>Terms and Conditions: %s',
        htmlspecialchars($name, ENT_QUOTES),
        htmlspecialchars($password, ENT_QUOTES),
        htmlspecialchars($gender, ENT_QUOTES),
        htmlspecialchars($color, ENT_QUOTES),
        htmlspecialchars($massage_type, ENT_QUOTES),
        htmlspecialchars(implode('', $languages), ENT_QUOTES),
        htmlspecialchars($comments, ENT_QUOTES),
        htmlspecialchars($tc, ENT_QUOTES)
        );
}

?>


<form
    action=""
    method="post">
    Username: <input type="text" name="name"> <br/>
    Password: <input type="password" name="password"> <br/>
    Gender: <input type="radio" name="gender" value="f"> female
            <input type="radio" name="gender" value="m"> male
            <input type="radio" name="gender" value="o"> other <br/>
    Massage Type:
    <select name="massage_type">
        <option value="">Selecteer Massage</option>
        <option value="item1">Sport therapie</option>
        <option value="item2">Massage</option>
        <option value="item3">Medical taping</option>
        <option value="item4">Triggerpoint therapie</option>
        <option value="item5">ADHD</option>
        <option value="item4">Other</option>
    </select> <br>
    <select multiple name="languages[]">
        <option value="item1">one</option>
        <option value="item2">two</option>
        <option value="item2">three</option>
    </select> <br>
    Favorite Color:
    <select name="color">
        <option value="">Please select</option>
        <option value="#FF0000">red</option>
        <option value="#00FF00">green</option>
        <option value="#0000FF">blue</option>
    </select> <br>
    Comments: <textarea name="comments"></textarea> <br>
    <input type="checkbox" name="tc" value="ok">
    I accept the terms &amp; conditions <br>
    <input type="submit" name="submit" value="Register">
</form>



