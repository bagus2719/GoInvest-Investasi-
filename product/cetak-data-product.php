<?php
include ('../koneksi.php');
require_once ("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM products");

$html = '<style>
            .kop-surat {
                text-align: center;
                font-family: Arial, sans-serif;
            }
            .kop-surat h2, .kop-surat h3 {
                margin: 0;
            }
            .kop-surat h2 {
                font-size: 20px;
            }
            .kop-surat h3 {
                font-size: 18px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 8px;
                text-align: left;
                font-family: Arial, sans-serif;
            }
        </style>';

$html .= '<div class="kop-surat">
            <h2>GO INVEST</h2>
            <h3>Jl. Merdeka No.123, Jember, Jawa Timur</h3>
            <p>Telepon: (021) 12345678 | Email: info@goinvest.com</p>
          </div>
          <hr/>
          <center><h3>Data Produk</h3></center>
          <table>
            <tr>
                <th>No</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Penerbit</th>
                <th>Status</th>
                <th>Deskripsi</th>
            </tr>';

$no = 1;
while ($product = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $product['kode_produk'] . "</td>
                <td>" . $product['nama_produk'] . "</td>
                <td>Rp. " . number_format($product['harga']) . "</td>
                <td>" . $product['nama_penerbit'] . "</td>
                <td>" . $product['status'] . "</td>
                <td>" . $product['deskripsi'] . "</td>
            </tr>";
}

$html .= "</table>";

$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-product.pdf');