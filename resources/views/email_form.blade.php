<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Send Email</h2>
        <form action="{{ route('mail.store') }}" method="POST">
            @csrf
            <div>
                <label for="to">To:</label>
                <input type="email" name="to" id="to" required>
            </div>
            <div>
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject" required>
            </div>
            <div>
                <label for="body">Body:</label>
                <textarea name="body" id="body" rows="5" required></textarea>
            </div>
            <button type="submit">Send Email</button>
        </form>
</body>
</html>