
<div class="col-md-8">

                <div class="leave-comment mr0"><!--leave comment-->

                    <h3 class="text-uppercase">My profile</h3>
                    <br>
                    <img src="assets/images/users/<?= !empty($data['image'])? htmlspecialchars($data['image']): "";?>" alt="" class="profile-image">
                    <form class="form-horizontal contact-form" role="form" method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Name" required
                                value="<?= !empty($data['name'])? htmlspecialchars($data['name']): "";?>"
                                >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Email" required
                                       value="<?= !empty($data['email'])? htmlspecialchars($data['email']): "";?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="password" name="password"
                                       placeholder="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
								<input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn send-btn">Update</button>

                    </form>
                </div><!--end leave comment-->
            </div>