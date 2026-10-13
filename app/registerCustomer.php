<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
</head>
<body>
    <form method="post" action="customers.php" id="customerRegistration">
        <h3>Enter your Details</h3>
        <label for="name">Full name</label>
        <input type="text" name="name" id="name" required /> <br />
        <label for="nid">National Id</label>
        <input type="text" name="nid" id="nid" required /> <br />
        <label for="phone">Phone</label>
        <input type="phone" name="phone" id="phone" required /> <br />
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required /> <br />
        <label for="dob">Date of birth</label>
        <input type="date" name="dob" id="dob" required /> <br />
        <label for="pa">Physical Address</label>
        <textArea name="pa" id="pa" > </textArea> <br />
        <input type="submit" name="register" value="Submit" />


</form>
</body>
</html>