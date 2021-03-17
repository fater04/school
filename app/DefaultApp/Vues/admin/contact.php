<?php
/**
 * contact.php
 * Ecole
 * @author : fater
 * @created :  9:29 AM,3/17/2021,2021
 **/
?>

<div class="row">
    <div class="col-md-12">

        <div class="iq-card">

            <div class="iq-card-body">
                <div class="iq-header-title">
                    <h4 class="card-title">Liste des Messages envoyes via le formulaire de Contact</h4>
                    <br/><br/>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr class="table-primary">
                            <th>ID</th>
                            <th>NOM</th>
                            <th>EMAIL</th>
                            <th>MESSAGE</th>
                            <th>DATE</th>
                            <?php if (\systeme\Model\Utilisateur::auth()->hasRole(\Delight\Auth\Role::SUPER_ADMIN)) { ?>
                                <th>ACTION</th>
                            <?php } ?>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        if (isset($contacts)) {
                            foreach ($contacts as $c) { ?>
                                <tr>
                                    <td><?= $c->getId(); ?></td>
                                    <td><?= $c->getNom(); ?></td>
                                    <td><?= $c->getEmail(); ?></td>
                                    <td>
                                        <a href="javascript:void(0)" data-toggle="modal"
                                           data-target="#editRowModal-<?= $c->getId() ?>">
                                            <button type="button" class="btn btn-info"><i class="fa fa-eye"></i> Voir
                                                Message
                                            </button>
                                        </a>
                                    </td>
                                    <td><?= $c->getDate(); ?></td>
                                    <div class="modal fade" id="editRowModal-<?= $c->getId() ?>" tabindex="-1"
                                         role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <form method="post">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>Message : </label>
                                                                    <textarea class="form-control" rows="5">
                                                                        <?= $c->getMessage(); ?>
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
                                    <?php if (\systeme\Model\Utilisateur::auth()->hasRole(\Delight\Auth\Role::SUPER_ADMIN)) { ?>
                                        <td>
                                            <a href="list-contact?id=<?=$c->getId()?>">
                                                <button type="button" class="btn btn-danger"><i class="fa fa-trash-alt"></i>
                                                    Supprimer
                                                </button>
                                            </a>
                                        </td>
                                    <?php } ?>
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

