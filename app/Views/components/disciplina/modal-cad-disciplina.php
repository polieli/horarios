<div class="modal fade modal-xl" id="modal-cad-disciplina" tabindex="-1" aria-labelledby="ModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Cadastrar Disciplina</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form id="cadastrarDisciplina" class="forms-sample" method="post" action='<?php echo base_url('sys/disciplina/salvar'); ?>'>
                <div class="modal-body">
                    <?= csrf_field() ?>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" required
                                    id="nome" name="nome" placeholder="Digite o nome da Disciplina"
                                    value="<?php echo esc(old('nome')) ?>">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="codigo">Código</label>
                                <input type="text" class="form-control" required
                                    id="codigo" name="codigo" placeholder="Digite o codigo da Disciplina"
                                    value="<?php echo esc(old('codigo')) ?>">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="matriz">Matriz</label>
                                <select class="js-example-basic-single filtro" style="width:100%;" id="Matriz" name="matriz_id" required>
                                    <option value=""></option>
                                    <?php foreach ($matrizes as $matriz): ?>
                                        <option value="<?php echo esc($matriz['id']) ?>"><?php echo esc($matriz['nome']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="cargaHoraria">Carga Hóraria</label>
                                <input type="number" class="form-control" required
                                    id="cargaHoraria" name="ch" placeholder="Digite a Carga Hóraria da Disciplina"
                                    value="<?php echo esc(old('ch')) ?>">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="max_tempos_diarios">Tempo Máximo Diário</label>
                                <input type="number" class="form-control" required
                                    id="max_tempos_diarios" name="max_tempos_diarios" placeholder="Digite o Tempo Máximo Diário da Disciplina"
                                    value="<?php echo esc(old('ch')) ?>">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="periodo">Período</label>
                                <input type="number" class="form-control" required
                                    id="periodo" name="periodo" placeholder="Digite o periodo da Disciplina"
                                    value="<?php echo esc(old('periodo')) ?>">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="abreviatura">Abreviatura</label>
                                <input type="text" class="form-control" required
                                    id="abreviatura" name="abreviatura" placeholder="Digite o abreviatura da Disciplina"
                                    value="<?php echo esc(old('abreviatura')) ?>">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="grupo_ambiente">Grupo de Ambiente</label>
                                <select class="js-example-basic-single filtro" style="width:100%;" id="grupo_ambiente" name="grupo_de_ambientes_id">
                                    <option value=""></option>
                                    <?php foreach ($gruposAmbientes as $ga): ?>
                                        <option value="<?php echo esc($ga['id']) ?>"><?php echo esc($ga['nome']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary me-2">Salvar</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>