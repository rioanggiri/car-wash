<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }}</title>
</head>

<style>
    table {
        border-collapse: collapse;
    }

    thead>tr {
        background-color: #0070C0;
        color: #f1f1f1;
    }

    thead>tr>th {
        background-color: #0070C0;
        color: #fff;
        padding: 10px;
        border-color: #fff;
    }

    th,
    td {
        padding: 2px;
    }

    th {
        color: #222;
    }

    body {
        font-family: Calibri;
    }

</style>
</head>

<body onload="window.print();">

    <table border="0" width="100%">
        <tr>
            <td align="center">

            </td>
            <td align="center">
                <b style="font-size:30px;">SEVENSYA</b> <br>
                <b style="font-size:28px;">AUTO CAR WASH</b> <br>
            </td>
            <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>

        <tr>
            <td colspan="3" align="center" style="font-size:15px;">
                Jl. Jend. Ahmad Yani No.96, RT.002/RW.001, Pulau Karam,
                <br>
                Kec. Sukajadi, Kota Pekanbaru, Riau 28127
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <hr size="0" color="black" style="margin:0px;margin-bottom:1px;">
                <hr size="2" color="black" style="margin:0px;">
            </td>
        </tr>
    </table>


    <br>
    <h2>
        <center>Rekap Data Kupon Pencucian</center>
    </h2>
    <h3>
        <center>{{ $title1 }}</center>
    </h3>
    <br>
    <table width="100%" border="1">
        <tr align="center">
            <td>No.</td>
            <td>Tanggal Cuci</td>
            <td>Nama Pelanggan</td>
            <td>No HP</td>
            <td>Jumlah Kupon</td>
        </tr>
        @foreach ($items as $no=>$item)
        <tr align="center">
            <td>{{ $no+1 }}</td>
            <td>{{ $item->wash_date }}</td>
            <td>{{ $item->user->name }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->coupon }}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>
