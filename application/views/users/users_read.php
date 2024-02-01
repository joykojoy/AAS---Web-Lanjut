<!doctype html>
<html>
    <head>
        <title>Rincian</title>
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

        </style>
    </head>
    <body>
        
        <h2 style="margin-top:0px">Users Read</h2>
        <table class="table">
	    <tr><td>Nama User</td><td><?php echo $nama_user; ?></td></tr>
	    <tr><td>User Mail</td><td><?php echo $user_mail; ?></td></tr>
	    <tr><td>No Telp</td><td><?php echo $no_telp; ?></td></tr>
	    <tr><td>Nama Lengkap</td><td><?php echo $nama_lengkap; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>No Rek</td><td><?php echo $no_rek; ?></td></tr>
	    <tr><td>Kota</td><td><?php echo $kota; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('users') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>