<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form sending email</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="alert alert-success" role="alert">
        Message Sent Successfully
    </div>
<h1>Reference Information</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Email From</th>
        <th scope="col">Email To</th>
        <th scope="col">Email CC</th>
        <th scope="col">Type</th>
        <th scope="col">Message</th>
    </tr>
    </thead>
    @foreach($mails as $mail)
        <tr>
            <td>{{$mail['email_from']}}</td>
            <td>{{$mail['email_to']}}</td>
            <td>{{$mail['email_cc']}}</td>
            <td>{{$mail['type']}}</td>
            <td>
            <iframe style="width:50%;height:100px;" srcdoc="{{$mail['message']}}">></iframe>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
