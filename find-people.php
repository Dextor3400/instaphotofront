<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;1,100;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>InstaPhoto</title>
</head>

<body>
    <!---------------------------NAVIGATION--------------------------->
    <nav class="navbar navbar-expand navbar-light bg-light mb-3 border-bottom">
        <div class="container">
            <a class="navbar-brand" href="index.php">InstaPhoto</a>

            <ul class="navbar-nav mx-auto">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 form-control-sm" type="search" placeholder="Keresés"
                        aria-label="Search">
                </form>
            </ul>
            <div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">
                            <svg class="bi bi-house-door" width="1.5em" height="1.5em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                                <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="find-people.php" style="color: black;">
                            <svg class="bi bi-people-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item d-flex align-items-center  p-2">
                        <a href="#" class="notifications" style="color: black;">
                            <!-- Button trigger modal -->
                            <svg class="bi bi-heart" id="followers" data-toggle="modal" data-target="#notifications"
                                aria-haspopup="true" aria-expanded="false" width="1.5em" height="1.5em"
                                viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                            </svg>


                            <!-- Modal -->
                            <div class="modal fade" id="notifications" tabindex="-1" role="dialog"
                                aria-labelledby="notifications" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header p-2">
                                            <h5 class="modal-title" id="notifications">Értesítések</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="col pr-0">
                                                        <a href="user-profile.php">
                                                            <img height="44px" width="44" class="rounded-circle"
                                                                src="https://files.thehandbook.com/uploads/2014/10/Simon-Pegg-Mission-Impossible-Ghost-Protocol-HQH13pvRAJVl.jpg"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <div>
                                                            <span><a href="user-profile.php"
                                                                    style="color: black;">simon464</a></span>
                                                        </div>
                                                        <div>
                                                            <span class="m-0"
                                                                style="color: grey;">Elkezdett_követni</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col d-flex justify-content-end align-items-center ml-5 mr-3 ">
                                                    <a href="" class="btn btn-primary">Követem</a>
                                                </div>
                                            </div>
                                            <div class="row py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="col pr-0">
                                                        <a href="user-profile.php">
                                                            <img height="44px" width="44" class="rounded-circle"
                                                                src="https://www.datingcelebs.com/wp-content/uploads/2019/08/frost-nick-image.jpg"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <div>
                                                            <span><a href="user-profile.php"
                                                                    style="color: black;">frostnick</a></span>
                                                        </div>
                                                        <div>
                                                            <span class="m-0"
                                                                style="color: grey;">Elkezdett_követni</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col d-flex justify-content-end align-items-center mr-3">
                                                    <a href="" class="btn btn-primary">Követem</a>
                                                </div>
                                            </div>
                                            <div class="row py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="col pr-0">
                                                        <a href="user-profile.php">
                                                            <img height="44px" width="44" class="rounded-circle"
                                                                src="https://www.efp-online.com/__we_thumbs__/12018_2_shooting_50.jpg"
                                                                alt="">
                                                        </a>

                                                    </div>
                                                    <div class="col">
                                                        <div>
                                                            <span><a href="user-profile.php"
                                                                    style="color: black;">katie23</a></span>
                                                        </div>
                                                        <div>
                                                            <span class="m-0"
                                                                style="color: grey;">Elkezdett_követni</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col d-flex justify-content-end align-items-center ml-5 mr-3">
                                                    <a href="" class="btn btn-primary">Követem</a>
                                                </div>
                                            </div>
                                            <div class="row py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="col pr-0">
                                                        <a href="user-profile.php">
                                                            <img height="44px" width="44" class="rounded-circle"
                                                                src="https://www.famousbirthdays.com/faces/mr-beast-image.jpg"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <div>
                                                            <span><a href="user-profile.php"
                                                                    style="color: black;">jimmy98</a></span>
                                                        </div>
                                                        <div>
                                                            <span class="m-0"
                                                                style="color: grey;">Elkezdett_követni</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col d-flex justify-content-end align-items-center mr-3">
                                                    <a href="" class="btn btn-primary">Követem</a>
                                                </div>
                                            </div>
                                            <div class="row py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="col pr-0">
                                                        <a href="user-profile.php">
                                                            <img height="44px" width="44" class="rounded-circle"
                                                                src="https://yt3.ggpht.com/a/AATXAJzL5L3FBgoRCMQu8xu91E47QfggyLjNEafp6w=s900-c-k-c0xffffffff-no-rj-mo"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <div>
                                                            <span><a href="user-profile.php"
                                                                    style="color: black;">Joshua92</a></span>
                                                        </div>
                                                        <div>
                                                            <span class="m-0"
                                                                style="color: grey;">Elkezdett_követni</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col d-flex justify-content-end align-items-center mr-3">
                                                    <a href="" class="btn btn-primary">Követem</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">
                            <img height="24" class="rounded-circle"
                                src="/images/31820677_1996837767056360_6738977556290076672_n.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <!---------------------------NAVIGATION END--------------------------->
    <!---------------------------MAIN CONTENT--------------------------->
    <div class="container">
        <div>
            <h5>
                Felfedezés
            </h5>
            <div class="row ">
            <div class="col-md-12 col-lg mt-2">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/1.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-2">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/2.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-2">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/3.jpg"
                        alt="" srcset="">
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/4.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/5.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/6.jpg"
                        alt="" srcset="">
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/7.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/8.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/9.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="row ">
            <div class="col-md-12 col-lg mt-2">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/1.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-2">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/2.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-2">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/3.jpg"
                        alt="" srcset="">
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/4.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/5.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/6.jpg"
                        alt="" srcset="">
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/7.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/8.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/9.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="row ">
            <div class="col-md-12 col-lg mt-2">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/1.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-2">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/2.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-2">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/3.jpg"
                        alt="" srcset="">
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/4.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/5.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/6.jpg"
                        alt="" srcset="">
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/7.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/8.jpg"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="/images/other/9.jpg"
                        alt="" srcset="">
                </a>
            </div>
            
            
            
            
            
            
            
        </div>
    </div>
    <!---------------------------MAIN CONTENT END--------------------------->
    <footer>
        <div class="mt-5 text-center">
            <p><em>© 2020 INSTAPHOTO FROM LARAVEL</em></p>
        </div>
    </footer>

</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script type="text/javascript">
    $(function () {
        $('form').each(function () {
            $(this).find('input').keypress(function (e) {
                // Enter pressed?
                if (e.which == 10 || e.which == 13) {
                    this.form.submit();
                }
            });

            $(this).find('input[type=submit]').hide();
        });
    });
</script>


</html>