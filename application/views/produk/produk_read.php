<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
		<style>
    body{
        padding: 15px;
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
    }
    h2{
        color: #333333;
        text-align: center;
        margin-bottom: 20px;
    }
    table{
        width: 80%;
        margin: 0 auto;
        border-collapse: collapse;
    }
    td{
        padding: 10px;
        border: 1px solid #cccccc;
        vertical-align: top;
    }
    td:first-child{
        font-weight: bold;
        color: #666666;
        width: 30%;
    }
    td:last-child{
        text-align: right;
    }
    a{
        display: inline-block;
        padding: 10px 20px;
        background-color: #0099ff;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
    }
    a:hover{
        background-color: #0088ee;
    }
</style>
    </head>
    <body>
        <h2 style="margin-top:0px">Produk Read</h2>
        <table class="table">
	    <tr><td>Nama Produk</td><td><?php echo $nama_produk; ?></td></tr>
	    <tr><td>Id Pemilik</td><td><?php echo $id_pemilik; ?></td></tr>
	    <tr><td>Kategori</td><td><?php echo $kategori; ?></td></tr>
	    <tr><td>Deskripsi</td><td><?php echo $deskripsi; ?></td></tr>
	    <tr><td>Harga</td><td><?php echo $harga; ?></td></tr>
	    <tr><td>Qty</td><td><?php echo $qty; ?></td></tr>
	    <tr><td>Di Edit</td><td><?php echo $di_edit; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('produk') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>