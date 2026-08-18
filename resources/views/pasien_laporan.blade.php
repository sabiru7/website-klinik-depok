<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <title>Laporan Data Pasien</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h2 {
            margin: 0 0 5px 0;
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
            padding: 8px;
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

        <h2>LAPORAN DATA PASIEN</h2>

        <p>Data Pasien</p>

        <p>
            Tanggal Cetak:
            {{ now()->format('d-m-Y') }}
        </p>

    </div>

    <div class="garis"></div>

    <table>

        <thead>
            <tr>
                <th width="7%">No</th>
                <th width="18%">No. Pasien</th>
                <th width="25%">Nama</th>
                <th width="10%">Umur</th>
                <th width="15%">Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($pasien as $item)

                <tr>
                    <td class="center">
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        {{ $item->no_pasien }}
                    </td>

                    <td>
                        {{ $item->nama }}
                    </td>

                    <td class="center">
                        {{ $item->umur }} tahun
                    </td>

                    <td class="center">
                        {{ ucfirst($item->jenis_kelamin) }}
                    </td>

                    <td>
                        {{ $item->alamat ?? '-' }}
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="6" class="center">
                        Tidak ada data pasien.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

    <div class="footer">

        <p>
            Dicetak pada
            {{ now()->format('d-m-Y H:i') }}
        </p>

    </div>

</body>

</html>
