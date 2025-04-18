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
        <h1>Send Mail2</h1>
        <form action="{{ route('mail3') }}" method="post">
            @csrf

            <input type="text" name="subject" placeholder="Subject">
            <br>
            @error('subject')
                {{ $message }}
            @enderror

            <br>
            <textarea name="body" cols="20" rows="10" placeholder="Message..."></textarea>
            <br>
            @error('body')
            {{ $message }}
            @enderror

            <br>
            <input type="email" name="email" placeholder="mail">
            <br>
            @error('email')
            {{ $message }}
            @enderror

            <br>
            <input type="submit" value="Send">
        </form>
    </center>
</body>

</html>
