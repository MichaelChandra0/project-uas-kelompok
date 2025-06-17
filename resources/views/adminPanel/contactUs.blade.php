<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Data Kontak</title>
        <link rel="stylesheet" href="{{ asset('css/admin-style/contactUs.css') }}">
    </head>
    <body>
        <h1>Data Contact US</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Pesan</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $contact)
                <tr>
                    <td>{{ $contact->nama}}</td>
                    <td>{{ $contact->email}}</td>
                    <td>{{ $contact->alamat}}</td>
                    <td>{{ $contact->no_tel}}</td>
                    <td>{{ $contact->pesan}}</td>
                </tr>
                @empty
                <p>tidak ada data</p>
                @endforelse
            </tbody>
        </table>
    </body>
</html>
