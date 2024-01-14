<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="should.css">
</head>



<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Nesso</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="udemy--.php">Ana Sayfa</a>
                    <a class="nav-link active" href="should.php">Dersler</a>
                    <a class="nav-link active" href="chatquiz.php">Kelime Testi</a>
                    <a class="nav-link active" href="sozlukss.php">Sözlük</a>
                    <a href="loginpage.php" class=""><button
                            class="btn btn-outline-dark position-absolute top-0  end-0  mt-2"
                            style="margin-right:7rem;">Çıkış Yap</button></a>
                    <a href="hesabim.php" class=""><button
                            class="btn btn-outline-dark position-absolute top-0  end-0  mt-2"
                            style="margin-right:1rem;">Hesabım</button></a>

                </div>
            </div>

        </div>
    </nav>






    <nav role="navigation" aria-labelledby="block-system-menu-block-side-menu-menu"
        id="block-system-menu-block-side-menu">

        <h2 class="visually-hidden" id="block-system-menu-block-side-menu-menu">Side menu</h2>

        <style>
            .pagination-outer {
                text-align: center;
            }

            .pagination {
                font-family: 'Work Sans', sans-serif;
                padding: 0 10px;
                border-radius: 0;
                display: inline-flex;
                position: relative;
            }

            .pagination:before {
                content: '';
                background: #999;
                height: 2px;
                width: 100%;
                position: absolute;
                left: 0;
                top: 7px;
            }

            .pagination li a.page-link {
                color: #fff;
                background: #555;
                font-size: 20px;
                font-weight: 700;
                line-height: 35px;
                height: 35px;
                width: 33px;
                padding: 0;
                margin: 0 7px;
                border-radius: 0;
                border: none;
                position: relative;
                z-index: 1;
                transition: all 0.3s ease 0s;
            }

            .pagination li a.page-link:hover,
            .pagination li a.page-link:focus,
            .pagination li.active a.page-link:hover,
            .pagination li.active a.page-link {
                color: #fff;
                background: #ff1c73;
                font-size: 22px;
                line-height: 40px;
                height: 40px;
            }

            .pagination li a.page-link:before,
            .pagination li a.page-link:after {
                content: '';
                background: linear-gradient(to right bottom, transparent 50%, #111 55%);
                height: 7px;
                width: 7px;
                position: absolute;
                left: -7px;
                top: 0;
                z-index: -1;
                transition: all 0.3s ease 0.3s;
            }

            .pagination li a.page-link:after {
                transform: rotateY(180deg);
                left: auto;
                right: -7px;
            }

            .pagination li:first-child a.page-link,
            .pagination li:last-child a.page-link {
                border-radius: 0;
            }

            @media only screen and (max-width: 480px) {
                .pagination {
                    font-size: 0;
                    display: inline-block;
                }

                .pagination li {
                    display: inline-block;
                    vertical-align: top;
                }
            }

            @media only screen and (max-width: 380px) {
                .pagination:before {
                    display: none;
                }

                .pagination li a.page-link {
                    margin-bottom: 10px;
                }

                .pagination li a.page-link:before,
                .pagination li a.page-link:after {
                    display: none;
                }
            }
        </style>

        <div class="demo">
            <nav class="pagination-outer" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">A1</a></li>
                    <li class="page-item"><a class="page-link" href="#">A2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">B1</a></li>
                    <li class="page-item"><a class="page-link" href="#">B2</a></li>
                    <li class="page-item"><a class="page-link" href="#">C1</a></li>
                    <li class="page-item"><a class="page-link" href="#">C2</a></li>
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Next">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>



        <div class="container py-5">




            <div class="container py-4 w-100">
                </a>


                <article class="postcard dark blue">
                    <a class="postcard__img_link" href="a1list.php">
                        <img class="postcard__img" src="a1foto.jpg" alt="Image Title" />
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title blue"><a href="a1list.php">A request from your boss</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Listen to requests from a manager to practise and improve
                            your
                            listening skills.</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>A1 level</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play blue">
                                <a href="a1list.php"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard dark red">
                    <a class="postcard__img_link" href="a1list2.php">
                        <img class="postcard__img" src="a1foto2.jpg" alt="Image Title" />
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title red"><a href="a1list2.php">A voicemail message</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Listen to a voicemail message and answer the questions to
                            practise your listening skills.</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>A1 level</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play red">
                                <a href="a1list2.php"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard dark green">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title green"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                            doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae
                            repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                            dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play green">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard dark yellow">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title yellow"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                            doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae
                            repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                            dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play yellow">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>


            <div class="container py-2">
                <div class="h1 text-center text-dark" id="pageHeaderTitle">My Cards Light</div>

                <article class="postcard light blue">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title blue"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt"></div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play blue">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard light red">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title red"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                            doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae
                            repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                            dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play red">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard light green">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title green"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                            doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae
                            repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                            dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play green">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="postcard light yellow">
                    <a class="postcard__img_link" href="#">
                        <img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <h1 class="postcard__title yellow"><a href="#">Podcast Title</a></h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia,
                            doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae
                            repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum
                            dolores nobis enim quidem excepturi, illum quos!</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                            <li class="tag__item play yellow">
                                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
            </section>







</html>