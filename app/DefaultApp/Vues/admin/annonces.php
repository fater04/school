<?php
/**
 * annonces.php
 * Ecole
 * @author : fater
 * @created :  10:23 AM,3/17/2021,2021
 **/
?>

<div class="card mb-4">
    <div class="card-header bg-white font-weight-bold">
        Ajouter Annonce
    </div>
    <div class="card-body">
        <form method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">TITRE</label>
                <input type="text" name="titre" class="form-control" id="exampleFormControlInput1" placeholder="mon titre 1">
            </div>
            <div class="form-group mb-1">
                <label for="editor">NOTE </label>
                <textarea class="form-control"  id="editor" name="note" ></textarea>
            </div>
            <input type="submit" name="save" value="Save" class="btn btn-success "/>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="iq-card">

            <div class="iq-card-body">
                <div class="iq-header-title">
                    <h4 class="card-title">Liste des Annonces</h4>
                    <br/>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr class="table-primary">
                            <th>ID</th>
                            <th>TITRE</th>
                            <th>DATE</th>
                            <th>ACTION</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        if (isset($annonces)) {
                            foreach ($annonces as $an) { ?>
                                <tr>
                                    <td><?= $an->getId(); ?></td>
                                    <td><?= $an->getTitre(); ?></td>
                                    <td><?= $an->getDate(); ?></td>
                                    <td>
                                        <a href="javascript:void(0)" data-toggle="modal"
                                           data-target="#editRowModal-<?= $an->getId() ?>">
                                            <button type="button" class="btn btn-info"><i class="fa fa-eye"></i> Voir
                                                Note
                                            </button>
                                        </a>
                                        <?php if (\systeme\Model\Utilisateur::auth()->hasRole(\Delight\Auth\Role::SUPER_ADMIN)) { ?>
                                            <a href="annonces?id=<?=$an->getId()?>">
                                                <button type="button" class="btn btn-danger"><i class="fa fa-trash-alt"></i>
                                                    Supprimer
                                                </button>
                                            </a>

                                    <?php } ?>
                                    </td>
                                    <div class="modal fade" id="editRowModal-<?= $an->getId() ?>" tabindex="-1"
                                         role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <form method="post">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>Note : </label>
                                                                    <textarea class="form-control" rows="5">
                                                                        <?= $an->getDescription(); ?>
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer border-0">
                                                            <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                        </div>
                                                    </form>
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


