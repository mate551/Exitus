<section id="course">

    <div class="row main-container">

        <div class="col-lg-11 mx-auto accordion" id="accordion-course">

            <div class="row mt-3 page-header">

                <div class="col-11 col-lg-12 mx-auto">

                    <div class="row">

                        <h5 class="col-lg-6">Gestão dos cursos</h5>

                        <div class="col-lg-6 collapse-options-container">

                            <a class="font-weight-bold" aria-expanded="true" id="collapseListCourse" data-toggle="collapse" data-target="#list-courses">

                                <span class="mr-2"><i class="fas fa-boxes mr-2"></i> Cursos</span>

                            </a>

                            <a class="collapsed font-weight-bold" aria-expanded="false" data-toggle="collapse" data-target="#add-course">

                                <span class="mr-2"><i class="fas fa-plus-circle mr-2"></i> Adicionar</span>

                            </a>

                        </div>

                        <nav class="col-lg-12 p-0" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin/gestao">Gestão geral</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cursos</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>


            <div class="col-lg-12">

                <div class="row d-flex justify-content-between mb-3">

                    <div class="col-lg-12">

                        <div class="collapse show" id="list-courses" data-parent="#accordion-course">

                            <div class="row">
                                <div containerListCourse class="col-lg-12">
                                    <?php require '../App/Views/admin/management/components/coursesList.php' ?>
                                </div>
                            </div>
                        </div>

                        <div class="collapse" id="add-course" data-parent="#accordion-course">

                            <div class="row">

                                <div class="col-lg-12">

                                    <form id="addCourse" class="card was-validated" action="" role="form">

                                        <div class="font-weight-bold col-lg-11 mx-auto mt-3">Adicionar novo curso:</div>

                                        <div class="form-row mt-4 mb-2 col-lg-11 mx-auto">
                                            <div class="form-group col-lg-7">
                                                <label for="courseName">Nome do curso:</label>
                                                <input class="form-control is-valid" value="" type="text" name="courseName" id="courseName" required>
                                            </div>

                                            <div class="form-group col-lg-2">
                                                <label for="acronym">Sigla:</label>
                                                <input class="form-control is-valid" maxlength="4" value="" type="text" name="acronym" id="acronym" required>
                                            </div>

                                            <div class="form-group col-lg-3">
                                                <label for="">&nbsp;</label>
                                                <a id="buttonAddCourse" type="submit" class="btn btn-success w-100 text-center" href="#">Adicionar curso</a>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>