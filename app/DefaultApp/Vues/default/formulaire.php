<?php
/**
 * formulaire.php
 * Ecole
 * @author : fater
 * @created :  9:01 PM,3/14/2021,2021
 **/
?>
<section id="content">

    <div class="container-fluid clearfix">
            <br>
            <h1>Formualire d'admission</h1>

        <div class="sixteen columns">
            <form action="" method="post">
                <div class="row">
                    <div class="offset-by-one  columns seven">
                        <div class="form-group">
                            <label for="last_name" class="required">Nom <span class="required">*</span></label>
                            <input size="60" maxlength="128" placeholder="Nom" class="form-control"
                                   name="nom" id="Admission_last_name" type="text">
                        </div>
                        <div class="form-group ">
                            <label for="first_name" class="required">Prenom <span class="required">*</span></label>
                            <input size="60" maxlength="128" placeholder="First name" class="form-control"
                                   name="prenom" id="Admission_first_name" type="text">
                        </div>
                        <div class="form-group ">
                            <label for="gender" class="required">Sexe <span class="required">*</span></label> <select
                                    class="form-control" name="Admission[gender]" id="Admission_gender">
                                <option value="" aria-hidden="true" hidden>Choisir sexe</option>
                                <option value="0">Masculin</option>
                                <option value="1">Féminin</option>
                            </select></div>
                        <div class="form-group">
                            <label for="blood_group">Groupe sanguin</label>
                            <select class="form-control" name="Admission[blood_group]" id="Admission_blood_group">
                                <option value="">-- Choisir group sanguin --</option>
                                <option value="1">O+</option>
                                <option value="2">O-</option>
                                <option value="3">A+</option>
                                <option value="4">A-</option>
                                <option value="5">B+</option>
                                <option value="6">B-</option>
                                <option value="7">AB+</option>
                                <option value="8">AB-</option>
                            </select></div>

                        <div class="form-group ">
                            <label for="birthday">Date de naissance</label> <input size="60"
                                                                                   style="width:100% !important"
                                                                                   placeholder="Date de naissance"
                                                                                   class="form-control hasDatepicker"
                                                                                   id="Persons_birthday" type="text"
                                                                                   name="Persons[birthday]">
                        </div>
                        <div class="form-group">
                            <label for="cities">
                                Lieu de naissance
                            </label>
                            <select class="form-control" name="Admission[cities]" id="Admission_cities">
                                <option value="">Choisir ville svp</option>
                                <option value="74">Abricots</option>
                                <option value="16">Acul-Du-Nord</option>
                                <option value="67">Anse D'Hainault</option>
                                <option value="111">Anse-A-Foleur</option>
                                <option value="35">Anse-A-Galets</option>
                                <option value="133">Anse-A-Pitre</option>
                                <option value="79">Anse-A-Veau</option>
                                <option value="48">Anse-Rouge</option>
                                <option value="113">Aquin</option>
                                <option value="28">Arcahaie</option>
                                <option value="80">Arnaud</option>
                                <option value="129">Arniquet</option>
                                <option value="14">Bahon</option>
                                <option value="103">Baie-De-Henne</option>
                                <option value="131">Bainet</option>
                                <option value="84">Baraderes</option>
                                <option value="19">Bas-Limbe</option>
                                <option value="107">Bassin Bleu</option>
                                <option value="72">Beaumont</option>
                                <option value="61">Belladere</option>
                                <option value="134">Belle-Anse</option>
                                <option value="104">Bombardopolis</option>
                                <option value="75">Bonbon</option>
                                <option value="9">Borgne</option>
                                <option value="64">Boucan-Carre</option>
                                <option value="29">Cabaret</option>
                                <option value="122">Camp-Perrin</option>
                                <option value="11">Cap-Haitien</option>
                                <option value="93">Capotille</option>
                                <option value="98">Caracol</option>
                                <option value="100">Carice</option>
                                <option value="1">Carrefour</option>
                                <option value="114">Cavaillon</option>
                                <option value="124">Cayes</option>
                                <option value="139">Cayes-Jacmel</option>
                                <option value="57">Cerca-Carvajal</option>
                                <option value="55">Cerca-La-Source</option>
                                <option value="77">Chambellan</option>
                                <option value="108">Chansolme</option>
                                <option value="126">Chantal</option>
                                <option value="116">Chardonnieres</option>
                                <option value="2">Cite-Soleil</option>
                                <option value="70">Corail</option>
                                <option value="30">Cornillon</option>
                                <option value="119">Coteaux</option>
                                <option value="132">Cotes De Fer</option>
                                <option value="31">Croix Des Bouquets</option>
                                <option value="69">Dame-Marie</option>
                                <option value="3">Delmas</option>
                                <option value="40">Desdunes</option>
                                <option value="41">Dessalines</option>
                                <option value="26">Dondon</option>
                                <option value="44">Ennery</option>
                                <option value="90">Ferrier</option>
                                <option value="86">Fonds-Des-Negres</option>
                                <option value="33">Fonds-Verrettes</option>
                                <option value="91">Fort-Liberte</option>
                                <option value="34">Ganthier</option>
                                <option value="45">Gonaives</option>
                                <option value="85">Grand-Boucan</option>
                                <option value="37">Grand-Goave</option>
                                <option value="135">Grand-Gosier</option>
                                <option value="15">Grande-Riviere Du Nord</option>
                                <option value="42">Grande-Saline</option>
                                <option value="5">Gressier</option>
                                <option value="47">Gros-Morne</option>
                                <option value="58">Hinche</option>
                                <option value="125">Ile-A-Vache</option>
                                <option value="137">Jacmel</option>
                                <option value="105">Jean Rabel</option>
                                <option value="76">Jeremie</option>
                                <option value="6">Kenscoff</option>
                                <option value="81">L'Asile</option>
                                <option value="46">L'Estere</option>
                                <option value="52">La Chapelle</option>
                                <option value="109">La Tortue</option>
                                <option value="138">La Vallee De Jacmel</option>
                                <option value="23">La Victoire</option>
                                <option value="62">Lascahobas</option>
                                <option value="38">Leogane</option>
                                <option value="117">Les Anglais</option>
                                <option value="68">Les Irois</option>
                                <option value="20">Limbe</option>
                                <option value="12">Limonade</option>
                                <option value="59">Maissade</option>
                                <option value="123">Maniche</option>
                                <option value="140">Marigot</option>
                                <option value="50">Marmelade</option>
                                <option value="17">Milot</option>
                                <option value="87">Miragoane</option>
                                <option value="65">Mirebalais</option>
                                <option value="106">Mole Saint-Nicolas</option>
                                <option value="101">Mombin Crochu</option>
                                <option value="94">Mont-Organise</option>
                                <option value="78">Moron</option>
                                <option value="95">Ouanaminthe</option>
                                <option value="88">Paillant</option>
                                <option value="92">Perches</option>
                                <option value="73">Pestel</option>
                                <option value="7">Petion-Ville</option>
                                <option value="39">Petit-Goave</option>
                                <option value="82">Petit-Trou De Nippes</option>
                                <option value="89">Petite Riviere De Nippes</option>
                                <option value="43">Petite-Riviere De L'Artibonite</option>
                                <option value="24">Pignon</option>
                                <option value="21">Pilate</option>
                                <option value="18">Plaine-Du-Nord</option>
                                <option value="22">Plaisance</option>
                                <option value="83">Plaisance Du Sud</option>
                                <option value="36">Pointe-A-Raquette</option>
                                <option value="120">Port-A-Piment</option>
                                <option value="8">Port-Au-Prince</option>
                                <option value="110">Port-De-Paix</option>
                                <option value="10">Port-Margot</option>
                                <option value="128">Port-Salut</option>
                                <option value="13">Quartier-Morin</option>
                                <option value="25">Ranquitte</option>
                                <option value="121">Roche-A-Bateau</option>
                                <option value="71">Roseaux</option>
                                <option value="130">Saint-Jean Du Sud</option>
                                <option value="112">Saint-Louis Du Nord</option>
                                <option value="115">Saint-Louis Du Sud</option>
                                <option value="53">Saint-Marc</option>
                                <option value="51">Saint-Michel De L'Attalaye</option>
                                <option value="27">Saint-Raphael</option>
                                <option value="96">Sainte-Suzanne</option>
                                <option value="66">Saut-D'Eau</option>
                                <option value="63">Savanette</option>
                                <option value="4">Tabarre</option>
                                <option value="49">Terre-Neuve</option>
                                <option value="97">Terrier-Rouge</option>
                                <option value="136">Thiotte</option>
                                <option value="56">Thomassique</option>
                                <option value="32">Thomazeau</option>
                                <option value="60">Thomonde</option>
                                <option value="118">Tiburon</option>
                                <option value="127">Torbeck</option>
                                <option value="99">Trou-Du-Nord</option>
                                <option value="102">Vallieres</option>
                                <option value="54">Verrettes</option>
                            </select></div>
                        <div class="form-group ">
                            <label for="phone">Téléphone</label> <input size="60" maxlength="45"
                                                                        placeholder="T&amp;eacutel&amp;eacutephone"
                                                                        class="form-control" name="Admission[phone]"
                                                                        id="Admission_phone" type="text"></div>
                        <div class="form-group ">
                            <label for="email" class="required">Email <span class="required">*</span></label>
                            <input size="60" maxlength="45" placeholder="Email" class="form-control"
                                   name="Admission[email]"
                                   id="Admission_email" type="text"></div>
                    </div>
                    <div class="columns seven">
                        <div class="form-group ">
                            <label for="confirm_email" class="required">Confirm Email <span
                                        class="required">*</span></label>
                            <input size="60" maxlength="45" placeholder="Confirmer Email" class="form-control"
                                   name="Admission[confirm_email]" id="Admission_confirm_email" type="text"></div>
                        <div class="form-group ">
                            <label for="adresse">Adresse</label> <input size="60" maxlength="255" placeholder="Adresse"
                                                                        class="form-control" name="Admission[adresse]"
                                                                        id="Admission_adresse" type="text"></div>
                        <div class="form-group ">
                            <label for="citizenship">Nationalité</label> <input size="60" maxlength="45"
                                                                                placeholder="Nationalité"
                                                                                class="form-control"
                                                                                name="Admission[citizenship]"
                                                                                type="text">
                        </div>
                        <div class="form-group ">
                            <label for="person_liable">Personne responsable</label><input size="60" maxlength="100"
                                                                                          placeholder="Personne responsable"
                                                                                          class="form-control"
                                                                                          name="StudentOtherInfo[person_liable]"
                                                                                          id="StudentOtherInfo_person_liable"
                                                                                          type="text"></div>

                        <div class="form-group ">
                            <label for="person_liable_phone">Téléphones responsables</label><input size="60"
                                                                                                   maxlength="65"
                                                                                                   placeholder="T&amp;eacutel&amp;eacutephones responsables"
                                                                                                   class="form-control"
                                                                                                   name="StudentOtherInfo[person_liable_phone]"
                                                                                                   id="StudentOtherInfo_person_liable_phone"
                                                                                                   type="text"></div>
                        <div class="form-group ">
                            <label for="previous_school">Etablissement précédent</label><input size="60" maxlength="255"
                                                                                               placeholder="Etablissement pr&amp;eacutec&amp;eacutedent"
                                                                                               class="form-control"
                                                                                               name="StudentOtherInfo[previous_school]"
                                                                                               id="StudentOtherInfo_previous_school"
                                                                                               type="text"></div>
                        <div class="form-group ">
                            <label for="admission_en" class="required">Admission En <span
                                        class="required">*</span></label><select class="form-control"
                                                                                 name="Admission[admission_en]"
                                                                                 id="Admission_admission_en">
                                <option value="" selected="selected"></option>
                                <option value="6">Sixième Année</option>
                                <option value="7">Septième Année</option>
                                <option value="8">Huitième Année</option>
                                <option value="9">Neuvième Année</option>
                                <option value="10">Secondaire I</option>
                                <option value="11">Secondaire II</option>
                                <option value="12">Rhéto</option>
                                <option value="13">Philo</option>
                                <option value="14">Secondaire III</option>
                                <option value="15">Secondaire IV</option>
                            </select></div>
                        <div class="form-group ">
                            <label for="religion">Religion</label>
                            <input type="text" size="60" name="religion" placeholder="Religion" class="form-control">
                        </div>
                    </div>
                    <div class="sixteen columns">


                        <div class="form-group col-md-6">
                            <label for="nom_pere_">Nom du père</label>
                            <input type="text" size="60" name="nom_pere_" placeholder="Nom du père"
                                   class="form-control">
                        </div>


                        <div class="form-group col-md-6">
                            <label for="nom_mere_">Nom de la mère</label>
                            <input size="60" type="text" name="nom_mere_" placeholder="Nom de la mère"
                                   class="form-control">
                        </div>


                        <div class="form-group col-md-6">
                            <label for="occupation">Nom Autre(s) personne responsable</label>
                            <input size="60" name="occupation" type="text" placeholder="Occupation personne responsable"
                                   class="form-control">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6" style="margin: 5px 0px">
                        <button type="submit" name="btn_save" class="glyphicon glyphicon-save btn btn-success">
                            Confirmer inscription &amp; Imprimer le formulaire
                        </button>
                    </div>


                    <div class="col-sm-12 col-md-6" style="margin: 5px 0px">
                        <button type="submit" name="btn_cancel" class="glyphicon glyphicon-trash btn btn-danger">
                            Annuler l'inscription
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>

</section>
