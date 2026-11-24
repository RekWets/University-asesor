</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; UPTT "Mario Briceño Iragorry" 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro(a) de cerrar sesión?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona el botón "Salir" para confirmar el cierre de sesión.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="?route=auth&method=logout">Salir</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="public/js/sb-admin-2.min.js"></script>
    <script src="public/js/jquery.dataTables.min.js"></script>
    <script src="public/js/dataTables.bootstrap4.min.js"></script>
    <script src="public/js/datatables-spanish.js"></script>
    <script src="public/js/student_age.js"></script>
    <script src="public/js/emp.js"></script>
    <script src="public/js/functions.js"></script>
    <script src="public/js/interactions.js"></script>
    <script src="public/js/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="public/js/sweetalert2/sweetalert2.all.js"></script>
    <script src="public/js/sweetalert2/sweetalert2.min.js"></script>
    <script src="public/js/sweetalert2/sweetalert2.js"></script>

    <script>
        $(document).ready(function () {
            $('.table').DataTable({language: translate});
        });
    </script> 
    <script>
        $(document).ready(function(e){
            $("#estado_natal_id").change(function(){
                var parametro= "id="+$("#estado_natal_id").val();
                $.ajax({
                    data: parametro,
                    url: 'app/views/students_folder/address_functions/ajax_mcpios.php',
                    type: 'post',
                    beforeSend: function () {
                        //Por si funca o no funca... 
                    },
                    success: function (response) {
                        $("#municipio_natal_id").html(response);
                    },
                    error:function() {
                        alert("Hubo un Error");
                    }
                });
            });
            $("#municipio_natal_id").change(function(){
                var parametro= "id="+$("#municipio_natal_id").val();
                $.ajax({
                    data: parametro,
                    url: 'app/views/students_folder/address_functions/ajax_prquias.php',
                    type: 'post',
                    beforeSend: function () {
                        //Por si funca o no funca...
                    },
                    success: function (response) {
                        $("#parroquia_natal_id").html(response);
                    },
                    error:function() {
                        alert("Hubo un Error");
                    }
                });
            });
        });
    </script>  
</body>

</html>