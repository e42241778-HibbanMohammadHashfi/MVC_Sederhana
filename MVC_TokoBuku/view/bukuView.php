<?php
class BukuView {
    public function tampilkan($bukuList) {
        ?>
        <!DOCTYPE html>
        <html lang="id">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Daftar Buku </title>
            <style>
                body {
                    font-family: "Poppins", sans-serif;
                    background: linear-gradient(135deg, #eef2f3, #8e9eab);
                    color: #333;
                    margin: 0;
                    padding: 0;
                }
                .container {
                    max-width: 800px;
                    margin: 60px auto;
                    background: #fff;
                    padding: 30px;
                    border-radius: 16px;
                    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
                }
                h2 {
                    text-align: center;
                    color: #2c3e50;
                    margin-bottom: 25px;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                    font-size: 16px;
                }
                th, td {
                    padding: 12px 15px;
                    text-align: left;
                }
                th {
                    background-color: #34495e;
                    color: #fff;
                    text-transform: uppercase;
                }
                tr:nth-child(even) {
                    background-color: #f2f2f2;
                }
                tr:hover {
                    background-color: #e1f5fe;
                    transition: 0.2s;
                }
                footer {
                    text-align: center;
                    margin-top: 30px;
                    font-size: 14px;
                    color: #777;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h2>📚 Daftar Buku </h2>
                <table>
                    <tr>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Tahun Terbit</th>
                    </tr>
                    <?php foreach ($bukuList as $buku): ?>
                        <tr>
                            <td><?= htmlspecialchars($buku['judul']) ?></td>
                            <td><?= htmlspecialchars($buku['pengarang']) ?></td>
                            <td><?= htmlspecialchars($buku['tahun']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <footer>
                    © <?= date("Y") ?> Toko Buku Digital - Dibuat oleh Hibban Mohammad Hashfi
                </footer>
            </div>
        </body>
        </html>
        <?php
    }
}
?>
