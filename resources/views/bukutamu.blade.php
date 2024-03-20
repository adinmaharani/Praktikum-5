@extends('layout.main')
@section('content')
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Nama Buku Tamu</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
        padding: 10px;
        background-color: #f1f1f1;
        border-radius: 5px;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Daftar Nama Buku Tamu</h1>
    <ul id="guestNames"></ul>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const guestNames = [
            'Adinda Maharani',
            'Budi Santoso',
            'Citra Wijaya',
            'Dhika Pratama',
            'Elsa Permatasari'
        ];

        const guestNamesList = document.getElementById('guestNames');
        guestNames.forEach(function(name) {
            const listItem = document.createElement('li');
            listItem.textContent = name;
            guestNamesList.appendChild(listItem);
        });
    });
</script>
</body>
@endsection