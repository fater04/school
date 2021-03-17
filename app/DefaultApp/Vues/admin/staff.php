<?php
/**
 * staff.php
 * Ecole
 * @author : fater
 * @created :  11:24 AM,3/17/2021,2021
 **/
?>

<div class="card mb-4">
    <div class="card-header bg-white font-weight-bold">
        Ajouter Staff
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nom Complet</label>
                <input type="text" name="nomcomplet" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Poste</label>
                <input type="text" name="poste" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Image</label>
                <input type="file" name="image" class="form-control" id="exampleFormControlInput1">
            </div>

            <input type="submit" name="ajouter" value="Ajouter" class="btn btn-success "/>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="iq-card">

            <div class="iq-card-body">
                <div class="iq-header-title">
                    <h4 class="card-title">Liste des staffs</h4>
                    <br/>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr class="table-primary">
                            <th>ID</th>
                            <th>Nom Complet</th>
                            <th>Poste</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        if (isset($staffs)) {
                            foreach ($staffs as $st) { ?>
                                <tr>
                                    <td><?= $st->getId(); ?></td>
                                    <td><?= $st->getNomcomplet(); ?></td>
                                    <td><?= $st->getPoste(); ?></td>
                                    <td>
                                        <a href="javascript:void(0)" data-toggle="modal"
                                           data-target="#editRowModal-<?= $st->getId() ?>">
                                            <button type="button" class="btn btn-info"><i class="fa fa-eye"></i> Voir
                                                Image
                                            </button>
                                        </a>
                                        <?php if (\systeme\Model\Utilisateur::auth()->hasRole(\Delight\Auth\Role::SUPER_ADMIN)) { ?>
                                            <a href="list-staff?id=<?= $st->getId() ?>">
                                                <button type="button" class="btn btn-danger"><i
                                                            class="fa fa-trash-alt"></i>
                                                    Supprimer
                                                </button>
                                            </a>

                                        <?php } ?>
                                    </td>
                                    <div class="modal fade" id="editRowModal-<?= $st->getId() ?>" tabindex="-1"
                                         role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="<?= $st->getImage()?>" class="img-fluid">
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </tr>
                            <?php }
                        } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


