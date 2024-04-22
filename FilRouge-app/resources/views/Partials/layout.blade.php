<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
{{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<style>
    .title {
        text-align: center;
        width: 100%;
        font-size: 16rem;
    }

    @media (max-width: 1112px) {
        .title {
            font-size: 14rem;
        }
    }

    @media (max-width: 941px) {
        .title {
            font-size: 10rem;
        }
    }

    @media (max-width: 682px) {
        .title {
            font-size: 7rem;
        }
    }

    @media (max-width: 501px) {
        .title {
            font-size: 4rem;
        }
    }
</style>
<body class="h-screen" style="background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(198,208,191,1) 0%);">


{{--</body>--}}
{{--</html>--}}
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
