<div class="container-fluid mt-5 mb-5">
    <div class="row justify-content-center pb-5">
        <div class="col-lg-8 col-md-10">
            <div class="card p-4">

                <div class="row justify-content-center">
                    <div class="col-10">

                        <h4><strong>Editar agente</strong></h4>

                        <hr>

                        <form action="?ct=Admin&mt=edit_agent_submit&id=<?= encrypt($agent_data->id) ?>" method="post">

                            <div class="mb-3">
                                <label for="text_name" class="form-label">Nome do agente</label>
                                <input type="email" name="text_name" id="text_name" value="<?= $agent_data->name ?>" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="select_profile" class="form-label">Perfil</label>
                                <select name="select_profile" id="select_profile" class="form-control" required>
                                    <option value="admin" <?= $agent_data->profile == 'admin' ? 'selected' : '' ?> >Administrador</option>
                                    <option value="agent" <?= $agent_data->profile == 'agent' ? 'selected' : '' ?> >Agente</option>
                                </select>
                            </div>
                            
                            <div class="mb-3 text-center">
                                <a href="?ct=admin&mt=agents_management" class="btn btn-secondary px-4"><i class="fa-solid fa-xmark me-2"></i>Cancelar</a>
                                <button type="submit" class="btn btn-secondary px-4"><i class="fa-solid fa-pen-to-square me-2"></i>Atualizar</button>
                            </div>
                            <?php if(isset($server_error)): ?>
                            <div class="alert alert-danger p-2 text-center">
                                <?php foreach($server_error as $error): ?>
                                    <?= $error ?>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>