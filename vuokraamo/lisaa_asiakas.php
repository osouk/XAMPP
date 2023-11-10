<?php
include_once 'inc/header.php';
?>

<div class="row">
    <div class="col-8 mx-auto">
        <div class="card card-body bg-light mt-3">
            <h3>Asiakastietojen Lisääminen</h3>
            <form action="lisaa_asiakas.php" method="post">
                <div class="mb-3 row">
                    <label for="etunimi" class="col-sm-3 col-form-label ">Etunimi</label>
                    <div class="col-sm-9">¨
                        <input type="text" name="etunimi" class="form-control"
                        <?php echo (!empty($etunimiError))?'is-invalid': ''; ?>
                        value="<?php echo (!empty($etunimi)) ? $etunimi: '' ?>">
                        <?php if(!empty($etunimiError)): ?>
                            <div class="invalid_feedback">
                                <small><?php echo $etunimiError; ?></small>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit"> Tallenna</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include_once 'inc/footer.php';