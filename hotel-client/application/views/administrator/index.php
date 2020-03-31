
<div class="container" style="margin-top:20px">
    <div class="col-md-12">
    <?php if(empty($user)):?>
        <div class="alert alert-danger" role="alert">
            Data Pengunjung tidak ditemukan
        </div>
        <?php endif; ?>
        <h1 style="text-align: center; margin-bottom:30px"> Data User </h1>

        <div class="row mt-3">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Data User" name="keyword">
                        <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br><br>
        
    </div>
        <table class="table table-striped table-bordered" id="list_mhs">
        <thread>
            <tr>
            <th><center>#</center></th>
            <th><center>Username</center></th>
            <th><center>Level</center></th>
            <th><center>Status</center></th>
            <th><center>Action</center></th>
            </tr>
        </thread>
        <tbody>
            <?php
                $no=1;
                foreach ($user as $us){?>
                <tr>
                    <td> <?= $no++; ?></td>
                    <td> <?= $us['username']; ?></td>
                    <td> <?= $us['level']; ?></td>
                    <td> <?= $us['status']; ?></td>
                    <td> <a href="<?= base_url();?>administrator/hapus/<?= $us['id_user'];?>" 
                class="badge badge-danger float-right"
                onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a> 
                <a href="<?= base_url();?>administrator/edit/<?= $us['id_user'];?>"
                class="badge badge-success float-right">Edit</a>
                <a href="<?= base_url();?>administrator/detail/<?= $us['id_user'];?>"
                class="badge badge-primary float-right">Detail</a></td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
</div>
<br><br><br><br><br><br>