<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #8B0000 25%, transparent 25%) -50px 0,
                        linear-gradient(225deg, #e0f7fa 25%, transparent 25%) -50px 0,
                        linear-gradient(315deg, #e0f7fa 25%, transparent 25%),
                        linear-gradient(45deg, #A52A2A 25%, transparent 25%);
            background-size: 100px 100px;
            background-color: #FFE4C4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .profile-card {
            background: rgba(245, 222, 179, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 400px;
        }
        .profile-img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
            margin: 0 auto 20px;
            border: 6px solid #00bcd4;
        }
        .profile-info {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            background: #e3f2fd;
            border-radius: 8px;
            font-weight: bold;
            color: #2F4F4F;
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="profile-img" style="background-image: url('{{ asset('img/profile.jpeg') }}');"></div>
        <div class="profile-info">Nama: {{ $nama }}</div>
        <div class="profile-info">NPM: {{ $npm }}</div>
        <div class="profile-info">Kelas: {{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</div>
    </div>   

</body>
</html>
