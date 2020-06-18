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
                        <a class="nav-link" href="find-people.php">
                            <svg class="bi bi-people" width="1.5em" height="1.5em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zm7.973.056v-.002.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
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
                            <img height="24" class="border border-dark rounded-circle"
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
    <div class="container pt-5">
        <div class="row">
            <div class="col-5 text-center align-items-center">
                <a href=""><img height="200px" class="rounded-circle" src="/images/31820677_1996837767056360_6738977556290076672_n.jpg"></a>
            </div>
            <div class="col-5 mt-4">
                <div class="row d-flex align-items-center mb-3">
                    <p class="m-0 mr-3 h4">RaczIgor</p>
                    <button class="py-1 px-2 btn btn-light mr-3 border"><a href="profile-settings.php" style="color: black;">Profil Módosítása</a></button>
                   

                        <!-- Button trigger modal -->
                        <a href="" data-toggle="modal" data-target="#logout">
                            <svg class="bi bi-gear-wide nav-item" width="1.5em" height="1.5em" data-toggle="modal"
                                data-target="#logout"
                                viewBox="0 0 16 16" fill="black" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8.932.727c-.243-.97-1.62-.97-1.864 0l-.071.286a.96.96 0 0 1-1.622.434l-.205-.211c-.695-.719-1.888-.03-1.613.931l.08.284a.96.96 0 0 1-1.186 1.187l-.284-.081c-.96-.275-1.65.918-.931 1.613l.211.205a.96.96 0 0 1-.434 1.622l-.286.071c-.97.243-.97 1.62 0 1.864l.286.071a.96.96 0 0 1 .434 1.622l-.211.205c-.719.695-.03 1.888.931 1.613l.284-.08a.96.96 0 0 1 1.187 1.187l-.081.283c-.275.96.918 1.65 1.613.931l.205-.211a.96.96 0 0 1 1.622.434l.071.286c.243.97 1.62.97 1.864 0l.071-.286a.96.96 0 0 1 1.622-.434l.205.211c.695.719 1.888.03 1.613-.931l-.08-.284a.96.96 0 0 1 1.187-1.187l.283.081c.96.275 1.65-.918.931-1.613l-.211-.205a.96.96 0 0 1 .434-1.622l.286-.071c.97-.243.97-1.62 0-1.864l-.286-.071a.96.96 0 0 1-.434-1.622l.211-.205c.719-.695.03-1.888-.931-1.613l-.284.08a.96.96 0 0 1-1.187-1.186l.081-.284c.275-.96-.918-1.65-1.613-.931l-.205.211a.96.96 0 0 1-1.622-.434L8.932.727zM8 12.997a4.998 4.998 0 1 0 0-9.995 4.998 4.998 0 0 0 0 9.996z" />
                            </svg>
                        </a>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="logout" tabindex="-1" role="dialog"
                            aria-labelledby="logoutTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="logoutTitle">
                                            <a href="" style="color: black;">Kijelentkezés</a>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="row">
                    <div class="d-flex">
                        <div class="mr-4 h5">
                            103 bejegyzés
                        </div>
                        <div class="mr-4 h5">
                            <a href="" style="color: black;" data-toggle="modal" data-target="#allFollowers">196 követő</a>
                        </div>
                        <div class="modal fade" id="allFollowers" tabindex="-1" role="dialog"
                            aria-labelledby="allFollowers" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header py-2">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Követők</h5>
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
                                                       <span class="m-0" style="color: grey;">SimonPegg</span>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="col d-flex justify-content-end align-items-center ml-5 mr-3 ">
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
                                                        <span class="m-0" style="color: grey;">NickFrost</span>
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
                                                        <span class="m-0" style="color: grey;">KateAshfield</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col d-flex justify-content-end align-items-center ml-5 mr-3">
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
                                                        <span class="m-0" style="color: grey;">JimmyDonaldson</span>
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
                                                        <span class="m-0" style="color: grey;">JoshuaFluke</span>
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
                        <div class="mr-4 h5">
                            <a href="" style="color: black;" data-toggle="modal" data-target="#allFollowings">221 követés</a>
                        </div>
                        <div class="modal fade" id="allFollowings" tabindex="-1" role="dialog"
                            aria-labelledby="allFollowings" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header py-2">
                                        <h5 class="modal-title" id="allFollowings">Követések</h5>
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
                                                       <span class="m-0" style="color: grey;">SimonPegg</span>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="col d-flex justify-content-end align-items-center ml-5 mr-3 ">
                                                <a href="" class="btn btn-secondary">Követed</a>
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
                                                        <span class="m-0" style="color: grey;">NickFrost</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col d-flex justify-content-end align-items-center mr-3">
                                                <a href="" class="btn btn-secondary">Követed</a>
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
                                                        <span class="m-0" style="color: grey;">KateAshfield</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col d-flex justify-content-end align-items-center ml-5 mr-3">
                                                <a href="" class="btn btn-secondary">Követed</a>
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
                                                        <span class="m-0" style="color: grey;">JimmyDonaldson</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col d-flex justify-content-end align-items-center mr-3">
                                                <a href="" class="btn btn-secondary">Követed</a>
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
                                                        <span class="m-0" style="color: grey;">JoshuaFluke</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col d-flex justify-content-end align-items-center mr-3">
                                                <a href="" class="btn btn-secondary">Követed</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    RaczIgor
                </div>
            </div>
        </div>
        <div class="row border-top mt-5">
            <div class="mx-auto mt-2 d-flex align-items-center">
                <svg class="bi bi-grid-3x3-gap" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4 2H2v2h2V2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2H7v2h2V2zm5 0h-2v2h2V2zM4 7H2v2h2V7zm5 0H7v2h2V7zm5 0h-2v2h2V7zM4 12H2v2h2v-2zm5 0H7v2h2v-2zm5 0h-2v2h2v-2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z" />
                </svg>
                Bejegyzések
            </div>  
        </div>
        <div class="row ">
            <div class="col-md-12 col-lg mt-2">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="https://lh3.googleusercontent.com/4CK5aV0i-kCLnAMiaLXPz5AfEOj78f9ZeYPO4P8vO11WrNKr1KWcV_uJhXRvjmZHb9kttU_eYdVpfQ6hhWtxXV7HIdPDiGEdnEixx5NYgBls7tEgFJJwTgYHxSID8BBqTbCR6rfhtOpG4aWJ9NkCthDQ1hgsBiw0gjUb7DuJKEVdvVBthR79hwWJT07eEGNvUWeDKtH-gNtr47U7x5_NwhhPb6Nm6TqFpNcTmq-YaPwUYfrIflrfK7mjqLlrzigWaarKjUG8Nssgmj5L0IKsj3pO1OA1LRxyC-t3dW17zM1J4A-1IDjgxzojSPLKr1do6ek3N2PoHnxVs1vbn9EyYdtGJshzEKbefm__vC6QS3VkSIGwLn1OAt_p6Vb6lwXehC8XznkpOMQ786RNQ3hTIU66LwOUCSmkvt8S-LwYMVZjRCP-CmEsq3bAUeAEGWt4FwMX8GavlAwO05XrVtlcb4A_HkwNNKwSU97V9uytvOkWm3B_CPMTdCnz6kav5LRBUeOnzx5lx_2RMq9-GnjRYg1aRYGxoDHcYqHbsV_l6kriGZx_o2m0EYJW6V5XSAj3kSVWEe0t27IN-5SjH5mUKjgMU1GYwM0YTmftXcbBAtQrgzIkY8GgSkd-OzLFQIQnmFCae8ftGvSqH2467F-RltvBC0XY9xQn9LgT495H5Gf4hNBRkEtGQ6gud2bB8A=w1204-h903-no?authuser=0"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-2">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="https://lh3.googleusercontent.com/qhxsj0ApHulj4olE3WqI7tqb6t3HWKulQnFpR_-_ur86JQXMxXKN8yRA2cJ2CxDXJr7fK9OyA1fxqy15fDLa7G1Hy7b-t2fGaJbkvpgM40-GoXskvX3M_Y7f97vOA9v4unzUidyYxZe8qFeJ_xldZ3kjIdtLmC3deNEPrLpIRVxHxh_b3pLrOivENrgOAl0orridyS9wbCADMFNhongQEJn9tzrNRUptE-N_GOMcqzPEmfM93T8IBYqBJ9wQkHwDr_X84Yl5DyTzIlzQKhNhSpPRV5PH_D0REb_cKOyCpIRgICmlnPeZ0Z1GMaP-5eCZscqsOZWmu_s2QhHN-DrJ8J7l7DwlcFjtxENJ3gSfNsGXEraVqDW_Jc07Es7a4w2WKyjTvIS2Xzu67Nq4dmlTZv-otmn9h1SFyY1vamjr275f14REC_5KbLHpIupMuKez6z3azmn-YTWHfUC7rMGH0eb5buL7e_wWLInUaAHKbDFLjRtM_keDgjoQ2TeDnOQO7cTCFv1gNNnnTpfvbqJmDxUGTw2FYi1itemm36j3WyjJv3RndyKjNwryscE94apJXSoImSnbXhxl_YbbAYF3I48PjFL7ruqSJUTRKPCrUG5ynrzB9UHIwp91FckOeVGK7_31v2cQkFSu7LjdyCTP9j4Pt4hK2IKZ7vuD9YG_cieo53n8BvCz4z8hP5SvGQ=w1204-h903-no?authuser=0"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-2">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="https://lh3.googleusercontent.com/_jpEJPJsJZWVH9SkRnJGAg_JbY1Xm54MM2Ruza3EDo4IdOuvYrcFxj-pdWvCkk897S4CCgQHgnuWyxJB8M0hMBy9EWcC3Qcj8RoILFLpZiegocoa_T-yk9k7OMjhU89P87gVBuTWUUfA9JB3dWMcgmrEchICS16ldcg1ydtdBEX_ZKKctoL-g1S8uFQUWYSKp4rvMnIQetWlrqG_VbNpq71HvtK7RaMuM2KQijuF6XQWmbQpxsrXBlmgZinj-YxLEzrzoKLf2Tf_Zn1rWoU-zixYapcnA25ZDSeu-W0Kaxpbg8fi8yDq04JxYXVomHt0fBGMCOhPS5RacjEADKdX0X75bk6PRFhLCcAOr9b5IkCwBJkB6FI98PqQOk6eJigjLdHgP6yGp-r21oWEec5TiwKIijT8G0KpGkooyCCwd3R9x26E1ZfWutmYKfP1sdV7GV9La7-dTimZMr5YVr6A06z3nJbOZU2oAxPOuqF9pwD99IALNOuebAKVNGvpoIeYSK9AKNDpiBtetl375oy7n9QDZgosjybw-xB2yhvyOwGo0R1tfAAxBiSMEBbSWFsuvbjV0F2rixOZZEV_mdjEKVj1nneUX3uJlbXP7HiGHD4JS5ilkuJLPtjIlen8Y5P4mWd18vZ66lSOm2mDR-pozVSOonrYSkcpLNOdAplkZG_2f02CcNltpHQc1hFAtg=w1204-h903-no?authuser=0"
                        alt="" srcset="">
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="https://lh3.googleusercontent.com/DBDDIdusPNmnne5powkBYgHWm_L66g0cMO7xcrNDbtjYLC5nsNTz6oXJVM0cWgynPiRArOvK1VidBKP4BhxxEF31cCLTJP3uz2Cc69bMjwPLZBZoHosp1_9ec9afFmlF5WjJUVDqbv0TOH7-EnQ2jp5uGWSGXBqnrgHD8IJJ8QQWWSmxOhhVK0wa9lXogdbfm93X8Ni_HYLXBcZPKYMwaIj31_o_RCLCSJ_-S9N_ZhYekVJYW-bU5GISb8Xu-8UwmzW6ik-rJI7Jl5lVFT6zARtF-7zG47eUICVQPa3Akt1bzA3zNuwX113M6rq5h4QGqIw7tuIqKFSgW4b0Juxf2t38xG66QK1pnJHS2iEEykvnUXQx12G7GNLw-dKuGR8FDD_j-KxQZIBpfw8-KwKYQPyq-vg48Z3CjcPt2oT-e9hmIQwaKbgD9o8r1djaAc5H6wHIoyoyCg4QZlRViQiP9mu6IZjeQaH9XmieKQ2cV7EIOm69EoP9TdoN-X0zhONnrsi8sy4JXpl0f2SwdNCjZMi3k6TUTAQXT4on1ZAq_chlxa1AxUy4cZX4jZLgkr_7e2s73XYsuAiVKJ-R2Dgx18LwrTpfFSUD0iRyYoT0yWEqtzEMI24suyCuy6NiyWUtcMilzk44XmfCBc6AzNzaD_yALBk4iW5U0qlDH-M5xe6d_EBpBCCv9FIBTqqt9g=w1204-h903-no?authuser=0"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="https://lh3.googleusercontent.com/T1x1g2I3fpxfyPAWnbBMR-UnqW3CMSoBswynavpHrgxhj5-24cyJFohN-UvgHW9eIj81noYAbGOQx4-yVANnk-p8jduEw5i4SLbMlKuX9zxpLg_cHMHhjMe859RAGnKm8glHx06wuSsObsxkO_u8vpI-lPZZIG0sZt_Sko5HX6K2jDeRoxmhjMWKn1P50oY-3x52-GV2SEe2zpGwvrefY-Jfr5Wuf08rvndQ1qYmKD8CDUxcpYHYHy0762fmhZMKL82XuHtA9me-K8cqZdxErTnO63xb0TxAl7uSivTrxFjaL4cFM79fI3mM3SJWL7n3ne1TOKTRl6HCko5R14CePcn-lbBMTAwl3ctDxFxHhvf_rc7g7L8wBS0HomVayFDNewYx6DHZBxjfIWIh1AN5xyzaFp82RPEFUBtEgUENVnw9Cbz5yuqQoYT1ISPofUTPRK_Jika1qMXtIRCu31s7H-9mAA8S1QRwuTG0y1pBNXVNKO9Ylck28jkp3eOIwqtuKxGjSnUZ4iy11kj_Rxy0St3f8IW9Ey9TrBrAzfmLX1XWg-ENOB_CdNOe5Fw_94Vh-zXS2ZRUJGfEb2S5Hfl-Ret8YQhlG8cL0oY3jbd-OV-zuN0siNqFmM7zrsr6FxkMTtgzK2fh0IsdwYRIcJMXwrlpRt-qbvgg6zfewIzh3a58P9wMW7JFnpTkp610Vg=w1204-h903-no?authuser=0"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="https://lh3.googleusercontent.com/Xo8NzG8Y62WRxm0bRQpEMJEvFXoWm2E_usiBzKuzBN-5tBDAqxNZkRVtaTadl4kq3VOoLHDtbbhfp_VDua8CFhJXQJsCO71fg_tSBDjLZQeOhcTpJp9l3yvT2JgtVS6XQzcX0-EASvVUfX11EsDIHsreumX6oQdo8GL593xnogxbZBLr8cAMwOwUjhI7IzFl4Lu_JTwb8ImIzq2Uji8NR6xt-WjxzFjcCiJB1e83qeTBJJEAeTFzru2BpmNdGnL6h1ckzIrg6iphkdmgkvEqSnAG-9k8jM4j8p-Q7RMuaU2KqhaQAKAL3ne3ik5C50SXJPd4UvR8TJ32cPgTWOkvI2uCo9a_YQ2pQtTl7_yZuWzDppvQJU4ugUPyZ13pc_DtQas2izgPA6PgLK6wRbQq5LxWwI-lg7mx96yMR_W5ll4V7J64nqy1nfhUQeayOTyt_TQNw6Sz1eBWz__9irauSxxJeDwyqem_U6zMQSfryCYumiE85NISwoZHMf8mMyeoeaZnaHKMPIOWEC58W_1UpMswnCnnR4w-9kEVr9eE0xtuvGyM3U3vMhUjJvzdCjZR7tPnzCyGvF3Apzdst6HdZYrNWQZCqx0bIfXXdzOBFab3DowN51R0wp13is0SZbhXVj8aunzI5sQwx3DKoiucfyGwu1PYj3VD1Ek_boZmVH7Apz_YBzggAiJZhSACxQ=w1204-h903-no?authuser=0"
                        alt="" srcset="">
                </a>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="https://lh3.googleusercontent.com/i7LaTi8yHfgjt3k8jvVjB29RYvdwzS1PNMs6NqbeZyW4IR7p6p94e4EH_tku-UT0MNj3mUAmS-KMuIHk3cRUQa7SwB1PJ1ksykExrCY4dNDDieC4_KioMwoK-M3vO7zCV4YECU2xZoTS5fRP9RKe_asvcnDt-j39OHnKAJA-Q7TtcEvsLQrCr8Q_phGYVoKgz-23c-uWmvzselEibVzHq-3UjgssnVo8DkgfYBeXBxN0_lrTiiivMK8cU1csc70TAwG6LeTQcjGERNMof1CtbwopDlDJm9i4RPptVKgeZQxHhj1Eg4Wop8N0aAGFn609rdeFVRDOjceX219zG8t6Dx_ButS4sTZczUXVxvOA4T9TT7QsVwDCDfQg_2PI9JmaVHpQj2uB3VH0oCjBaOj7M1H5R1TAUCAq1_ODKhus_k5Sz90z-I0a8O81jjE1aqFNDEA0k37a4xw-1bF6vb_xgjNAy4FxE40vbAP5cBux5NooDVj2bO2AcrJ4Vl3FHLNLihgPNWt2pq5PBi3HGgtp3kgoctFz_HCJLkHLzeEpPqkmGZwD9uXiQ-aqYk7A8OE0PEcgwfXWpHaiKfp557iLHzSPm04rfGRZN3ctKgLBQ-je6QKSMSWrI9kzCzp_PUfBWH6lQXlcKWY8_BouGTvxajKhClUqK6_SLm2E0VsRq2VAPmOfiH479CqdEfdu7w=w1204-h903-no?authuser=0"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="https://lh3.googleusercontent.com/MOwV9NNe8uXJQtIJPWabnERGiufuZBsi6PgW1H4sbN2TxXgg7ffXNlm9NKF6JUPrHiBUP0neqG1ohlviBJC1YAlGE8O_ND_1AUEhhEbeGOiAkbdx57mnNjRceiFPvZjAn4zx-AIWzACrFsvs8ubaMVxwPEzu3qNJ6zOB3cikV2oP4my2LrY1Yf6LN54W5StQGmeeQRIEArJULDWu22F_pvzNBmQ-MrStHADxaP9McRB9N0DE8IqCE-V7D1ktFOewhsmmYezOkS4dqj-cf8LoIPBLGdWKunESUHP8aTW1VMTqrvLU41uUC1x0hNaVWPPRZaOcvIpdvb2P4nSEReUM0Vyz8V34uHnRc0wcP9qR4pCmmElZRDz7KND7EIzUzeBvOeEtNtl0ffmcUkabpL1chhBdFuwhGDe5jYNVtrEVY5P3fcsAsahDS2ciAvAh4VrzK2x7JmaO-IucNfzJMZ_QAiFVf9cOAfHZBWT-LKyBMtee_Sr1AWDLUZuCVZDKYuDX_redgNRMfT_gAvBh59_V-3g8crk_yJeapZ7BUb5On3_TtfVySeUu3uB2ji-PUPIXkMwVYTUvE-5s7XAyEfXDxznL7RAvtzn4-L7Mcf4QkePgGxQwhm4iq1yPr-pWBSDT_MajhiHy42PsgvR7FeMvJX3wbl4rg4Dmf3ys4c4swl3Cm8Al9QasJ_YB5iLruw=w1204-h903-no?authuser=0"
                        alt="" srcset="">
                </a>
            </div>
            <div class="col-md-12 col-lg mt-4">
                <a href="single-post.php">
                    <img class="img-fluid"
                        src="https://lh3.googleusercontent.com/FAAzVrszkUORyH-jbw-ms9ikrRcck5JiNKgTX_t146nLyy43zMQE9Aj8pl2P3UVPA1EvOewlUFgC_AAOSZqYZDiDJeCWgyCUUParayvivhywpX6WhCUHbpUhlN-2fyDtuG2WH3FNeLuVT1I8_WhYgr3wpABNTcKfTZlul30zjnHXqRTYn9UMuM8p3eJncEhldEYb0CX4ebpaFb74KBQg2qHqhzvbeEoS_0PYWXkwvFeJADaUzP1y_c6cDsqo0sbSn50PCx6OuBUKnbNLUIGa9anApYctZatkt52meFbicwbJ-eiYRq2WQ47P6N0pz7sTzhzuNIWHSwfrrQlTTfFGXWs6x1ruueoALVayd8UcLgGF8JcVTe1WDKXlV7f-I8IHATbU7lPQkqmAlEHcb_-UiRqwZCtCrncfTrH-67WfwihZsP7dfU7aRPMq76-kx4qzn2Aiwrxho2cVtNmeacqaOTu6NRbALlyYYMvAkE0edj1sO5Elkz9zBsa4oL4r5i304TLjAxU-TYcv9kj8UmEGhbst5KRrjC4Z8T_jCYNIY8O8qh2tf4HpzpSCL-pUIs2uE6DaVzamIr1tIp7SCokRdoA_dMm7WdVvgeAwZH5XdvZXSGMUnQnHPUv1xDUwQNnMBzbKDLAxGLS-Ds1b6sh90v2dD-JfcgQMdIqTYPypruWJwPHasOh1zLmSJ6-LXA=w1204-h903-no?authuser=0"
                        alt="" srcset="">
                </a>
            </div>
        </div>
            
            
            
            
   
        
    </div>
    <!---------------------------MAIN CONTENT END--------------------------->
    <!---------------------------FOOTER START--------------------------->
    <footer>
        <div class="container mt-5">
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