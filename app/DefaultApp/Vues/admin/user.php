<?php
/**
 * user.php
 * Create by fater
 * Created on 2020-07-07 - 17:57
 */
?>

<div class="row">
    <div class="col-md-12">

        <div class="iq-card">

            <div class="iq-card-body">
                <div class="iq-header-title">
                    <button class="btn btn-primary btn-round ml-auto float-right " data-toggle="modal"
                            data-target="#addRowModal">
                        <i class="fa fa-plus"></i>
                        Ajouter un utilisateur
                    </button>
                    <h4 class="card-title">Liste des Utilisateurs</h4>
                    <br/><br/>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr class="table-primary">
                            <th>Pseudo</th>
                            <th>Email</th>
                            <th>Nom Complet</th>
                            <th>Role</th>
                            <th>Statut</th>
                            <th>Last_login</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php
                        if (isset($listeutilisateur)) {
                            foreach ($listeutilisateur as $user) { ?>
                                <tr>
                                    <td><?= $user->getPseudo(); ?></td>
                                    <td><?= $user->getEmail(); ?></td>
                                    <td><?= $user->getNom(); ?>&nbsp;<?= $user->getPrenom(); ?></td>
                                    <td><?=\systeme\Model\Utilisateur::getRoleById($user->getId())?></td>
                                    <td><?php $i = $user->getStatut();
                                        if ($i == '0') {
                                            echo 'Debloquer';
                                        } else {
                                            echo 'Bloquer';
                                        } ?></td>
                                    <td><?= $user->getDerniereConnection()?></td>
                                    <td class="small">
                                        <a href="" data-toggle="modal" data-target="#editRowModal-<?= $user->getId() ?>"
                                           data-toggle="tooltip" title="Modifier Utilisateur">
                                            <button type="button" class="btn btn-info"><i class="fa fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="utilisateurs&id=<?= $user->getId() ?>" data-toggle="tooltip"
                                           title="Suprimer Utilisateur">
                                            <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                        <?php
                                        if ($i == '0') { ?>
                                            <a href="utilisateurs&id=<?= $user->getId() ?>&bq" data-toggle="tooltip"
                                               title="Bloquer Utilisateur">
                                                <button type="button" class="btn btn-warning"><i class="fa fa-lock"></i>
                                                </button>
                                            </a>
                                        <?php } else { ?>
                                            <a href="utilisateurs&id=<?= $user->getId() ?>&dbq" data-toggle="tooltip"
                                               title="Debloquer Utilisateur">
                                                <button type="button" class="btn btn-warning"><i
                                                            class="fa fa-unlock"></i></button>
                                            </a>
                                        <?php } ?>
                                    </td>
                                    <div class="modal fade" id="editRowModal-<?= $user->getId() ?>" tabindex="-1"
                                         role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header border-0">
                                                    <h2 class="modal-title">Modifier Utilisateur</h2>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>Nom Complet</label>
                                                                    <input value="<?= $user->getNom(); ?>&nbsp;<?= $user->getPrenom(); ?>"
                                                                           type="text" class="form-control"
                                                                           name="nomcomplet"
                                                                           placeholder="entrez nom complet" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Email</label>
                                                                    <input value="<?= $user->getEmail(); ?>"
                                                                           type="email"
                                                                           class="form-control" name="email"
                                                                           placeholder="entrez email" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Pseudo</label>
                                                                    <input value="<?= $user->getPseudo(); ?>"
                                                                           type="text"
                                                                           class="form-control"
                                                                           placeholder="entrez pseudo"
                                                                           name="pseudo">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>role</label>
                                                                    <select class="form-control" name="role" required>
                                                                        <option value="<?= $user->getRole(); ?>" aria-hidden="true" aria-selected=""><?= \systeme\Model\Utilisateur::getRoleById($user->getId()); ?></option>
                                                                        <?= \systeme\Model\Utilisateur::createRoles()?>
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>Mot de Passe</label>
                                                                    <input type="password" class="form-control"
                                                                           value="**********" name="password"
                                                                           placeholder="Password" required>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="modal-footer border-0">
                                                            <input type="hidden" name="edit-user"/>
                                                            <input type="hidden" name="user_id"
                                                                   value="<?= $user->getId(); ?>"/>
                                                            <input type="hidden" name="old_role"
                                                                   value="<?= $user->getRole(); ?>"/>
                                                            <button type="submit" class="btn btn-primary">Modifier
                                                            </button>
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

<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h2 class="modal-title">Ajouter Utilisateur</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Nom Complet</label>
                                <input type="text" class="form-control" name="nomcomplet"
                                       placeholder="entrez nom complet" required>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="entrez email"
                                       required>
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label>Pseudo</label>
                                <input type="text" class="form-control" placeholder="entrez pseudo" name="pseudo">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>role</label>
                                <select class="form-control" name="role" required>
                                   <?= \systeme\Model\Utilisateur::createRoles()?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                       required>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer border-0">
                        <input type="hidden" name="add-user"/>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

















