<div class="col-md-8">

    <div class="leave-comment mr0"><!--leave comment-->

        <h3 class="text-uppercase">Register</h3>
        <br>
        <?= (!empty($data['authorization']['error-message'])) ? "<p class='warning-message'>" . $data['authorization']['error-message'] . " </p>" : "" ?>
        <br>
        <form class="form-horizontal contact-form" role="form" method="post" action="">
            <div class="form-group">
                <div class="col-md-12">
                    <input type="text" class="form-control" id="name" name="name"
                           placeholder="Name" value="<?= (!empty($data['name']['value'])) ?  $data['name']['value'] : "" ?>">
                    <?= (!empty($data['name']['error-message'])) ? "<p class='warning-message'>" . $data['name']['error-message'] . "</p>" : "" ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input type="email" class="form-control" id="email" name="email"
                           placeholder="Email"
                           value="<?= (!empty($data['email']['value'])) ?  $data['email']['value'] : "" ?>">
                    <?= (!empty($data['email']['error-message'])) ? "<p class='warning-message'>" . $data['email']['error-message'] . " </p>" : "" ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input type="password" class="form-control" id="password" name="password"
                           placeholder="password"
                           value="">
                    <?= (!empty($data['password']['error-message'])) ? "<p class='warning-message'>" . $data['password']['error-message'] . " </p>" : "" ?>
                </div>
            </div>
            <button type="submit" name="submit" class="btn send-btn">Register</button>

        </form>
    </div><!--end leave comment-->
</div>