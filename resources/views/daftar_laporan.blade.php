```html
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <title>Laporan Data Pendaftaran Pasien</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            color: #000;
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        .header h2 {
            margin: 0 0 5px 0;
            font-size: 18px;
        }

        .header p {
            margin: 3px 0;
        }

        .garis {
            border-bottom: 2px solid #000;
            margin: 15px 0 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px;
        }

        th {
            background-color: #343a40;
            color: white;
            text-align: center;
        }

        .center {
            text-align: center;
        }

        .footer {
            margin-top: 30px;
            text-align: right;
        }
    </style>
</head>

<body>

    <div class="header">

        <h2>LAPORAN DATA PENDAFTARAN PASIEN</h2>

        <p>Data Daftar Pasien</p>

        <p>
            Tanggal Cetak:
            {{ now()->format('d-m-Y') }}
        </p>

    </div>

    <div class="garis"></div>

    <table>

        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="16%">Nama</th>
                <th width="13%">No Pasien</th>
                <th width="12%">Jenis Kelamin</th>
                <th width="12%">Tanggal Daftar</th>
                <th width="13%">Poli</th>
                <th width="29%">Keluhan</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($daftar as $item)

                <tr>

                    <td class="center">
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        {{ $item->pasien->nama }}
                    </td>

                    <td>
                        {{ $item->pasien->no_pasien }}
                    </td>

                    <td class="center">
                        {{ $item->pasien->jenis_kelamin }}
                    </td>

                    <td class="center">
                        {{ $item->tanggal_daftar->format('d M Y') }}
                    </td>

                    <td>
                        {{ $item->poli->nama }}
                    </td>

                    <td>
                        {{ $item->keluhan }}
                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="7" class="center">
                        Data pendaftaran belum tersedia.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

    <div class="footer">

        <p>
            Dicetak pada:
            {{ now()->format('d-m-Y H:i') }}
        </p>

    </div>

</body>

</html>
```
