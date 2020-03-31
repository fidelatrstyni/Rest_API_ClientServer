<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Edit Data User</div>
                <div class="card-body">
                <?php
                        if (validation_errors()) {
                            echo '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
                        }
                    ?>
                    <form action="" method="post">
                    <input type="hidden" name="id_user" value="<?= $user['id_user'];?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                            <?= form_error('nama'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tlp">Telephone</label>
                            <input type="text" class="form-control" id="tlp" name="tlp" value="<?= $user['tlp']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?= $user['password']; ?>">
                        </div>
                        <div class="form-group">
                        <label for="level">Level</label>
                            <select id="status" class="form-control" name="level">
                                <?php foreach($admin as $key): ?>
                                    <?php if($key == $user['level']):?>
                                        <option value="<?= $key ?>" selected><?= $key ?></option>
                                    <?php else :?>
                                        <option value="<?= $key ?>"><?= $key ?></option>
                                    <?php endif; ?>
                                <?php endforeach;?>
                                <!--option value="">...</option>
                                <option value="'on'">On</option>
                                <option value="'off'">Off</option-->
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="status">Status</label>
                            <select id="status" class="form-control" name="status">
                                <?php foreach($status as $key): ?>
                                    <?php if($key == $user['status']):?>
                                        <option value="<?= $key ?>" selected><?= $key ?></option>
                                    <?php else :?>
                                        <option value="<?= $key ?>"><?= $key ?></option>
                                    <?php endif; ?>
                                <?php endforeach;?>
                                <!--option value="">...</option>
                                <option value="'on'">On</option>
                                <option value="'off'">Off</option-->
                            </select>
                        </div>
                        <a href="<?= base_url(); ?>administrator" class="btn btn-danger">kembali</a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                    </form>
                </div>
        </div>
    </div>
</div>