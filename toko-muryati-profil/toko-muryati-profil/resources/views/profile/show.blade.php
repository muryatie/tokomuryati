<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Toko Muryati</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; margin: 20px; background-color: #f4f4f4; color: #333; }
        .container { max-width: 700px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #333; text-align: center; }
        .profile-item { margin-bottom: 15px; }
        .profile-item strong { display: inline-block; width: 150px; color: #555; }
        .profile-item span { color: #777; }
        .logo { display: block; margin: 0 auto 20px auto; max-width: 150px; max-height: 150px; border-radius: 50%; }
        .no-profile { text-align: center; color: #999; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profil Toko</h1>

        @if($profile)
            @if($profile->logo_path)
                <img src="{{ asset('storage/' . $profile->logo_path) }}" alt="Logo Toko" class="logo">
            @endif

            <div class="profile-item">
                <strong>Nama Toko:</strong>
                <span>{{ $profile->store_name ?? 'Belum diatur' }}</span>
            </div>
            <div class="profile-item">
                <strong>Alamat:</strong>
                <span>{{ $profile->address ?? 'Belum diatur' }}</span>
            </div>
            <div class="profile-item">
                <strong>No. Telepon:</strong>
                <span>{{ $profile->phone_number ?? 'Belum diatur' }}</span>
            </div>
            <div class="profile-item">
                <strong>Email:</strong>
                <span>{{ $profile->email ?? 'Belum diatur' }}</span>
            </div>
            <div class="profile-item">
                <strong>Deskripsi:</strong>
                <span>{{ $profile->description ?? 'Belum diatur' }}</span>
            </div>
            <div class="profile-item">
                <strong>Jam Operasional:</strong>
                <span>{{ $profile->operating_hours ?? 'Belum diatur' }}</span>
            </div>
            <div class="profile-item">
                <strong>Link Google Maps:</strong>
                @if($profile->google_maps_link)
                    <span><a href="{{ $profile->google_maps_link }}" target="_blank">Lihat di Google Maps</a></span>
                @else
                    <span>Belum diatur</span>
                @endif
            </div>
        @else
            <p class="no-profile">Informasi profil toko belum tersedia.</p>
        @endif
    </div>
</body>
</html>
