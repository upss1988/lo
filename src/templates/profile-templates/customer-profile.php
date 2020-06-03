<div id="layoutSidenav">
    <?php include realpath('src/templates/sidebars/be-sidebar.php'); ?>
    <?php include realpath('src/templates/profile-templates/customer/forms.php'); ?>
    <?php $profile = $db->query('SELECT user_pimage, user_fname, user_phone, user_city FROM users WHERE user_name = ?', $_SESSION['user_name'])->fetchArray(); ?>
    <?php $user_pimage = !empty($profile['user_pimage']) ? 'assets/img/register-user/' . $profile['user_pimage'] : 'assets/img/register-user/avatar.png'; ?>
    <?php $user_phone = !empty($profile['user_phone']) ? $profile['user_phone'] : 'Telefon'; ?>
    <?php $user_city = !empty($profile['user_city']) ? $profile['user_city'] : 'Grad'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                <div class="container-fluid">
                    <div class="page-header-content d-inline-flex">
                        <div class="col-xs-7">
                            <img src="<?= $user_pimage ?>" class="profileImage" />
                        </div>
                        <div class="myProfilWrapper">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                                <span>Zdravo <?= $profile['user_fname'] ?></span>
                            </h1>
                            <div class="page-header-subtitle">Mesto gde možeš ažurirati svoje informacije</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-n10">
                <div class="card">
                    <div class="card-header">Dodatne informacije</div>
                    <div class="card-body">
                        <form id="phoneNumberForm" class="form-inline" method="post" enctype="multipart/form-data">
                            <div class="col mb-2">
                                <label for="phoneNumber" class="sr-only">Telefon</label>
                                <input type="text" class="form-control w-100" name="phoneNumber" id="phoneNumber" placeholder="<?= $user_phone; ?>">
                            </div>
                            <button type="submit" name="phoneNumber_submit" id="phoneNumber_submit" class="btn btn-primary mb-2 w-25">Sačuvaj</button>
                            <div id="phoneSuccess"></div>
                        </form>

                        <form id="birthForm" class="form-inline" method="post" enctype="multipart/form-data">
                            <div class="col mb-2">
                                <label for="birth" class="sr-only">Datum Rođenja</label>
                                <input type="date" class="form-control w-100" name="birth" id="birth" placeholder="Datum Rođenja">
                            </div>
                            <button type="submit" name="birth_submit" id="birth_submit" class="btn btn-primary mb-2 w-25">Sačuvaj</button>
                            <div id="birthSuccess"></div>
                        </form>

                        <form id="cityForm" class="form-inline" method="post" enctype="multipart/form-data">
                            <div class="col mb-2">
                                <label for="city" class="sr-only">Grad</label>
                                <input type="text" class="form-control w-100" name="city" id="city" placeholder="<?= $user_city ?>">
                            </div>
                            <button type="submit" name="city_submit" id="city_submit" class="btn btn-primary mb-2 w-25">Sačuvaj</button>
                            <div id="citySuccess"></div>
                        </form>

                        <form id="profileImageForm" class="form-inline" method="post" enctype="multipart/form-data">
                            <div class="col mb-2">
                                <label for="profileImage" class="sr-only">Profilna slika</label>
                                <input type="file" accept=".png, .jpg, .jpeg" class="form-control w-100" name="profileImage" id="profileImage" placeholder="Profilna Slika">
                            </div>
                            <button type="submit" name="profileImage_submit" id="profileImage_submit" class="btn btn-primary mb-2 w-25">Sačuvaj</button>
                            <div id="profileImageSuccess"></div>
                        </form>


                    </div>
                </div>
            </div>
        </main>