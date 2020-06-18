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
                                <svg class="bi bi-house-door-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z" />
                                    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="find-people.php">
                                <svg class="bi bi-people" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zm7.973.056v-.002.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center  p-2">
                            <a href="#" class="notifications" style="color: black;">
                                    <!-- Button trigger modal -->
                                    <svg class="bi bi-heart" id="followers" data-toggle="modal"
                                        data-target="#notifications" aria-haspopup="true" aria-expanded="false"
                                        width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
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
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
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
                                                        <div
                                                            class="col d-flex justify-content-end align-items-center mr-3">
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
                                                        <div
                                                            class="col d-flex justify-content-end align-items-center mr-3">
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
                                                        <div
                                                            class="col d-flex justify-content-end align-items-center mr-3">
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
                                <img height="24" class="rounded-circle" src="/images/31820677_1996837767056360_6738977556290076672_n.jpg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>               
            </div>
        </div>
    </nav>
    <!---------------------------NAVIGATION END--------------------------->
    <!---------------------------MAIN CONTENT--------------------------->
    <div class="container mb-3">
        <div class="row">
            <!---------------LEFT SIDE--------------->
            <div class="col-12 col-lg-7">
                <!--POST START-->
                <div class="card mt-3">
                    <!--USER INFO-->
                    <div class="d-flex align-items-center">
                        <div class="p-3">
                            <a href="profile.php" class="m-0">
                                <img height="32" width="32" class="rounded-circle"
                                    src="https://www.efp-online.com/__we_thumbs__/12018_2_shooting_50.jpg" alt="">
                            </a>
                        </div>
                        <div class="">
                            <a href="user-profile.php" style="color: black;">katie23</a>
                        </div>                       
                    </div>   
                    <!--POST IMAGE-->
                    <img class="card-img-top img-fluid"
                        src="https://lh3.googleusercontent.com/fbZ4Dcp6w9okik38RI4QWQidyzgFnmqlfFKk7ebNpDFx2EnrJZT-N9sw9ELJSfsPC0wHT08WiKGh-nuQKTLOPuecJyoACuOHPqqskPKjutIfHAAT0hlNj4DLG4WOj2GU9KNcJDNM-071ZCw5iqTxKji6deqlAvCMeH2POfN4g2psxpjoMNC37Yz6abxUuAfNUOB9md4XVQLl00STINTV8EAFLBECQb9OH0AJhN7rzhwmeTbmKWuh3TuBiiaaUBjqtfm43ChzedB984CaXdR94JpS78MrxdwYVEA90KoICyLANirsrqXRydqnwSnj-6rsNzE1GFfcuEZHtNb7mz1eaWtuLlQ1cYYKiLRS27VNqtefG_yay4m_jH-_IUY4CDnoYOevHgqmECqomDH9Na9ubHI3BUi3mSMGpqq1qohHrkAHGt-dyjCweZJO-9gqubl9Y4zhlQQAjq5cpVpZvNC9uDysGAhuxHRDCmZ-j5dIvwUuyhMz1ykY4E0MaLTsdVfZOV0sN-fOJgtKpfgR0WKxmgNVEFw-YAotDmFjB7Tgs0yZ_P4AJmRMQ0ZfMfdfWNeqRAJ95vnvZVqMMWzDLyLGD8J1wyHkcLBG-u3q6Yq3fvcSFCsv-5BOJV22YFCygVwafw0MMhxpdb0UF_yzp6QmDSeG0NuHY5HV3s-JAAWY8dE9nrKHSQ_2YovUudZFMg=w1204-h903-no?authuser=0"
                        alt="Card image cap">
                    <!--POST INTERACTIONS-->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <a href="" style="color: black;">
                                    <svg class="bi bi-heart" width="1.5em" height="1.5em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                    </svg>
                                </a>
                                
                            </div>
                            <div class="">
                                <a href="" style="color: black;">
                                    <svg class="bi bi-chat" width="1.5em" height="2.1em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                                    </svg>
                                </a>                                
                            </div>    
                        </div>
                        <div>
                            <!-- Likes trigger modal -->
                            <small>
                                <a href="" data-toggle="modal" data-target="#show_likes"  style="color: black;">34 Kedvelés </a> érkezett
                            </small>

                            <!-- Modal -->
                            <div class="modal fade" id="show_likes" tabindex="-1" role="dialog"
                                aria-labelledby="show_likes" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header p-2">
                                            <h5 class="modal-title" id="show_likes">Kedvelések</h5>
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
                        </div>
                        <div>
                            <small><a href="single-post.php" style="color: black;">1 ÓRÁJA</a></small>
                        </div>
                        <div class="my-1">
                            <a href="single-post.php" style="color: grey;">Az összes hozzászólás (42) megtekintése</a>
                        </div>
                        <div>
                            <a href="profile.php" style="color: black;">raczigor</a>: Nam hendrerit aliquet nulla
                            in iaculis?
                        </div>
                        <div>
                            <a href="user-profile.php" style="color: black;">katie23</a>: Sed id purus erat.
                        </div>
                        
                    </div>
                    <textarea class="form-control align-middle" name="" id="" cols="30" rows="2" placeholder="Hozzászólás írása..." style="min-width: 100%"></textarea>
                </div>
                <!--POST END-->
                <!--POST START-->
                <div class="card mt-3">
                    <!--USER INFO-->
                    <div class="d-flex align-items-center">
                        <div class="p-3">
                            <a href="user-profile.php" class="m-0">
                                <img height="32" width="32" class="rounded-circle"
                                    src="https://yt3.ggpht.com/a/AATXAJzL5L3FBgoRCMQu8xu91E47QfggyLjNEafp6w=s900-c-k-c0xffffffff-no-rj-mo"
                                    alt="">
                            </a>
                        </div>
                        <div class="">
                            <a href="profile.php" style="color: black;">Joshua92</a>
                        </div>
                    </div>
                    <!--POST IMAGE-->
                    <img class="card-img-top img-fluid"
                        src="https://lh3.googleusercontent.com/1FLd704kE6wkSip0B5lKVvTuXvNuH9BwzaIAgB8KzaZvgD63tjY4McJWMimN2IVGVHQX42gs95bkhWjhe4n54XlFOwYMvjpZlUTcBrBc0uSKAOJyD4jzEx6L_ZHEtx98W1hAUIY9OpXiajGIXBrKxbJEUAwyAXIeiWj8ExJNOWjxEIgbVv7rOhSzUsQVGcl0_3HJJNJ6Z9hGsOKZLSwypRwUwhbVx5Mg4wtnkfcH-lrbZg2noWjjZMLAV2poOnyNjFf9KxBAHroFUFdQ7AlUfqpGo06JoJSYkH98YGfoedumwUZT2MOmY5v0ALLh-17G5Jsg0tVPcNAX3QzDATqr0qZOLzzNw2CWACCXbhgZgDoaysUI3An2URkIG81SxcgaOC3lHhWMuXENKQWjDud4qrfM-Zov5FwqCiJ0wTRtLg4uZXeGLxvF6vEUnwSxyPQ2uM_3Bon5wjU3exC1frhTkZ47JW8hGB1Ek9smGpXiNSELw3xTUQRZTwQzjyzn_EKkZbeGnrbZc6Hfd-my1SWOCcSzBSNissZu-qoJofQkqZURbMq6kBfi_25yQRBED0EQnqjvOUZzGklgBABKnOLtlVkqUYyiVbdSg1_1pL4AvqRb0_qbN2_GR5aOQbSDtm4gRfFG3whn60r5-SousXvFKCWcu3KQAKUpf_gQId9i46mJ8BLpUQ2TK1T1xsjTNg=w1204-h903-no?authuser=0"
                        alt="Card image cap">
                    <!--POST INTERACTIONS-->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <a href="" style="color: black;">
                                    <svg class="bi bi-heart" width="1.5em" height="1.5em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                    </svg>
                                </a>

                            </div>
                            <div class="">
                                <a href="" style="color: black;">
                                    <svg class="bi bi-chat" width="1.5em" height="2.1em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div>
                            <!-- Likes trigger modal -->
                            <small>
                                <a href="" data-toggle="modal" data-target="#show_likes" style="color: black;">56
                                    Kedvelés </a> érkezett
                            </small>

                            <!-- Modal -->
                            <div class="modal fade" id="show_likes" tabindex="-1" role="dialog"
                                aria-labelledby="show_likes" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header p-2">
                                            <h5 class="modal-title" id="show_likes">Kedvelések</h5>
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
                        </div>
                        <div>
                            <small><a href="single-post.php" style="color: black;">7 ÓRÁJA</a></small>
                        </div>
                        <div class="my-1">
                            <a href="single-post.php" style="color: grey;">Az összes hozzászólás (92) megtekintése</a>
                        </div>
                        <div>
                            <a href="user-profile.php" style="color: black;">jimmy98</a>: Vestibulum et nulla
                            commodo, blandit turpis at, scelerisque elit.
                        </div>
                        <div>
                            <a href="user-profile.php" style="color: black;">Joshua92</a>: Pellentesque ut fringilla
                            lorem.
                        </div>

                    </div>
                    <textarea class="form-control align-middle" name="" id="" cols="30" rows="2"
                        placeholder="Hozzászólás írása..." style="min-width: 100%"></textarea>
                </div>
                <!--POST END-->
                <!--POST START-->
                <div class="card mt-3">
                    <!--USER INFO-->
                    <div class="d-flex align-items-center">
                        <div class="p-3">
                            <a href="profile.php" class="m-0">
                                <img height="32" width="32" class="rounded-circle"
                                    src="/images/31820677_1996837767056360_6738977556290076672_n.jpg" alt="">
                            </a>
                        </div>
                        <div class="">
                            <a href="profile.php" style="color: black;">Rácz Igor</a>
                        </div>
                    </div>
                    <!--POST IMAGE-->
                    <img class="card-img-top img-fluid"
                        src="https://lh3.googleusercontent.com/kT9H0tGN2xrDSYDlO-CFeCm3iF7jrWWcOIDRI-Iu6cgr4piv1zYjDlIub284Pbmc7Iifqixy-13IW3M19HelRHr4IF8sKxQPpQU9QkwGlYkhrZeXpzRizNR7nys21mSF84Asx4D-0Zbzhl7kKl8ShN-DEfoNxbWK43WnGotXRVjMZPcAmlkKL9AcSQP-kaehYvga9Wq3afhFGVpuIvcT6_5B4A_Cr9sl0BhAwgtKXrGbNSnqsbWRVzuBm_YRecDYZ_UDRSAFz0CkuRSFW6ZvjD5gqXtaWrAqimZzoXaY2WAWqy2sucLML8xEn4nd69-NWlebTGjAWF1LLLzbJviEIaxPYGiiVgEJamLx3R4SNpiySllvr-gFy_buMFpgxo5eXbmQrnkhSQhRXFyxoAvSTb8CYH_PMuHXHHbbPrmKft9aYWb6L4Gysb3tgCQgZ5Dh7n1-uSRca_9s1aVlB1KOxuwcHgFTMhcfyj8I1o7WkQTgXG3gxKnSqLll1Kfp3kKhi6w01py4QEwiC3CsWuFUARdCzAC8fdpC2VJHV2diE9EBdlNQPAFvDA0Qzg435U9_Yd6hnpALWJWJKGZfarHO4BCcnTZPO_1Q66wBjoUYoqZjA6D7X_PNIsQpALi_ADDq7-USpgfqkD6RMD5qyL_wrapNixRYKMrkP0B8eESs4vDZof7mtGZ9aRG1Xr_PxA=w1204-h903-no?authuser=0"
                        alt="Card image cap">
                    <!--POST INTERACTIONS-->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <a href="" style="color: black;">
                                    <svg class="bi bi-heart" width="1.5em" height="1.5em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                    </svg>
                                </a>

                            </div>
                            <div class="">
                                <a href="" style="color: black;">
                                    <svg class="bi bi-chat" width="1.5em" height="2.1em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div>
                            <!-- Likes trigger modal -->
                            <small>
                                <a href="" data-toggle="modal" data-target="#show_likes" style="color: black;">85
                                    Kedvelés </a> érkezett
                            </small>

                            <!-- Modal -->
                            <div class="modal fade" id="show_likes" tabindex="-1" role="dialog"
                                aria-labelledby="show_likes" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header p-2">
                                            <h5 class="modal-title" id="show_likes">Kedvelések</h5>
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
                        </div>
                        <div>
                            <small><a href="single-post.php" style="color: black;">20 ÓRÁJA</a></small>
                        </div>
                        <div class="my-1">
                            <a href="single-post.php" style="color: grey;">Az összes hozzászólás (26) megtekintése</a>
                        </div>
                        <div>
                            <a href="user-profile.php" style="color: black;">frostnick</a>: Cras et lectus
                            fermentum, laoreet erat.
                        </div>
                        <div>
                            <a href="user-profile.php" style="color: black;">katie23</a>: Nunc vehicula, lectus.
                        </div>

                    </div>
                    <textarea class="form-control align-middle" name="" id="" cols="30" rows="2"
                        placeholder="Hozzászólás írása..." style="min-width: 100%"></textarea>
                </div>
                <!--POST END-->
                <!--POST START-->
                <div class="card mt-3">
                    <!--USER INFO-->
                    <div class="d-flex align-items-center">
                        <div class="p-3">
                            <a href="user-profile.php" class="m-0">
                                <img height="32" width="32" class="rounded-circle"
                                    src="https://www.datingcelebs.com/wp-content/uploads/2019/08/frost-nick-image.jpg"
                                    alt="">
                            </a>
                        </div>
                        <div >
                            <a href="user-profile.php" style="color: black;">frostnick</a>
                        </div>
                    </div>
                    <!--POST IMAGE-->
                    <img class="card-img-top img-fluid"
                        src="https://lh3.googleusercontent.com/4wUvFDpicTftUPlwB9-PWCCLGuE1yipgCNuCd4Hb2exHXrzRo2xMTVrlhaSUPJ99ujdj1kHERHvH7IUI-TnXOqK_BBZe_Lsa1w_qKV9PDrePSy7wVvepVpsx2eIYTzFfk1oLZRekB_jaJ4hhIevapyXkflFnQEcfrbiRnHOhUIAtWw_ygHAi4q7aWmvndCVp7_wfEUWYhyC7nMbG4LPrRl3KwmVlZSvIr_w2jdPeni7p-QB0Kdxo6gy88kc4-csYDG3jySzWMMYpDt1OiRMdcAu_sOMiWGFED_nZ5sCfFHpnYzek6d6XE_HL3V1FdVdwjj8kg-Z33yIiLXH24keThwn6pGEJro8N6dsKv-CYz2XE4bUgeWfT4ElqD78SAhJpd0bHJg-NpXV4AVAg2LWqanWGemBM4Xzn-UTBEb3aPQBfGSgDW1nTS3_cg7OSnK0Ev0NlYhl0MuAijW7-1jO04zLpIMksKh2afnhtjTpxZ6sKIIPu2R_vcAh1KN9T5Y7uX9OpoOaWON1FnylkhIlQllsWJkZ1CXZxFd89c74kQn4pL37hPyFs_b3LDaYi59iblep5mq8CG60rT8yaYBwFrw1XfOAYF3OG2Lkyna_6aDcgG9xO2PKp5pMGxQAwkpzMy5HwN-pnCG8e01cS0kDzDLBIb3tyqRyqJ8W8Ppnelz6oCjv7k2EK8P-LEuhptg=w1204-h903-no?authuser=0
                        alt="Card image cap">
                    <!--POST INTERACTIONS-->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <a href="" style="color: black;">
                                    <svg class="bi bi-heart" width="1.5em" height="1.5em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                    </svg>
                                </a>

                            </div>
                            <div class="">
                                <a href="" style="color: black;">
                                    <svg class="bi bi-chat" width="1.5em" height="2.1em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div>
                            <!-- Likes trigger modal -->
                            <small>
                                <a href="" data-toggle="modal" data-target="#show_likes" style="color: black;">38
                                    Kedvelés </a> érkezett
                            </small>

                            <!-- Modal -->
                            <div class="modal fade" id="show_likes" tabindex="-1" role="dialog"
                                aria-labelledby="show_likes" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header p-2">
                                            <h5 class="modal-title" id="show_likes">Kedvelések</h5>
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
                        </div>
                        <div>
                            <small><a href="single-post.php" style="color: black;">18 ÓRÁJA</a></small>
                        </div>
                        <div class="my-1">
                            <a href="single-post.php" style="color: grey;">Az összes hozzászólás (14) megtekintése</a>
                        </div>
                        <div>
                            <a href="user-profile.php" style="color: black;">simon464</a>: Etiam dignissim ornare
                            risus, eget ullamcorper
                        </div>
                        <div>
                            <a href="user-profile.php" style="color: black;">Joshua92</a>: Morbi eget sem ac neque?
                        </div>

                    </div>
                    <textarea class="form-control align-middle" name="" id="" cols="30" rows="2"
                        placeholder="Hozzászólás írása..." style="min-width: 100%"></textarea>
                </div>
                <!--POST END-->

            </div>        
            <!---------------LEFT SIDE END--------------->
            <!---------------RIGHT SIDE--------------->
            <div class="d-none d-lg-block col-lg-4 ">
                <div class="container ">
                    <div class="d-flex align-items-center mt-4 ">
                        <div>
                            <a href="profile.php">
                                <img height="64px" class="rounded-circle" src="/images/31820677_1996837767056360_6738977556290076672_n.jpg">
                            </a>
                        </div>
                        <div class="ml-2 d-flex flex-column">
                            <a href="profile.php" style="color: black;">raczigor</a>
                            <small style="color: grey;">RáczIgor</small>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="d-flex mb-1">
                            <p style="color: grey;">Ajánlások neked</p>
                            <a class="ml-5" href="suggested-friends.php">Az összes megtekintése</a>
                        </div>
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
                                        <span><a href="user-profile.php" style="color: black;">simon464</a></span>
                                    </div>
                                    <div>
                                        <span class="m-0" style="color: grey;">SimonPegg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end align-items-center ml-5 mr-3 ">
                                <a href="">Követem</a>
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
                                        <span><a href="user-profile.php" style="color: black;">frostnick</a></span>
                                    </div>
                                    <div>
                                        <span class="m-0" style="color: grey;">NickFrost</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end align-items-center mr-3">
                                <a href="">Követem</a>
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
                                        <span><a href="user-profile.php" style="color: black;">katie23</a></span>
                                    </div>
                                    <div>
                                        <span class="m-0" style="color: grey;">KateAshfield</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end align-items-center ml-5 mr-3">
                                <a href="">Követem</a>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="d-flex align-items-center">
                                <div class="col pr-0">
                                    <a href="user-profile.php">
                                        <img height="44px" width="44" class="rounded-circle"
                                            src="https://www.famousbirthdays.com/faces/mr-beast-image.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col">
                                    <div>
                                        <span><a href="user-profile.php" style="color: black;">jimmy98</a></span>
                                    </div>
                                    <div>
                                        <span class="m-0" style="color: grey;">JimmyDonaldson</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end align-items-center mr-3">
                                <a href="">Követem</a>
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
                                        <span><a href="user-profile.php" style="color: black;">Joshua92</a></span>
                                    </div>
                                    <div>
                                        <span class="m-0" style="color: grey;">JoshuaFluke</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-end align-items-center mr-3">
                                <a href="">Követem</a>
                            </div>
                        </div>
                        
                        
                        
                        
                    </div>
                    <div class="mt-5">
                        <p><em>© 2020 INSTAPHOTO FROM LARAVEL</em></p>
                    </div>
                </div>
            </div>
            <!---------------RIGHT SIDE END--------------->
        </div>
    </div>
    <!---------------------------MAIN CONTENT END--------------------------->
    <footer>
        <div class="d-md-none mt-5 text-center">
            <p><em>© 2020 INSTAPHOTO FROM LARAVEL</em></p>
        </div>
    </footer>

    
</body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
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