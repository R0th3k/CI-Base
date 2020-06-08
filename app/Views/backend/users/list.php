<?= $this->extend('layouts/backend') ?>

<?= $this->section('content')?>

<div class="content-header columns">

    <div class="column is-9">
        <h4 class="title is-4"><?=$title?></h4>
    </div>
    <div class="column is-3">

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
        <div class="card-filter">
            <div class="field">
                <div class="control has-icons-left has-icons-right">
                    <input
                        class="input"
                        id="table-search"
                        type="text"
                        placeholder="Buscar">
                    <span class="icon is-left">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
            </div>
            <div class="field">
                <div class="select">
                    <select id="table-length">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>
                </div>
            </div>
            <div class="field has-addons">
                <p class="control">
                    <a class="button" href="<?php echo base_url('admin/users/new'); ?>">
                        <span class="icon is-small">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span>Crear Usuario</span>
                    </a>
                </p>
                <p class="control">
                    <a class="button" id="table-reload">
                        <span class="icon is-small">
                            <i class="fa fa-refresh"></i>
                        </span>
                        <span>Actualizar</span>
                    </a>
                </p>
            </div>
        </div>
        <div class="card-content">
            <table class="table is-hoverable is-bordered is-fullwidth datatable" id="datatable">
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
                        <th class="has-text-centered">Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach($users as $user):?>
                    <tr>
                      <td><?=$user['id_user']?></td>
                      <td><avatar name="" photo="<?=$user['user_avatar']?>" desc="" size="mini"></avatar></td>
                      <td><?=$user['user_name']?></td>
                      <td><?=$user['user_lastname']?></td>
                      <td><?=$user['user_email']?></td>
                      <td><?=$user['user_phone']?></td>
                      <td>
                      <?php
                          if($user['user_role'] === 'admin'){
                            echo '<small>Admin</small>';
                          }

                          if($user['user_role'] === 'registered'){
                            echo '<small>Regístrado</small>';
                          }
                      ?>
                      </td>

                      <td class="has-text-centered">
                          <div class="field is-grouped action">
                              <p class="control">

                                        <form
                                            action="<?php echo base_url('admin/users/edit/'. $user['id_user']) ?>"
                                            method="post">
                                            <button type="submit" href="countries/edit/1.html" class="button is-rounded is-text">
                                                <span class="icon">
                                                    <i class="fa fa-edit"></i>
                                                </span>
                                            </button>
                                        </form>

                              </p>
                              <p class="control">
                                  <a class="button is-rounded is-text action-delete modal-button" data-target="modal-<?=$user['id_user']?>">
                                      <span class="icon">
                                          <i class="fa fa-trash"></i>
                                      </span>
                                  </a>
                              </p>
                          </div>
                      </td>
                  </tr>
                  <?php endforeach;?>

                </tbody>
            </table>
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

    <?= $this->section('scripts')?>
    <script>
        $(document).ready(function() {
            var table = $('#datatable').DataTable({
              "language": {
                      "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                  },
                dom: "<'columns table-wrapper'<'column is-12'tr>><'columns table-footer-wrapper'<'column is-5'i><'column is-7'p>>"
            });

            $('#table-search').on('keyup', function() {
                let value = $(this).val();
                table.search(value).draw();
            });

            $('#table-length').on('change', function() {
                let value = $(this).val();
                table.page.len(value).draw();
            });

            $('#table-reload').on('click', function() {
                table.draw();
            });
        });
    </script>

    <?= $this->endSection()?>
