<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mailer</title>
    <style>
        .container{
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        form input, form textarea{
            width: 350px;
        }

        textarea{
            resize: none;
        }

        h4{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="mail.php" method="POST">
            <h4>Simple PHP Mailer</h4>
            <input type="email" name="email" placeholder="Email penerima" required><br><br>
            <input type="text" name="subject" placeholder="Subjek" required><br><br>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Pesan" required></textarea><br><br>
            <input type="submit" value="Kirim">
        </form> 
    </div>
</body>
</html>