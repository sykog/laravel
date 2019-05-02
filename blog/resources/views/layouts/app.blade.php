<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>What Kind Of Bread Are You?</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://media.istockphoto.com/vectors/slice-of-bread-icon-vector-vector-id700184364?k=6&m=700184364&s=612x612&w=0&h=AC5tnws1-W7I-ZIvbkPJQ-l76Ev1yKu5sJMKxe0NHhQ=">

    <!--Style sheets-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="laravel/blog/resources/assets/css/main.css">

    <!--Javascript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h1 class="display-4 text-light">What Kind Of Bread Are You?</h1>
</nav>

@yield('content')
</body>
</html>