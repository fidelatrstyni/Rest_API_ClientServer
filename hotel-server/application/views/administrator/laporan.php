<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Report Table</title>
    <style type="text/css">
    #outtable{
        padding: 20px;
        border:1px solid #e3e3e3;
        width:600px;
        border-radius:5px;
    }
    .short{
        width:50px;
    }
    .normal{
        width:150px;
    }
    table{
        border-collapse: collapse;
        font-family: arial;
        color: #5E5B5C;
    }
    thead th{
        text-align: left;
        padding:10px;
    }
    tbody td{
        border-top: 1px solid #e3e3e3;
        padding:10px;
    }
    tbody tr:nth-child(even){
        background: #F6F5FA;
    }
    tbody tr:hover{
        background: #EAE9F5
    }
    </style>
</head>
<body>
        <h3 style="margin-left:100px">RESERVATION DATA
        <img src="assets/img/logo.png" style="width:150px;height:75px;margin-left:50px">
        </h3>
    <div id="outtable">
    <div class="card text-center">
        <div class="card-header">
        <h5>RESERVATION DATA
        <!--img src="assets/img/logo.png" style="width:150px;height:75px;margin-left:100px"-->
        </h5>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <br><br><br><br>
            <?php foreach($reservasi as $user): ?>
            <p class="card-text">
                    <label><b>Nama : </b> <?php echo $user['nama']; ?></label> 
                   
            </p>
            <p class="card-text">
                    
                    <label><b>No. Kamar : </b><?php echo $user['no_kamar']; ?></label> 
                    
            </p>
            <p class="card-text">
                   
                   <label><b>Type : </b><?php echo $user['type']; ?></label> 
                   
           </p>
            <p class="card-text">
                   
                    <label><b>Tanggal Masuk : </b><?php echo $user['tgl_masuk']; ?></label> 
                    
            </p>
            <p class="card-text">
                   
                    <label><b>Harga : </b><?php echo $user['harga']; ?></label> 
                    
            </p>
            
            <?php endforeach; ?>
        </div>
    <div class="card-footer text-muted">
    
  </div>
</div>
<div class="card text-center">
        <div class="card-header">
        <h5>GUEST DATA
        <!--img src="assets/img/logo.png" style="width:150px;height:75px;margin-left:100px"-->
        </h5>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <br><br><br><br>
            <?php foreach($reservasi as $user): ?>
            <p class="card-text">
                    <label><b>Nama : </b> <?php echo $user['nama']; ?></label> 
                   
            </p>
            <p class="card-text">
                    
                    <label><b>Alamat : </b><?php echo $user['alamat']; ?></label> 
                    
            </p>
            <p class="card-text">
                   
                    <label><b>No Telepon : </b><?php echo $user['tlp']; ?></label> 
                    
            </p>
            <p class="card-text">
                   
                    <label><b>KTP : </b><?php echo $user['ktp']; ?></label> 
                    
            </p>
            <?php endforeach; ?>
        </div>
    <div class="card-footer text-muted">
    
  </div>
    <!--table>
            <thead>
                <tr>
                    <th class ="short">#</th>
                    <th class ="normal">Nama</th>
                    <th class ="normal">No Kamar</th>
                    <th class ="normal">Tanggal Masuk</th>
                </tr>
            </thead>
            <tbody>

                <//?php foreach($reservasi as $user): ?>
                    <tr>
                        <td><//?php echo $no; ?></td>
                        <td><//?php echo $user['nama']; ?></td>
                        <td><//?php echo $user['no_kamar']; ?></td>
                        <td><//?php echo $user['tgl_masuk']; ?></td>
                    </tr>
                <//?php $no++; ?>
                <//?php endforeach; ?>
            </tbody>
    </table>
    </div-->
</body>
</html>