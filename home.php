<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php include "./bootstrap.php" ?>
</head>

<body>

    <?php session_start();
    
    
    if(isset($_SESSION['username']))
    {
    }
    else{
        header('Location: https://localhost/facebook/');
    }
    
    ?>


    <!-- ApP baR -->
    <div class="bg-white d-flex align-items-center fixed-top shadow " style="min-height: 56px; z-index: 5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- search -->
                <?php include "./components/search.php" ?>
                <!-- nav -->
                <?php include "./components/nav.php" ?>
                <!-- menus -->
                <div class="col d-flex align-items-center justify-content-end">
                    <!-- avatar -->
                    <div class="d-none d-lg-flex align-items-center justify-content-center rounded-pill p-1">

                        <img src="./anas.jpg" alt="avatar"
                            class="rounded-circle me-1" style="width: 30px; height: 30px; object-fit: cover" />
                        <p class="m-0"><?php echo "{$_SESSION['username']}" ?></p>
                    </div>
                    <!-- main menu -->
                    <div class="d-flex align-items-center justify-content-center p-1 mx-2 bg-gray rounded-circle" id="mainMenu"
                        data-bs-toggle="dropdown" aria-expanded="false" type="button"
                        style="height: 38px; width: 38px; object-fit: cover">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>

                    <!-- main menu dd -->
                    <ul class="dropdown-menu force-overflow bg-gray border-0 shadow p-3 overflow-auto" aria-labelledby="mainMenu"
                        style="width: 38em; max-height: 700px">
                        <!-- menu header -->
                        <li class="p-1 mx-2">
                            <h3>Menu</h3>
                        </li>
                        <div class="d-lg-flex flex-lg-row flex-col justify-content">
                            <!-- menu -->
                            <?php include "./components/3dotmenu.php" ?>
                            <!-- Create -->
                            <?php include "./creatinmenu.php" ?>
                        </div>
                    </ul>
                    <!-- chat -->
                    <div class="d-flex align-items-center justify-content-center p-1 mx-2 bg-gray rounded-circle" id="chatMenu"
                        data-bs-toggle="dropdown" aria-expanded="false" type="button" data-bs-auto-close="outside"
                        style="height: 38px; width: 38px; object-fit: cover">
                        <i class="fas fa-comment"></i>
                    </div>
                    <!-- caht dd -->
                    <ul class="dropdown-menu border-0 shadow p-3 overflow-auto" aria-labelledby="chatMenu">
                        <!-- header -->
                        <li class="p-1">
                            <div class="d-flex justify-content-between">
                                <h3>Messages</h3>
                                <div>
                                    <!--Setting -->
                                    <i class="fa-solid fa-ellipsis text-muted ms-2" type="button" data-bs-toggle="dropdown"></i>
                                    <!-- setting dd -->
                                    <ul class="dropdown-menu shadow" style="width: 18em">
                                        <!-- title -->
                                        <div class="p-2">
                                            <h5>Chat Settings</h5>
                                            <span class="text-muted fs-7">Lorem ipsum dolor sit amet.</span>
                                        </div>
                                        <!-- item 1 -->
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="fa-solid fa-phone me-3"></i>
                                                    <p class="m-0">Incoming Call sounds</p>
                                                </div>
                                                <!-- toggle -->
                                                <div class="form-check form-switch m-0">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                                        checked />
                                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- item 2 -->
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center">
                                                    <i class="fa-solid fa-volume-off me-3"></i>
                                                    <p class="m-0">Message Sounds</p>
                                                </div>
                                                <!-- toggle -->
                                                <div class="form-check form-switch m-0">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                                        checked />
                                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- item 3 -->
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between m-0">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center m-0">
                                                    <i class="fa-solid fa-spinner me-3"></i>
                                                    <p class="m-0">Pop up new Messages</p>
                                                </div>
                                                <!-- toggle -->
                                                <div class="form-check form-switch m-0">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                                        checked />
                                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                                </div>
                                            </div>
                                            <span class="ms-5 text-muted fs-7">Lorem ipsum dolor sit.</span>
                                        </li>
                                        <hr class="m-0" />
                                        <!-- item 1 -->
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between m-0">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center m-0">
                                                    <i class="fa-solid fa-spinner me-3"></i>
                                                    <p class="m-0">Lorem, ipsum dolor.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- item 2 -->
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between m-0">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center m-0">
                                                    <i class="fa-solid fa-spinner me-3"></i>
                                                    <p class="m-0">Lorem, ipsum dolor.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- item 3 -->
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between m-0">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center m-0">
                                                    <i class="fa-solid fa-spinner me-3"></i>
                                                    <p class="m-0">Lorem, ipsum dolor.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- item 4 -->
                                        <li>
                                            <div class="dropdown-item d-flex align-items-center justify-content-between m-0">
                                                <!-- icon -->
                                                <div class="d-flex align-items-center m-0">
                                                    <i class="fa-solid fa-spinner me-3"></i>
                                                    <p class="m-0">Lorem, ipsum dolor.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- expand -->
                                    <i class="fa-solid fa-expand-arrows-alt text-muted ms-2"></i>
                                    <!-- new message -->
                                    <i class="fa-solid fa-edit text-muted ms-2" data-bs-toggle="modal" data-bs-target="#newChat"
                                        type="button"></i>
                                </div>
                            </div>
                        </li>
                        <!-- search -->
                        <li class="p-1">
                            <div class="input-group-text bg-gray border-0 rounded-pill" style="min-height: 35px; min-width: 230px">
                                <i class="fa-solid fa-search text-muted"></i>
                                <input type="text" placeholder="Search Messanger" class="form-control rounded-pill border-0 bg-gray"
                                    style="height: 35px; background-color: #f0f2f5" />
                            </div>
                        </li>
                        <!-- messages 1-->
                        <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat1">
                            <div class="d-flex align-items-center justify-content-between">
                                <!-- big avatar  -->
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://picsum.photos/204" class="rounded-circle"
                                            style="width: 42px; height: 42px; object-fit: cover" alt="avatar" />
                                    </div>
                                    <!-- message -->
                                    <div class="fs-7 m-0">
                                        <span class="fs-7 text-muted">Lorem, ipsum. &#8226; 7d
                                        </span>
                                    </div>
                                    <!-- small avatar -->
                                    <div class="p-2">
                                        <img src="https://picsum.photos/204" alt="avatar" class="rounded-circle"
                                            style="width: 15px; height: 15px; object-fit: cover" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- messages 2-->
                        <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat2">
                            <div class="d-flex align-items-center justify-content-between">
                                <!-- big avatar  -->
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://picsum.photos/219" class="rounded-circle"
                                            style="width: 42px; height: 42px; object-fit: cover" alt="avatar" />
                                    </div>
                                    <!-- message -->
                                    <div class="fs-7 m-0">
                                        <span class="fs-7 text-muted">Hi! &#8226; 7d </span>
                                    </div>
                                    <!-- small avatar -->
                                    <div class="p-2">
                                        <img src="https://picsum.photos/219" alt="avatar" class="rounded-circle"
                                            style="width: 15px; height: 15px; object-fit: cover" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- messages 3-->
                        <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat3">
                            <div class="d-flex align-items-center justify-content-between">
                                <!-- big avatar  -->
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://picsum.photos/222" class="rounded-circle"
                                            style="width: 42px; height: 42px; object-fit: cover" alt="avatar" />
                                    </div>
                                    <!-- message -->
                                    <div class="fs-7 m-0">
                                        <span class="fs-7 text-muted">Bring the files!. &#8226; 7d
                                        </span>
                                    </div>
                                    <!-- small avatar -->
                                    <div class="p-2">
                                        <img src="https://picsum.photos/221" alt="avatar" class="rounded-circle"
                                            style="width: 15px; height: 15px; object-fit: cover" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- messages 4-->
                        <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat2">
                            <div class="d-flex align-items-center justify-content-between">
                                <!-- big avatar  -->
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://picsum.photos/220" class="rounded-circle"
                                            style="width: 42px; height: 42px; object-fit: cover" alt="avatar" />
                                    </div>
                                    <!-- message -->
                                    <div class="fs-7 m-0">
                                        <span class="fs-7 text-muted">Lorem, ipsum. &#8226; 7d
                                        </span>
                                    </div>
                                    <!-- small avatar -->
                                    <div class="p-2">
                                        <img src="https://picsum.photos/221" alt="avatar" class="rounded-circle"
                                            style="width: 15px; height: 15px; object-fit: cover" />
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- messages 5-->
                        <li class="my-2 p-1" type="button" data-bs-toggle="modal" data-bs-target="#singleChat2">
                            <div class="d-flex align-items-center justify-content-between">
                                <!-- big avatar  -->
                                <div class="d-flex align-items-center justify-content-evenly">
                                    <!-- avatar -->
                                    <div class="p-2">
                                        <img src="https://picsum.photos/220" class="rounded-circle"
                                            style="width: 42px; height: 42px; object-fit: cover" alt="avatar" />
                                    </div>
                                    <!-- message -->
                                    <div class="fs-7 m-0">
                                        <span class="fs-7 text-muted">Lorem, ipsum. &#8226; 7d
                                        </span>
                                    </div>
                                    <!-- small avatar -->
                                    <div class="p-2">
                                        <img src="https://picsum.photos/221" alt="avatar" class="rounded-circle"
                                            style="width: 15px; height: 15px; object-fit: cover" />
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- notification -->
                    <div class=" notification d-flex align-items-center justify-content-center p-1 mx-2 bg-gray rounded-circle" id="notMenu"
                        data-bs-toggle="dropdown" aria-expanded="false" type="button" data-bs-auto-close="outside"
                        style="height: 38px; width: 38px; object-fit: cover">
                        <i class="fas fa-bell"></i>
                    </div>
                    <!-- notification dd -->
                    <ul class=" dropdown-menu border-0 shadow p-3 overflow-auto border-0 m-0 p-0" aria-labelledby="notMenu"
                        style="width: 24em; max-height: 600px">
                        <!-- header -->
                        <li class="list-group-item d-flex flex-column p-0 m-0 rounded border-0">
                            <div class="d-flex justify-content-between p-0">
                                <h3 class="fw-bold">Notifications</h3>
                                <!-- menu -->
                                <div class="align-items-center">
                                    <i class="fa-solid fa-ellipsis p-2 text-muted fs-5 d-flex justify-content-end" type="button"></i>
                                </div>
                                <!-- menu dd -->
                            </div>
                        </li>
                        <!-- nav -->
                        <div class="d-flex ps-0">
                            <li type="button"
                                class="rounded-pill px-3 bg-primary bg-opacity-10 text-primary list-group-item border-0">
                                <span class="fs-6 " style="font-weight:500;">All</span>
                            </li>
                            <li type="button" class="bg-gray mx-2 rounded-pill px-3  list-group-item border-0">
                                <span class="fs-6 " style="font-weight:500;">Unread</span>
                            </li>
                        </div>
                        <!-- New  -->
                        <div class="d-flex justify-content-between mt-2 p-0">
                            <h6 style="font-weight: 500;">New</h4>
                                <!-- menu -->
                                <span class="text-primary" type="button">See All</span>
                        </div>
                        <!-- menu dd -->
                        <!-- n 1 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-flex"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <!-- n 2 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-flex"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <!-- n 3 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-flex"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <!-- n 4 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-flex"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <!-- n 5 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-flex"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <!-- n 6 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-flex"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <!-- n 7 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-flex"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <!-- n 8 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-none"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <hr>
                        <!-- earlier -->
                        <div class="d-flex justify-content-between mt-2 p-0">
                            <h6 style="font-weight: 500;">Earlier</h4>
                                <!-- menu -->
                                <span class="text-primary" type="button">See All</span>
                        </div>
                        <!-- n 1 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-flex"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <!-- n 2 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-flex"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <!-- n 3 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-flex"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <!-- n 4 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-flex"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <!-- n 5 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-flex"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <!-- n 6 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-flex"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <!-- n 7 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-flex"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                        <!-- n 8 -->
                        <li class="rounded my-2 p-1 text-muted">
                            <a href="#" class="text-decoration-none">
                                <div class="row m-0">
                                    <!-- head -->
                                    <div class="m-0 p-0 col-sm-2">
                                        <!-- avatar -->
                                        <div class="pe-2 m-0 position-relative">

                                            <img src="https://i.ibb.co/q9jsTYh/866-536x354.jpg" alt="avatar" class="rounded-circle"
                                                style="width: 48px; height: 48px; object-fit: cover" />
                                            <!-- small avatar -->
                                            <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                                style="width: 23px; height: 23px; left:75%; top: 90%;">
                                                <img src="https://i.ibb.co/B3FgtsT/approve-blue-circle-like-thumbs-up-vote-icon-410407.png"
                                                    class="position-absolute rounded-circle "
                                                    style="width: 22px; height: 22px; object-fit: cover;">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- body -->
                                    <div class="col-lg-9">
                                        <span class="text-muted m-0 fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae,
                                            vel.
                                            <br>
                                            <span class="fs-7 text-primary">9 hours ago</span>
                                        </span>
                                    </div>
                                    <!-- foter-->
                                    <div class="m-0 p-auto col-sm-1 justify-content-between align-items-center d-none"><i
                                            class="fa-solid fs-7 d-flex fa-circle text-primary"></i></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- secondary menu -->
                    <div class="d-flex align-items-center justify-content-center p-1 mx-2 bg-gray rounded-circle" id="secMenu"
                        data-bs-toggle="dropdown" aria-expanded="false" type="button" data-bs-auto-close="outside"
                        style="height: 38px; width: 38px; object-fit: cover">
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                    <!-- secondary dd -->

                    <ul class="dropdown-menu shadow border-0 p-2 overflow-auto" style="width: 23em; max-height: fit-content;"
                        aria-labelledby="secMenu">
                        <li class="m-2  rounded" a href="#" class="text-decoration-none text-dark d-flex align-items-center">
                            <!-- profile -->
                            <div type="button" class="d-flex dropdown-item align-items-center justify-content-start rounded p-1">

                                <img src="./anas.jpg" alt="avatar"
                                    class="rounded-circle me-2" style="width: 50px; height: 50px; object-fit: cover" />
                                <!-- <p class="m-0 fw-bold fs-4"><?php echo "{$_SESSION['username']}" ?></p>
                  <br>
                  <span class="text-muted fs-7">See your profile</span> -->
                                <div class="col mx-2">
                                    <span class="m-0 p-0 fs-5 fw-bold"><?php echo "{$_SESSION['username']}" ?></span><br>
                                    <span class="m-0 p-0 text-muted fs-6">See your Profile</span>
                                </div>
                            </div>
                            <!-- feedback -->
                            <hr>
                            <div type="button" class="row my-2 rounded mx-0 p-1 dropdown-item d-flex">
                                <!-- icon -->
                                <div style="width: 38px; height: 38px"
                                    class="d-flex align-items-center justify-content-center rounded-circle bg-gray-dark mx-1">
                                    <i class="fa-solid fa-message fa-lg"></i>
                                </div>
                                <!-- body -->
                                <div class="col align-items-center  justify-content-between">
                                    <span class="m-0 p-0 fw-bold">Give feedback</span><br>
                                    <span class="m-0 p-0 text-muted fs-7">Help us improve FaceBook</span>
                                </div>
                                <!-- foot -->
                                <div class="col-2 d-flex justify-content-end align-items-center">
                                    <i class="fa-solid fa-angle-right fa-lg "></i>
                                </div>
                            </div>
                            <hr>
                            <!-- menu -->
                            <!-- settings -->
                            <div type="button" class="row my-2 rounded mx-0 p-1 dropdown-item d-flex">
                                <!-- icon -->
                                <div style="width: 38px; height: 38px"
                                    class="d-flex align-items-center justify-content-center rounded-circle bg-gray-dark mx-1">
                                    <i class="fa-solid fa-lg fa-gear"></i>
                                </div>
                                <!-- body -->
                                <div class="col align-items-center d-flex justify-content-between">
                                    <span class="m-0 fw-bold">Setting & privacy</span>
                                </div>
                                <!-- foot -->
                                <div class="col-2 d-flex justify-content-end align-items-center">
                                    <i class="fa-solid fa-angle-right fa-lg "></i>
                                </div>
                            </div>
                            <!-- Help & Support -->
                            <div type="button" class="row rounded my-2 mx-0 p-1 dropdown-item d-flex">
                                <!-- icon -->
                                <div style="width: 38px; height: 38px"
                                    class="d-flex align-items-center justify-content-center rounded-circle bg-gray-dark mx-1">
                                    <i class="fa-solid fa-circle-question fa-lg"></i>
                                </div>
                                <!-- body -->
                                <div class="col align-items-center d-flex justify-content-between">
                                    <span class="m-0 fw-bold">Help & Support</span>
                                </div>
                                <!-- foot -->
                                <div class="col-2 d-flex justify-content-end align-items-center">
                                    <i class="fa-solid fa-angle-right fa-lg "></i>
                                </div>
                            </div>
                            <!--Display & accessility -->
                            <div type="button" class="row my-2 rounded mx-0 p-1 dropdown-item d-flex">
                                <!-- icon -->
                                <div style="width: 38px; height: 38px"
                                    class="d-flex align-items-center justify-content-center rounded-circle bg-gray-dark mx-1">
                                    <i class="fa-solid fa-lg fa-moon"></i>
                                </div>
                                <!-- body -->
                                <div class="col align-items-center d-flex justify-content-between">
                                    <span class="m-0 fw-bold">Display & accessility</span>
                                </div>
                                <!-- foot -->
                                <div class="col-2 d-flex justify-content-end align-items-center">
                                    <i class="fa-solid fa-angle-right fa-lg "></i>
                                </div>
                            </div>
                            <!-- log out -->
                            <a ahref="http://localhost/facebook/logout.php" type="button" class="row my-2 rounded mx-0 p-1 dropdown-item d-flex">
                                <!-- icon -->
                                <div style="width: 38px; height: 38px"
                                    class="d-flex align-items-center justify-content-center rounded-circle bg-gray-dark mx-1">
                                    <i class="fa-solid fa-right-from-bracket fa-lg"></i>
                                </div>
                                <!-- body -->
                                <div class="col align-items-center d-flex justify-content-between">
                                    <i  class="m-0 fw-bold">Log Out</i>
                                </div>
                                <!-- foot -->
                                <div class="col-2 d-flex justify-content-end align-items-center">
                                    <span class="fa-solid fa-angle-right fa-lg "></>
                                </div>
                            </a>
                            <!-- footMenu -->
                            <div type="button" class="row mt-2 rounded mx-0 p-1 d-flex">
                                <p class="text-wrap text-muted text-decoration-none m-0 p-0 fs-7">
                                    <a href="#" class="text-decoration-none text-muted">Privacy</a> &#8226; <a href="#"
                                        class="text-decoration-none text-muted fs-7">Terms</a> &#8226; <a href="#"
                                        class="text-decoration-none text-muted fs-7">Advertising</a> &#8226; <a href="#"
                                        class="text-decoration-none text-muted fs-7">Ad choices</a> &#8226; <a href="#"
                                        class="text-decoration-none text-muted fs-7">Cookies</a> &#8226; <a href="#"
                                        class="text-decoration-none text-muted fs-7">More</a> &#8226; Meta &copy; 2022
                                </p>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- ====================== Main ======================= -->
    <div class="container-fluid ">

        <div class="row justify-content-evenly  " style="height: 100%; margin-top: 4em ;">
            <!-- =================== left sidebar ===================-->
            <div class="sideBar d-none d-xxl-block p-2 col-lg-3 bg-gray  border-0  " style="height: 730px;">
                <!-- profile -->
                <div class="d-flex ms-1 my-1 ps-3  p-1 align-items-center justify-content-start rounded hoverDark"
                    type="button">

                    <img src="./anas.jpg" alt="avatar"
                        class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;"><?php echo "{$_SESSION['username']}" ?></span>
                    </div>
                </div>
                <!-- Friends -->
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark" type="button">

                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/S0U5ECzYUSu.png" alt="avatar"
                        class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Friends</span>
                    </div>
                </div>
                <!-- saved -->
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark" type="button">

                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/lVijPkTeN-r.png" alt="avatar"
                        class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Saved</span>
                    </div>
                </div>
                <!-- Groups -->
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark" type="button">

                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/PrjLkDYpYbH.png" alt="avatar"
                        class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Groups</span>
                    </div>
                </div>
                <!-- Marketplace -->
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark" type="button">

                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/D2y-jJ2C_hO.png" alt="avatar"
                        class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Marketplace</span>
                    </div>
                </div>
                <!-- Memories -->
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark" type="button">

                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/he-BkogidIc.png" alt="avatar"
                        class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Memories</span>
                    </div>
                </div>
                <!-- Pages -->
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark" type="button">

                    <img src="./assets/pages.svg" alt="avatar"
                        class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Pages</span>
                    </div>
                </div>
                <!-- Events -->
                <div class="d-flex ms-2 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark" type="button">

                    <img src="./assets/events.svg" alt="avatar"
                        class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Events</span>
                    </div>
                </div>
                <!-- Most Recent -->
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark" type="button">

                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/hTN47HVa4oS.png" alt="avatar"
                        class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Most Recent</span>
                    </div>
                </div>
                <!-- Favourites -->
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark" type="button">

                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yK/r/mAnT0r8GSOm.png" alt="avatar"
                        class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Favourites</span>
                    </div>
                </div>

                <!-- see more dd -->
                <div class="p-1 bg-gray " type="button">
                    <div class="accordion bg-gray" id="seeMoreSidebar">
                        <div class="accordion-item bg-gray border-0">

                            <div id="seeMoreSide" class="accordion-collapse bg-gray collapse " aria-labelledby="headingOne"
                                data-bs-parent="#seeMoreSidebar">
                                <div class="accordion-body bg-gray p-0 m-0">
                                    <!-- Pages -->
                                    <div
                                        class="d-flex ms-2 my-1 bg-gray p-2 align-items-center justify-content-start rounded p-1 hoverDark">

                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yH/r/kyCAf2jbZvF.png" alt="avatar"
                                            class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                                        <div class="col mx-2">
                                            <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Pages</span>
                                        </div>
                                    </div>
                                    <!-- Events -->
                                    <div
                                        class="d-flex ms-2 my-1 bg-gray p-2 align-items-center justify-content-start rounded p-1 hoverDark">

                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yu/r/eXC82ZeepQ7.png" alt="avatar"
                                            class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                                        <div class="col mx-2">
                                            <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Events</span>
                                        </div>
                                    </div>
                                    <!-- Most Recent -->
                                    <div
                                        class="d-flex ms-2 my-1 bg-gray p-2 align-items-center justify-content-start rounded p-1 hoverDark">

                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/hTN47HVa4oS.png" alt="avatar"
                                            class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                                        <div class="col mx-2">
                                            <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Most Recent</span>
                                        </div>
                                    </div>
                                    <!-- Favourites -->
                                    <div
                                        class="d-flex ms-2 my-1 bg-gray p-2 align-items-center justify-content-start rounded p-1 hoverDark">

                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yK/r/mAnT0r8GSOm.png" alt="avatar"
                                            class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                                        <div class="col mx-2">
                                            <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Favourites</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- See More -->
                <div
                    class="d-flex ms-1 bg-gray border-0  accordion-flush my-2 p-2 align-items-center justify-content-start rounded p-1 hoverDark"
                    style="box-shadow: none;" type="button" data-bs-toggle="collapse" data-bs-target="#seeMoreSide"
                    aria-expanded="true" aria-controls="seeMoreSide">
                    <div class="rounded-circle p-3 d-flex justify-content-center align-items-center "><i
                            class="fa-solid fa-lg fa-angle-down rounded-circle"></i></div>
                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">See More</span>
                    </div>
                </div>
                <hr class="m-0 p-0 text-muted">
                <!-- shortcuts -->
                <div class="bg-gray text-muted d-flex ms-1 mb-1 mt-0 ps-3  p-0 align-items-center justify-content-between ">
                    <!-- heading -->
                    <span class="p-0 d-flex justify-content-start fw-bold fs-5">Your shortcuts</span>
                    <!-- edit -->
                    <span class=" d-flex justify-content-end  align-items-center text-primary hoverDark p-1 m-1 rounded "
                        data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Edit</span>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="editShortcuts" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- head -->
                                <div class="modal-header align-items-center">
                                    <h5 class="text-dark text-center w-100 m-0" id="editShortcuts">Edit your Shortcuts</h5>
                                    <div class="text-muted bg-gray rounded-circle d-flex justify-content-end">
                                        <button type="button" class="btn-close m-1" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                </div>
                                <!-- body -->
                                <div class="modal-body">
                                    <p class="text-muted">
                                        Shortcuts provide quick access to what you do most on Facebook. Your shortcuts are sorted
                                        automatically, but you can pin something so it's always shown at the top or hide it from the list.
                                    </p>
                                    <!-- search -->

                                    <div class="input-group-text bg-gray border-0 rounded-pill"
                                        style="min-height: 35px; min-width: 230px">
                                        <i class="fa-solid fa-search text-muted"></i>
                                        <input type="text" placeholder="Search Messanger" class="form-control rounded-pill border-0 bg-gray"
                                            style="height: 35px; background-color: #f0f2f5" />
                                    </div>

                                    <!-- is It? -->
                                    <div class="d-flex ms-1 my-1 p-1 align-items-center justify-content-start  ">

                                        <img src="https://i.ibb.co/sjkyMHj/104426444-112499970508643-4838017725490327262-n.png" alt="avatar"
                                            class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                                        <div class="col mx-2">
                                            <span class="m-0 p-0 fs-6 text-dark " style="font-weight: 500;">is It?</span>
                                        </div>
                                        <!-- slections -->
                                        <select class="form-select w-50 border-0 bg-gray">
                                            <option value="1">
                                                <p><i class="fa-solid fa-sparkles"></i>Sort Automatically</p>
                                            </option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>


                                    </div>

                                </div>
                                <!-- foot -->
                                <div class="modal-footer">
                                    <button type="button" class="btn text-primary hoverDark" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary px-4">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- is It? -->
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark" type="button">

                    <img src="https://i.ibb.co/sjkyMHj/104426444-112499970508643-4838017725490327262-n.png" alt="avatar"
                        class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">is It?</span>
                    </div>
                </div>
                <!-- footMenu -->
                <div class="row mt-2 rounded mx-0 p-1 d-flex">
                    <p class="text-wrap text-muted text-decoration-none m-0 p-0 fs-7">
                        <a href="#" class="text-decoration-none text-muted">Privacy</a> &#8226; <a href="#"
                            class="text-decoration-none text-muted fs-7">Terms</a> &#8226; <a href="#"
                            class="text-decoration-none text-muted fs-7">Advertising</a> &#8226; <a href="#"
                            class="text-decoration-none text-muted fs-7">Ad choices</a> &#8226; <a href="#"
                            class="text-decoration-none text-muted fs-7">Cookies</a> &#8226; <a href="#"
                            class="text-decoration-none text-muted fs-7">More</a> &#8226; Meta &copy; 2022
                    </p>
                </div>
            </div>
            <!-- =================== Timeline===================-->
            <div class="timeline col-12 m-0 col-lg-6 sideBar" style="height: 730px;  ">
                <div class=" border-0 px-1 bg-gray ">
                    <!-- stories -->
                    <?php include "./components/creatstories.php" ?>
                    <!-- create post -->
                    <div class=" my-3 shadow  p-3 col  rounded bg-white " type="button">

                        <!-- profile -->
                        <div class="d-flex justify-content-st align-items-center">
                            <img src="./anas.jpg" alt="avatar"
                                class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                            <div class="w-75 mx-2" data-bs-toggle="modal" data-bs-target="#createPostModal" type="button">
                                <input class="m-0 p- fs-6 form-control rounded-pill border-0 bg-gray"
                                    placeholder="What's on your mind, <?php echo "{$_SESSION['username']}" ?>?" disabled type="text">
                            </div>
                        </div>
                        <hr class="text-muted m-1 my-2">
                        <!-- create modal -->
                        <div class="d-flex justify-content-between align-items-center row">
                            <!-- Live Video -->
                            <div class="col d-flex p-2 rounded mx-2 align-items-center justify-content-center hoverLight d-flex">
                                <i class="fa-solid fa-lg mx-2 text-danger fa-video"></i>
                                <span class="m-0 text-muted p-0 fw-bold">Live Video</span>
                            </div>
                            <!-- Photo/video -->
                            <div class="col d-flex p-2 rounded mx-2 align-items-center justify-content-center hoverLight d-flex"
                                data-bs-toggle="modal" data-bs-target="#createPostModal" type="button">
                                <i class="fa-solid fa-lg mx-2 text-success fa-photo-film"></i>
                                <span class="m-0 text-muted p-0 fw-bold">Photo/video</span>
                            </div>
                            <!-- Feelings/Activity -->
                            <div class="col d-flex p-2 rounded mx-2 align-items-center justify-content-center hoverLight d-flex">
                                <i class="fa-regular fa-lg mx-2 text-warning fa-face-grin"></i>
                                <span class="m-0 text-muted p-0 fw-bold">Feelings/Activity</span>
                            </div>
                        </div>
                    </div>
                    <!-- Create Post Modal -->
                    <div class="modal fade  shadow" id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered ">
                            <div class="modal-content">
                                <!-- head -->
                                <div class="modal-header align-items-center">
                                    <h5 class="modal-title w-100 text-center fw-bold " id="createPostModalLabel">Create Post</h5>
                                    <button type="button" class="btn-close rounded-circle bg-gray" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <!-- body -->
                                <div class="modal-body p-2">
                                    <!-- avatar -->
                                    <div class="d-flex m-2 ">
                                        <div class="rounded-circle ">
                                            <img src="./anas.jpg"
                                                alt="avatar" class="rounded-circle" style="width: 48px; height:  48px; object-fit: cover;">
                                        </div>
                                        <div class="d-flex flex-column  ">
                                            <span class="m-0 px-2 p-0"><?php echo "{$_SESSION['username']}" ?></span>
                                            <div class="m-0 mx-2  rounded  bg-gray d-flex p-1 align-items-center" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Your Friends" type="button" style="font-size: 12px;">
                                                <i class="fa-solid  fa-user-group px-1"></i>
                                                <span class="m-0 p-0 mx-1 "> Friends </span>
                                                <i class="fa-solid fa-caret-down px-1"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input -->
                                    <div class="m-0 p-1 d-flex justify-content-between align-items-center">
                                        <textarea type="text" class="form-control border-0 bg-white"
                                            placeholder="What's on your mind, <?php echo "{$_SESSION['username']}" ?>?" style="width: 90%;"></textarea>
                                        <i class="fa-regular fa-lg text-muted fa-face-smile" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Emoji"></i>
                                    </div>
                                    <!-- photo upload -->
                                    <div class="w-100 border  rounded p-1 " type="button" style="height: 15em;">
                                        <form>
                                            <input type="file" name="file" id="file" class="inputfile"
                                                class="h-75 rounded bg-gray hoverDark w-100 d-flex justify-content-center align-items-center flex-column ">
                                            <label style="height: 14.3em;" type="button"
                                                class=" rounded bg-gray hoverDark w-100 d-flex justify-content-center align-items-center flex-column"
                                                for="file">
                                                <div class="rounded-circle d-flex  align-items-center justify-content-center bg-gray"
                                                    style="width: 40px; height: 40px; ">
                                                    <i class="fa-regular fa-lg  fa-image "></i>
                                                </div>
                                                <p class="w-100 text-center fs-4 m-0  p-1">Add Photos/videos</p>
                                                <span class="text-muted fs-7 w-100 text-center">or drag and drop</span>
                                            </label>
                                        </form>



                                    </div>
                                    <!-- add to ur post -->
                                    <!-- submit -->
                                </div>
                                <!-- foot -->
                                <div class="p-2">
                                    <button type="button" style="width: 100%;" class="p-1 fs-5 btn btn-primary">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- create room -->
                    <div
                        class=" bg-white  shadow m-0  w-100 d-flex position-relative justify-content-between align-items-center rounded"
                        data-bs-toggle="modal" data-bs-target="#videoModal" type="button">
                        <!-- create room button -->
                        <div
                            class="m-2 rounded-pill d-flex justify-content-between align-items-center border border-2  bg-gray "
                            type="button" style=" height: 40px; border: 4px;  ">
                            <i class="fa-solid text-info fs-6 fa-lg mx-3 fa-video "></i>
                            <span class="me-3 text-info fw-bold">Create Room</span>
                        </div>
                        <!-- profiles -->
                        <div class="d-flex mx-2  align-items-center justify-content-start rounded-circle "
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="lorem ipsam" type="button">
                            <div class="position-relative">
                                <img src="https://randomuser.me/api/portraits/women/48.jpg" alt="avatar" class="rounded-circle me-2"
                                    style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                                    style="left: 75%; "></span>
                            </div>
                        </div>
                        <div class=" me-2 d-lg-flex d-none align-items-center justify-content-start rounded-circle "
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="lorem ipsam" type="button">
                            <div class="position-relative">
                                <img src="https://randomuser.me/api/portraits/women/49.jpg" alt="avatar" class="rounded-circle me-2"
                                    style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                                    style="left: 75%; "></span>
                            </div>
                        </div>
                        <div class="d-flex me-2  align-items-center justify-content-start rounded-circle "
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="lorem ipsam" type="button">
                            <div class="position-relative">
                                <img src="https://randomuser.me/api/portraits/men/4.jpg" alt="avatar" class="rounded-circle me-2"
                                    style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                                    style="left: 75%; "></span>
                            </div>
                        </div>
                        <div class="d-lg-flex d-none me-2  align-items-center justify-content-start rounded-circle "
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="lorem ipsam" type="button">
                            <div class="position-relative">
                                <img src="https://randomuser.me/api/portraits/women/38.jpg" alt="avatar" class="rounded-circle me-2"
                                    style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                                    style="left: 75%; "></span>
                            </div>
                        </div>
                        <div class="d-lg-flex d-none me-2  align-items-center justify-content-start rounded-circle "
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="lorem ipsam" type="button">
                            <div class="position-relative">
                                <img src="https://randomuser.me/api/portraits/men/68.jpg" alt="avatar" class="rounded-circle me-2"
                                    style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                                    style="left: 75%; "></span>
                            </div>
                        </div>
                        <div class="d-lg-flex d-none me-2  align-items-center justify-content-start rounded-circle "
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="lorem ipsam" type="button">
                            <div class="position-relative">
                                <img src="https://randomuser.me/api/portraits/women/40.jpg" alt="avatar" class="rounded-circle me-2"
                                    style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                                    style="left: 75%; "></span>
                            </div>
                        </div>
                        <div class="d-lg-flex d-none me-2  align-items-center justify-content-start rounded-circle "
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="lorem ipsam" type="button">
                            <div class="position-relative">
                                <img src="https://randomuser.me/api/portraits/women/87.jpg" alt="avatar" class="rounded-circle me-2"
                                    style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                                    style="left: 75%; "></span>
                            </div>
                        </div>
                        <div class="d-lg-flex d-none me-2  align-items-center justify-content-start rounded-circle "
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="lorem ipsam" type="button">
                            <div class="position-relative">
                                <img src="https://randomuser.me/api/portraits/women/40.jpg" alt="avatar" class="rounded-circle me-2"
                                    style="width: 38px; height: 38px; object-fit: cover" />
                                <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                                    style="left: 75%; "></span>
                            </div>
                        </div>
                        <!-- next button -->
                        <div class="position-absolute top-50 fs-4  translate-middle rounded-circle d-none d-lg-block"
                            type="button" style="right: -.01em;" data-bs-toggle="collapse" data-bs-target="#roomSideSlider"
                            aria-expanded="true" aria-controls="roomSideSlider">
                            <i class="fas fa-arrow-right p-2 border text-muted bg-white rounded-circle"></i>
                        </div>
                    </div>
                    <!-- posts -->
                    <div class="m-0 p-0">
                        <!-- P 1 -->
                        <div class="shadow bg-white m-0 rounded my-2" style="min-height: 600px;">
                            <!-- head -->
                            <div class="  d-flex px-3 mt-3 pt-2 justify-content-between align-items-center">
                                <div class="d-flex pt-2 ">
                                    <!-- avatar -->
                                    <div class="rounded rounded-3   position-relative "
                                        style="width: 40px; height:40px ; object-fit: cover;">
                                        <img src="https://i.ibb.co/HNHtx1B/96234633-931037977356835-265102200601051136-n.jpg"
                                            class="rounded rounded-3 " style="width: 34px; height:34px ;" alt="avatar">
                                        <!-- small avatar -->
                                        <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                            style="width: 23px; height: 23px; left:60%; top: 60%;">
                                            <img src="https://i.ibb.co/HCV2MR5/download-2.jpg"
                                                class="position-absolute border border-white rounded-circle "
                                                style="width: 28px; height: 28px; object-fit: cover;">
                                        </span>

                                    </div>
                                    <div class="d-flex flex-column justify-content-between align-items-center">
                                        <span class="m-0 px-2 fw-bold fs-7 popover-min-width:600px  p-0" type="button">Memes Wale</span>
                                        <span class="m-0 fs-7 text-muted p-0 w-100 ps-2 align-items-start text-start"
                                            data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true"
                                            data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" style="min-width:300px; height:300px;">
                      <div class="align-items-center popover-body d-flex p-2" >
                        <img src="https://i.ibb.co/HCV2MR5/download-2.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
                      </div>
                      <div class="p-2">
                        <h5 class="m-1 py-1">Mark Z.</h5>
                        <div class="d-flex">
                          <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                          <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
                        </div>
                        <div class="d-flex ">
                          <i class="fas fa-graduation-cap m-1 text-muted"></i>
                          <p>Studies at MIT</p>
                        </div>
                      </div>
                    </div>' type="button">Mark Z</span>

                                    </div>

                                </div>
                                <div class="d-flex pt-2">
                                    <div
                                        class="rounded-circle d-flex bg-white hoverLight justify-content-center align-items-center mx-2"
                                        type="button" style="width: 35px; height: 35px;">
                                        <i class="fa-solid text-muted fa-lg fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mx-3 m-0 mb-1 p-0 fs-7">"Caption"</p>
                            <!-- body -->
                            <div class="m-0 p-0">
                                <hr class="m-0 p-0 text-muted">
                                <img class=" w-100" style="height: 650px; object-fit:cover !important;"
                                    src="https://i.ibb.co/xjnZsQR/photo-1650599811699-a531af8496dd.jpg"
                                    alt="photo-1650599811699-a531af8496dd" border="0">
                                <hr class="m-0 p-0 text-muted">
                                <!-- reaction -->
                                <div class="p-o d-flex justify-content-between text-muted align-items-center">
                                    <div class="p-2 d-flex  position-relative  align-items-start">
                                        <!-- heart -->
                                        <div class="d-flex ps-2 fs-6 m-0 p-0 " type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Mark Z. and 6k others">&#10084;</div>
                                        <!-- like -->
                                        <div class="d-flex  fs-6  position-relative" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="John and 2k others"> &#128077;</div>
                                        <!-- haha -->
                                        <div class="d-flex  fs-6 m-0 p-0 " type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Mark Z. and 20 others">&#128518;</div>

                                        <div class="d-flex  fs-6 text-muted px-1 position-relative" type="button"> 8k</div>
                                    </div>
                                    <div class="px-3">
                                        <a href="#" class="text-decoration-none text-muted " type="button">50 Comments</a>
                                    </div>
                                </div>
                                <hr class="text-muted mx-2 m-0 p-0 ">
                                <!-- like/comment -->
                                <div class="p-2 d-flex">
                                    <div class="rounded hoverLight w-50 text-muted text-center fs-6 p-1 fw-bold" type="button"><i
                                            class="fa-solid me-2 fa-thumbs-up"></i>Like
                                    </div>
                                    <div class="rounded hoverLight w-50 text-muted text-center fs-6 p-1 fw-bold" type="button"><i
                                            class="fa-solid me-2 fa-comment"></i>Comment
                                    </div>
                                </div>
                                <hr class="text-muted mx-2 m-0 p-0 ">

                                <div class="d-flex justify-content-between m-1 px-3 ">
                                    <div class="" type="button">
                                        <a href="#" class="txt text-muted text-decoration-none" data-bs-toggle="collapse"
                                            data-bs-target="#allComments" aria-expanded="false" aria-controls="allComments">View previous
                                            7 comments</a>
                                    </div>

                                    <div class="text-muted" type="button" type="button" id="allComments" data-bs-toggle="dropdown"
                                        aria-expanded="true">All Comments <i class="fa-solid fa-caret-down"></i></div>
                                </div>
                                <!-- all comment button -->
                                <div class="dropdown">
                                    <ul class="dropdown-menu" aria-labelledby="allComments">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <hr class="text-muted mx-2 m-0 p-0 ">
                                <!-- all comments -->
                                <div class="m-2 p-1 ">
                                    <!-- c 1 -->
                                    <div class="d-flex my-2">
                                        <!-- avatar -->
                                        <div class="rounded-circle m-0 p-0 ">
                                            <img src="https://randomuser.me/api/portraits/women/49.jpg" class="rounded-circle m-0 p-0"
                                                style="width: 32px; height: 32px; object-fit: cover;" alt="avatar">
                                        </div>
                                        <!-- name and comment -->
                                        <div class="">
                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                <div class="d-flex flex-column m-1">
                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                    <span class="m-0 p-0 text-dark ">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </div>
                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                <div class="mx-2" type="button">1d</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- c 2 -->
                                    <div class="d-flex my-2">
                                        <!-- avatar -->
                                        <div class="rounded-circle m-0 p-0 ">
                                            <img src="https://randomuser.me/api/portraits/women/48.jpg" class="rounded-circle m-0 p-0"
                                                style="width: 32px; height: 32px; object-fit: cover;" alt="avatar">
                                        </div>
                                        <!-- name and comment -->
                                        <div class="">
                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                <div class="d-flex flex-column m-1">
                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                    <span class="m-0 p-0 text-dark ">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Ipsum, assumenda.</span>
                                                </div>
                                            </div>
                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                <div class="mx-2" type="button">1d</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- c 3 -->
                                    <div class="d-flex my-2">
                                        <!-- avatar -->
                                        <div class="rounded-circle m-0 p-0 ">
                                            <img src="https://i.ibb.co/TgP0sKm/Mark-Zuckerberg-F8-2019-Keynote-32830578717-cropped.jpg"
                                                class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                alt="avatar">
                                        </div>
                                        <!-- name and comment -->
                                        <div class="">
                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                <div class="d-flex flex-column m-1">
                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                    <span class="m-0 p-0 text-dark ">Tha's Great. Keep it up.</span>
                                                </div>
                                            </div>
                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                <div class="mx-2" type="button">1d</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- all comments accordion dd -->
                                    <div class="accordion" id="allCommentsDD">
                                        <div class="accordion-item border-0 m-0">
                                            <div id="allComments" class="accordion-collapse collapse border-0 m-0 "
                                                aria-labelledby="headingOne" data-bs-parent="#allCommentsDD">
                                                <div class="accordion-body border-0 m-0 p-1">
                                                    <!-- c 1 -->
                                                    <div class="d-flex my-2">
                                                        <!-- avatar -->
                                                        <div class="rounded-circle m-0 p-0 ">
                                                            <img src="https://randomuser.me/api/portraits/women/49.jpg"
                                                                class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                                alt="avatar">
                                                        </div>
                                                        <!-- name and comment -->
                                                        <div class="">
                                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                                <div class="d-flex flex-column m-1">
                                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                    <span class="m-0 p-0 text-dark ">Lorem ipsum dolor sit.</span>
                                                                </div>
                                                            </div>
                                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                                <div class="mx-2" type="button">1d</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- c 2 -->
                                                    <div class="d-flex my-2">
                                                        <!-- avatar -->
                                                        <div class="rounded-circle m-0 p-0 ">
                                                            <img src="https://randomuser.me/api/portraits/women/48.jpg"
                                                                class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                                alt="avatar">
                                                        </div>
                                                        <!-- name and comment -->
                                                        <div class="">
                                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                                <div class="d-flex flex-column m-1">
                                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                    <span class="m-0 p-0 text-dark ">Lorem, ipsum dolor sit amet consectetur
                                                                        adipisicing elit. Ipsum, assumenda.</span>
                                                                </div>
                                                            </div>
                                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                                <div class="mx-2" type="button">1d</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- c 3 -->
                                                    <div class="d-flex my-2">
                                                        <!-- avatar -->
                                                        <div class="rounded-circle m-0 p-0 ">
                                                            <img
                                                                src="https://i.ibb.co/TgP0sKm/Mark-Zuckerberg-F8-2019-Keynote-32830578717-cropped.jpg"
                                                                class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                                alt="avatar">
                                                        </div>
                                                        <!-- name and comment -->
                                                        <div class="">
                                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                                <div class="d-flex flex-column m-1">
                                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                    <span class="m-0 p-0 text-dark ">Tha's Great. Keep it up.</span>
                                                                </div>
                                                            </div>
                                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                                <div class="mx-2" type="button">1d</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- P 2 -->
                        <div class="shadow bg-white m-0 rounded my-2" style="min-height: 600px;">
                            <!-- head -->
                            <div class="  d-flex px-3 mt-3 pt-2 justify-content-between align-items-center">
                                <div class="d-flex pt-2 ">
                                    <!-- avatar -->

                                    <div class="rounded-circle ">
                                        <img src="https://i.ibb.co/L6sKHWs/oppo-h-JQi0y-RQQzk-unsplash.jpg" class="rounded-circle "
                                            style="width: 34px; height:34px ; object-fit: cover;" alt="avatar">
                                    </div>
                                    <div class="d-flex flex-column justify-content-between align-items-start">

                                        <span class="m-0 fs-7  fw-bold p-0 w-100 ps-2 align-items-start text-start"
                                            data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true"
                                            data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" style="min-width:300px; height:300px;">
                      <div class="align-items-center popover-body d-flex p-2" >
                        <img src="https://i.ibb.co/HCV2MR5/download-2.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
                      </div>
                      <div class="p-2">
                        <h5 class="m-1 py-1">Mark Z.</h5>
                        <div class="d-flex">
                          <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                          <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
                        </div>
                        <div class="d-flex ">
                          <i class="fas fa-graduation-cap m-1 text-muted"></i>
                          <p>Studies at MIT</p>
                        </div>
                      </div>
                    </div>' type="button">Michael Dam</span>
                                        <span class="m-0 px-2 text-muted fs-7 popover-min-width:600px  p-0" type="button">
                                            1d &#8226; &#127758;
                                        </span>

                                    </div>

                                </div>
                                <div class="d-flex pt-2">
                                    <div
                                        class="rounded-circle d-flex bg-white hoverLight justify-content-center align-items-center mx-2"
                                        type="button" style="width: 35px; height: 35px;">
                                        <i class="fa-solid text-muted fa-lg fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mx-3 m-0 mb-1 p-0 fs-7">"Caption"</p>
                            <!-- body -->
                            <div class="m-0 p-0">
                                <hr class="m-0 p-0 text-muted">
                                <img class=" w-100" style="height: 650px; object-fit:cover !important;"
                                    src="https://i.ibb.co/CK8Rqf6/allyssa-sayers-znu-Q3xdyn-Oo-unsplash.jpg" border="0">
                                <hr class="m-0 p-0 text-muted">
                                <!-- reaction -->
                                <div class="p-o d-flex justify-content-between text-muted align-items-center">
                                    <div class="p-2 d-flex  position-relative  align-items-start">
                                        <!-- heart -->
                                        <div class="d-flex ps-2 fs-6 m-0 p-0 " type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Mark Z. and 6k others">&#10084;</div>

                                        <div class="d-flex  fs-6  position-relative" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="John and 2k others"> &#128077;</div>
                                        <!-- haha -->
                                        <div class="d-flex  fs-6 m-0 p-0 " type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Mark Z. and 15 others">&#128518;</div>
                                        <div class="d-flex  fs-6 text-muted px-1 position-relative" type="button"> 8k</div>
                                    </div>
                                    <div class="px-3">
                                        <a href="#" class="text-decoration-none text-muted " type="button">50 Comments</a>
                                    </div>
                                </div>
                                <hr class="text-muted mx-2 m-0 p-0 ">
                                <!-- like/comment -->
                                <div class="p-2 d-flex">
                                    <div class="rounded hoverLight w-50 text-muted text-center fs-6 p-1 fw-bold" type="button"><i
                                            class="fa-solid me-2 fa-thumbs-up"></i>Like
                                    </div>
                                    <div class="rounded hoverLight w-50 text-muted text-center fs-6 p-1 fw-bold" type="button"><i
                                            class="fa-solid me-2 fa-comment"></i>Comment
                                    </div>
                                </div>
                                <hr class="text-muted mx-2 m-0 p-0 ">

                                <div class="d-flex justify-content-between m-1 px-3 ">
                                    <div class="" type="button">
                                        <a href="#" class="txt text-muted text-decoration-none" data-bs-toggle="collapse"
                                            data-bs-target="#allComments" aria-expanded="false" aria-controls="allComments">View previous
                                            7 comments</a>
                                    </div>

                                    <div class="text-muted" type="button" type="button" id="allComments" data-bs-toggle="dropdown"
                                        aria-expanded="true">All Comments <i class="fa-solid fa-caret-down"></i></div>
                                </div>
                                <!-- all comment button -->
                                <div class="dropdown">
                                    <ul class="dropdown-menu" aria-labelledby="allComments">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <hr class="text-muted mx-2 m-0 p-0 ">
                                <!-- all comments -->
                                <div class="m-2 p-1 ">
                                    <!-- c 1 -->
                                    <div class="d-flex my-2">
                                        <!-- avatar -->
                                        <div class="rounded-circle m-0 p-0 ">
                                            <img src="https://randomuser.me/api/portraits/women/49.jpg" class="rounded-circle m-0 p-0"
                                                style="width: 32px; height: 32px; object-fit: cover;" alt="avatar">
                                        </div>
                                        <!-- name and comment -->
                                        <div class="">
                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                <div class="d-flex flex-column m-1">
                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                    <span class="m-0 p-0 text-dark ">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </div>
                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                <div class="mx-2" type="button">1d</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- c 2 -->
                                    <div class="d-flex my-2">
                                        <!-- avatar -->
                                        <div class="rounded-circle m-0 p-0 ">
                                            <img src="https://randomuser.me/api/portraits/women/48.jpg" class="rounded-circle m-0 p-0"
                                                style="width: 32px; height: 32px; object-fit: cover;" alt="avatar">
                                        </div>
                                        <!-- name and comment -->
                                        <div class="">
                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                <div class="d-flex flex-column m-1">
                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                    <span class="m-0 p-0 text-dark ">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Ipsum, assumenda.</span>
                                                </div>
                                            </div>
                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                <div class="mx-2" type="button">1d</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- c 3 -->
                                    <div class="d-flex my-2">
                                        <!-- avatar -->
                                        <div class="rounded-circle m-0 p-0 ">
                                            <img src="https://i.ibb.co/TgP0sKm/Mark-Zuckerberg-F8-2019-Keynote-32830578717-cropped.jpg"
                                                class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                alt="avatar">
                                        </div>
                                        <!-- name and comment -->
                                        <div class="">
                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                <div class="d-flex flex-column m-1">
                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                    <span class="m-0 p-0 text-dark ">Tha's Great. Keep it up.</span>
                                                </div>
                                            </div>
                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                <div class="mx-2" type="button">1d</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- all comments accordion dd -->
                                    <div class="accordion" id="allCommentsDD">
                                        <div class="accordion-item border-0 m-0">
                                            <div id="allComments" class="accordion-collapse collapse border-0 m-0 "
                                                aria-labelledby="headingOne" data-bs-parent="#allCommentsDD">
                                                <div class="accordion-body border-0 m-0 p-1">
                                                    <!-- c 1 -->
                                                    <div class="d-flex my-2">
                                                        <!-- avatar -->
                                                        <div class="rounded-circle m-0 p-0 ">
                                                            <img src="https://randomuser.me/api/portraits/women/49.jpg"
                                                                class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                                alt="avatar">
                                                        </div>
                                                        <!-- name and comment -->
                                                        <div class="">
                                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                                <div class="d-flex flex-column m-1">
                                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                    <span class="m-0 p-0 text-dark ">Lorem ipsum dolor sit.</span>
                                                                </div>
                                                            </div>
                                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                                <div class="mx-2" type="button">1d</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- c 2 -->
                                                    <div class="d-flex my-2">
                                                        <!-- avatar -->
                                                        <div class="rounded-circle m-0 p-0 ">
                                                            <img src="https://randomuser.me/api/portraits/women/48.jpg"
                                                                class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                                alt="avatar">
                                                        </div>
                                                        <!-- name and comment -->
                                                        <div class="">
                                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                                <div class="d-flex flex-column m-1">
                                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                    <span class="m-0 p-0 text-dark ">Lorem, ipsum dolor sit amet consectetur
                                                                        adipisicing elit. Ipsum, assumenda.</span>
                                                                </div>
                                                            </div>
                                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                                <div class="mx-2" type="button">1d</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- c 3 -->
                                                    <div class="d-flex my-2">
                                                        <!-- avatar -->
                                                        <div class="rounded-circle m-0 p-0 ">
                                                            <img
                                                                src="https://i.ibb.co/TgP0sKm/Mark-Zuckerberg-F8-2019-Keynote-32830578717-cropped.jpg"
                                                                class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                                alt="avatar">
                                                        </div>
                                                        <!-- name and comment -->
                                                        <div class="">
                                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                                <div class="d-flex flex-column m-1">
                                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                    <span class="m-0 p-0 text-dark ">Tha's Great. Keep it up.</span>
                                                                </div>
                                                            </div>
                                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                                <div class="mx-2" type="button">1d</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- P 3 -->
                        <div class="shadow bg-white m-0 rounded my-2" style="min-height: 600px;">
                            <!-- head -->
                            <div class="  d-flex px-3 mt-3 pt-2 justify-content-between align-items-center">
                                <div class="d-flex pt-2 ">
                                    <!-- avatar -->
                                    <div class="rounded-circle ">
                                        <img src="https://i.ibb.co/48cQJSq/oppo-ksm0qs-Jcx-Xk-unsplash.jpg" class="rounded-circle "
                                            style="width: 34px; height:34px ; object-fit: cover;" alt="avatar">
                                    </div>
                                    <div class="d-flex flex-column justify-content-between align-items-start">

                                        <span class="m-0 fs-7  fw-bold p-0 w-100 ps-2 align-items-start text-start"
                                            data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true"
                                            data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" style="min-width:300px; height:300px;">
                      <div class="align-items-center popover-body d-flex p-2" >
                        <img src="https://i.ibb.co/48cQJSq/oppo-ksm0qs-Jcx-Xk-unsplash.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
                      </div>
                      <div class="p-2">
                        <h5 class="m-1 py-1">Kirill Balobanov
                        </h5>
                        <div class="d-flex">
                          <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                          <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
                        </div>
                        <div class="d-flex ">
                          <i class="fas fa-graduation-cap m-1 text-muted"></i>
                          <p>Studies at MIT</p>
                        </div>
                      </div>
                    </div>' type="button">Kirill Balobanov
                                        </span>
                                        <span class="m-0 px-2 text-muted fs-7 popover-min-width:600px  p-0" type="button">
                                            3d
                                        </span>

                                    </div>

                                </div>
                                <div class="d-flex pt-2">
                                    <div
                                        class="rounded-circle d-flex bg-white hoverLight justify-content-center align-items-center mx-2"
                                        type="button" style="width: 35px; height: 35px;">
                                        <i class="fa-solid text-muted fa-lg fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- captiion -->
                            <p class="mx-3 m-0 mb-1 p-0 fs-7">"Caption"</p>
                            <!-- body -->
                            <div class="m-0 p-0">
                                <hr class="m-0 p-0 text-muted">
                                <img class=" w-100" style="height: 650px; object-fit:cover !important;"
                                    src="https://i.ibb.co/dQcsFZC/alexander-grigoryev-lk-Ya33goc-BA-unsplash-1.jpg" border="0">
                                <hr class="m-0 p-0 text-muted">
                                <!-- reaction -->
                                <div class="p-o d-flex justify-content-between text-muted align-items-center">
                                    <div class="p-2 d-flex  position-relative  align-items-start">
                                        <!-- heart -->
                                        <div class="d-flex ps-2 fs-6 m-0 p-0 " type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Mark Z. and 6k others">&#10084;</div>

                                        <div class="d-flex  fs-6  position-relative" type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="John and 2k others"> &#128077;</div>
                                        <!-- haha -->
                                        <div class="d-flex  fs-6 m-0 p-0 " type="button" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Mark Z. and 5 others">&#128518;</div>
                                        <div class="d-flex  fs-6 text-muted px-1 position-relative" type="button"> 8k</div>
                                    </div>
                                    <div class="px-3">
                                        <a href="#" class="text-decoration-none text-muted " type="button">50 Comments</a>
                                    </div>
                                </div>
                                <hr class="text-muted mx-2 m-0 p-0 ">
                                <!-- like/comment -->
                                <div class="p-2 d-flex">
                                    <div class="rounded hoverLight w-50 text-muted text-center fs-6 p-1 fw-bold" type="button"><i
                                            class="fa-solid me-2 fa-thumbs-up"></i>Like
                                    </div>
                                    <div class="rounded hoverLight w-50 text-muted text-center fs-6 p-1 fw-bold" type="button"><i
                                            class="fa-solid me-2 fa-comment"></i>Comment
                                    </div>
                                </div>
                                <hr class="text-muted mx-2 m-0 p-0 ">
                                <div class="d-flex justify-content-between m-1 px-3 ">
                                    <div class="" type="button">
                                        <a href="#" class="txt text-muted text-decoration-none" data-bs-toggle="collapse"
                                            data-bs-target="#allComments" aria-expanded="false" aria-controls="allComments">View previous
                                            7 comments</a>
                                    </div>

                                    <div class="text-muted" type="button" type="button" id="allComments" data-bs-toggle="dropdown"
                                        aria-expanded="true">All Comments <i class="fa-solid fa-caret-down"></i></div>
                                </div>
                                <!-- all comment button -->
                                <div class="dropdown">
                                    <ul class="dropdown-menu" aria-labelledby="allComments">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                                <hr class="text-muted mx-2 m-0 p-0 ">
                                <!-- all comments -->
                                <div class="m-2 p-1 ">
                                    <!-- c 1 -->
                                    <div class="d-flex my-2">
                                        <!-- avatar -->
                                        <div class="rounded-circle m-0 p-0 ">
                                            <img src="https://randomuser.me/api/portraits/women/49.jpg" class="rounded-circle m-0 p-0"
                                                style="width: 32px; height: 32px; object-fit: cover;" alt="avatar">
                                        </div>
                                        <!-- name and comment -->
                                        <div class="">
                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                <div class="d-flex flex-column m-1">
                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                    <span class="m-0 p-0 text-dark ">Lorem ipsum dolor sit.</span>
                                                </div>
                                            </div>
                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                <div class="mx-2" type="button">1d</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- c 2 -->
                                    <div class="d-flex my-2">
                                        <!-- avatar -->
                                        <div class="rounded-circle m-0 p-0 ">
                                            <img src="https://randomuser.me/api/portraits/women/48.jpg" class="rounded-circle m-0 p-0"
                                                style="width: 32px; height: 32px; object-fit: cover;" alt="avatar">
                                        </div>
                                        <!-- name and comment -->
                                        <div class="">
                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                <div class="d-flex flex-column m-1">
                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                    <span class="m-0 p-0 text-dark ">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Ipsum, assumenda.</span>
                                                </div>
                                            </div>
                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                <div class="mx-2" type="button">1d</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- c 3 -->
                                    <div class="d-flex my-2">
                                        <!-- avatar -->
                                        <div class="rounded-circle m-0 p-0 ">
                                            <img src="https://i.ibb.co/TgP0sKm/Mark-Zuckerberg-F8-2019-Keynote-32830578717-cropped.jpg"
                                                class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                alt="avatar">
                                        </div>
                                        <!-- name and comment -->
                                        <div class="">
                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                <div class="d-flex flex-column m-1">
                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                    <span class="m-0 p-0 text-dark ">Tha's Great. Keep it up.</span>
                                                </div>
                                            </div>
                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                <div class="mx-2" type="button">1d</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- all comments accordion dd -->
                                    <div class="accordion" id="allCommentsDD">
                                        <div class="accordion-item border-0 m-0">
                                            <div id="allComments" class="accordion-collapse collapse border-0 m-0 "
                                                aria-labelledby="headingOne" data-bs-parent="#allCommentsDD">
                                                <div class="accordion-body border-0 m-0 p-1">
                                                    <!-- c 1 -->
                                                    <div class="d-flex my-2">
                                                        <!-- avatar -->
                                                        <div class="rounded-circle m-0 p-0 ">
                                                            <img src="https://randomuser.me/api/portraits/women/49.jpg"
                                                                class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                                alt="avatar">
                                                        </div>
                                                        <!-- name and comment -->
                                                        <div class="">
                                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                                <div class="d-flex flex-column m-1">
                                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                    <span class="m-0 p-0 text-dark ">Lorem ipsum dolor sit.</span>
                                                                </div>
                                                            </div>
                                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                                <div class="mx-2" type="button">1d</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- c 2 -->
                                                    <div class="d-flex my-2">
                                                        <!-- avatar -->
                                                        <div class="rounded-circle m-0 p-0 ">
                                                            <img src="https://randomuser.me/api/portraits/women/48.jpg"
                                                                class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                                alt="avatar">
                                                        </div>
                                                        <!-- name and comment -->
                                                        <div class="">
                                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                                <div class="d-flex flex-column m-1">
                                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                    <span class="m-0 p-0 text-dark ">Lorem, ipsum dolor sit amet consectetur
                                                                        adipisicing elit. Ipsum, assumenda.</span>
                                                                </div>
                                                            </div>
                                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                                <div class="mx-2" type="button">1d</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- c 3 -->
                                                    <div class="d-flex my-2">
                                                        <!-- avatar -->
                                                        <div class="rounded-circle m-0 p-0 ">
                                                            <img
                                                                src="https://i.ibb.co/TgP0sKm/Mark-Zuckerberg-F8-2019-Keynote-32830578717-cropped.jpg"
                                                                class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                                alt="avatar">
                                                        </div>
                                                        <!-- name and comment -->
                                                        <div class="">
                                                            <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                                <div class="d-flex flex-column m-1">
                                                                    <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                    <span class="m-0 p-0 text-dark ">Tha's Great. Keep it up.</span>
                                                                </div>
                                                            </div>
                                                            <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                                <div class="mx-2 fw-bold" type="button">Like</div>
                                                                <div class="mx-2 fw-bold" type="button">Reply</div>
                                                                <div class="mx-2 fw-bold" type="button">Share</div>
                                                                <div class="mx-2" type="button">1d</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- P 4 -->
                        <div class="shadow bg-white m-0 rounded my-2" style="min-height: 600px;">
                            <!-- head -->
                            <div class="  d-flex px-3 mt-3 pt-2 justify-content-between align-items-center">
                                <div class="d-flex pt-2 ">
                                    <!-- avatar -->
                                    <div class="rounded rounded-3   position-relative "
                                        style="width: 40px; height:40px ; object-fit: cover;">
                                        <img src="https://i.ibb.co/HNHtx1B/96234633-931037977356835-265102200601051136-n.jpg"
                                            class="rounded rounded-3 " style="width: 34px; height:34px ;" alt="avatar">
                                        <!-- small avatar -->
                                        <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                            style="width: 23px; height: 23px; left:60%; top: 60%;">
                                            <img src="https://i.ibb.co/HCV2MR5/download-2.jpg"
                                                class="position-absolute border border-white rounded-circle "
                                                style="width: 28px; height: 28px; object-fit: cover;">
                                        </span>

                                    </div>
                                    <div class="d-flex flex-column justify-content-between align-items-center">
                                        <span class="m-0 px-2 fw-bold fs-7 popover-min-width:600px  p-0" type="button">Memes Wale</span>
                                        <span class="m-0 fs-7 text-muted p-0 w-100 ps-2 align-items-start text-start"
                                            data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true"
                                            data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" style="min-width:300px; height:300px;">
                      <div class="align-items-center popover-body d-flex p-2" >
                        <img src="https://i.ibb.co/HCV2MR5/download-2.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
                      </div>
                      <div class="p-2">
                        <h5 class="m-1 py-1">Mark Z.</h5>
                        <div class="d-flex">
                          <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                          <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
                        </div>
                        <div class="d-flex ">
                          <i class="fas fa-graduation-cap m-1 text-muted"></i>
                          <p>Studies at MIT</p>
                        </div>
                      </div>
                    </div>' type="button">Mark Z</span>

                                    </div>

                                </div>
                                <div class="d-flex pt-2">
                                    <div
                                        class="rounded-circle d-flex bg-white hoverLight justify-content-center align-items-center mx-2"
                                        type="button" style="width: 35px; height: 35px;">
                                        <i class="fa-solid text-muted fa-lg fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mx-3 m-0 mb-1 p-0 fs-7">"Caption"</p>
                            <!-- body -->
                            <hr class="m-0 p-0 text-muted">
                            <img class=" w-100" style="height: 650px; object-fit:cover !important;"
                                src="https://i.ibb.co/xjnZsQR/photo-1650599811699-a531af8496dd.jpg"
                                alt="photo-1650599811699-a531af8496dd" border="0">
                            <hr class="m-0 p-0 text-muted">
                            <!-- reaction -->
                            <div class="p-o d-flex justify-content-between text-muted align-items-center">
                                <div class="p-2 d-flex  position-relative  align-items-start">
                                    <!-- haha -->
                                    <div class="d-flex ps-2 fs-6 m-0 p-0 " type="button" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Mark Z. and 6k others">&#128518;</div>
                                    <div class="d-flex  fs-6  position-relative" type="button" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="John and 2k others"> &#128077;</div>
                                    <div class="d-flex  fs-6 text-muted px-1 position-relative" type="button"> 8k</div>
                                </div>
                                <div class="px-3">
                                    <a href="#" class="text-decoration-none text-muted " type="button">50 Comments</a>
                                </div>
                            </div>
                            <hr class="text-muted mx-2 m-0 p-0 ">
                            <!-- like/comment -->
                            <div class="p-2 d-flex">
                                <div class="rounded hoverLight w-50 text-muted text-center fs-6 p-1 fw-bold" type="button"><i
                                        class="fa-solid me-2 fa-thumbs-up"></i>Like
                                </div>
                                <div class="rounded hoverLight w-50 text-muted text-center fs-6 p-1 fw-bold" type="button"><i
                                        class="fa-solid me-2 fa-comment"></i>Comment
                                </div>
                            </div>
                            <hr class="text-muted mx-2 m-0 p-0 ">

                            <div class="d-flex justify-content-between m-1 px-3 ">
                                <div class="" type="button">
                                    <a href="#" class="txt text-muted text-decoration-none" data-bs-toggle="collapse"
                                        data-bs-target="#allComments" aria-expanded="false" aria-controls="allComments">View previous 7
                                        comments</a>
                                </div>

                                <div class="text-muted" type="button" type="button" id="allComments" data-bs-toggle="dropdown"
                                    aria-expanded="true">All Comments <i class="fa-solid fa-caret-down"></i></div>
                            </div>
                            <!-- all comment button -->
                            <div class="dropdown">
                                <ul class="dropdown-menu" aria-labelledby="allComments">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <hr class="text-muted mx-2 m-0 p-0 ">
                            <!-- all comments -->
                            <div class="m-2 p-1 ">
                                <!-- c 1 -->
                                <div class="d-flex my-2">
                                    <!-- avatar -->
                                    <div class="rounded-circle m-0 p-0 ">
                                        <img src="https://randomuser.me/api/portraits/women/49.jpg" class="rounded-circle m-0 p-0"
                                            style="width: 32px; height: 32px; object-fit: cover;" alt="avatar">
                                    </div>
                                    <!-- name and comment -->
                                    <div class="">
                                        <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                            <div class="d-flex flex-column m-1">
                                                <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                <span class="m-0 p-0 text-dark ">Lorem ipsum dolor sit.</span>
                                            </div>
                                        </div>
                                        <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                            <div class="mx-2 fw-bold" type="button">Like</div>
                                            <div class="mx-2 fw-bold" type="button">Reply</div>
                                            <div class="mx-2 fw-bold" type="button">Share</div>
                                            <div class="mx-2" type="button">1d</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- c 2 -->
                                <div class="d-flex my-2">
                                    <!-- avatar -->
                                    <div class="rounded-circle m-0 p-0 ">
                                        <img src="https://randomuser.me/api/portraits/women/48.jpg" class="rounded-circle m-0 p-0"
                                            style="width: 32px; height: 32px; object-fit: cover;" alt="avatar">
                                    </div>
                                    <!-- name and comment -->
                                    <div class="">
                                        <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                            <div class="d-flex flex-column m-1">
                                                <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                <span class="m-0 p-0 text-dark ">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                    Ipsum, assumenda.</span>
                                            </div>
                                        </div>
                                        <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                            <div class="mx-2 fw-bold" type="button">Like</div>
                                            <div class="mx-2 fw-bold" type="button">Reply</div>
                                            <div class="mx-2 fw-bold" type="button">Share</div>
                                            <div class="mx-2" type="button">1d</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- c 3 -->
                                <div class="d-flex my-2">
                                    <!-- avatar -->
                                    <div class="rounded-circle m-0 p-0 ">
                                        <img src="https://i.ibb.co/TgP0sKm/Mark-Zuckerberg-F8-2019-Keynote-32830578717-cropped.jpg"
                                            class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                            alt="avatar">
                                    </div>
                                    <!-- name and comment -->
                                    <div class="">
                                        <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                            <div class="d-flex flex-column m-1">
                                                <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                <span class="m-0 p-0 text-dark ">Tha's Great. Keep it up.</span>
                                            </div>
                                        </div>
                                        <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                            <div class="mx-2 fw-bold" type="button">Like</div>
                                            <div class="mx-2 fw-bold" type="button">Reply</div>
                                            <div class="mx-2 fw-bold" type="button">Share</div>
                                            <div class="mx-2" type="button">1d</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- all comments accordion dd -->
                                <div class="accordion" id="allCommentsDD">
                                    <div class="accordion-item border-0 m-0">
                                        <div id="allComments" class="accordion-collapse collapse border-0 m-0 "
                                            aria-labelledby="headingOne" data-bs-parent="#allCommentsDD">
                                            <div class="accordion-body border-0 m-0 p-1">
                                                <!-- c 1 -->
                                                <div class="d-flex my-2">
                                                    <!-- avatar -->
                                                    <div class="rounded-circle m-0 p-0 ">
                                                        <img src="https://randomuser.me/api/portraits/women/49.jpg"
                                                            class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                            alt="avatar">
                                                    </div>
                                                    <!-- name and comment -->
                                                    <div class="">
                                                        <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                            <div class="d-flex flex-column m-1">
                                                                <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                <span class="m-0 p-0 text-dark ">Lorem ipsum dolor sit.</span>
                                                            </div>
                                                        </div>
                                                        <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                            <div class="mx-2 fw-bold" type="button">Like</div>
                                                            <div class="mx-2 fw-bold" type="button">Reply</div>
                                                            <div class="mx-2 fw-bold" type="button">Share</div>
                                                            <div class="mx-2" type="button">1d</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- c 2 -->
                                                <div class="d-flex my-2">
                                                    <!-- avatar -->
                                                    <div class="rounded-circle m-0 p-0 ">
                                                        <img src="https://randomuser.me/api/portraits/women/48.jpg"
                                                            class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                            alt="avatar">
                                                    </div>
                                                    <!-- name and comment -->
                                                    <div class="">
                                                        <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                            <div class="d-flex flex-column m-1">
                                                                <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                <span class="m-0 p-0 text-dark ">Lorem, ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Ipsum, assumenda.</span>
                                                            </div>
                                                        </div>
                                                        <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                            <div class="mx-2 fw-bold" type="button">Like</div>
                                                            <div class="mx-2 fw-bold" type="button">Reply</div>
                                                            <div class="mx-2 fw-bold" type="button">Share</div>
                                                            <div class="mx-2" type="button">1d</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- c 3 -->
                                                <div class="d-flex my-2">
                                                    <!-- avatar -->
                                                    <div class="rounded-circle m-0 p-0 ">
                                                        <img
                                                            src="https://i.ibb.co/TgP0sKm/Mark-Zuckerberg-F8-2019-Keynote-32830578717-cropped.jpg"
                                                            class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                            alt="avatar">
                                                    </div>
                                                    <!-- name and comment -->
                                                    <div class="">
                                                        <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                            <div class="d-flex flex-column m-1">
                                                                <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                <span class="m-0 p-0 text-dark ">Tha's Great. Keep it up.</span>
                                                            </div>
                                                        </div>
                                                        <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                            <div class="mx-2 fw-bold" type="button">Like</div>
                                                            <div class="mx-2 fw-bold" type="button">Reply</div>
                                                            <div class="mx-2 fw-bold" type="button">Share</div>
                                                            <div class="mx-2" type="button">1d</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- P 5 -->
                        <div class="shadow bg-white m-0 rounded my-2" style="min-height: 600px;">
                            <!-- head -->
                            <div class="  d-flex px-3 mt-3 pt-2 justify-content-between align-items-center">
                                <div class="d-flex pt-2 ">
                                    <!-- avatar -->
                                    <div class="rounded rounded-3   position-relative "
                                        style="width: 40px; height:40px ; object-fit: cover;">
                                        <img src="https://i.ibb.co/HNHtx1B/96234633-931037977356835-265102200601051136-n.jpg"
                                            class="rounded rounded-3 " style="width: 34px; height:34px ;" alt="avatar">
                                        <!-- small avatar -->
                                        <span class="position-absolute rounded-circle m-0 p-0 translate-middle bottom-0 "
                                            style="width: 23px; height: 23px; left:60%; top: 60%;">
                                            <img src="https://i.ibb.co/HCV2MR5/download-2.jpg"
                                                class="position-absolute border border-white rounded-circle "
                                                style="width: 28px; height: 28px; object-fit: cover;">
                                        </span>

                                    </div>
                                    <div class="d-flex flex-column justify-content-between align-items-center">
                                        <span class="m-0 px-2 fw-bold fs-7 popover-min-width:600px  p-0" type="button">Memes Wale</span>
                                        <span class="m-0 fs-7 text-muted p-0 w-100 ps-2 align-items-start text-start"
                                            data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-html="true"
                                            data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" style="min-width:300px; height:300px;">
                      <div class="align-items-center popover-body d-flex p-2" >
                        <img src="https://i.ibb.co/HCV2MR5/download-2.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
                      </div>
                      <div class="p-2">
                        <h5 class="m-1 py-1">Mark Z.</h5>
                        <div class="d-flex">
                          <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                          <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
                        </div>
                        <div class="d-flex ">
                          <i class="fas fa-graduation-cap m-1 text-muted"></i>
                          <p>Studies at MIT</p>
                        </div>
                      </div>
                    </div>' type="button">Mark Z</span>

                                    </div>

                                </div>
                                <div class="d-flex pt-2">
                                    <div
                                        class="rounded-circle d-flex bg-white hoverLight justify-content-center align-items-center mx-2"
                                        type="button" style="width: 35px; height: 35px;">
                                        <i class="fa-solid text-muted fa-lg fa-ellipsis"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mx-3 m-0 mb-1 p-0 fs-7">"Caption"</p>
                            <!-- body -->
                            <hr class="m-0 p-0 text-muted">
                            <img class=" w-100" style="height: 650px; object-fit:cover !important;"
                                src="https://i.ibb.co/xjnZsQR/photo-1650599811699-a531af8496dd.jpg"
                                alt="photo-1650599811699-a531af8496dd" border="0">
                            <hr class="m-0 p-0 text-muted">
                            <!-- reaction -->
                            <div class="p-o d-flex justify-content-between text-muted align-items-center">
                                <div class="p-2 d-flex  position-relative  align-items-start">
                                    <!-- haha -->
                                    <div class="d-flex ps-2 fs-6 m-0 p-0 " type="button" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Mark Z. and 6k others">&#128518;</div>
                                    <div class="d-flex  fs-6  position-relative" type="button" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="John and 2k others"> &#128077;</div>
                                    <div class="d-flex  fs-6 text-muted px-1 position-relative" type="button"> 8k</div>
                                </div>
                                <div class="px-3">
                                    <a href="#" class="text-decoration-none text-muted " type="button">50 Comments</a>
                                </div>
                            </div>
                            <hr class="text-muted mx-2 m-0 p-0 ">
                            <!-- like/comment -->
                            <div class="p-2 d-flex">
                                <div class="rounded hoverLight w-50 text-muted text-center fs-6 p-1 fw-bold" type="button"><i
                                        class="fa-solid me-2 fa-thumbs-up"></i>Like
                                </div>
                                <div class="rounded hoverLight w-50 text-muted text-center fs-6 p-1 fw-bold" type="button"><i
                                        class="fa-solid me-2 fa-comment"></i>Comment
                                </div>
                            </div>
                            <hr class="text-muted mx-2 m-0 p-0 ">

                            <div class="d-flex justify-content-between m-1 px-3 ">
                                <div class="" type="button">
                                    <a href="#" class="txt text-muted text-decoration-none" data-bs-toggle="collapse"
                                        data-bs-target="#allComments" aria-expanded="false" aria-controls="allComments">View previous 7
                                        comments</a>
                                </div>

                                <div class="text-muted" type="button" type="button" id="allComments" data-bs-toggle="dropdown"
                                    aria-expanded="true">All Comments <i class="fa-solid fa-caret-down"></i></div>
                            </div>
                            <!-- all comment button -->
                            <div class="dropdown">
                                <ul class="dropdown-menu" aria-labelledby="allComments">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <hr class="text-muted mx-2 m-0 p-0 ">
                            <!-- all comments -->
                            <div class="m-2 p-1 ">
                                <!-- c 1 -->
                                <div class="d-flex my-2">
                                    <!-- avatar -->
                                    <div class="rounded-circle m-0 p-0 ">
                                        <img src="https://randomuser.me/api/portraits/women/49.jpg" class="rounded-circle m-0 p-0"
                                            style="width: 32px; height: 32px; object-fit: cover;" alt="avatar">
                                    </div>
                                    <!-- name and comment -->
                                    <div class="">
                                        <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                            <div class="d-flex flex-column m-1">
                                                <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                <span class="m-0 p-0 text-dark ">Lorem ipsum dolor sit.</span>
                                            </div>
                                        </div>
                                        <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                            <div class="mx-2 fw-bold" type="button">Like</div>
                                            <div class="mx-2 fw-bold" type="button">Reply</div>
                                            <div class="mx-2 fw-bold" type="button">Share</div>
                                            <div class="mx-2" type="button">1d</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- c 2 -->
                                <div class="d-flex my-2">
                                    <!-- avatar -->
                                    <div class="rounded-circle m-0 p-0 ">
                                        <img src="https://randomuser.me/api/portraits/women/48.jpg" class="rounded-circle m-0 p-0"
                                            style="width: 32px; height: 32px; object-fit: cover;" alt="avatar">
                                    </div>
                                    <!-- name and comment -->
                                    <div class="">
                                        <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                            <div class="d-flex flex-column m-1">
                                                <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                <span class="m-0 p-0 text-dark ">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                    Ipsum, assumenda.</span>
                                            </div>
                                        </div>
                                        <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                            <div class="mx-2 fw-bold" type="button">Like</div>
                                            <div class="mx-2 fw-bold" type="button">Reply</div>
                                            <div class="mx-2 fw-bold" type="button">Share</div>
                                            <div class="mx-2" type="button">1d</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- c 3 -->
                                <div class="d-flex my-2">
                                    <!-- avatar -->
                                    <div class="rounded-circle m-0 p-0 ">
                                        <img src="https://i.ibb.co/TgP0sKm/Mark-Zuckerberg-F8-2019-Keynote-32830578717-cropped.jpg"
                                            class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                            alt="avatar">
                                    </div>
                                    <!-- name and comment -->
                                    <div class="">
                                        <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                            <div class="d-flex flex-column m-1">
                                                <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                <span class="m-0 p-0 text-dark ">Tha's Great. Keep it up.</span>
                                            </div>
                                        </div>
                                        <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                            <div class="mx-2 fw-bold" type="button">Like</div>
                                            <div class="mx-2 fw-bold" type="button">Reply</div>
                                            <div class="mx-2 fw-bold" type="button">Share</div>
                                            <div class="mx-2" type="button">1d</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- all comments accordion dd -->
                                <div class="accordion" id="allCommentsDD">
                                    <div class="accordion-item border-0 m-0">
                                        <div id="allComments" class="accordion-collapse collapse border-0 m-0 "
                                            aria-labelledby="headingOne" data-bs-parent="#allCommentsDD">
                                            <div class="accordion-body border-0 m-0 p-1">
                                                <!-- c 1 -->
                                                <div class="d-flex my-2">
                                                    <!-- avatar -->
                                                    <div class="rounded-circle m-0 p-0 ">
                                                        <img src="https://randomuser.me/api/portraits/women/49.jpg"
                                                            class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                            alt="avatar">
                                                    </div>
                                                    <!-- name and comment -->
                                                    <div class="">
                                                        <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                            <div class="d-flex flex-column m-1">
                                                                <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                <span class="m-0 p-0 text-dark ">Lorem ipsum dolor sit.</span>
                                                            </div>
                                                        </div>
                                                        <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                            <div class="mx-2 fw-bold" type="button">Like</div>
                                                            <div class="mx-2 fw-bold" type="button">Reply</div>
                                                            <div class="mx-2 fw-bold" type="button">Share</div>
                                                            <div class="mx-2" type="button">1d</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- c 2 -->
                                                <div class="d-flex my-2">
                                                    <!-- avatar -->
                                                    <div class="rounded-circle m-0 p-0 ">
                                                        <img src="https://randomuser.me/api/portraits/women/48.jpg"
                                                            class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                            alt="avatar">
                                                    </div>
                                                    <!-- name and comment -->
                                                    <div class="">
                                                        <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                            <div class="d-flex flex-column m-1">
                                                                <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                <span class="m-0 p-0 text-dark ">Lorem, ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Ipsum, assumenda.</span>
                                                            </div>
                                                        </div>
                                                        <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                            <div class="mx-2 fw-bold" type="button">Like</div>
                                                            <div class="mx-2 fw-bold" type="button">Reply</div>
                                                            <div class="mx-2 fw-bold" type="button">Share</div>
                                                            <div class="mx-2" type="button">1d</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- c 3 -->
                                                <div class="d-flex my-2">
                                                    <!-- avatar -->
                                                    <div class="rounded-circle m-0 p-0 ">
                                                        <img
                                                            src="https://i.ibb.co/TgP0sKm/Mark-Zuckerberg-F8-2019-Keynote-32830578717-cropped.jpg"
                                                            class="rounded-circle m-0 p-0" style="width: 32px; height: 32px; object-fit: cover;"
                                                            alt="avatar">
                                                    </div>
                                                    <!-- name and comment -->
                                                    <div class="">
                                                        <div class="d-flex flex-column bg-gray mx-2 px-3 " style="border-radius: 18px;">
                                                            <div class="d-flex flex-column m-1">
                                                                <span class="m-0 p-0 text-dark fw-bold fs-7" type="button">Mark Z.</span>
                                                                <span class="m-0 p-0 text-dark ">Tha's Great. Keep it up.</span>
                                                            </div>
                                                        </div>
                                                        <div class="mx-2 p-0 d-flex justify-content-start fs-7 text-muted ">
                                                            <div class="mx-2 fw-bold" type="button">Like</div>
                                                            <div class="mx-2 fw-bold" type="button">Reply</div>
                                                            <div class="mx-2 fw-bold" type="button">Share</div>
                                                            <div class="mx-2" type="button">1d</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- =================== right sidebar / Chat box===================-->
            <div class="sideBar col-lg-3 d-none d-xxl-block sideBar" style="height: 730px;  ">
                <!-- sponsored -->
                <span class="p-0 d-flex justify-content-start text-muted  fs-5" style="font-weight: 500; ">Sponsored</span>
                <hr class="text-muted my-2 p-0">
                <!-- your pages -->
                <div class="d-flex align-items-center justify-content-between my-2">
                    <span class="p-0 d-flex text-muted justify-content-start  fs-5" style="font-weight: 500;">Your
                        Pages</span>
                    <!-- side menu -->
                    <div
                        class="d-flex text-muted align-items-center justify-content-center p-1 mx-2 bg-gray rounded-circle hoverDark"
                        style="height: 35px; width: 35px; " data-bs-toggle="dropdown" aria-expanded="false" type="button">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <!--  your page ddMenu -->
                    <div class="dropdown-menu shadow" style="width: 18em">
                        <!-- collapse -->
                        <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverLight"
                            type="button">

                            <div class="d-flex align-items-center justify-content-center p-1 mx-2 bg-gray rounded-circle"
                                style="height: 38px; width: 38px; object-fit: cover">
                                <i class="fa-solid fa-down-left-and-up-right-to-center"></i>
                            </div>
                            <div class="col mx-2">
                                <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Collapse Panel</span>
                            </div>
                        </div>
                        <hr class="text-muted m-1">
                        <!-- is It? -->
                        <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverLight"
                            type="button">

                            <img src="https://i.ibb.co/sjkyMHj/104426444-112499970508643-4838017725490327262-n.png" alt="avatar"
                                class="rounded-circle mx-2 me-2" style="width: 38px; height: 38px; object-fit: cover" />

                            <div class="col mx-2">
                                <span class="m-0 p-0 fs-6 " style="font-weight: 500;">is It?</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- is It? -->
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    type="button">

                    <img src="https://i.ibb.co/sjkyMHj/104426444-112499970508643-4838017725490327262-n.png" alt="avatar"
                        class="rounded-circle me-2" style="width: 38px; height: 38px; object-fit: cover" />

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">is It?</span>
                    </div>
                </div>
                <!-- create promotion -->
                <div class="d-flex ms-3 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    type="button">
                    <i class="fa-solid  text-muted fa-bullhorn"></i>
                    <div class="col mx-2">
                        <span class="m-0 text-muted p-0 fs-7 " style="font-weight: 500;">Create Promotion</span>
                    </div>
                </div>

                <hr class="text-muted my-2 p-0">

                <!-- Contacts -->
                <div class="d-flex align-items-center justify-content-between my-2">
                    <span class="p-0 d-flex text-muted justify-content-start  fs-5" style="font-weight: 500;">Contacts</span>
                    <!-- side menu -->
                    <div class="d-flex text-muted align-items-center justify-content-center">
                        <!-- start a video chat -->
                        <div
                            class=" p-1  align-items-center justify-content-center d-flex align-items-center bg-gray rounded-circle hoverDark"
                            style="height: 35px; width: 35px; " data-bs-toggle="modal" data-bs-target="#videoModal" type="button">
                            <i class="fa-solid fa-video"></i>
                        </div>
                        <!-- video chat room modal -->
                        <div class="modal fade " id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content modal-dialog-centered bg-dark ">
                                    <!-- head -->
                                    <div class="modal-header border-0 w-100 pe-4 pt-4">
                                        <button type="button" class="btn-close btn-close-white align-items-end" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <!-- body -->
                                    <div class="modal-body d-flex flex-column align-items-center justify-content-center"
                                        style="min-height: 400px;min-width: 600px;">
                                        <i class="fas fa-video fs-0"></i>
                                        <h3 class="text-white">Schedule A Room For Later</h3>
                                        <p class="text-white text-center w-75 max-auto">Lorem ipsum dolor sit, amet consectetur
                                            adipisicing
                                            elit. Est ipsa vero ipsam dolorum, quis at officiis soluta veniam dolores aliquid illum illo
                                            accusamus modi neque voluptate, quisquam, sequi praesentium! Reprehenderit perspiciatis eaque
                                            nam
                                            temporibus, animi, illo a tempore quidem culpa qui vitae cupiditate, laudantium magni quam
                                            aspernatur delectus porro? Voluptas? </p>
                                        <button class="btn btn-lg btn-primary rounded-pill">Schedule Room</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- new chat -->
                        <div
                            class=" p-1  align-items-center justify-content-center d-flex align-items-center bg-gray rounded-circle hoverDark"
                            style="height: 35px; width: 35px;" data-bs-toggle="modal" data-bs-target="#newChat" " type=" button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <!-- dd menu -->
                        <div class=" p-1  align-items-center justify-content-center d-flex bg-gray rounded-circle hoverDark"
                            style="height: 35px; width: 35px; " id="ddMenuContacts" data-bs-toggle="dropdown"
                            aria-expanded="false" type="button">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                        <!-- contact ddMenu -->
                        <div class="dropdown-menu shadow" style="width: 18em">
                            <!-- title -->
                            <div class="p-2">
                                <h5>Chat Settings</h5>
                                <span class="text-muted fs-7">Lorem ipsum dolor sit amet.</span>
                            </div>
                            <!-- item 1 -->
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between">
                                    <!-- icon -->
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-phone me-3"></i>
                                        <p class="m-0">Incoming Call sounds</p>
                                    </div>
                                    <!-- toggle -->
                                    <div class="form-check form-switch m-0">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                            checked />
                                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                    </div>
                                </div>
                            </li>
                            <!-- item 2 -->
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between">
                                    <!-- icon -->
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-volume-off me-3"></i>
                                        <p class="m-0">Message Sounds</p>
                                    </div>
                                    <!-- toggle -->
                                    <div class="form-check form-switch m-0">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                            checked />
                                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                    </div>
                                </div>
                            </li>
                            <!-- item 3 -->
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between m-0">
                                    <!-- icon -->
                                    <div class="d-flex align-items-center m-0">
                                        <i class="fa-solid fa-spinner me-3"></i>
                                        <p class="m-0">Pop up new Messages</p>
                                    </div>
                                    <!-- toggle -->
                                    <div class="form-check form-switch m-0">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                                            checked />
                                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                    </div>
                                </div>
                                <span class="ms-5 text-muted fs-7">Lorem ipsum dolor sit.</span>
                            </li>
                            <hr class="m-0" />
                            <!-- item 1 -->
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between m-0">
                                    <!-- icon -->
                                    <div class="d-flex align-items-center m-0">
                                        <i class="fa-solid fa-spinner me-3"></i>
                                        <p class="m-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- item 2 -->
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between m-0">
                                    <!-- icon -->
                                    <div class="d-flex align-items-center m-0">
                                        <i class="fa-solid fa-spinner me-3"></i>
                                        <p class="m-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- item 3 -->
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between m-0">
                                    <!-- icon -->
                                    <div class="d-flex align-items-center m-0">
                                        <i class="fa-solid fa-spinner me-3"></i>
                                        <p class="m-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- item 4 -->
                            <li>
                                <div class="dropdown-item d-flex align-items-center justify-content-between m-0">
                                    <!-- icon -->
                                    <div class="d-flex align-items-center m-0">
                                        <i class="fa-solid fa-spinner me-3"></i>
                                        <p class="m-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>

                <!-- Friends -->
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/women/48.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/women/48.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/men/75.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/women/37.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/women/37.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/men/45.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/men/67.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/women/75.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/women/75.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/women/70.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/women/70.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/men/79.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/men/79.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/women/71.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/women/71.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/women/77.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/women/77.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/men/74.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/men/74.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/men/75.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>
                <!-- Friends -->
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/women/48.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/women/48.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/men/75.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>
                <div class="d-flex ms-1 my-1 ps-3 p-1 align-items-center justify-content-start rounded hoverDark"
                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-html="true"
                    data-bs-trigger="hover" data-bs-content='<div class="d-flex p-0 m-0" >
            <div class="align-items-center popover-body d-flex p-2">
              <img src="https://randomuser.me/api/portraits/women/37.jpg" style="height: 70px; width: 70px;" alt="avatar" class="pop-avatar">
            </div>
            <div class="p-2">
              <h5 class="m-1 py-1">Lorem, ipsum.</h5>
              <div class="d-flex">
                <i class="fas fa-user-friends m-1 d-flex text-muted"></i>
                <p class="m-0">2 mutal friends: <span class="fw-bold ">Jerry</span> and <span class="fw-bold">Phu</span></p>
              </div>
              <div class="d-flex ">
                <i class="fas fa-graduation-cap m-1 text-muted"></i>
                <p>Studies at MIT</p>
              </div>
            </div>
          </div>' type="button">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/women/37.jpg" alt="avatar" class="rounded-circle me-2"
                            style="width: 38px; height: 38px; object-fit: cover" />
                        <span class="position-absolute bottom-0 translate-middle border-light rounded-circle bg-success p-1"
                            style="left: 75%; "></span>
                    </div>

                    <div class="col mx-2">
                        <span class="m-0 p-0 fs-6 " style="font-weight: 500;">Lorem, ipsum.</span>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <!-- ======================New Chat======================== -->
    <div class="modal fade" id="newChat" tabindex="-1" aria-labelledby="newChatLabel" aria-hidden="true"
        data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-75 shadow"
            style="transform: translateX(-80px)">
            <div class="modal-content border-0">
                <!-- head -->
                <div class="modal-header align-items-start">
                    <div>
                        <h6 class="modal-title text-dark mb-2" id="newChatLabel">
                            New Message
                        </h6>
                        <label class="text-dark">To:</label>
                        <input type="text" class="border-0" />
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body shadow border-0 m-0 p-0">
                    <div class="w-50 border-bottom border-primary" type="button">
                        <p class="m- m-0 p-2 text-primary ps-4 fw-b">Suggested
                        </p>
                    </div>

                </div>
                <!-- footer -->
                <div class="modal-footer border-0" style="min-height: 300px;">

                </div>
            </div>
        </div>
    </div>

    <!-- ======================Single Chat======================== -->
    <!-- chat 1 -->
    <div class="modal fade" id="singleChat1" tabindex="-1" aria-labelledby="singleChat1Label" aria-hidden="true"
        data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-75" style="transform: translateX(-80px)">
            <div class="modal-content border-0 shadow">
                <!-- head -->
                <div class="modal-header">
                    <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="left" data-bs-content='
              <div class="m-0">
                <div class="popover-body d-flex flex-column p-0"> 
                  <div class="d-flex align-items-center dropdown-item p-1 rounded">
                    <i class="fa-regular fa-comment me-3 fs-4"></i>
                    <p class="m-0">Open Message </p>
                  </div>
                  
                  <div class="d-flex align-items-center dropdown-item p-2 rounded">
                    <i class="fa-regular fa-user me-3 fs-4"></i>
                    <p class="m-0">User Profile </p>
                  </div>
                  <hr>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded">
                    <i class="fa-regular fa-user me-3 fs-4"></i>
                    <p class="m-0">User Profile </p>
                  </div>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded">
                    <i class="fa-regular fa-user me-3 fs-4"></i>
                    <p class="m-0">User Profile </p>
                  </div>
                  <div class="d-flex align-items-center dropdown-item p-2 rounded">
                    <i class="fa-regular fa-user me-3 fs-4"></i>
                    <p class="m-0">User Profile </p>
                  </div>
                </div>
              </div>' data-bs-html="true">
                        <!-- avatar -->
                        <div class="position-relative">
                            <img src="https://picsum.photos/204" alt="avatar" class="rounded-circle me-2"
                                style="width: 40px; height: 40px; object-fit: cover" />
                            <span
                                class="position-absolute translate-middle bottom-0 translate-middle bg-success border border-light rounded-circle p-1"
                                style="left: 70%;">
                                <span class="visually-hidden"></span>
                            </span>
                        </div>
                        <!-- name -->
                        <div>
                            <p class="m-0">Mike<i class="fa-solid fa-chevron-down"></i></p>
                            <span class="text-muted m-0 p-o fs-7">Active Now</span>
                        </div>
                    </div>

                    <!-- close btn -->
                    <i class="fa-solid fa-video mx-2 text-muted" type="button"></i>
                    <i class="fa-solid fa-phone mx-2 text-muted" type="button"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body m-1 p-1 overflow-auto" style="max-height: 300px">
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div class="">
                            <img src="https://picsum.photos/204" alt="avatar" class="rounded-circle me-2"
                                style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- messgae -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor.</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- messgae -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor.</p>
                        <!-- avatar -->
                        <div class="p-2">
                            <img
                                src="https://scontent.fixc8-2.fna.fbcdn.net/v/t39.30808-6/253672468_609134610133707_40920716104383943_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_ohc=ovUojc-NiwkAX8rc7Ri&_nc_ht=scontent.fixc8-2.fna&oh=00_AT9jPnUQlu4RXWQvoBEhlGuOsUB-WRdICxHTNA4Zqf2pzw&oe=626D2C8C"
                                alt="avatar" class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div class="">
                            <img src="https://picsum.photos/204" alt="avatar" class="rounded-circle me-2"
                                style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- messgae -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor.</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- messgae -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor.</p>
                        <!-- avatar -->
                        <div class="p-2">
                            <img
                                src="https://scontent.fixc8-2.fna.fbcdn.net/v/t39.30808-6/253672468_609134610133707_40920716104383943_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_ohc=ovUojc-NiwkAX8rc7Ri&_nc_ht=scontent.fixc8-2.fna&oh=00_AT9jPnUQlu4RXWQvoBEhlGuOsUB-WRdICxHTNA4Zqf2pzw&oe=626D2C8C"
                                alt="avatar" class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                </div>
                <!-- footer -->
                <div class="modal-footer border-0 p-0 m-0">
                    <div class="d-flex">
                        <!-- icons -->
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-circle-plus mx-1 fs-5 text-muted" type="button"></i>
                            <i class="fa-solid fa-file-image mx-1 fs-5 text-muted" type="button"></i>
                            <i class="fa-solid fa-portrait mx-1 fs-5 text-muted" type="button"></i>
                            <i class="fa-solid fa-adjust mx-1 fs-5 text-muted" type="button"></i>
                        </div>
                        <!-- input -->
                        <div class="">
                            <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa" />
                        </div>
                        <!-- thumbs up icon -->
                        <div class="d-flex align-items-center mx-2">
                            <i class="fa-solid fa-thumbs-up fs-5 text-muted" type="button"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chat 2 -->
    <div class="modal fade" id="singleChat2" tabindex="-1" aria-labelledby="singleChat2Label" aria-hidden="true"
        data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-75" style="transform: translateX(-80px)">
            <div class="modal-content border-0 shadow">
                <!-- head -->
                <div class="modal-header">
                    <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="left" data-bs-content='
            <div class="m-0">
              <div class="popover-body d-flex flex-column p-0"> 
                <div class="d-flex align-items-center dropdown-item p-1 rounded">
                  <i class="fa-regular fa-comment me-3 fs-4"></i>
                  <p class="m-0">Open Message </p>
                </div>
                
                <div class="d-flex align-items-center dropdown-item p-2 rounded">
                  <i class="fa-regular fa-user me-3 fs-4"></i>
                  <p class="m-0">User Profile </p>
                </div>
                <hr>
                <div class="d-flex align-items-center dropdown-item p-2 rounded">
                  <i class="fa-regular fa-user me-3 fs-4"></i>
                  <p class="m-0">User Profile </p>
                </div>
                <div class="d-flex align-items-center dropdown-item p-2 rounded">
                  <i class="fa-regular fa-user me-3 fs-4"></i>
                  <p class="m-0">User Profile </p>
                </div>
                <div class="d-flex align-items-center dropdown-item p-2 rounded">
                  <i class="fa-regular fa-user me-3 fs-4"></i>
                  <p class="m-0">User Profile </p>
                </div>
              </div>
            </div>' data-bs-html="true">
                        <!-- avatar -->
                        <div class="position-relative">
                            <img src="https://picsum.photos/219" alt="avatar" class="rounded-circle me-2"
                                style="width: 40px; height: 40px; object-fit: cover" />
                            <span
                                class="position-absolute bottom-0 translate-middle bg-success border border-light rounded-circle p-1"
                                style="left: 75%">
                                <span class="visually-hidden"></span>
                            </span>
                        </div>
                        <!-- name -->
                        <div>
                            <p class="m-0">Rohan<i class="fa-solid fa-chevron-down"></i></p>
                            <span class="text-muted fs-7">Active Now</span>
                        </div>
                    </div>

                    <!-- close btn -->
                    <i class="fa-solid fa-video mx-2 text-muted" type="button"></i>
                    <i class="fa-solid fa-phone mx-2 text-muted" type="button"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body m-1 p-1 overflow-auto" style="max-height: 300px">
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div class="">
                            <img src="https://picsum.photos/219" alt="avatar" class="rounded-circle me-2"
                                style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- messgae -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor.</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- messgae -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor.</p>
                        <!-- avatar -->
                        <div class="p-2">
                            <img
                                src="https://scontent.fixc8-2.fna.fbcdn.net/v/t39.30808-6/253672468_609134610133707_40920716104383943_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_ohc=ovUojc-NiwkAX8rc7Ri&_nc_ht=scontent.fixc8-2.fna&oh=00_AT9jPnUQlu4RXWQvoBEhlGuOsUB-WRdICxHTNA4Zqf2pzw&oe=626D2C8C"
                                alt="avatar" class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div class="">
                            <img src="https://picsum.photos/219" alt="avatar" class="rounded-circle me-2"
                                style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- messgae -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor.</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- messgae -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor.</p>
                        <!-- avatar -->
                        <div class="p-2">
                            <img
                                src="https://scontent.fixc8-2.fna.fbcdn.net/v/t39.30808-6/253672468_609134610133707_40920716104383943_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_ohc=ovUojc-NiwkAX8rc7Ri&_nc_ht=scontent.fixc8-2.fna&oh=00_AT9jPnUQlu4RXWQvoBEhlGuOsUB-WRdICxHTNA4Zqf2pzw&oe=626D2C8C"
                                alt="avatar" class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                </div>
                <!-- footer -->
                <div class="modal-footer border-0 p-0 m-0">
                    <div class="d-flex">
                        <!-- icons -->
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-circle-plus mx-1 fs-5 text-muted" type="button"></i>
                            <i class="fa-solid fa-file-image mx-1 fs-5 text-muted" type="button"></i>
                            <i class="fa-solid fa-portrait mx-1 fs-5 text-muted" type="button"></i>
                            <i class="fa-solid fa-adjust mx-1 fs-5 text-muted" type="button"></i>
                        </div>
                        <!-- input -->
                        <div class="">
                            <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa" />
                        </div>
                        <!-- thumbs up icon -->
                        <div class="d-flex align-items-center mx-2">
                            <i class="fa-solid fa-thumbs-up fs-5 text-muted" type="button"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chat 3 -->
    <div class="modal fade" id="singleChat3" tabindex="-1" aria-labelledby="singleChat3Label" aria-hidden="true"
        data-bs-backdrop="false">
        <div class="modal-dialog modal-sm position-absolute bottom-0 end-0 w-75" style="transform: translateX(-80px)">
            <div class="modal-content border-0 shadow">
                <!-- head -->
                <div class="modal-header">
                    <div class="dropdown-item d-flex rounded" type="button" data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="left" data-bs-content='
            <div class="m-0">
              <div class="popover-body d-flex flex-column p-0"> 
                <div class="d-flex align-items-center dropdown-item p-1 rounded">
                  <i class="fa-regular fa-comment me-3 fs-4"></i>
                  <p class="m-0">Open Message </p>
                </div>
                
                <div class="d-flex align-items-center dropdown-item p-2 rounded">
                  <i class="fa-regular fa-user me-3 fs-4"></i>
                  <p class="m-0">User Profile </p>
                </div>
                <hr>
                <div class="d-flex align-items-center dropdown-item p-2 rounded">
                  <i class="fa-regular fa-user me-3 fs-4"></i>
                  <p class="m-0">User Profile </p>
                </div>
                <div class="d-flex align-items-center dropdown-item p-2 rounded">
                  <i class="fa-regular fa-user me-3 fs-4"></i>
                  <p class="m-0">User Profile </p>
                </div>
                <div class="d-flex align-items-center dropdown-item p-2 rounded">
                  <i class="fa-regular fa-user me-3 fs-4"></i>
                  <p class="m-0">User Profile </p>
                </div>
              </div>
            </div>' data-bs-html="true">
                        <!-- avatar -->
                        <div class="position-relative">
                            <img src="https://picsum.photos/222" alt="avatar" class="rounded-circle me-2"
                                style="width: 40px; height: 40px; object-fit: cover" />
                            <span
                                class="position-absolute bottom-0 translate-middle bg-success border border-light rounded-circle p-1"
                                style="left: 75%">
                                <span class="visually-hidden"></span>
                            </span>
                        </div>
                        <!-- name -->
                        <div>
                            <p class="m-0">Sumit<i class="fa-solid fa-chevron-down"></i></p>
                            <span class="text-muted fs-7">Active Now</span>
                        </div>
                    </div>

                    <!-- close btn -->
                    <i class="fa-solid fa-video mx-2 text-muted" type="button"></i>
                    <i class="fa-solid fa-phone mx-2 text-muted" type="button"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body m-1 p-1 overflow-auto" style="max-height: 300px">
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div class="">
                            <img src="https://picsum.photos/222" alt="avatar" class="rounded-circle me-2"
                                style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- message -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor.</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- messgae -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor.</p>
                        <!-- avatar -->
                        <div class="p-2">
                            <img
                                src="https://scontent.fixc8-2.fna.fbcdn.net/v/t39.30808-6/253672468_609134610133707_40920716104383943_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_ohc=ovUojc-NiwkAX8rc7Ri&_nc_ht=scontent.fixc8-2.fna&oh=00_AT9jPnUQlu4RXWQvoBEhlGuOsUB-WRdICxHTNA4Zqf2pzw&oe=626D2C8C"
                                alt="avatar" class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                    <!-- message l -->
                    <li class="list-group-item border-0 d-flex">
                        <!-- avatar -->
                        <div class="">
                            <img src="https://picsum.photos/222" alt="avatar" class="rounded-circle me-2"
                                style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                        <!-- messgae -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor.</p>
                    </li>
                    <!-- message r -->
                    <li class="list-group-item border-0 d-flex justify-content-end">
                        <!-- messgae -->
                        <p class="bg-gray p-2 rounded">Lorem, ipsum dolor.</p>
                        <!-- avatar -->
                        <div class="p-2">
                            <img
                                src="https://scontent.fixc8-2.fna.fbcdn.net/v/t39.30808-6/253672468_609134610133707_40920716104383943_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_ohc=ovUojc-NiwkAX8rc7Ri&_nc_ht=scontent.fixc8-2.fna&oh=00_AT9jPnUQlu4RXWQvoBEhlGuOsUB-WRdICxHTNA4Zqf2pzw&oe=626D2C8C"
                                alt="avatar" class="rounded-circle me-2" style="width: 28px; height: 28px; object-fit: cover" />
                        </div>
                    </li>
                </div>
                <!-- footer -->
                <div class="modal-footer border-0 p-0 m-0">
                    <div class="d-flex">
                        <!-- icons -->
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-circle-plus mx-1 fs-5 text-muted" type="button"></i>
                            <i class="fa-solid fa-file-image mx-1 fs-5 text-muted" type="button"></i>
                            <i class="fa-solid fa-portrait mx-1 fs-5 text-muted" type="button"></i>
                            <i class="fa-solid fa-adjust mx-1 fs-5 text-muted" type="button"></i>
                        </div>
                        <!-- input -->
                        <div class="">
                            <input type="text" class="form-control rounded-pill border-0 bg-gray" placeholder="Aa" />
                        </div>
                        <!-- thumbs up icon -->
                        <div class="d-flex align-items-center mx-2">
                            <i class="fa-solid fa-thumbs-up fs-5 text-muted" type="button"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================chat icon======================== -->
    <div
        class="fixed-bottom me-4 mb-3 d-flex bg-light justify-content-center rounded-circle shadow hoverDark align-items-center"
        data-bs-toggle="modal" data-bs-target="#newChat" type="button"
        style="width: 45px; height: 45px; z-index: 7 ; left: inherit; ">
        <i class="fa-solid fa-lg fa-pen-to-square "></i>
    </div>

    <!-- main js -->
    <script src="main.js"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/99c11d2d6d.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        var popoverTriggerList = [].slice.call(
            document.querySelectorAll('[data-bs-toggle="popover"]')
        );
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });
    </script>

    <script src="main.js"></script>
</body>

</html>