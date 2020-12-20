<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Create a new Project</h1>
    <form  method="POST" action="/projects">

    
     {{ csrf_field() }}   {{-- ( cross-site request forgery)  are a type of malicious 
                            exploit whereby unauthorized commands are performed on behalf 
                            of an authenticated user. Laravel automatically generates a CSRF
                            "token" for each active user session managed by the application.
                            This token is used to verify that the authenticated user is the
                            one actually making the requests to the application --}}


        <div>
            <input type="text" name="title" placeholder="Project Title">
        </div>
        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>
        <div>
            <button type="submit"> Create Project</button>
        </div>
    </form>
    
</body>
</html>