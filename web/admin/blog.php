<div class="row">
    <div class="col-lg-12">


        <h1 class="page-header">Blog</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Gesti&oacute;n de Blog
            </div>
            <div class="panel-body">
                <button class="btn btn-success" data-toggle="modal" data-target="#modalBlog">
                    + Nuevo
                </button>
                <hr />
                <div id="blogsContent"></div>
            </div>
        </div>
    </div>
</div>


<!--  Modals-->

<div class="modal fade" id="modalBlog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <form id="frmBlog">
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="img" class="col-sm-2 col-form-label">Imagen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="img" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="imgAlt" class="col-sm-2 col-form-label">Imagen Alt</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="imgAlt" >
                        </div>
                    </div>                                        
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button id="btnSaveBlog" type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- End Modals-->
<script src="assets/scripts/blogApp.js"></script>        