@extends('layout.main')
@section('content')
<title>Biodata</title>
<style>
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    h1, h2 {
        text-align: center;
        color: #333;
    }
    .biodata {
        margin-top: 30px;
    }
    .biodata-item {
        margin-bottom: 20px;
    }
    label {
        font-weight: bold;
        color: #555;
    }
    span {
        display: inline-block;
        padding: 5px 10px;
        background-color: #f1f1f1;
        border-radius: 5px;
        color: #333;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Biodata</h1>
    <div class="biodata">
        <div class="biodata-item">
            <label>Nama:</label>
            <span>Adinda Maharani</span>
        </div>
        <div class="biodata-item">
            <label>Umur:</label>
            <span>20 tahun</span>
        </div>
        <div class="biodata-item">
            <label>Alamat:</label>
            <span>Jl. jalan kemana saja</span>
        </div>
        <div class="biodata-item">
            <label>Pendidikan Terakhir:</label>
            <span>SMA</span>
        </div>
        <div class="biodata-item">
            <label>Hobi:</label>
            <span>Menonton dan bermain hayday</span>
        </div>
    </div>
</div>
</body>
@endsection
