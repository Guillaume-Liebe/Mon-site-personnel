<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/9cff8ba19b.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <title>Page de profil</title>
    </head>

    <body>

        <progress value="0" max="1">
            <div class="progress-container">
                <span class="progress-bar"></span>
            </div>
        </progress>

        <div id="arrierePlan"></div>
        <div class='thetop'></div>
        <div class='testheight'></div>
        <div class='scrolltop'>
            <div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
        </div>

        <header> 
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div id="logo">
                <div class="container-fluid">
                    <div class="texte_menu_header">
                        <div class="prenom_liebe">Guillaume Liebe</div>
                        <br /> Web Développeur <span style="color:#c3b848">|</span> Infographiste <span style="color:#c3b848">|</span> Concepteur 3D
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="https://guillaume-liebe.fr/"><i class="fas fa-home"></i></a></li>
                        <li><a class="js-scrollTo" href="#page-1">Qui suis-je ?</a></li>
                        <li class="menu_deroulant">
                        <li><a a href="#page-2" class="js-scrollTo">Mes réalisations&nbsp;&nbsp;▼</a>
                            <ul class="sous_deroulant">
                                <li class="bord_arrondi_haut"><a class="js-scrollTo" href="#page-2" id="menu_sites_web">Sites web</a></li>
                                <li><a href="#page-2" class="js-scrollTo" id="menu_infographie">Infographie</a></li>
                                <li><a href="#page-2" class="js-scrollTo" id="menu_conception_3d">Conception 3D</a></li>
                                <li><a class="js-scrollTo" href="#page-2" id="menu_digital_arts">Digital Arts</a></li>
                                <li class="bord_arrondi_bas"><a class="js-scrollTo" href="#page-2" id="menu_production_video">Production Vidéo</a></li>
                            </ul>
                        </li>
                        <li><a class="js-scrollTo" href="#page-3">Mes compétences</a></li>
                        <li><a class="js-scrollTo" href="#page-4">Mes tarifs</a></li>
                        <li><a class="js-scrollTo" href="#page-5">Contact</a></li>
                    </ul>

                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars"></i>
                        </a>
                    
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a href="https://guillaume-liebe.fr/"><i class="fas fa-home"></i></a></li>
                            <li><a class="js-scrollTo" class="dropdown-item" href="#page-1">Qui suis-je ?</a></li>
                            <li><a class="js-scrollTo" href="#page-2">Mes réalisations&nbsp;&nbsp;&nbsp;▼</a></li>
                                <li><a class="js-scrollTo" href="#page-2" id="menu_sites_web_2">Sites web</a></li>
                                <li><a class="js-scrollTo" href="#page-2" id="menu_infographie_2">Infographie</a></li>
                                <li><a class="js-scrollTo" href="#page-2" id="menu_conception_3d_2">Conception 3D</a></li>
                                <li><a class="js-scrollTo" href="#page-2" id="menu_digital_arts_2">Digital Arts</a></li>
                                <li><a class="js-scrollTo" href="#page-2" id="menu_production_video_2">Production Vidéo</a></li>
                            <li><a class="js-scrollTo" href="#page-3">Mes compétences</a></li>
                            <li><a class="js-scrollTo" href="#page-4">Mes tarifs</a></li>
                            <li><a class="js-scrollTo" href="#page-5">Contact</a></li>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <script>
            $(document).ready(function() {
                $('.js-scrollTo').on('click', function() { // Au clic sur un élément
                    var page = $(this).attr('href'); // Page cible
                    var speed = 750; // Durée de l'animation (en ms)
                    $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
                    return false;
                });
            });
        </script>

        <section class="bandeau_accueil">
                
            <p class="phrase_accroche">Je vous aide à mettre en valeur votre entreprise.</p>
            <br>
            <a href="img/diplômes_et_certificats/diplomes_et_certificats.pdf"><button type="button" id="bouton_visualiser">
                Visualiser mes diplômes<br>et mes certificats
			</button></a> 

            <div class="container" style="margin-top:50px;">

            <div class="textes_accroche">
                <div class="row">
                <a>
                    <div class="col-md-4" style="opacity:1;">                
                        <a href="#page-2">
                            <div id="bloc_1">
                                <div class="bloc-1">
                                    <p><img src="img/icone_web.png">
                                    <h2>Création de sites Web</h2>
                                    <div class="lignes-1"></div>
                                    <br>
                                    <em>HTML5 / CSS3 / JAVASCRIPT / JQUERY /<br/>PHP7 / MYSQL/ BOOTSTRAP / WORDPRESS / GITHUB</em></p>
                                </div>  
                            </div> 
                        </a> 
                    </div>
                </a>

                <a>
                    <div id="bloc_2" href="#page-2">
                        <a href="#page-2">
                            <div class="col-md-4" style="opacity:1;">
                                <div class="bloc-2">
                                <p><img src="img/icone_infographie.png">
                                <h2>Conception graphique</h2>
                                <div class="lignes-1"></div>
                                <br>
                                <em>PHOTOSHOP / ILLUSTRATOR / INDESIGN / QUARK-XPRESS / AFTER EFFECTS /<br/>PREMIERE PRO</em></p>
                                </div>
                            </div>
                        </a>    
                    </div>
                </a>

                <a>
                    <div id="bloc_3" href="#page-2">  
                        <a href="#page-2">  
                            <div class="col-md-4" style="opacity:1;">
                                <div class="bloc-3">
                                <p><img src="img/icone_conception3d.png">
                                <h2>Conception 3D</h2>
                                <div class="lignes-1"></div>
                                <br>
                                <em>3DS MAX / MAYA / BLENDER /<br/>REAL FLOW / Z-BRUSH / XNORMAL</em></p>
                                <br>
                                </div>
                            </div>
                        </a>
                    </div>
                </a>

        <!------ <div class="container" style="margin-top:50px;display: flex;justify-content: center;">
                    <div class="fleches_animations_scroll">
                        <div class="chevron"></div>
                        <div class="chevron"></div>
                        <div class="chevron"></div>
                    </div> 
                </div> ------>
            </div>
        </section>      

        <section> 
            <br/><br/>
            <div id="page-1"></div>
            <h3 data-delai="0">Qui suis-je ?</h3>
            <div class="sous-titre" data-delai="0">Un créateur visuel à votre service.</div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profil" data-delai="0">
                            <img src="img/profil_noir_et_blanc.jpg"/>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <p>
                        Créatif et passionné d’informatique, j’ai réalisé plusieurs formations dans le domaine de l’infographie et la conception 3D, 
                        je suis actuellement diplômé d’une licence 3ème cycle de niveau II.

                        <br>Grâce à la formation à distance «OpenClassrooms», j’ai également validé plusieurs certificats dans le parcours de développeur web en apprenant les bases 
                        des langages HTML, CSS, JavaScript, JQuery et PHP/My SQL. 
                        <br><br>
                        De nos jours, le domaine du numérique est incontournable pour toute entreprise qui désire être vue et reconnue. 
                        <br>Ce qui m’a permis de relier mes deux passions : la création artistique et l’informatique.
                        <br>Perfectionniste, dynamique et assidu je m’implique complètement dans les missions que l'on me confie.
                        <br><br>
                        Je vous souhaite une bonne visite sur mon site.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div id="bandeau_projets"></div>
            <div id="page-2"></div>
            <h3 data-delai="0">Mes réalisations</h3>
            <div class="sous-titre">Des projets que j'ai réalisés.</div>
            <div id="portfolio">

            <button type="button_2" class="bord_arrondi_haut " style="background-color: rgb(189, 0, 0);"id="page_1"><div id="triangle" style="border-top: 12px solid rgb(189, 0, 0);"></div>SITES WEB</button>
            <button type="button_2" id="page_2"><div id="triangle_2"></div>INFOGRAPHIE</button>
            <button type="button_2" id="page_3"><div id="triangle_3"></div>CONCEPTION 3D</button>
            <button type="button_2" id="page_4"><div id="triangle_4"></div>DIGITAL ARTS</button>
            <button type="button_2" class="bord_arrondi_bas" id="page_5"><div id="triangle_5"></div>PRODUCTION VIDÉOS</button>

            <script>  
                $("button").click(function(){
                    $("button").css("background-color", "#696969");
                    $(this).css("background-color", "#bd0000");
                });
            </script>

            <div class="container" style="margin-top:50px;">

                <div id="web">
                    <div class="row">
                        
                    <div class="col-md-4"><br><br>
                        <h6>Guillaume Liebe
                            <div class="lignes-2"></div>
                        </h6>
                        <br><br><br>
                        <p>HTML | CSS | JAVASCRIPT | PHP | MYSQL</p>
                        <div id="color" data-delai="0">
                            <a href="https://guillaume-liebe.fr/" target="_blank">
                            <img src="img/page_profil.jpg" alt="projet 4">
                            <div class="petit_rectangle">
                                <h7>Réalisation de mon site personnel !<br>Codage entièrement à la main.</h7>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4"><br><br>
                        <h6>Magik Agency
                            <div class="lignes-2"></div>
                        </h6>
                        <br><br><br>
                        <p>WORDPRESS | CSS</p>
                        <div id="color" data-delai="0">
                            <a href="https://www.magik-agency.net/" target="_blank">
                            <img src="img/projet_magik_agency.jpg" alt="projet 4">
                            <div class="petit_rectangle">
                                <h7>Tunnel de vente. Le marketing à votre porté.</h7>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4"><br><br>
                        <h6>Verlano
                            <div class="lignes-2"></div>
                        </h6>
                        <br><br><br>
                        <p>WORDPRESS | CSS</p>
                        <div id="color">
                            <a href="http://verlano.fr/" target="_blank">
                            <img src="img/projet_verlano.jpg" alt="Projet Verlano">                
                            <div class="petit_rectangle">
                                <h7>Création d'un site web pour une artiste.</h7>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4" data-delai="0"><br><br>
                        <h6>Les délices de Gui
                            <div class="lignes-2"></div>
                        </h6>
                        <br><br><br>
                        <p>HTML | CSS | JAVASCRIPT | PHP | MYSQL</p>
                        <div id="color">
                            <a href="https://guillaume-liebe.fr/p4/" target="_blank">
                            <img src="img/projet_4.jpg" alt="projet 4">
                            <div class="petit_rectangle">
                                <h7>Développement d'un site web avec des gâteaux et des pâtisseries en 3D.<br>Possibilité de laisser des commentaires.</h7>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4"><br><br>
                        <h6>Vélo'Zen
                            <div class="lignes-2"></div>
                        </h6>
                        <br><br><br>
                        <p>HTML | CSS | JAVASCRIPT</p> 
                        <div id="color">
                            <a href="https://guillaume-liebe.fr/p3/" target="_blank">
                            <img src="img/projet_3.jpg" alt="projet 3">                        
                            <div class="petit_rectangle">
                                <h7>Réalisation d'une carte intéractive pour vélo.<br>Utilisation de l'API JCDecaux et Google Maps.</h7>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4"><br><br>                 
                        <h6>Ville de Strasbourg
                            <div class="lignes-2"></div>
                        </h6>
                        <br><br><br>
                        <p>WORDPRESS | CSS</p>
                        <div id="color">
                            <a href="https://guillaume-liebe.fr/p2/" target="_blank">
                            <img src="img/projet_2.jpg" alt="projet 2">
                            <div class="petit_rectangle">
                                <h7>Création d’un site WordPress fictif destiné à l’office de tourisme de Strasbourg.</h7>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4" style="margin-right: 0.1px;"><br><br>
                        <h6>Web Agency
                            <div class="lignes-2"></div>
                        </h6>
                        <br><br><br>
                        <p>HTML | CSS</p>
                        <div id="color">
                            <a href="https://guillaume-liebe.fr/p1/" target="_blank">
                            <img src="img/projet_1.jpg" alt="projet 1">
                            <div class="petit_rectangle">
                                <h7>Intégration d'une maquette pour une agence web.</h7>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            </div>
            <div id="pages">
                <p id="page_one">1</p> 
                <p></p> <p id="page_two">2</p> 
                <p></p> <p id="page_three">3</p>
            </div>

            <div id="display_none">
                <div id="infographie">
                    <div class="row">

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Galaxy Tacos
                                <div class="lignes-2"></div>
                            </h6>
                            <br /><br /><br />
                            <p>INDESIGN | PHOTOSHOP</p>
                            <div id="color"><div id="galaxy_tacos"><div class="image"><img src="img/graphismes/carte_menu_galaxy_tacos(Recto).jpg"alt="Galaxy Tacos 1" /></div></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>IASGénérations                        
                                <div class="lignes-2"></div>
                            </h6>
                            <br /><br /><br />
                            <p>INDESIGN | PHOTOSHOP</p>
                            <div id="color"><div id="iasgenerations"><div class="image"><img src="img/graphismes/flyer_batiment_miniature.jpg"alt="IASGénérations 1" /></div></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Flyer P'tit Oiseau
                                <div class="lignes-2"></div>
                            </h6>
                            <br /><br /><br />
                            <p>INDESIGN | PHOTOSHOP</p>
                            <div id="color"><div id="graphisme_flyer_ptit_oiseau_miniature"><div class="image"><img src="img/graphismes/Flyer_oiseau_miniature.jpg" alt="Flyer P'tit Oiseau" /></div></div></div>
                            <div id="graphisme_flyer_ptit_oiseau_agrandi"><img src="img/graphismes/Flyer_oiseau.jpg" alt="Flyer P'tit Oiseau" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Peyrefitte
                                <div class="lignes-2"></div>
                            </h6>
                            <br /><br /><br />
                            <p>INDESIGN</p>
                            <div id="color"><div id="graphisme_flyer_peyrefitte_miniature"><div class="image"><img src="img/graphismes/flyer_peyrefitte_miniature.jpg"alt="Flyer Peyrefitte" /></div></div></div>
                            <div id="graphisme_flyer_peyrefitte_agrandi"><img src="img/graphismes/flyer_peyrefitte.jpg"alt="Flyer Peyrefitte" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Couverture rapport de stage
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>MAYA | INDESIGN</p>
                            <div id="color"><div id="graphisme_couverture_rapport_de_stage_miniature"><div class="image"><img src="img/graphismes/couverture_rapport_de_stage_miniature.jpeg"alt="Couverture rapport de stage" /></div></div></div>
                            <div id="graphisme_couverture_rapport_de_stage_agrandi"><img src="img/graphismes/couverture_rapport_de_stage.jpeg"alt="Couverture rapport de stage" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Plans laboratoire de pâtisserie
                            <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>3DS MAX | INDESIGN</p>
                            <div id="color"><div id="plan_laboratoire_de_patisserie"><div class="image"><img src="img/graphismes/plan_laboratoire_de_patisserie_miniature.jpg" alt="Rapport de stage" /></div></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Couverture projet de fin d'étude
                            <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>3DS MAX | INDESIGN</p>
                            <div id="color"><div id="graphisme_couverture_projet_de_fin_d_etude_miniature"><div class="image"><img src="img/graphismes/projet de fin d'année book-1_miniature.jpg" alt="Projet de fin d'années" /></div></div></div>
                            <div id="graphisme_couverture_projet_de_fin_d_etude_agrandi"><img src="img/graphismes/projet de fin d'année book-1.jpg" alt="Projet de fin d'années" /></div>
                        </div>
                        
                        <div class="col-md-4">
                            <br /><br />
                            <h6>Jaquette DVD
                            <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>3DS MAX | INDESIGN</p>
                            <div id="color"><div id="graphisme_jaquette_dvd_miniature"><div class="image"><img src="img/graphismes/Jaquette_dvd_miniature.jpg" alt="Jaquette DVD" /></div></div></div>
                            <div id="graphisme_jaquette_dvd_agrandi"><img src="img/graphismes/Jaquette_dvd.jpg" alt="Jaquette DVD" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Tribal
                            <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>ILLUSTRATOR</p>
                            <div id="color"><div id="graphisme_tribal_miniature"><div class="image"><img src="img/graphismes/tribal_miniature.jpg" alt="Tribal" /></div></div></div>
                            <div id="graphisme_tribal_agrandi"><img src="img/graphismes/tribal.jpg" alt="Tribal" /></div>
                        </div>
                    </div>
                </div>


                <div id="photos_galaxy_tacos">            
                    <div id="precedent_galaxy_tacos"><i class="far fa-arrow-alt-circle-left"></i></div> 
                    <div class="row">        
                        <h6>Galaxy Tacos
                            <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>INDESIGN | PHOTOSHOP</p>
                        <br /><br />
                        <h6>Carte de menu</h6>
                        <div class="lignes-2"></div>
                        <div class="col-md-4">

                            <br /><br />  
                            <div id="color"><div id="graphisme_galaxy_tacos_1_miniature"><div class="image"><img src="img/graphismes/carte_menu_galaxy_tacos(Recto)_miniature.jpg"alt="Galaxy Tacos 1" /></div></div></div>
                            <div id="graphisme_galaxy_tacos_1_agrandi"><img src="img/graphismes/carte_menu_galaxy_tacos(Recto).jpg"alt="Galaxy Tacos 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_galaxy_tacos_2_miniature"><div class="image"><img src="img/graphismes/carte_menu_galaxy_tacos2(Verso)_miniature.jpg"alt="Galaxy Tacos 2" /></div></div></div>
                            <div id="graphisme_galaxy_tacos_2_agrandi"><img src="img/graphismes/carte_menu_galaxy_tacos2(Verso).jpg"alt="Galaxy Tacos 2" /></div>
                        </div>
                    </div>

                    <div class="row">
                        <br /><br />
                        <h6>Panneaux lumineux</h6>
                        <div class="lignes-2"></div>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_galaxy_tacos_3_miniature"><div class="image"><img src="img/graphismes/panneau(973x523mm)1_miniature.jpg"alt="Galaxy Tacos 3" /></div></div></div>
                            <div id="graphisme_galaxy_tacos_3_agrandi"><img src="img/graphismes/panneau(973x523mm)1.jpg"alt="Galaxy Tacos 3" /></div>
                        </div>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_galaxy_tacos_4_miniature"><div class="image"><img src="img/graphismes/panneau(973x523mm)2_miniature.jpg"alt="Galaxy Tacos 4" /></div></div></div>
                            <div id="graphisme_galaxy_tacos_4_agrandi"><img src="img/graphismes/panneau(973x523mm)2.jpg"alt="Galaxy Tacos 4" /></div>
                        </div>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_galaxy_tacos_5_miniature"><div class="image"><img src="img/graphismes/panneau(973x523mm)3_miniature.jpg"alt="Galaxy Tacos 5" /></div></div></div>
                            <div id="graphisme_galaxy_tacos_5_agrandi"><img src="img/graphismes/panneau(973x523mm)3.jpg"alt="Galaxy Tacos 5" /></div>
                        </div>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_galaxy_tacos_6_miniature"><div class="image"><img src="img/graphismes/panneau(973x523mm)4_miniature.jpg"alt="Galaxy Tacos 6" /></div></div></div>
                            <div id="graphisme_galaxy_tacos_6_agrandi"><img src="img/graphismes/panneau(973x523mm)4.jpg"alt="Galaxy Tacos 6" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_iasgenerations">
                    <div id="precedent_iasgenerations"><i class="far fa-arrow-alt-circle-left"></i></div> 
                    <div class="row">      
                        <h6>IASGénérations
                            <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>INDESIGN | PHOTOSHOP</p> 
                        <div class="col-md-4">
                            <br /><br />
                            <h6>Flyer</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="graphisme_iasgenerations_1_miniature"><div class="image"><img src="img/graphismes/flyer_batiment_miniature.jpg"alt="IASGénérations 1" /></div></div></div>
                            <div id="graphisme_iasgenerations_1_agrandi"><img src="img/graphismes/flyer_batiment.jpg"alt="IASGénérations 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Carte de visite</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="graphisme_iasgenerations_2_miniature"><div class="image"><img src="img/graphismes/carte_de_viste_recto_verso_miniature.jpg"alt="IASGénérations 2" /></div></div></div>
                            <div id="graphisme_iasgenerations_2_agrandi"><img src="img/graphismes/carte_de_viste_recto_verso.jpg"alt="IASGénérations 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>logo</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="graphisme_iasgenerations_3_miniature"><div class="image"><img src="img/graphismes/logo_iasgeneraitons_miniature.jpg"alt="IASGénérations 3" /></div></div></div>
                            <div id="graphisme_iasgenerations_3_agrandi"><img src="img/graphismes/logo_iasgeneraitons.jpg"alt="IASGénérations 3" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_plan_laboratoire_de_patisserie">
                    <div id="precedent_laboratoire_de_patisserie"><i class="far fa-arrow-alt-circle-left"></i></div> 
                    <div class="row">      
                        <h6>Plans laboratoire de pâtisserie
                            <div class="lignes-2"></div>
                            </h6>
                            <br><br><br><br>
                            <p>3DS MAX | INDESIGN</p> 
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_plan_laboratoire_de_patisserie_1_miniature"><div class="image"><img src="img/graphismes/plan_laboratoire_de_patisserie_1_miniature.jpg"alt="Plans laboratoire de pâtisserie 1" /></div></div></div>
                            <div id="graphisme_plan_laboratoire_de_patisserie_1_agrandi"><img src="img/graphismes/plan_laboratoire_de_patisserie_1.jpg"alt="Plans laboratoire de pâtisserie 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_plan_laboratoire_de_patisserie_2_miniature"><div class="image"><img src="img/graphismes/plan_laboratoire_de_patisserie_2_miniature.jpg"alt="Plans laboratoire de pâtisserie 2" /></div></div></div>
                            <div id="graphisme_plan_laboratoire_de_patisserie_2_agrandi"><img src="img/graphismes/plan_laboratoire_de_patisserie_2.jpg"alt="Plans laboratoire de pâtisserie 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_plan_laboratoire_de_patisserie_3_miniature"><div class="image"><img src="img/graphismes/plan_laboratoire_de_patisserie_3_miniature.jpg"alt="Plans laboratoire de pâtisserie 3" /></div></div></div>
                            <div id="graphisme_plan_laboratoire_de_patisserie_3_agrandi"><img src="img/graphismes/plan_laboratoire_de_patisserie_3.jpg"alt="Plans laboratoire de pâtisserie 3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_plan_laboratoire_de_patisserie_4_miniature"><div class="image"><img src="img/graphismes/plan_laboratoire_de_patisserie_4_miniature.jpg"alt="Plans laboratoire de pâtisserie 4" /></div></div></div>
                            <div id="graphisme_plan_laboratoire_de_patisserie_4_agrandi"><img src="img/graphismes/plan_laboratoire_de_patisserie_4.jpg"alt="Plans laboratoire de pâtisserie 4" /></div>
                        </div>
                    </div>
                </div>

                <div id="infographie_2">

                    <div class="row">


                        <div class="col-md-4">
                            <br /><br />
                            <h6>Affiche École Bellecour
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>PHOTOSHOP</p>
                            <div id="color"><div id="graphisme_affiche_ecole_bellecour_miniature"><div class="image"><img src="img/graphismes/affiche_bellecour_miniature.jpg"alt="Affiche Bellecour" /></div></div></div>
                            <div id="graphisme_affiche_ecole_bellecour_agrandi"><img src="img/graphismes/affiche_bellecour.jpg"alt="Affiche Bellecour" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Mise en page catalogue
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>INDESIGN | PHOTOSHOP</p>
                            <div id="color"><div id="graphisme_mise_en_page_catalogue_miniature"><div class="image"><img src="img/graphismes/mise_en_page_catalogue_miniature.jpg" alt="Mise en page catalogue" /></div></div></div>
                            <div id="graphisme_mise_en_page_catalogue_agrandi"><img src="img/graphismes/mise_en_page_catalogue.jpg" alt="Mise en page catalogue" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Couvertures de magazines
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>INDESIGN | PHOTOSHOP</p>
                            <div id="color"><div id="couverture_magazines"><div class="image"><img src="img/graphismes/Magazine1_miniature.jpg" alt="Magazine 1" /></div></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Couverture catalogue campingaz
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>INDESIGN</p>
                            <div id="color"><div id="graphisme_couverture_catalogue_campingaz_miniature"><div class="image"><img src="img/graphismes/couverture_catalogue_campingaz_1_miniature.jpg" alt="Couverture catalogue campingaz 1" /></div></div></div>
                            <div id="graphisme_couverture_catalogue_campingaz_agrandi"><img src="img/graphismes/couverture_catalogue_campingaz_1.jpg" alt="Couverture catalogue campingaz 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Graphisme Lyon
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>ILLUSTRATOR</p>
                            <div id="color"><div id="graphisme_Lyon_miniature"><div class="image"><img src="img/graphismes/graphisme_lyon_miniature.jpg" alt="Graphisme Lyon" /></div></div></div>
                            <div id="graphisme_Lyon_agrandi"><img src="img/graphismes/graphisme_lyon.jpg" alt="Graphisme Lyon" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Habillages de blogs
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>PHOTOSHOP</p>
                            <div id="color"><div id="habillages_blogs"><div class="image"><img src="img/graphismes/aperçu_nouveau_habillage_miniature.jpg" alt= "Aperçu nouveau habillage" /></div></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Maquette la Grand'Ourse
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>PHOTOSHOP</p>
                            <div id="color"><div id="graphisme_maquette_la_grandourse_miniature"><div class="image"><img src="img/graphismes/Maquette_la grand'ourse_miniature.jpg" alt="Maquette la Grand'Ourse" /></div></div></div>
                            <div id="graphisme_maquette_la_grandourse_agrandi"><img src="img/graphismes/Maquette_la grand'ourse.jpg" alt="Maquette la Grand'Ourse" /></div>
                        </div>
                
                        <div class="col-md-4">
                            <br /><br />
                            <h6>Voiture Écolo
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>ILLUSTRATOR</p>
                            <div id="color"><div id="graphisme_voiture_ecolo_miniature"><div class="image"><img src="img/graphismes/voiture_saint_etienne_miniature.jpg" alt="Voiture Saint-Étienne" /></div></div></div>
                            <div id="graphisme_voiture_ecolo_agrandi"><img src="img/graphismes/voiture_saint_etienne.jpg" alt="Voiture Saint-Étienne" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Labels ville verte
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>ILLUSTRATOR</p>
                            <div id="color"><div id="labels_ville_verte"><div class="image"><img src="img/graphismes/label_ville_verte_1_miniature.jpg" alt="Label ville verte 1" /></div></div></div>
                        </div>
                    </div>
                </div>

                <div id="photos_couverture_magazines">
                    <div id="precedent_couverture_magazines"><i class="far fa-arrow-alt-circle-left"></i></div> 
                    <div class="row">  
                    <h6>COUVERTURES DE MAGAZINES
                            <div class="lignes-2"></div>
                            </h6>    
                        <div class="col-md-4">
                            <br /><br />
                            <h6>Magazine 1</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="graphisme_couverture_magazine_1_miniature"><div class="image"><img src="img/graphismes/Magazine1_miniature.jpg" alt="Magazine 1" /></div></div></div>
                            <div id="graphisme_couverture_magazine_1_agrandi"><img src="img/graphismes/Magazine1.jpg" alt="Magazine 1" /></div>
                        </div>
                        
                        <div class="col-md-4">
                            <br /><br />
                            <h6>Magazine 2</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="graphisme_couverture_magazine_2_miniature"><div class="image"><img src="img/graphismes/Magazine2_miniature.jpg" alt="Magazine 2" /></div></div></div>
                            <div id="graphisme_couverture_magazine_2_agrandi"><img src="img/graphismes/Magazine2.jpg" alt="Magazine 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Magazine 3</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="graphisme_couverture_magazine_3_miniature"><div class="image"><img src="img/graphismes/Magazine3_miniature.jpg" alt="Magazine 3" /></div></div></div>
                            <div id="graphisme_couverture_magazine_3_agrandi"><img src="img/graphismes/Magazine3.jpg" alt="Magazine 3" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_habillages_blogs">
                    <div id="precedent_habillages_blogs"><i class="far fa-arrow-alt-circle-left"></i></div> 
                    <div class="row">     
                        <h6>Habillages de blogs
                            <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>PHOTOSHOP</p> 
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_habillages_blogs_miniature_1"><div class="image"><img src="img/graphismes/aperçu_nouveau_habillage_miniature.jpg" alt= "Habillage de blog 1" /></div></div></div>
                            <div id="graphisme_habillages_blogs_agrandi_1"><img src="img/graphismes/aperçu_nouveau_habillage.jpg" alt= "Habillage de blog 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_habillages_blogs_miniature_2"><div class="image"><img src="img/graphismes/blog_culture_miniature.jpg" alt= "Habillage de blog 2" /></div></div></div>
                            <div id="graphisme_habillages_blogs_agrandi_2"><img src="img/graphismes/blog_culture.jpg" alt= "Habillage de blog 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_habillages_blogs_miniature_3"><div class="image"><img src="img/graphismes/aperçu_habillage_fete_du_livre_miniature.jpg" alt= "Habillage de blog 3" /></div></div></div>
                            <div id="graphisme_habillages_blogs_agrandi_3"><img src="img/graphismes/aperçu_habillage_fete_du_livre.jpg" alt= "Habillage de blog 3" /></div>
                        </div>
                    </div>
                </div>

                <div id="infographie_3">

                    <div class="row">                  

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Jaquette CD
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>PHOTOSHOP</p>
                            <div id="color"><div id="graphisme_jaquette_cd_miniature"><div class="image"><img src="img/graphismes/jaquette_cd_miniature.jpg" alt="Jaquette CD" /></div></div></div>
                            <div id="graphisme_jaquette_cd_agrandi"><img src="img/graphismes/jaquette_cd.jpg" alt="jaquette cd" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Carte d'invitation 20 ans
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>PHOTOSHOP</p>
                            <div id="color"><div id="graphisme_carte_invitation_20_ans_miniature"><div class="image"><img src="img/graphismes/carte_invitation_20_ans_miniature.jpg" alt="Carte d'invitation 20 ans" /></div></div></div>
                            <div id="graphisme_carte_invitation_20_ans_agrandi"><img src="img/graphismes/carte_invitation_20_ans.jpg" alt="Carte invitation 20 ans" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Resto/verso boutique de vin
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>QUARK-XPRESS</p>
                            <div id="color"><div id="graphisme_resto_verso_boutique_de_vin_miniature"><div class="image"><img src="img/graphismes/resto_verso_boutique_vin_miniature.jpg" alt="Resto verso boutique de vin" /></div></div></div>
                            <div id="graphisme_resto_verso_boutique_de_vin_agrandi"><img src="img/graphismes/resto_verso_boutique_vin.jpg" alt="Resto verso boutique de vin" /></div>
                        </div> 

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Affiche du Pillat
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>INDESIGN</p>
                            <div id="color"><div id="graphisme_affiche_pilat_miniature"><div class="image"><img src="img/graphismes/affiche_pilat_miniature.jpg" alt="Affiche Pilat" /></div></div></div>
                            <div id="graphisme_affiche_pilat_agrandi"><img src="img/graphismes/affiche_pilat.jpg" alt="Affiche Pilat" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Étiquettes de vin
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>INDESIGN</p>
                            <div id="color"><div id="etiquettes_de_vin"><div class="image"><img src="img/graphismes/etiquette_vin_miniature.jpg" alt="Étiquettes de vin" /></div></div></div>
                        </div>
                    </div>   
                </div>

                <div id="photos_labels_ville_verte">
                    <div id="precedent_labels_ville_verte"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">     
                        <h6>Labels Saint-Étienne
                            <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>ILLUSTRATOR</p> 
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_labels_ville_verte_miniature_1"><div class="image"><img src="img/graphismes/label_ville_verte_1_miniature.jpg" alt= "Labels ville verte 1" /></div></div></div>
                            <div id="graphisme_labels_ville_verte_agrandi_1"><img src="img/graphismes/label_ville_verte_1.jpg" alt= "Labels ville verte 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_labels_ville_verte_miniature_2"><div class="image"><img src="img/graphismes/label_ville_verte_2_miniature.jpg" alt= "Labels ville verte 2" /></div></div></div>
                            <div id="graphisme_labels_ville_verte_agrandi_2"><img src="img/graphismes/label_ville_verte_2.jpg" alt= "Labels ville verte 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_labels_ville_verte_miniature_3"><div class="image"><img src="img/graphismes/label_ville_verte_3_miniature.jpg" alt= "Labels ville verte 3" /></div></div></div>
                            <div id="graphisme_labels_ville_verte_agrandi_3"><img src="img/graphismes/label_ville_verte_3.jpg" alt= "Labels ville verte 3" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_etiquettes_de_vin">
                    <div id="precedent_etiquettes_de_vin"><i class="far fa-arrow-alt-circle-left"></i></div> 
                    <div class="row">  
                        <h6>Étiquettes de vin
                            <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>INDESIGN</p> 
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_etiquette_de_vin_miniature_1"><div class="image"><img src="img/graphismes/etiquette_vin_1_miniature.jpg" alt="Étiquette de vin 1" /></div></div></div>
                            <div id="graphisme_etiquette_de_vin_agrandi_1"><img src="img/graphismes/etiquette_vin_1.jpg" alt="Étiquette de vin 1" /></div>
                        </div>   
                        
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="graphisme_etiquette_de_vin_miniature_2"><div class="image"><img src="img/graphismes/etiquette_vin_2_miniature.jpg" alt="Étiquette de vin 2" /></div></div></div>
                            <div id="graphisme_etiquette_de_vin_agrandi_2"><img src="img/graphismes/etiquette_vin_2.jpg" alt="Étiquette de vin 2" /></div>
                        </div> 
                    </div>
                </div>

                <div id="pages_8">
                    <p id="page_8_one">1</p>
                    <p></p> <p id="page_8_two">2</p>
                    <p></p> <p id="page_8_three">3</p>
                </div>

                <div id="pages_2">
                    <p id="page_one_conception">1</p> 
                    <p></p> <p id="page_two_conception">2</p> 
                </div>

                <div id="conception_3d">

                    <div class="row">
                        
                        <div class="col-md-4">
                            <br /><br />
                            <h6>Batîment Design                        
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>MAYA</p>
                            <div id="color"><div id="batiment_design"><img src="img/batiment/batiment_design_miniature.jpg" alt="Bâtiment 1" /></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Titanic                        
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>MAYA</p>
                            <div id="color"><div id="titanic"><img src="img/titanic/titanic_1.jpg" alt="Titanic" /></div></div>
                        </div>
                        
                        <div class="col-md-4">
                            <br /><br />
                            <h6>Harley Davidson
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>MAYA</p>
                            <div id="color"><div id="harley_davidson"><img src="img/harley_davidson/decors_7.jpg" alt="Harley Davidson" /></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Ford Mustang
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>MAYA</p>
                            <div id="color"><div id="ford_mustang"><img src="img/ford_mustang/ford_mustang_1_miniature.jpeg" alt="Ford Mustang" /></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Pagani Zonda
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>MAYA</p>
                            <div id="color"><div id="pagani_zonda"><img src="img/pagani_zonda/pagani_zonda_1.jpg" alt="Pagani Zonda" /></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Can-am
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>MAYA</p>
                            <div id="color"><div id="can_am"><img src="img/can-am/can-am_2.jpeg" alt="can-am" /></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Pâtisseries
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                            <div id="color"><div id="patisseries"><img src="img/patisseries/entremet_2.jpg" alt="Pâtisseries" /></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Laboratoire de Pâtisserie
                            <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                            <div id="color"><div id="laboratoire_de_patisserie"><img src="img/laboratoire_de_patisserie/plan_laboratoire_miniature.jpg" alt="Laboratoire de Pâtisserie" /></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Ustensiles pâtisserie
                            <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                            <div id="color"><div id="ustensiles_patisserie"><img src="img/ustensiles_patisserie/ustensiles_patisserie_1.jpeg" alt="Ustensiles Pâtisserie" /></div></div>
                        </div>
                    </div>
                </div> 
            
                <div id="photos_batiment_design">
                    <div id="precedent_batiment_design"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        
                        <h6>Bâtiment Design<div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>MAYA</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_batiment_design_miniature_1"><img src="img/batiment/batiment_design_1_miniature.jpg" alt="Batiment Design 1" /></div></div>
                            <div id="conception_3d_batiment_design_agrandi_1"><img src="img/batiment/batiment_design_1.jpg" alt="Batiment Design 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_batiment_design_miniature_2"><img src="img/batiment/batiment_design_2_miniature.jpg" alt="Batiment Design 2" /></div></div>
                            <div id="conception_3d_batiment_design_agrandi_2"><img src="img/batiment/batiment_design_2.jpg" alt="Batiment Design 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_batiment_design_miniature_3"><img src="img/batiment/batiment_design_3_miniature.jpg" alt="Batiment Design 3" /></div></div>
                            <div id="conception_3d_batiment_design_agrandi_3"><img src="img/batiment/batiment_design_3.jpg" alt="Batiment Design 3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_batiment_design_miniature_4"><img src="img/batiment/batiment_design_4_miniature.jpg" alt="Batiment Design 4" /></div></div>
                            <div id="conception_3d_batiment_design_agrandi_4"><img src="img/batiment/batiment_design_4.jpg" alt="Batiment Design 4" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_batiment_design_miniature_5"><img src="img/batiment/batiment_design_5_miniature.jpg" alt="Batiment Design 5" /></div></div>
                            <div id="conception_3d_batiment_design_agrandi_5"><img src="img/batiment/batiment_design_5.jpg" alt="Batiment Design 5" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_batiment_design_miniature_6"><img src="img/batiment/batiment_design_6_miniature.jpg" alt="Batiment Design 6" /></div></div>
                            <div id="conception_3d_batiment_design_agrandi_6"><img src="img/batiment/batiment_design_6.jpg" alt="Batiment Design 6" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_batiment_design_miniature_7"><img src="img/batiment/batiment_design_7_miniature.jpg" alt="Batiment Design 7" /></div></div>
                            <div id="conception_3d_batiment_design_agrandi_7"><img src="img/batiment/batiment_design_7.jpg" alt="Batiment Design 7" /></div>
                        </div>
                    </div>
                </div>       

                <div id="pages_3">
                    <p id="page_one_titanic">1</p> 
                    <p></p> <p id="page_two_titanic">2</p>
                </div>

                <div id="photos_titanic">
                    <div id="precedent_titanic"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        
                        <h6>Titanic
                        <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>MAYA</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_titanic_miniature_1"><img src="img/titanic/titanic_1_miniature.jpg" alt="Titanic 1" /></div></div>
                            <div id="conception_3d_titanic_agrandi_1"><img src="img/titanic/titanic_1.jpg" alt="Titanic 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_titanic_miniature_2"><img src="img/titanic/titanic_2_miniature.jpeg" alt="Titanic 2" /></div></div>
                            <div id="conception_3d_titanic_agrandi_2"><img src="img/titanic/titanic_2.jpeg" alt="Titanic 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_titanic_miniature_3"><img src="img/titanic/titanic_3_miniature.jpeg" alt="Titanic 3" /></div></div>
                            <div id="conception_3d_titanic_agrandi_3"><img src="img/titanic/titanic_3.jpeg" alt="Titanic 3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_titanic_miniature_4"><img src="img/titanic/titanic_4_miniature.jpeg" alt="Titanic 4" /></div></div>
                            <div id="conception_3d_titanic_agrandi_4"><img src="img/titanic/titanic_4.jpeg" alt="Titanic 4" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_titanic_miniature_5"><img src="img/titanic/titanic_5_miniature.jpeg" alt="Titanic 5" /></div></div>
                            <div id="conception_3d_titanic_agrandi_5"><img src="img/titanic/titanic_5.jpeg" alt="Titanic 5" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_titanic_miniature_6"><img src="img/titanic/titanic_6_miniature.jpg" alt="Titanic 6" /></div></div>
                            <div id="conception_3d_titanic_agrandi_6"><img src="img/titanic/titanic_6.jpg" alt="Titanic 6" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_titanic_miniature_7"><img src="img/titanic/titanic_7_miniature.jpeg" alt="Titanic 7" /></div></div>
                            <div id="conception_3d_titanic_agrandi_7"><img src="img/titanic/titanic_7.jpeg" alt="Titanic 7" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_titanic_miniature_8"><img src="img/titanic/titanic_8_miniature.jpeg" alt="Titanic 8" /></div></div>
                            <div id="conception_3d_titanic_agrandi_8"><img src="img/titanic/titanic_8.jpeg" alt="Titanic 8" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_titanic_miniature_9"><img src="img/titanic/titanic_9_miniature.jpeg" alt="Titanic 9" /></div></div>
                            <div id="conception_3d_titanic_agrandi_9"><img src="img/titanic/titanic_9.jpeg" alt="Titanic 9" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_titanic_2">
                    <div id="precedent_titanic_2"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                            <h6>Titanic
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>MAYA</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_titanic_miniature_10"><img src="img/titanic/titanic_10_miniature.jpeg" alt="Titanic 10" /></div></div>
                            <div id="conception_3d_titanic_agrandi_10"><img src="img/titanic/titanic_10.jpeg" alt="Titanic 10" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_titanic_miniature_11"><img src="img/titanic/titanic_11_miniature.jpg" alt="Titanic 11" /></div></div>
                            <div id="conception_3d_titanic_agrandi_11"><img src="img/titanic/titanic_11.jpg" alt="Titanic 11" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_titanic_miniature_12"><img src="img/titanic/titanic_12_miniature.jpg" alt="Titanic 12" /></div></div>
                            <div id="conception_3d_titanic_agrandi_12"><img src="img/titanic/titanic_12.jpg" alt="Titanic 12" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_titanic_miniature_13"><img src="img/titanic/titanic_13_miniature.jpg" alt="Titanic 13" /></div></div>
                            <div id="conception_3d_titanic_agrandi_13"><img src="img/titanic/titanic_13.jpg" alt="Titanic 13" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_titanic_miniature_14"><img src="img/titanic/titanic_14_miniature.jpg" alt="Titanic 14" /></div></div>
                            <div id="conception_3d_titanic_agrandi_14"><img src="img/titanic/titanic_14.jpg" alt="Titanic 14" /></div>
                        </div>
                    </div>
                </div>

                <div id="pages_10">
                    <p id="page_10_one_titanic">1</p> 
                    <p></p> <p id="page_10_two_titanic">2</p>
                </div>

                <div id="pages_4">
                    <p id="page_one_harley_davidson">1</p> 
                    <p></p> <p id="page_two_harley_davidson">2</p>
                </div>

                <div id="photos_harley_davidson">
                    <div id="precedent_harley_davidson"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        
                        <h6>Harley Davidson
                        <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>MAYA</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_1"><img src="img/harley_davidson/harley_davidson_1_miniature.jpg" alt="Harley Davidson 1" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_1"><img src="img/harley_davidson/harley_davidson_1.jpg" alt="Harley Davidson 1" /></div>
                        </div>   
                        
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_2"><img src="img/harley_davidson/harley_davidson_2_miniature.jpg" alt="Harley Davidson 2" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_2"><img src="img/harley_davidson/harley_davidson_2.jpg" alt="Harley Davidson 2" /></div>
                        </div>  

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_3"><img src="img/harley_davidson/harley_davidson_3_miniature.jpg" alt="Harley Davidson 3" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_3"><img src="img/harley_davidson/harley_davidson_3.jpg" alt="Harley Davidson 3" /></div>
                        </div> 

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_4"><img src="img/harley_davidson/harley_davidson_4_miniature.jpg" alt="Harley Davidson 4" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_4"><img src="img/harley_davidson/harley_davidson_4.jpg" alt="Harley Davidson 4" /></div>
                        </div> 

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_5"><img src="img/harley_davidson/decors_1_miniature.jpg" alt="decors 1" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_5"><img src="img/harley_davidson/decors_1.jpg" alt="decors 1" /></div>
                        </div> 

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_6"><img src="img/harley_davidson/decors_2_miniature.jpg" alt="decors 2" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_6"><img src="img/harley_davidson/decors_2.jpg" alt="decors 2" /></div>
                        </div> 

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_7"><img src="img/harley_davidson/decors_3_miniature.jpeg" alt="decors 3" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_7"><img src="img/harley_davidson/decors_3.jpeg" alt="decors 3" /></div>
                        </div> 

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_8"><img src="img/harley_davidson/decors_4.jpeg" alt="decors 4" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_8"><img src="img/harley_davidson/decors_4.jpeg" alt="decors 4" /></div>
                        </div> 

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_9"><img src="img/harley_davidson/decors_5.jpg" alt="decors 5" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_9"><img src="img/harley_davidson/decors_5.jpg" alt="decors 5" /></div>
                        </div> 
                    </div>
                </div>

                <div id="photos_harley_davidson_2">
                    <div id="precedent_harley_davidson_2"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        
                        <h6>Harley Davidson
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>MAYA</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_10"><img src="img/harley_davidson/decors_6_miniature.jpg" alt="decors 6" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_10"><img src="img/harley_davidson/decors_6.jpg" alt="decors 6" /></div>
                        </div>
                        
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_11"><img src="img/harley_davidson/decors_7_miniature.jpg" alt="decors 7" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_11"><img src="img/harley_davidson/decors_7.jpg" alt="decors 7" /></div>
                        </div> 

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_12"><img src="img/harley_davidson/decors_8_miniature.jpeg" alt="decors 8" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_12"><img src="img/harley_davidson/decors_8.jpeg" alt="decors 8" /></div>
                        </div> 

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_13"><img src="img/harley_davidson/decors_9_miniature.jpeg" alt="decors 9" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_13"><img src="img/harley_davidson/decors_9.jpeg" alt="decors 9" /></div>
                        </div>
                        
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_14"><img src="img/harley_davidson/decors_10_miniature.jpeg" alt="decors 10" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_14"><img src="img/harley_davidson/decors_10.jpeg" alt="decors 10" /></div>
                        </div> 

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_harley_davidson_miniature_15"><img src="img/harley_davidson/decors_11_miniature.jpeg" alt="decors 11" /></div></div>
                            <div id="conception_3d_harley_davidson_agrandi_15"><img src="img/harley_davidson/decors_11.jpeg" alt="decors 11" /></div>
                        </div>
                    </div>
                </div>

                <div id="pages_11">
                    <p id="page_11_one_harley_davidson">1</p> 
                    <p></p> <p id="page_11_two_harley_davidson">2</p>
                </div>

                <div id="photos_ford_mustang">
                    <div id="precedent_ford_mustang"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        
                        <h6>Ford Mustang
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>MAYA</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ford_mustang_miniature_1"><img src="img/ford_mustang/ford_mustang_1_miniature.jpeg" alt="Ford Mustang 1" /></div></div>
                            <div id="conception_3d_ford_mustang_agrandi_1"><img src="img/ford_mustang/ford_mustang_1.jpeg" alt="Ford Mustang 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ford_mustang_miniature_2"><img src="img/ford_mustang/ford_mustang_2_miniature.jpeg" alt="Ford Mustang 2" /></div></div>
                            <div id="conception_3d_ford_mustang_agrandi_2"><img src="img/ford_mustang/ford_mustang_2.jpeg" alt="Ford Mustang 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ford_mustang_miniature_3"><img src="img/ford_mustang/ford_mustang_3_miniature.jpg" alt="Ford Mustang 3" /></div></div>
                            <div id="conception_3d_ford_mustang_agrandi_3"><img src="img/ford_mustang/ford_mustang_3.jpg" alt="Ford Mustang 3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ford_mustang_miniature_4"><img src="img/ford_mustang/ford_mustang_4_miniature.jpg" alt="Ford Mustang 4" /></div></div>
                            <div id="conception_3d_ford_mustang_agrandi_4"><img src="img/ford_mustang/ford_mustang_4.jpg" alt="Ford Mustang 4" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ford_mustang_miniature_5"><img src="img/ford_mustang/ford_mustang_5_miniature.jpg" alt="Ford Mustang 5" /></div></div>
                            <div id="conception_3d_ford_mustang_agrandi_5"><img src="img/ford_mustang/ford_mustang_5.jpg" alt="Ford Mustang 5" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ford_mustang_miniature_6"><img src="img/ford_mustang/ford_mustang_6_miniature.jpg" alt="Ford Mustang 6" /></div></div>
                            <div id="conception_3d_ford_mustang_agrandi_6"><img src="img/ford_mustang/ford_mustang_6.jpg" alt="Ford Mustang 6" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ford_mustang_miniature_7"><img src="img/ford_mustang/ford_mustang_7_miniature.jpg" alt="Ford Mustang 7" /></div></div>
                            <div id="conception_3d_ford_mustang_agrandi_7"><img src="img/ford_mustang/ford_mustang_7.jpg" alt="Ford Mustang 7" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ford_mustang_miniature_8"><img src="img/ford_mustang/ford_mustang_8_miniature.jpg" alt="Ford Mustang 8" /></div></div>
                            <div id="conception_3d_ford_mustang_agrandi_8"><img src="img/ford_mustang/ford_mustang_8.jpg" alt="Ford Mustang 8" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_pagani_zonda">
                    <div id="precedent_pagani_zonda"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        
                        <h6>Pagani Zonda
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>MAYA</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_pagani_zonda_miniature_1"><img src="img/pagani_zonda/pagani_zonda_1_miniature.jpg" alt="Pagani Zonda 1" /></div></div>
                            <div id="conception_3d_pagani_zonda_agrandi_1"><img src="img/pagani_zonda/pagani_zonda_1.jpg" alt="Pagani Zonda 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_pagani_zonda_miniature_2"><img src="img/pagani_zonda/pagani_zonda_2_miniature.jpg" alt="Pagani Zonda 2" /></div></div>
                            <div id="conception_3d_pagani_zonda_agrandi_2"><img src="img/pagani_zonda/pagani_zonda_2.jpg" alt="Pagani Zonda 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_pagani_zonda_miniature_3"><img src="img/pagani_zonda/pagani_zonda_3_miniature.jpg" alt="Pagani Zonda 3" /></div></div>
                            <div id="conception_3d_pagani_zonda_agrandi_3"><img src="img/pagani_zonda/pagani_zonda_3.jpg" alt="Pagani Zonda 3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_pagani_zonda_miniature_4"><img src="img/pagani_zonda/pagani_zonda_4_miniature.jpg" alt="Pagani Zonda 4" /></div></div>
                            <div id="conception_3d_pagani_zonda_agrandi_4"><img src="img/pagani_zonda/pagani_zonda_4.jpg" alt="Pagani Zonda 4" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_pagani_zonda_miniature_5"><img src="img/pagani_zonda/pagani_zonda_5_miniature.jpeg" alt="Pagani Zonda 5" /></div></div>
                            <div id="conception_3d_pagani_zonda_agrandi_5"><img src="img/pagani_zonda/pagani_zonda_5.jpeg" alt="Pagani Zonda 5" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_pagani_zonda_miniature_6"><img src="img/pagani_zonda/pagani_zonda_6_miniature.jpeg" alt="Pagani Zonda 6" /></div></div>
                            <div id="conception_3d_pagani_zonda_agrandi_6"><img src="img/pagani_zonda/pagani_zonda_6.jpeg" alt="Pagani Zonda 6" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_pagani_zonda_miniature_7"><img src="img/pagani_zonda/pagani_zonda_7_miniature.jpg" alt="Pagani Zonda 7" /></div></div>
                            <div id="conception_3d_pagani_zonda_agrandi_7"><img src="img/pagani_zonda/pagani_zonda_7.jpg" alt="Pagani Zonda 7" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_pagani_zonda_miniature_8"><img src="img/pagani_zonda/pagani_zonda_8_miniature.jpeg" alt="Pagani Zonda 8" /></div></div>
                            <div id="conception_3d_pagani_zonda_agrandi_8"><img src="img/pagani_zonda/pagani_zonda_8.jpeg" alt="Pagani Zonda 8" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_can_am">
                    <div id="precedent_can_am"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        
                        <h6>Can-am
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>MAYA</p>
                        <div class="lignes-2"></div>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_can_am_miniature_1"><img src="img/can-am/can-am_1_miniature.jpg" alt="Can-am 1" /></div></div>
                            <div id="conception_3d_can_am_agrandi_1"><img src="img/can-am/can-am_1.jpg" alt="Can-am 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_can_am_miniature_2"><img src="img/can-am/can-am_2_miniature.jpeg" alt="Can-am 2" /></div></div>
                            <div id="conception_3d_can_am_agrandi_2"><img src="img/can-am/can-am_2.jpeg" alt="Can-am 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_can_am_miniature_3"><img src="img/can-am/can-am_3_miniature.jpeg" alt="Can-am 3" /></div></div>
                            <div id="conception_3d_can_am_agrandi_3"><img src="img/can-am/can-am_3.jpeg" alt="Can-am 3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_can_am_miniature_4"><img src="img/can-am/can-am_4_miniature.jpeg" alt="Can-am 4" /></div></div>
                            <div id="conception_3d_can_am_agrandi_4"><img src="img/can-am/can-am_4.jpeg" alt="Can-am 4" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_can_am_miniature_5"><img src="img/can-am/can-am_5_miniature.jpeg" alt="Can-am 5" /></div></div>
                            <div id="conception_3d_can_am_agrandi_5"><img src="img/can-am/can-am_5.jpeg" alt="Can-am 5" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_can_am_miniature_6"><img src="img/can-am/can-am_6_miniature.jpeg" alt="Can-am 6" /></div></div>
                            <div id="conception_3d_can_am_agrandi_6"><img src="img/can-am/can-am_6.jpeg" alt="Can-am 6" /></div>
                        </div>
                    </div>
                </div>

                <div id="pages_5">
                    <p id="page_one_patisseries">1</p> 
                    <p></p> <p id="page_two_patisseries">2</p>
                </div>

                <div id="photos_patisseries_1">
                    <div id="precedent_patisseries_1"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        
                        <h6>Pâtisseries
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                        <div class="col-md-4">
                            <br /><br />
                            <h6>Entremets</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="conception_3d_patisseries_miniature_1"><img src="img/patisseries/entremet_1_miniature.jpeg" alt="Pâtisseries 1" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_1"><img src="img/patisseries/entremet_1.jpeg" alt="Pâtisseries 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Fraisier</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="conception_3d_patisseries_miniature_2"><img src="img/patisseries/fraisier_1_miniature.jpeg" alt="Pâtisseries 2" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_2"><img src="img/patisseries/fraisier_1.jpeg" alt="Pâtisseries 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Tarte aux fruits</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="conception_3d_patisseries_miniature_3"><img src="img/patisseries/tarte_franboise_miniature.jpeg" alt="Pâtisseries 3" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_3"><img src="img/patisseries/tarte_franboise.jpeg" alt="Pâtisseries 3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Paris Brest</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="conception_3d_patisseries_miniature_4"><img src="img/patisseries/paris_brest_miniature.jpeg" alt="Pâtisseries 4" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_4"><img src="img/patisseries/paris_brest.jpeg" alt="Pâtisseries 4" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Pithiviers</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="conception_3d_patisseries_miniature_5"><img src="img/patisseries/pithiviers_miniature.jpeg" alt="Pâtisseries 5" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_5"><img src="img/patisseries/pithiviers.jpeg" alt="Pâtisseries 5" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Maracons</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="conception_3d_patisseries_miniature_6"><img src="img/patisseries/maracons_miniature.jpeg" alt="Pâtisseries 6" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_6"><img src="img/patisseries/maracons.jpeg" alt="Pâtisseries 6" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Barquette au marron</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="conception_3d_patisseries_miniature_7"><img src="img/patisseries/barquette_au_marron_miniature.jpeg" alt="Pâtisseries 7" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_7"><img src="img/patisseries/barquette_au_marron.jpeg" alt="Pâtisseries 7" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Tarte citron meringuée</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="conception_3d_patisseries_miniature_8"><img src="img/patisseries/tarte_citron_meringuee_miniature.jpeg" alt="Pâtisseries 8" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_8"><img src="img/patisseries/tarte_citron_meringuee.jpeg" alt="Pâtisseries 8" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Choux caramel</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="conception_3d_patisseries_miniature_9"><img src="img/patisseries/choux_caramel_miniature.jpeg" alt="Pâtisseries 9" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_9"><img src="img/patisseries/choux_caramel.jpeg" alt="Pâtisseries 9" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_patisseries_2">
                    <div id="precedent_patisseries_2"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        
                        <h6>Pâtisseries
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                        <div class="col-md-4">
                            <br /><br />
                            <h6>Baba au rhum</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="conception_3d_patisseries_miniature_10"><img src="img/patisseries/baba_au_rhum_miniature.jpeg" alt="Pâtisseries 10" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_10"><img src="img/patisseries/baba_au_rhum.jpeg" alt="Pâtisseries 10" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Choux à la crème</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="conception_3d_patisseries_miniature_11"><img src="img/patisseries/choux_a_la_creme_miniature.jpeg" alt="Pâtisseries 11" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_11"><img src="img/patisseries/choux_a_la_creme.jpeg" alt="Pâtisseries 11" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Eclair au chocolat</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="conception_3d_patisseries_miniature_12"><img src="img/patisseries/eclair_au_chocolat_miniature.jpeg" alt="Pâtisseries 12" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_12"><img src="img/patisseries/eclair_au_chocolat.jpeg" alt="Pâtisseries 12" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br /><br />
                            <h6>Mille Feuille</h6>
                            <div class="lignes-2"></div>
                            <br>
                            <div id="color"><div id="conception_3d_patisseries_miniature_13"><img src="img/patisseries/mille_feuille_miniature.jpeg" alt="Pâtisseries 13" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_13"><img src="img/patisseries/mille_feuille.jpeg" alt="Pâtisseries 13" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br /><br /><br /><br />
                            <div id="color"><div id="conception_3d_patisseries_miniature_14"><img src="img/patisseries/ensemble_de_gateau_miniature.jpeg" alt="Pâtisseries 14" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_14"><img src="img/patisseries/ensemble_de_gateau.jpeg" alt="Pâtisseries 14" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br /><br /><br /><br />
                            <div id="color"><div id="conception_3d_patisseries_miniature_15"><img src="img/patisseries/compositions_miniature.jpg" alt="Pâtisseries 15" /></div></div>
                            <div id="conception_3d_patisseries_agrandi_15"><img src="img/patisseries/compositions.jpg" alt="Pâtisseries 15" /></div>
                        </div>
                    </div>
                </div>

                <div id="pages_12">
                    <p id="page_12_one_patisseries">1</p> 
                    <p></p> <p id="page_12_two_patisseries">2</p>
                </div>

                <div id="pages_6">
                    <p id="page_one_laboratoire_de_patisserie">1</p> 
                    <p></p> <p id="page_two_laboratoire_de_patisserie">2</p>
                    <p></p> <p id="page_three_laboratoire_de_patisserie">3</p>
                </div>

                <div id="photos_laboratoire_de_patisserie_1">
                    <div id="precedent_laboratoire_de_patisserie_1"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        
                        <h6>Laboratoire de pâtisserie
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_1"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_1_miniature.jpg" alt="Laboratoire de pâtisserie 1" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_1"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_1.jpg" alt="Laboratoire de pâtisserie 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_2"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_2_miniature.jpg" alt="Laboratoire de pâtisserie 2" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_2"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_2.jpg" alt="Laboratoire de pâtisserie 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_3"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_3_miniature.jpg" alt="Laboratoire de pâtisserie 3" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_3"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_3.jpg" alt="Laboratoire de pâtisserie 3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_4"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_4_miniature.jpg" alt="Laboratoire de pâtisserie 4" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_4"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_4.jpg" alt="Laboratoire de pâtisserie 4" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_5"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_5_miniature.jpg" alt="Laboratoire de pâtisserie 5" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_5"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_5.jpg" alt="Laboratoire de pâtisserie 5" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_6"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_6_miniature.jpg" alt="Laboratoire de pâtisserie 6" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_6"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_6.jpg" alt="Laboratoire de pâtisserie 6" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_7"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_7_miniature.jpg" alt="Laboratoire de pâtisserie 7" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_7"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_7.jpg" alt="Laboratoire de pâtisserie 7" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_8"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_8_miniature.jpg" alt="Laboratoire de pâtisserie 8" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_8"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_8.jpg" alt="Laboratoire de pâtisserie 8" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_9"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_9_miniature.jpg" alt="Laboratoire de pâtisserie 9" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_9"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_9.jpg" alt="Laboratoire de pâtisserie 9" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_10"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_10_miniature.jpg" alt="Laboratoire de pâtisserie 10" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_10"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_10.jpg" alt="Laboratoire de pâtisserie 10" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_11"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_11_miniature.jpg" alt="Laboratoire de pâtisserie 11" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_11"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_11.jpg" alt="Laboratoire de pâtisserie 11" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_12"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_12_miniature.jpg" alt="Laboratoire de pâtisserie 12" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_12"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_12.jpg" alt="Laboratoire de pâtisserie 12" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_laboratoire_de_patisserie_2">
                    <div id="precedent_laboratoire_de_patisserie_2"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">

                    <h6>Laboratoire de pâtisserie
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_13"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_13_miniature.jpg" alt="Laboratoire de pâtisserie 13" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_13"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_13.jpg" alt="Laboratoire de pâtisserie 13" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_14"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_14_miniature.jpg" alt="Laboratoire de pâtisserie 14" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_14"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_14.jpg" alt="Laboratoire de pâtisserie 14" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_15"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_15_miniature.jpg" alt="Laboratoire de pâtisserie 15" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_15"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_15.jpg" alt="Laboratoire de pâtisserie 15" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_16"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_16_miniature.jpg" alt="Laboratoire de pâtisserie 16" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_16"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_16.jpg" alt="Laboratoire de pâtisserie 16" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_17"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_17_miniature.jpg" alt="Laboratoire de pâtisserie 17" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_17"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_17.jpg" alt="Laboratoire de pâtisserie 17" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_18"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_18_miniature.jpg" alt="Laboratoire de pâtisserie 18" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_18"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_18.jpg" alt="Laboratoire de pâtisserie 18" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_19"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_19_miniature.jpg" alt="Laboratoire de pâtisserie 19" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_19"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_19.jpg" alt="Laboratoire de pâtisserie 19" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_20"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_20_miniature.jpg" alt="Laboratoire de pâtisserie 20" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_20"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_20.jpg" alt="Laboratoire de pâtisserie 20" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_21"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_21_miniature.jpg" alt="Laboratoire de pâtisserie 21" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_21"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_21.jpg" alt="Laboratoire de pâtisserie 21" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_22"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_22_miniature.jpg" alt="Laboratoire de pâtisserie 22" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_22"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_22.jpg" alt="Laboratoire de pâtisserie 22" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_23"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_23_miniature.jpg" alt="Laboratoire de pâtisserie 23" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_23"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_23.jpg" alt="Laboratoire de pâtisserie 23" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_24"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_24_miniature.jpg" alt="Laboratoire de pâtisserie 24" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_24"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_24.jpg" alt="Laboratoire de pâtisserie 24" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_laboratoire_de_patisserie_3">
                    <div id="precedent_laboratoire_de_patisserie_3"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">

                        <h6>Laboratoire de pâtisserie
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_25"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_25_miniature.jpg" alt="Laboratoire de pâtisserie 25" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_25"><img src="img/laboratoire_de_patisserie/laboratoire_de_patisserie_25.jpg" alt="Laboratoire de pâtisserie 25" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_26"><img src="img/laboratoire_de_patisserie/plan_laboratoire_1_miniature.jpg" alt="Plan laboratoire 1" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_26"><img src="img/laboratoire_de_patisserie/plan_laboratoire_1.jpg" alt="Plan laboratoire 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_27"><img src="img/laboratoire_de_patisserie/plan_laboratoire_2_miniature.jpg" alt="Plan laboratoire 2" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_27"><img src="img/laboratoire_de_patisserie/plan_laboratoire_2.jpg" alt="Plan laboratoire 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_laboratoire_de_patisserie_miniature_28"><img src="img/laboratoire_de_patisserie/plan_laboratoire_3_miniature.jpg" alt="Plan laboratoire 3" /></div></div>
                            <div id="conception_3d_laboratoire_de_patisserie_agrandi_28"><img src="img/laboratoire_de_patisserie/plan_laboratoire_3.jpg" alt="Plan laboratoire 3" /></div>
                        </div>
                    </div>
                </div>

                <div id="pages_13">
                    <p id="page_13_one_laboratoire_de_patisserie">1</p> 
                    <p></p> <p id="page_13_two_laboratoire_de_patisserie">2</p>
                    <p></p> <p id="page_13_three_laboratoire_de_patisserie">3</p>
                </div>

                <div id="photos_ustensiles_patisserie">
                    <div id="precedent_ustensiles_patisserie"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        <h6>Ustensiles pâtisserie
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ustensiles_patisserie_miniature_1"><img src="img/ustensiles_patisserie/ustensiles_patisserie_1_miniature.jpeg" alt="Ustensiles pâtisserie 1" /></div></div>
                            <div id="conception_3d_ustensiles_patisserie_agrandi_1"><img src="img/ustensiles_patisserie/ustensiles_patisserie_1.jpeg" alt="Ustensiles pâtisserie_1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ustensiles_patisserie_miniature_2"><img src="img/ustensiles_patisserie/ustensiles_patisserie_2_miniature.jpeg" alt="Ustensiles pâtisserie 2" /></div></div>
                            <div id="conception_3d_ustensiles_patisserie_agrandi_2"><img src="img/ustensiles_patisserie/ustensiles_patisserie_2.jpeg" alt="Ustensiles pâtisserie_2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ustensiles_patisserie_miniature_3"><img src="img/ustensiles_patisserie/ustensiles_patisserie_3_miniature.jpeg" alt="Ustensiles pâtisserie 3" /></div></div>
                            <div id="conception_3d_ustensiles_patisserie_agrandi_3"><img src="img/ustensiles_patisserie/ustensiles_patisserie_3.jpeg" alt="Ustensiles pâtisserie_3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ustensiles_patisserie_miniature_4"><img src="img/ustensiles_patisserie/ustensiles_patisserie_4_miniature.jpg" alt="Ustensiles pâtisserie 4" /></div></div>
                            <div id="conception_3d_ustensiles_patisserie_agrandi_4"><img src="img/ustensiles_patisserie/ustensiles_patisserie_4.jpg" alt="Ustensiles pâtisserie_4" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ustensiles_patisserie_miniature_5"><img src="img/ustensiles_patisserie/ustensiles_patisserie_5_miniature.jpeg" alt="Ustensiles pâtisserie 5" /></div></div>
                            <div id="conception_3d_ustensiles_patisserie_agrandi_5"><img src="img/ustensiles_patisserie/ustensiles_patisserie_5.jpeg" alt="Ustensiles pâtisserie_5" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ustensiles_patisserie_miniature_6"><img src="img/ustensiles_patisserie/ustensiles_patisserie_6_miniature.jpeg" alt="Ustensiles pâtisserie 6" /></div></div>
                            <div id="conception_3d_ustensiles_patisserie_agrandi_6"><img src="img/ustensiles_patisserie/ustensiles_patisserie_6.jpeg" alt="Ustensiles pâtisserie_6" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_ustensiles_patisserie_miniature_7"><img src="img/ustensiles_patisserie/ustensiles_patisserie_7_miniature.jpeg" alt="Ustensiles pâtisserie 7" /></div></div>
                            <div id="conception_3d_ustensiles_patisserie_agrandi_7"><img src="img/ustensiles_patisserie/ustensiles_patisserie_7.jpeg" alt="Ustensiles pâtisserie 7" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_petit_cuisinier">
                    <div id="precedent_petit_cuisinier"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <br /><br />
                    <div class="row">
                        <h6>Petit cuisinier
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                        <div class="lignes-2"></div>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_petit_cuisinier_miniature_1"><img src="img/petit_cuisinier/petit_cuisinier_1_miniature.jpeg" alt="Petit cuisinier 1" /></div></div>
                            <div id="conception_3d_petit_cuisinier_agrandi_1"><img src="img/petit_cuisinier/petit_cuisinier_1.jpeg" alt="Petit cuisinier 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_petit_cuisinier_miniature_2"><img src="img/petit_cuisinier/petit_cuisinier_2_miniature.jpg" alt="Petit cuisinier 2" /></div></div>
                            <div id="conception_3d_petit_cuisinier_agrandi_2"><img src="img/petit_cuisinier/petit_cuisinier_2.jpg" alt="Petit cuisinier 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_petit_cuisinier_miniature_3"><img src="img/petit_cuisinier/petit_cuisinier_3_miniature.jpeg" alt="Petit cuisinier 3" /></div></div>
                            <div id="conception_3d_petit_cuisinier_agrandi_3"><img src="img/petit_cuisinier/petit_cuisinier_3.jpeg" alt="Petit cuisinier 3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_petit_cuisinier_miniature_4"><img src="img/petit_cuisinier/petit_cuisinier_4_miniature.jpeg" alt="Petit cuisinier 4" /></div></div>
                            <div id="conception_3d_petit_cuisinier_agrandi_4"><img src="img/petit_cuisinier/petit_cuisinier_4.jpeg" alt="Petit cuisinier 4" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_petit_cuisinier_miniature_5"><img src="img/petit_cuisinier/petit_cuisinier_5_miniature.jpeg" alt="Petit cuisinier 5" /></div></div>
                            <div id="conception_3d_petit_cuisinier_agrandi_5"><img src="img/petit_cuisinier/petit_cuisinier_5.jpeg" alt="Petit cuisinier 5" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_petit_cuisinier_miniature_6"><img src="img/petit_cuisinier/petit_cuisinier_6_miniature.jpeg" alt="Petit cuisinier 6" /></div></div>
                            <div id="conception_3d_petit_cuisinier_agrandi_6"><img src="img/petit_cuisinier/petit_cuisinier_6.jpeg" alt="Petit cuisinier 6" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_petit_cuisinier_miniature_7"><img src="img/petit_cuisinier/petit_cuisinier_7_miniature.jpeg" alt="Petit cuisinier 7" /></div></div>
                            <div id="conception_3d_petit_cuisinier_agrandi_7"><img src="img/petit_cuisinier/petit_cuisinier_7.jpeg" alt="Petit cuisinier 7" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_petit_cuisinier_miniature_8"><img src="img/petit_cuisinier/petit_cuisinier_8_miniature.jpeg" alt="Petit cuisinier 8" /></div></div>
                            <div id="conception_3d_petit_cuisinier_agrandi_8"><img src="img/petit_cuisinier/petit_cuisinier_8.jpeg" alt="Petit cuisinier 8" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_petit_cuisinier_miniature_9"><img src="img/petit_cuisinier/petit_cuisinier_9_miniature.jpeg" alt="Petit cuisinier 9" /></div></div>
                            <div id="conception_3d_petit_cuisinier_agrandi_9"><img src="img/petit_cuisinier/petit_cuisinier_9.jpeg" alt="Petit cuisinier 9" /></div>
                        </div>
                    </div>
                </div>

                <div id="conception_3d_2">
                    <br /><br />
                    <div class="row">       
                        
                        <div class="col-md-4">
                            <br /><br />
                            <h6>Petit Cuisinier
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                            <div id="color"><div id="petit_cuisinier"><img src="img/petit_cuisinier/petit_cuisinier_6.jpeg" alt="Petit Cuisinier" /></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Véhicule
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                            <div id="color"><div id="vehicule"><img src="img/vehicule/vehicule_miniature.jpg" alt="Véhicule" /></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Salon
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>MAYA</p>
                            <div id="color"><div id="salon"><img src="img/Salon/Salon1970_miniature.jpeg" alt="Salon" /></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>F15 Eagle
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>MAYA</p>
                            <div id="color"><div id="f15_eagle"><img src="img/f15_eagle/f15_eagle_3.jpg" alt="F15 Eagle" /></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Fond des Mers
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>MAYA</p>
                            <div id="color"><div id="fond_des_mers"><img src="img/fond_des_mers/fond_des_mers_2.jpeg" alt="Fond des Mers" /></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Bougie
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                            <div id="color"><div id="conception_3d_2_bougie_miniature_1"><img src="img/bougie/bougie_miniature.jpg" alt="Bougie" /></div></div>
                            <div id="conception_3d_2_bougie_agrandi_1"><img src="img/bougie/bougie.jpg" alt="Bougie" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>cuisine
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                            <div id="color"><div id="cuisine"><img src="img/cuisine/Perspective_cuisine_1_miniature.jpg" alt="cuisine" /></div></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Cascade
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                            <div id="color"><div id="conception_3d_2_cascade_miniature_1"><img src="img/cascade/cascade_miniature.jpg" alt="Cascade" /></div></div>
                            <div id="conception_3d_2_cascade_agrandi_1"><img src="img/cascade/cascade.jpg" alt="Cascade" /></div>
                        </div>
                    </div> <br /><br /><br /><br /><br /><br /><br />
                </div>  

                <br /><br />
                <div id="pages_7">
                    <p id="page_one_vehicule">1</p> 
                    <p></p> <p id="page_two_vehicule">2</p> 
                </div>

                <div id="photos_vehicule_1">
                    <div id="precedent_vehicule_1"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        <h6>Véhicule
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_1"><img src="img/vehicule/vehicule_1_miniature.jpg" alt="Véhicule 1" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_1"><img src="img/vehicule/vehicule_1.jpg" alt="Véhicule 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_2"><img src="img/vehicule/vehicule_2_miniature.jpg" alt="Véhicule 2" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_2"><img src="img/vehicule/vehicule_2.jpg" alt="Véhicule 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_3"><img src="img/vehicule/vehicule_3_miniature.jpg" alt="Véhicule 3" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_3"><img src="img/vehicule/vehicule_3.jpg" alt="Véhicule 3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_4"><img src="img/vehicule/vehicule_4_miniature.jpg" alt="Véhicule 4" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_4"><img src="img/vehicule/vehicule_4.jpg" alt="Véhicule 4" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_5"><img src="img/vehicule/vehicule_5_miniature.jpg" alt="Véhicule 5" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_5"><img src="img/vehicule/vehicule_5.jpg" alt="Véhicule 5" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_6"><img src="img/vehicule/vehicule_6_miniature.jpg" alt="Véhicule 6" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_6"><img src="img/vehicule/vehicule_6.jpg" alt="Véhicule 6" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_7"><img src="img/vehicule/garage_vehicule_1_miniature.jpg" alt="Véhicule 7" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_7"><img src="img/vehicule/garage_vehicule_1.jpg" alt="Véhicule 7" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_8"><img src="img/vehicule/garage_vehicule_2_miniature.jpg" alt="Véhicule 8" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_8"><img src="img/vehicule/garage_vehicule_2.jpg" alt="Véhicule 8" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_9"><img src="img/vehicule/garage_vehicule_3_miniature.jpg" alt="Véhicule 9" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_9"><img src="img/vehicule/garage_vehicule_3.jpg" alt="Véhicule 9" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_10"><img src="img/vehicule/garage_vehicule_4_miniature.jpg" alt="Véhicule 10" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_10"><img src="img/vehicule/garage_vehicule_4.jpg" alt="Véhicule 10" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_11"><img src="img/vehicule/garage_vehicule_5_miniature.jpg" alt="Véhicule 11" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_11"><img src="img/vehicule/garage_vehicule_5.jpg" alt="Véhicule 11" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_12"><img src="img/vehicule/garage_vehicule_6_miniature.jpg" alt="Véhicule 12" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_12"><img src="img/vehicule/garage_vehicule_6.jpg" alt="Véhicule 12" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_vehicule_2">
                    <div id="precedent_vehicule_2"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        <h6>Véhicule
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>3DS MAX</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_13"><img src="img/vehicule/garage_vehicule_7_miniature.jpg" alt="Véhicule 13" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_13"><img src="img/vehicule/garage_vehicule_7.jpg" alt="Véhicule 13" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_14"><img src="img/vehicule/garage_vehicule_8_miniature.jpg" alt="Véhicule 14" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_14"><img src="img/vehicule/garage_vehicule_8.jpg" alt="Véhicule 14" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_vehicule_miniature_15"><img src="img/vehicule/Porte_cle_vehicule_miniature.jpg" alt="Véhicule 15" /></div></div>
                            <div id="conception_3d_2_vehicule_agrandi_15"><img src="img/vehicule/Porte_cle_vehicule.jpg" alt="Véhicule 15" /></div>
                        </div>
                    </div>
                </div>

                <div id="pages_14">
                    <p id="page_14_one_vehicule">1</p> 
                    <p></p> <p id="page_14_two_vehicule">2</p> 
                </div>

                <div id="photos_salon">
                    <div id="precedent_salon"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        <h6>Salons
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>MAYA</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_salon_miniature_1"><img src="img/salon/Salon1970_1_miniature.jpeg" alt="Salon 1" /></div></div>
                            <div id="conception_3d_2_salon_agrandi_1"><img src="img/salon/Salon1970_1.jpeg" alt="Salon 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_salon_miniature_2"><img src="img/salon/Salon1970_2_miniature.jpeg" alt="Salon 2" /></div></div>
                            <div id="conception_3d_2_salon_agrandi_2"><img src="img/salon/Salon1970_2.jpeg" alt="Salon 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_salon_miniature_3"><img src="img/salon/Salon2010_1_miniature.jpeg" alt="Salon 3" /></div></div>
                            <div id="conception_3d_2_salon_agrandi_3"><img src="img/salon/Salon2010_1.jpeg" alt="Salon 3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_salon_miniature_4"><img src="img/salon/Salon2010_2_miniature.jpeg" alt="Salon 4" /></div></div>
                            <div id="conception_3d_2_salon_agrandi_4"><img src="img/salon/Salon2010_2.jpeg" alt="Salon 4" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_f15_eagle">
                    <div id="precedent_f15_eagle"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        <h6>F15 eagle
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>MAYA</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_f15_eagle_miniature_1"><img src="img/f15_eagle/f15_eagle_1_miniature.jpg" alt="F15 eagle 1" /></div></div>
                            <div id="conception_3d_2_f15_eagle_agrandi_1"><img src="img/f15_eagle/f15_eagle_1.jpg" alt="F15 eagle 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_f15_eagle_miniature_2"><img src="img/f15_eagle/f15_eagle_2_miniature.jpg" alt="F15 eagle 2" /></div></div>
                            <div id="conception_3d_2_f15_eagle_agrandi_2"><img src="img/f15_eagle/f15_eagle_2.jpg" alt="F15 eagle 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_f15_eagle_miniature_3"><img src="img/f15_eagle/f15_eagle_3_miniature.jpg" alt="F15 eagle 3" /></div></div>
                            <div id="conception_3d_2_f15_eagle_agrandi_3"><img src="img/f15_eagle/f15_eagle_3.jpg" alt="F15 eagle 3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_f15_eagle_miniature_4"><img src="img/f15_eagle/f15_eagle_4_miniature.jpg" alt="F15 eagle 4" /></div></div>
                            <div id="conception_3d_2_f15_eagle_agrandi_4"><img src="img/f15_eagle/f15_eagle_4.jpg" alt="F15 eagle 4" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_f15_eagle_miniature_5"><img src="img/f15_eagle/f15_eagle_5_miniature.jpg" alt="F15 eagle 5" /></div></div>
                            <div id="conception_3d_2_f15_eagle_agrandi_5"><img src="img/f15_eagle/f15_eagle_5.jpg" alt="F15 eagle 5" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_f15_eagle_miniature_6"><img src="img/f15_eagle/f15_eagle_6_miniature.jpg" alt="F15 eagle 6" /></div></div>
                            <div id="conception_3d_2_f15_eagle_agrandi_6"><img src="img/f15_eagle/f15_eagle_6.jpg" alt="F15 eagle 6" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_f15_eagle_miniature_7"><img src="img/f15_eagle/f15_eagle_7_miniature.jpg" alt="F15 eagle 7" /></div></div>
                            <div id="conception_3d_2_f15_eagle_agrandi_7"><img src="img/f15_eagle/f15_eagle_7.jpg" alt="F15 eagle 7" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_fond_des_mers">
                    <div id="precedent_fond_des_mers"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        <h6>Fond des mers
                            <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>MAYA</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_fond_des_mers_miniature_1"><img src="img/fond_des_mers/fond_des_mers_1_miniature.jpeg" alt="Fond des mers 1" /></div></div>
                            <div id="conception_3d_2_fond_des_mers_agrandi_1"><img src="img/fond_des_mers/fond_des_mers_1.jpeg" alt="Fond des mers 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_fond_des_mers_miniature_2"><img src="img/fond_des_mers/fond_des_mers_2_miniature.jpeg" alt="Fond des mers 2" /></div></div>
                            <div id="conception_3d_2_fond_des_mers_agrandi_2"><img src="img/fond_des_mers/fond_des_mers_2.jpeg" alt="Fond des mers 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_fond_des_mers_miniature_3"><img src="img/fond_des_mers/fond_des_mers_3_miniature.jpeg" alt="Fond des mers 3" /></div></div>
                            <div id="conception_3d_2_fond_des_mers_agrandi_3"><img src="img/fond_des_mers/fond_des_mers_3.jpeg" alt="Fond des mers 3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_fond_des_mers_miniature_4"><img src="img/fond_des_mers/fond_des_mers_4_miniature.jpeg" alt="Fond des mers 4" /></div></div>
                            <div id="conception_3d_2_fond_des_mers_agrandi_4"><img src="img/fond_des_mers/fond_des_mers_4.jpeg" alt="Fond des mers 4" /></div>
                        </div>
                    </div>
                </div>

                <div id="photos_cuisine">
                    <div id="precedent_cuisine"><i class="far fa-arrow-alt-circle-left"></i></div>
                    <div class="row">
                        <h6>Cuisine
                        <div class="lignes-2"></div>
                        </h6>
                            <br><br><br>
                            <p>MAYA</p>
                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_cuisine_miniature_1"><img src="img/cuisine/Perspective_cuisine_1_miniature.jpg" alt="Cuisine 1" /></div></div>
                            <div id="conception_3d_2_cuisine_agrandi_1"><img src="img/cuisine/Perspective_cuisine_1.jpg" alt="Cuisine 1" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_cuisine_miniature_2"><img src="img/cuisine/Perspective_cuisine_2_miniature.jpg" alt="Cuisine 2" /></div></div>
                            <div id="conception_3d_2_cuisine_agrandi_2"><img src="img/cuisine/Perspective_cuisine_2.jpg" alt="Cuisine 2" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_cuisine_miniature_3"><img src="img/cuisine/Perspective_cuisine_3_miniature.jpg" alt="Cuisine 3" /></div></div>
                            <div id="conception_3d_2_cuisine_agrandi_3"><img src="img/cuisine/Perspective_cuisine_3.jpg" alt="Cuisine 3" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_cuisine_miniature_4"><img src="img/cuisine/Perspective_cuisine_4_miniature.jpg" alt="Cuisine 4" /></div></div>
                            <div id="conception_3d_2_cuisine_agrandi_4"><img src="img/cuisine/Perspective_cuisine_4.jpg" alt="Cuisine 4" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_cuisine_miniature_5"><img src="img/cuisine/Perspective_cuisine_5_miniature.jpg" alt="Cuisine 5" /></div></div>
                            <div id="conception_3d_2_cuisine_agrandi_5"><img src="img/cuisine/Perspective_cuisine_5.jpg" alt="Cuisine 5" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_cuisine_miniature_6"><img src="img/cuisine/Perspective_cuisine_6_miniature.jpg" alt="Cuisine 6" /></div></div>
                            <div id="conception_3d_2_cuisine_agrandi_6"><img src="img/cuisine/Perspective_cuisine_6.jpg" alt="Cuisine 6" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_cuisine_miniature_7"><img src="img/cuisine/Perspective_cuisine_7_miniature.jpg" alt="Cuisine 7" /></div></div>
                            <div id="conception_3d_2_cuisine_agrandi_7"><img src="img/cuisine/Perspective_cuisine_7.jpg" alt="Cuisine 7" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_cuisine_miniature_8"><img src="img/cuisine/Perspective_cuisine_8_miniature.jpg" alt="Cuisine 8" /></div></div>
                            <div id="conception_3d_2_cuisine_agrandi_8"><img src="img/cuisine/Perspective_cuisine_8.jpg" alt="Cuisine 8" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <div id="color"><div id="conception_3d_2_cuisine_miniature_9"><img src="img/cuisine/Perspective_cuisine_9_miniature.jpg" alt="Cuisine 9" /></div></div>
                            <div id="conception_3d_2_cuisine_agrandi_9"><img src="img/cuisine/Perspective_cuisine_9.jpg" alt="Cuisine 9" /></div>
                        </div>
                    </div>
                </div>

                <div id="pages_9">
                    <p id="page_9_one_conception">1</p> 
                    <p></p> <p id="page_9_two_conception">2</p> 
                </div>
                
                <br /><br />
                <div id="digital_arts">
                    <div class="row">
                        <br /><br />
                        <div class="col-md-4">
                            <br /><br />
                            <h6>Tour de Babel
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>PHOTOSHOP | MAYA</p>
                            <div id="color"><div id="digital_arts_tour_de_babel_miniature_1"><img src="img/digital_arts/tour_de_babel_miniature.jpg" alt="Tour de Babel" /></div></div>
                            <div id="digital_arts_tour_de_babel_agrandi_1"><img src="img//digital_arts/tour_de_babel.jpg" alt="Tour de Babel" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Asgard
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>PHOTOSHOP | MAYA</p>
                            <div id="color"><div id="digital_arts_asgard_miniature_1"><img src="img/digital_arts/asgard_miniature.jpg" alt="Asgard" /></div></div>
                            <div id="digital_arts_asgard_agrandi_1"><img src="img//digital_arts/asgard.jpg" alt="Asgard" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Le frère des ours
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>PHOTOSHOP</p>
                            <div id="color"><div id="digital_arts_le_frere_des_ours_miniature_1"><img src="img/digital_arts/le_frere_des_ours_miniature.jpg" alt="Le frère des ours" /></div></div>
                            <div id="digital_arts_le_frere_des_ours_agrandi_1"><img src="img//digital_arts/le_frere_des_ours.jpg" alt="Le frère des ours" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Montagne
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>PHOTOSHOP</p>
                            <div id="color"><div id="digital_arts_montagne_miniature_1"><img src="img/digital_arts/montagne_miniature.jpg" alt="Montagne" /></div></div>
                            <div id="digital_arts_montagne_agrandi_1"><img src="img//digital_arts/montagne.jpg" alt="Montagne" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Décoration
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>PHOTOSHOP</p>
                            <div id="color"><div id="digital_arts_decoration_miniature_1"><img src="img/digital_arts/decoration_miniature.jpg" alt="Décoration" /></div></div>
                            <div id="digital_arts_decoration_agrandi_1"><img src="img//digital_arts/decoration.jpg" alt="Décoration" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Cerises
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>PHOTOSHOP</p>
                            <div id="color"><div id="digital_arts_cerises_miniature_1"><img src="img/digital_arts/cerises_miniature.jpg" alt="Cerises" /></div></div>
                            <div id="digital_arts_cerises_agrandi_1"><img src="img//digital_arts/cerises.jpg" alt="Cerises" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Jeune personnage
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>Feutre à alcool Touch</p>
                            <div id="color"><div id="digital_arts_jeune_personnage_miniature_1"><img src="img/digital_arts/jeune_personnage_miniature.jpg" alt="Jeune personnage" /></div></div>
                            <div id="digital_arts_jeune_personnage_agrandi_1"><img src="img//digital_arts/jeune_personnage.jpg" alt="Jeune personnage" /></div>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Vieux personnage
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>Feutre à alcool Touch</p>
                            <div id="color"><div id="digital_arts_vieux_personnage_miniature_1"><img src="img/digital_arts/vieux_personnage_miniature.jpg" alt="Vieux personnage" /></div></div>
                            <div id="digital_arts_vieux_personnage_agrandi_1"><img src="img//digital_arts/vieux_personnage.jpg" alt="Vieux personnage" /></div>
                        </div>
                    </div>
                </div>
                
                <div id="production_videos">
                    <div class="row">
                        <br /><br />
                        <div class="col-md-4">
                            <br /><br />
                            <h6>Harley Davidson
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>AFTER EFFECTS | PREMIERE PRO | MAYA</p>
                            <video src="videos/Harley_Davidson_Dyna_Street_3d.mp4" controls></video>
                        </div>

                        <div class="col-md-4">
                        <br /><br />
                            <h6>Ford Mustang
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>AFTER EFFECTS | PREMIERE PRO | MAYA</p>
                            <video src="videos/Ford_Mustang_3d.mp4" controls></video>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Pagani Zonda
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>AFTER EFFECTS | MAYA</p>
                            <video src="videos/Pagani_Zonda_Cinque_roadster.mp4" controls></video>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Struckway
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>AFTER EFFECTS | PREMIERE PRO | 3DS MAX</p>
                            <video src="videos/Projet_de_fin_d_annee_struckway.mp4" controls></video>
                        </div>
            
                        <div class="col-md-4">
                            <br /><br />
                            <h6>Incredible Machine
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>AFTER EFFECTS | PREMIERE PRO | 3DS MAX</p>
                            <video src="videos/incredible_machine.mp4" controls></video>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Texte Shine
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>AFTER EFFECTS | PREMIERE PRO</p>
                            <video src="videos/Texte_Shine.mp4" controls></video>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Texte Ice
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>AFTER EFFECTS | PREMIERE PRO</p>
                            <video src="videos/Texte_Ice.mp4" controls></video>
                        </div>

                        <div class="col-md-4">
                            <br /><br />
                            <h6>Texte Souplesse
                                <div class="lignes-2"></div>
                            </h6>
                            <br><br><br>
                            <p>AFTER EFFECTS | MAYA</p>
                            <video src="videos/effet_texte_souplesse.mp4" controls></video>
                        </div>
                    </div>
                </div>
            </div>
        </section> 

        <section>
            <div id="bandeau_competences"></div>
            <div id="page-3"></div>
            <h3>Compétences</h3>
            <div class="container">
            <div class="sous-titre">Des compétences à votre service.</div>
                <div class="col-md-6" data-delai="0">
                    <h6>Domaines de compétences :
                        <div class="lignes-2"></div>
                    </h6>
                    <br />
                    <div class ="alignements_textes">
                        <div class ="flex_icones_textes">
                            <img src="img/icone_web.png" alt="Icône web" />
                            <p><b>CONCEPTION DE SITE WEB</b><br />
                            Site vitrine, e-commerce, maintenance.
                            </p>
                        </div>
                        <br />
                        <div class ="flex_icones_textes">
                            <img src="img/icone_infographie.png" alt="Icône infographie" />
                            <p><b>CONCEPTION GRAPHIQUE & WEBDESIGN</b><br />
                            Logos, carte de visite, flyer, bandeau, affiche, catalogue...
                            </p>
                        </div>
                        <br />
                        <div class ="flex_icones_textes">
                            <img src="img/icone_conception3d.png" alt="Icône conception3d" />
                            <p><b>CONCEPTION 3D</b><br />
                            Perspectives intérieur/extérieur, plan 3D axonométries, animations 3D 
                            et visites virtuelles
                            </p>
                        </div>
                        <br />
                        <div class ="flex_icones_textes">
                            <img src="img/icone_referencement_seo.png" alt="Icône web" />
                            <p><b>RÉFÉRENCEMENT NATUREL (SEO)</b><br />
                            Positionnement d’un site internet dans les premiers résultats 
                            d’un moteur de recherche tel que Google.
                            </p>
                        </div>
                        <br />
                        <div class ="flex_icones_textes">
                            <img src="img/icone_responsive.png" alt="Icône infographie" />
                            <p><b>RESPONSIVE DESIGN</b><br />
                            Adaptation aux divers écrans : ordinateur, tablette 
                            & mobile.
                        </div>
                        </p>
                        <br />
                        <div class ="flex_icones_textes">
                            <img src="img/icone_maintenance.png" alt="Icône conception3d" />
                            <p><b>MAINTENANCE DE SITE INTERNET</b><br />
                            Mise à jour du site web : modifications du contenu, texte, images, 
                            mise en page.
                            </p> 
                            </div>
                        <br /> 
                        <br />
                        <br />       
                    </div>
                </div>
                <div class="col-md-6" data-delai="0">
                    <h6>Compétences Web :
                        <div class="lignes-2"></div>
                    </h6>
                    <div class="SkillBar">
                        <div id="Skill-HTML"> 
                        <span class="Skill-Area ">HTML - CSS</span>
                        <span class="PercentText ">80%</span>
                        </div>
                    </div>
                    
                    <div class="SkillBar">
                        <div id="Skill-JAVASCRIPT">
                        <span class="Skill-Area ">JAVASCRIPT</span>
                        <span class="PercentText ">50%</span>
                        </div>
                    </div>

                    <div class="SkillBar">
                        <div id="Skill-PHP">
                        <span class="Skill-Area ">PHP</span>
                        <span class="PercentText ">50%</span>
                        </div>
                    </div>
                    
                    <div class="SkillBar">
                        <div id="Skill-MYSQL">
                        <span class="Skill-Area ">MYSQL</span>
                        <span class="PercentText ">50%</span>
                        </div>
                    </div>

                    <br /> 
                    <h6>Compétences conception graphique:
                        <div class="lignes-2"></div>
                    </h6>
                    <div class="SkillBar">
                        <div id="Skill-PHOTOSHOP">
                        <span class="Skill-Area ">PHOTOSHOP</span>
                        <span class="PercentText ">95%</span>
                        </div>
                    </div>
                    
                        <div class="SkillBar">
                        <div id="Skill-ILLUSTRATOR">
                        <span class="Skill-Area ">ILLUSTRATOR</span>
                        <span class="PercentText ">90%</span>
                        </div>
                    </div>
                    
                        <div class="SkillBar">
                        <div id="Skill-INDESIGN">
                        <span class="Skill-Area ">INDESIGN</span>
                        <span class="PercentText ">95%</span>
                        </div>
                    </div>
                    
                        <div class="SkillBar">
                        <div id="Skill-AFTER-EFFECTS">
                        <span class="Skill-Area ">AFTER EFFECTS</span>
                        <span class="PercentText ">50%</span>
                        </div>
                    </div>
                    
                        <div class="SkillBar">
                        <div id="Skill-PREMIERE-PRO">
                        <span class="Skill-Area ">PREMIERE PRO</span>
                        <span class="PercentText ">80%</span>
                        </div>
                    </div>

                    <br /> 
                    <h6>Compétences conception 3D :
                        <div class="lignes-2"></div>
                    </h6>
                        <div class="SkillBar">
                        <div id="Skill-3DS-MAX">
                        <span class="Skill-Area ">3DS MAX</span>
                        <span class="PercentText ">80%</span>
                        </div>
                    </div>

                    <div class="SkillBar">
                        <div id="Skill-MAYA">
                        <span class="Skill-Area ">MAYA</span>
                        <span class="PercentText ">80%</span>
                        </div>
                    </div>

                    <div class="SkillBar">
                        <div id="Skill-ZBRUSH">
                        <span class="Skill-Area ">ZBRUSH</span>
                        <span class="PercentText ">70%</span>
                        </div>
                    </div>

                    <div class="SkillBar">
                        <div id="Skill-REALFLOW">
                        <span class="Skill-Area ">REALFLOW</span>
                        <span class="PercentText ">50%</span>
                        </div>
                    </div>
                </div>
            </div>

        </section> 

        <section>
            <div id="bandeau_tarifs"></div> 
            <div id="page-4"></div>
            <h3 data-delai="0">Mes tarifs</h3>
            <div class="sous-titre">Un tarif adaptée pour un site sur mesure.</div>
            <div class="devis">
            <a class="js-scrollTo" href="#page-5"><img src="img/bouton_devis.png" alt="bouton devis 1" /></a>
            </div>
            <div class="container-fluid-tarifs">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/tarif_1.png" alt="tarif 1" />
                    </div>
                    <div class="col-md-4">
                        <img src="img/tarif_2.png" alt="tarif 2" />
                    </div>
                    <div class="col-md-4">
                        <img src="img/tarif_3.png" alt="tarif 3" />
                    </div>
                </div>
                <div class="row-2">
                    <div class="col-md-6">
                        <img src="img/tarif_4.png" alt="tarif 4" />
                    </div>
                    <div class="col-md-6" style="margin-bottom: 40px;">
                        <img src="img/tarif_5.png" alt="tarif 5" />
                    </div>
                </div>
            </div>
        </section>
        <div class="devis">
            <a class="js-scrollTo" href="#page-5"><img src="img/bouton_devis.png" alt="bouton devis 1" /></a>
            </div>
        <section>
            <div id="bandeau_contact"></div>  
            <div id="page-5"></div>
            <h3>Contact</h3>
            <div class="sous-titre">Besoin d'un renseignement ?</div>
            <?php
            if(isset($_POST['envoyer']))
            {
                if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['objet']) AND !empty($_POST['message']))
                {
                    $header="MIME-Version: 1.0\r\n";
                    $header.='From:"guillaume-liebe.fr"<support@guillaume-liebe.fr>'."\n";
                    $header.='Content-Type:text/html; charset="uft-8"'."\n";
                    $header.='Content-Transfer-Encoding: 8bit';
            
                    $message='
                    <html>
                        <body>
                                <br />
                                <b>Nom de l\'expéditeur :</b> '.$_POST['nom'].'<br />
                                <b>Mail de l\'expéditeur :</b> '.$_POST['email'].'<br />
                                <br />
                                <b>Demande de l\'expéditeur :</b> '.$_POST['objet'].'<br />
                                <br />
                                <b>Message de l\'expéditeur :</b> '.nl2br($_POST['message']).'
                                <br />
                        </body>
                    </html>';

                    mail("liebeguillaume3d@hotmail.com", "CONTACT - Monsite.com", $message, $header);
                        $envoie = "Votre email à bien été envoyé !";
                    }
                    else {
                        $erreur = "Vous n'avez pas rempli tous les champs...";
                }
            }
            ?>

            <div class="container-formulaire">
                    <div class="contact-coordonnees">
                        <div class="contaner-coordonnees">
                        <table>
                            <tr>
                                <td>
                                <b>Horaires</b><br>
                                Du lundi au vendredi<br>
                                De 09h00 à 18h30
                                <br><br>
                                </td>
                            <br>
                            </tr>
                    <!----- <tr>
                                <td>
                                <b>Téléphone</b><br>
                                (+33) 6 ** ** ** **
                                <br><br>
                                </td>
                            </tr> ----->
                            <tr>
                                <td>
                                <b>Adresse</b><br>
                                Ceyras 34800
                                <br><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <b>S.I.R.E.N</b><br>
                                812 563 161
                                <br><br>
                                </td>
                            </tr>    
                        </table>
                        <!---- <div id="logo"></div> ----->
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d261700.0460290554!2d3.5809821428923634!3d43.555043249957485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b15c3260c9e30b%3A0x4078821166aca50!2s34800%20Ceyras!5e0!3m2!1sfr!2sfr!4v1610912218656!5m2!1sfr!2sfr" width= 100%; height= 330px; frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="contact-form">
                    <?php 
                        if(isset($envoie))
                        {
                            echo "<div id='envoie'>" . $envoie . "</div>";
                        }
                        if(isset($erreur))
                        {
                            echo "<div id='erreur'>" . $erreur . "</div>";
                        }
                    ?>
                    <form method="post" action="" role="form">
                        <label><i class="fas fa-user"></i>&nbsp;Nom / Prenom<span style="color:red">*</span></label>
                        <input type="text" name="nom" placeholder=" Quel est votre nom et prénom ?" id="nom" required>

                        <label><i class="fas fa-at"></i>&nbsp;Email<span style="color:red">*</span></label>
                        <input type="text" name="email" placeholder=" Quelle est votre adresse Email ?" id="email"  value="" 
                                    required="required" aria-required="true" 
                                    pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$"
                                    title="Votre adresse mail"
                                    type="text" spellcheck="false" />

                        <label><i class="fab fa-telegram-plane"></i>&nbsp;Objet<span style="color:red">*</span></label>        
                        <input type="text" name="objet" placeholder="Quelle est votre demande ?" id="objet" required>

                        <label><i class="fas fa-envelope"></i>&nbsp;Message<span style="color:red">*</span></label>
                        <textarea name="message" placeholder=" Taper ici votre message..." required></textarea>

                        <input class="envoyer" type="submit" value="Envoyer" name="envoyer" />
                    </form>
                </div>

                <script>
                    $(window).scroll(function() {
                        if ($(this).scrollTop() > 50 ) {
                            $('.scrolltop:hidden').stop(true, true).fadeIn();
                        } else {
                            $('.scrolltop').stop(true, true).fadeOut();
                        }
                    });
                    $(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".thetop").offset().top},"1000");return false})})
                </script>

                </div>
            </div>
        </section>
  
        <footer>
            <div class="agencement_footer">
                <p>2019 - 2021 | © Copyright | Guillaume Liebe &nbsp;-&nbsp;
                <a href="mentions_legales.html">Mentions Légales</a>
                <br>Web Développeur | Infographiste | Concepteur 3D</p>
                <div class="agencement_icones">
                    <div id="touch"><a href="https://www.linkedin.com/in/guillaume-liebe-22308a88/" target="_blank"><div class="icone_1"></div></a></div>
                    <div id="touch"><a href="https://github.com/Guillaume-Liebe" target="_blank"><div class="icone_2"></div></a></div>
                    <div id="touch"><a href="https://www.youtube.com/channel/UCzn2GYpsCi6eRpkRcAWhjLA" target="_blank"><div class="icone_3"></div></a></div>
                </div>
            </div>
        </footer>
  

        <script src="js/clic-1.js"></script>
        <script src="js/apparitions_defilement.js"></script>
    </body>
</html>