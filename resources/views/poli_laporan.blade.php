<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <title>Laporan Data Poli</title>

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

        .right {
            text-align: right;
        }

        .footer {
            margin-top: 30px;
            text-align: right;
        }
    </style>
</head>

<body>

    <div class="header">

        <h2>LAPORAN DATA POLI</h2>

        <p>Data Poli</p>

        <p>
            Tanggal Cetak:
            {{ now()->format('d-m-Y') }}
        </p>

    </div>

    <div class="garis"></div>

    <table>

        <thead>
            <tr>
                <th width="10%">No</th>
                <th>Nama Poli</th>
                <th width="30%">Biaya</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($poli as $item)

                <tr>
                    <td class="center">
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        {{ $item->nama }}
                    </td>

                    <td class="right">
                        Rp {{ number_format($item->biaya, 0, ',', '.') }}
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="3" class="center">
                        Tidak ada data poli.
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
