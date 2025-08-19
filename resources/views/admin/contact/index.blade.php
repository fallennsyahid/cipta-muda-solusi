<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($contacts as $contact)
        <h1>{{ $contact->full_name }}</h1>
        <h2>{{ $contact->email }}</h2>
        <h3>{{ $contact->phone_number }}</h3>
        <p>{{ $contact->message }}</p>
    @endforeach
</body>

</html>
