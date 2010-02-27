<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>vote</title>
</head>
<body>

<form action="vote.php" method="post">
<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr>
        <td nowrap height="16">{$title}</td>
    </tr>
    <!-- {section name=q loop=$questions} -->
    <tr>
        <td><input type="radio" name="quest" value='{$questions[q]}'>{$questions[q]}</td>
    </tr>
    <!-- {/section} -->
</table>
<input type="submit" value="投票する">
</form>

</body>
</html>