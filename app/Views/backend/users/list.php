<?= $this->extend('layouts/backend') ?>

<?= $this->section('content')?>

<div class="content-header columns">

        <div class="column is-9">
            <h4 class="title is-4"><?=$title?></h4>
        </div>
        <div class="column is-3">
            <btn
                link="<?php echo base_url('admin/users/new'); ?>"
                c_class="is-primary"
                text="Agregar nuevo usuario"
                icon="how_to_reg"
                target=""></btn>
        </div>


</div>

<div class="content-body">

    <?php if (session('message')): ?>
    <?php
$message = session('message');
$type = session('type');?>

    <div class="notification is-<?=$type?> c-white">
        <button class="delete" onclick="this.parentElement.style.display='none'"></button>
        <?=$message?>
    </div>

    <?php endif;?>

    <div class="card">
        <div class="card-content">
            <div class="table-container">
                <table class="table is-narrow is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Foto
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Apellido
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Teléfono
                            </th>
                            <th>
                                Rol
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Foto
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Apellido
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Teléfono
                            </th>
                            <th>
                                Rol
                            </th>
                            <th></th>

                        </tr>

                    </tfoot>
                    <tbody>

                        <?php foreach($users as $user):?>
                        <tr>

                            <td title="Position"><?=$user['id_user']?></td>
                            <td title="Position">
                                <avatar name="" photo="<?=$user['user_avatar']?>" desc="" size="mini"></avatar>
                            </td>
                            <td title="Position"><?=$user['user_name']?></td>
                            <td title="Position"><?=$user['user_lastname']?></td>

                            <td title="Position">
                                <a href="mailto:<?=$user['user_email']?>"><?=$user['user_email']?></a>
                            </td>
                            <td title="Position">
                                <a href="tel:<?=$user['user_phone']?>"><?=$user['user_phone']?></a>
                            </td>

                            <td title="Position">
                                <?php
                          if($user['user_role'] === 'admin'){
                            echo '<small>Admin</small>';
                          }
                          if($user['user_role'] === 'teacher'){
                            echo '<small>Docente</small>';
                          }
                          if($user['user_role'] === 'premium'){
                            echo '<small>Premium</small>';
                          }
                          if($user['user_role'] === 'registered'){
                            echo '<small>Regístrado</small>';
                          }
                        ?>

                            </td>

                            <td title="Position">
                                <div class="buttons has-addons">
                                    <button class="button is-small is-outlined is-hidden ">Ver</button>

                                    <form
                                        action="<?php echo base_url('admin/users/edit/'. $user['id_user']) ?>"
                                        method="post">
                                        <button class="button is-small is-outlined" type="submit">Editar</button>
                                    </form>

                                    <button
                                        class="button is-small is-danger is-outlined modal-button"
                                        data-target="modal-<?=$user['id_user']?>">Borrar</button>
                                </div>
                            </td>

                        </tr>
                        <?php endforeach;?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php foreach($users as $user):?>
    <div id="modal-<?=$user['id_user']?>" class="modal modal-fx-3dRotateFromBottom">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Eliminar usuario</p>

                </header>
                <section class="modal-card-body">
                    <p class="is-size-4">¿Deseas borrar definitivamente al usuario
                        <?=$user['user_name']?>?</p>
                </section>
                <footer class="modal-card-foot">
                    <form
                        action="<?php echo base_url('admin/users/delete/' . $user['id_user']); ?>"
                        method="post">
                        <btn
                            link=""
                            c_class="is-danger is-rounded"
                            text="Sí, eliminar"
                            icon="delete_forever"
                            type="submit"></btn>
                    </form>

                    <button class="button is-rounded modal-button-close">Cancel</button>
                </footer>
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>
    <?php endforeach; ?>

</div>

<?= $this->endSection()?>
