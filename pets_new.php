<?php
/**
 * ------------------------------------------------------------------------
 *                               ADL CRM
 * ------------------------------------------------------------------------
 *
 * Copyright © 2018 ADL CRM All rights reserved.
 *
 * Unauthorised copying of this file, via any medium is strictly prohibited.
 * Unauthorised distribution of this file, via any medium is strictly prohibited.
 * Unauthorised modification of this code is strictly prohibited.
 *
 * Proprietary and confidential
 *
 * Written by michael <michael@adl-crm.uk>, 03/10/2018 13:05
 *
 * ADL CRM makes use of the following third party open sourced software/tools:
 *  DataTables - https://github.com/DataTables/DataTables
 *  EasyAutocomplete - https://github.com/pawelczak/EasyAutocomplete
 *  PHPMailer - https://github.com/PHPMailer/PHPMailer
 *  ClockPicker - https://github.com/weareoutman/clockpicker
 *  fpdf17 - http://www.fpdf.org
 *  summernote - https://github.com/summernote/summernote
 *  Font Awesome - https://github.com/FortAwesome/Font-Awesome
 *  Bootstrap - https://github.com/twbs/bootstrap
 *  jQuery UI - https://github.com/jquery/jquery-ui
 *  Google Dev Tools - https://developers.google.com
 *  Twitter API - https://developer.twitter.com
 *  Webshim - https://github.com/aFarkas/webshim/releases/latest
 *
 */


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $name = 'A dog without a name';
    }

    if (isset($_POST['breed'])) {
        $breed = $_POST['breed'];
    } else {
        $breed = '';
    }

    if (isset($_POST['weight'])) {
        $weight = $_POST['weight'];
    } else {
        $weight = '';
    }

    if (isset($_POST['bio'])) {
        $bio = $_POST['bio'];
    } else {
        $bio = '';
    }

}

require 'layout/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1>Add your Pet! Squirrel!</h1>

                <form action="" method="POST">

                    <div class="form-group">
                        <label for="pet-name" class="control-label">Pet
                            Name</label>
                        <input type="text" name="name" id="pet-name"
                               class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="pet-breed"
                               class="control-label">Breed</label>
                        <input type="text" name="breed" id="pet-breed"
                               class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="pet-weight"
                               class="control-label">Weight</label>
                        <input type="number" name="weight" id="pet-weight"
                               class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="pet-bio" class="control-label">Pet
                            Bio</label>
                        <textarea name="bio" id="pet-bio"
                                  class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-heart"></span> Add
                    </button>

                </form>

        </div>
        </div>
    </div>

<?php require 'layout/footer.php';