<!-- Modal -->
<div id="mntmantenimiento" class="modal fade basicModalLG" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="producto_form" method="POST">
                <div class="modal-header">
                    <h5 id="lbltitulo" class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <div class="modal-body">
    
                    <input type="text" name="prod_id" id="prod_id">

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Nombre del Producto -->
                            <div class="form-group">
                                <label for="prod_nom">Nombre del Producto</label>
                                <input type="text" id="prod_nom" name="prod_nom" class="form-control" required>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <!-- Precio Normal -->
                            <div class="form-group">
                                <label for="prod_precion">Precio Normal</label>
                                <input type="text" id="prod_precion" name="prod_precion" class="form-control" required>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    
    
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Precio con Descuento -->
                            <div class="form-group">
                                <label for="prod_preciod">Precio con Descuento</label>
                                <input type="text" id="prod_preciod" name="prod_preciod" class="form-control" required>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <!-- URL -->
                            <div class="form-group">
                                <label for="prod_url">URL</label>
                                <input type="text" id="prod_url" name="prod_url" class="form-control" required>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
    
                    
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Imágen -->
                            <div class="form-group">
                                <label for="prod_img">Ruta de Imágen</label>
                                <input type="text" id="prod_img" name="prod_img" class="form-control" required>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <!-- Cupon -->
                            <div class="form-group">
                                <label for="prod_cupon">Cupon</label>
                                <input type="text" id="prod_cupon" name="prod_cupon" class="form-control" required>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    
                    <!-- Descripción del Producto -->
                    <div class="form-group">
                        <label for="prod_descrip">Descripción</label>
                        <textarea id="prod_descrip" name="prod_descrip" class="form-control" row="3" required></textarea>
                    </div>
                </div>
    
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" value="add" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->