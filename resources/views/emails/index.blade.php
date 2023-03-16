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
    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md-4 offset-md-4">
                <h2>Form sending email</h2><hr>
                <form action="{{ route('email.success') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Email From</label>
                            <input type="text" class="form-control" name="email_from" value="{{ old('email_from') }}"
                                   required="required" placeholder="Email From">
                            @error('email_from') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Email To</label>
                            <input type="text" class="form-control" name="email_to" value="{{ old('email_to') }}"
                                   required="required" placeholder="Email To">
                        @error('email_to') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="">CC</label>
                            <input type="text" class="form-control" name="email_cc" value="{{ old('email_cc') }}"
                                   placeholder="Email CC">
                        @error('email_cc') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Subject</label>
                            <input type="text" class="form-control" name="subject"  value="{{ old('subject') }}"
                                   required="required" placeholder="Email subject">
                        @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Type</label>
                        <input type="radio" name="type" value="text">Text
                        <input type="radio" name="type" value="html" required="required">Html
                        @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Message</label>
                            <textarea name="message" cols="50" rows="4" class="form-control" required="required"
                                      placeholder="Email body"></textarea>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror

                    </div>
                    <button type="submit" class="btn btn-block btn-success">Send email</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
