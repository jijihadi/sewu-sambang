<?php
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
} ?>

<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 1em, 1em, 1em;
    }

    h2 {
        text-align: center;
    }

    small {
        font-size: .8em;
        color: #525252;
    }

    #total-text {
        text-align: right;
    }

    #total-numb {
        text-align: left;
    }

</style>
<table>
    <thead>
        <tr>
            <th colspan="8">

                <h2>
                    Data Pembelian Tiket Bukit Sewu Sambang <br>
                    <small><i>per {{ tgl_indo(date('Y-m-d')) }}</i></small>
                </h2>
            </th>
        </tr>
        <tr>
            <th scope="col"><b>No</b></th>
            <!-- <th scope="col"><b>Kode</b></th> -->
            <th scope="col"><b>Customer</b></th>
            <th scope="col"><b>Tanggal Pesan</b></th>
            <th scope="col"><b>Tiket</b></th>
            <th scope="col"><b>Fasilitas</b></th>
            <th scope="col"><b>Total Bayar</b></th>
            <th scope="col"><b>Cara Bayar</b></th>
            <th scope="col"><b>Tanggal Bayar</b></th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; $ttl = 0;?>
        @foreach($pemesanan as $p)
            <tr class="text-center">
                <th scope="row">{{ $i }}</th>
                <!-- <td><b>{{ $p->kode_pembayaran }}</b></td> -->
                <td>{{ $p->nama_customer }}</td>
                <td>{{ tgl_indo(date('Y-m-d', strtotime($p->tanggal_pemesanan))) }}</td>
                <td>{{ $p->nama_tiket }}</td>
                <td>{{ $p->nama_fasilitas }}</td>
                <td>Rp.
                    {{ number_format($p->total_harga, 0, '.','.') }}
                    @php
                        $ttl += $p->total_harga;
                    @endphp
                </td>
                @if($p->metode_pembayaran=='1')
                    <td>
                        <p class="text-info">Cash</p>
                    </td>
                @elseif($p->metode_pembayaran!='1')
                    <td>
                        <p class="text-success">Transfer</p>
                    </td>
                @endif
                <td>{{ tgl_indo(date('Y-m-d', strtotime($p->tanggal_pembayaran))) }}</td>
            </tr>
            <?php $i++; ?>
            <tr>
                <th colspan="5" id="total-text">
                    Total pendapatan /{{ tgl_indo(date('Y-m-d')) }}
                </th>
                <th colspan="3" id="total-numb">
                    Rp. {{ number_format($ttl, 0, '.','.') }}
                </th>
            </tr>
        @endforeach
    </tbody>
</table>
