<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<form action="create.php" method="post">
    <div class="container">
        <div class="form-group">
            <label for = "first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="enter your first name">
        </div>
        <div class="form-group">
            <label for = "last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="enter your last name">
        </div>
        <div class="form-group">
            <label for = "email_id">Email</label>
            <input type="email" class="form-control" id="email_id" name="email_id" placeholder="enter your email id">
        </div>
        <div class="form-group">
            <label for = "password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="enter your password">
        </div>
        <div class="form-group">
            <label for = "phone_no">Phone number</label>
            <input type="number" class="form-control" id="phone_no" name="phone_no" placeholder="enter your phone no">
        </div>
        <div class="form-group" align="center">
            <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
        </div>

    </div>
</form>


<body>
    
</body>
</html>