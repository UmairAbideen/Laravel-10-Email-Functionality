<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Send Mail3</h1>
        <form action="{{ route('mail3') }}" method="post">
            @csrf
            <input type="file" name="file">
            <br><br>
            <input type="text" name="subject" placeholder="Subject">
            <br><br>
            <textarea name="message" id="" cols="20" rows="10" placeholder="Message..."></textarea>
            <br><br>
            <input type="email" name="mail" placeholder="mail">
            <br><br>
            <input type="submit" value="Send">
        </form>
    </center>
</body>

</html>
