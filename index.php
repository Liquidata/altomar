<?php
    $language = "pt";
    if (isset($_REQUEST["l"])) {
        switch ($_REQUEST["l"]) {
            case "en":
                require "assets/languages/english.php";
                $language = "en";
                break;
            case "es":
                require "assets/languages/spanish.php";
                $language = "es";
                break;
            default:
                require "assets/languages/portuguese.php";
                break;
        }
    } else {
        require "assets/languages/portuguese.php";
    }
?>
<!DOCTYPE html>
<html>
<head lang="pt">
    <meta charset="UTF-8">
    <title>Alto Mar</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="global">
    <!-- Header Dev Merged -->

    <header class="image-bg-fluid-height-header">
        <div class="top-left-logo">
            <a href="#"><img src="./assets/images/logo.png"></a>
        </div>
        <div class="top-right-languages">
            <ul>
                <li><a href="?l=pt">PT</a></li>
                <li><a href="?l=en">ENG</a></li>
                <li><a href="?l=es">ESP</a></li>
            </ul>
        </div>
        <div class="top-right-menu link" id="menuArea" >
            <div class="header" id="menuTitle"><?php echo $labels["menu_title"]; ?></div>
            <ul id="menuList" hidden>

                <li><a id="menu_altomar">Alto Mar</a></li>
                <li><a id="menu_noticias"><?php echo $labels["menu_noticias"]; ?></a></li>
                <li><a id="menu_bacalhau"><?php echo $labels["menu_bacalhau"]; ?></a></li>
                <li><a id="menu_comopreparamos"><?php echo $labels["menu_comoPreparamos"]; ?></a></li>
                <li><a id="menu_produtos"><?php echo $labels["menu_produtos"]; ?></a></li>
                <li><a id="menu_encomendas"><?php echo $labels["menu_encomendas"]; ?></a></li>
                <li><a id="menu_receitas"><?php echo $labels["menu_receitas"]; ?></a></li>
                <li class="last"><a id="menu_ondeestamos"><?php echo $labels["menu_ondeEstamos"]; ?></a></li>
            </ul>
            <div><img id="menu2" src="assets/images/menu2.png"><img id="menu2mobile" src="assets/images/menu2_mobile.png"></div>

        </div>
    </header>

    <a name="altomar"></a>
    <section class="altomar sectionGrey">

        <div class="container">

            <div class="row text-center">
                <div class="jumbotron jumboWhite">
                    <h2><?php echo $labels["title1"]; ?></h2>
                </div>
                <div class="button buttonGrey" id="grp_altomar"><a id="btn_altomar"><?php echo $labels["global_viewMore"]; ?></a></div>
                <div class="button buttonGrey" id="grp_altomar_close" hidden><a id="btn_altomar_close"><?php echo $labels["global_viewLess"]; ?></a></div>
            </div>
        </div>
    </section>

    <div id="content_altomar" hidden>
        <?php require_once "contents/altomar_pt.html"; ?>
    </div>

    <a name="noticias"></a>
    <section class="noticias sectionMenu">
        <div class="container">
            <div class="row text-center">
                <h1 class="title"><?php echo $labels["noticias_title"]; ?></h1>
                <p><?php echo $labels["noticias_subtitle"]; ?></p>
                <div class="button"><a id="btn_noticias" ><?php echo $labels["global_viewMore"]; ?></a></div>
                <div class="button" hidden><a id="btn_noticias_close" ><?php echo $labels["global_viewLess"]; ?></a></div>
            </div>
        </div>
    </section>

    <div id="content_noticias" hidden>
        <?php require_once "contents/noticias_" . $language . ".html"; ?>
    </div>

    <a name="bacalhau"></a>
    <section class="bacalhau sectionMenu">
        <div class="container">
            <div class="row text-center">
                <h1 class="title"><?php echo $labels["bacalhau_title"]; ?></h1>
                <p><?php echo $labels["bacalhau_subtitle"]; ?></p>
                <div class="button"><a id="btn_bacalhau" ><?php echo $labels["global_viewMore"]; ?></a></div>
            </div>
        </div>
    </section>

    <div id="content_bacalhau" hidden>
        <?php require_once "contents/bacalhau_" . $language . ".html"; ?>
    </div>

    <a name="comopreparamos"></a>
    <section class="comopreparamos sectionMenu">
        <div class="container">
            <div class="row text-center">
                <h1 class="title"><?php echo $labels["comopreparamos_title"]; ?></h1>
                <p><?php echo $labels["comopreparamos_subtitle"]; ?></p>
                <div class="button"><a id="btn_comopreparamos" ><?php echo $labels["global_viewMore"]; ?></a></div>
            </div>
        </div>
    </section>

    <div id="content_comopreparamos" hidden>
        <?php require_once "contents/comopreparamos_" . $language . ".html"; ?>
    </div>

    <a name="produtos"></a>
    <section class="produtos sectionMenu sectionBlack">
        <div class="container">
            <div class="row text-center">
                <h1 class="title"><?php echo $labels["produtos_title"]; ?></h1>
                <p><?php echo $labels["produtos_subtitle"]; ?></p>
                <div class="button"><a id="btn_produtos" ><?php echo $labels["global_viewMore"]; ?></a></div>
            </div>
        </div>
    </section>

    <div id="content_produtos" hidden>
        <?php require_once "contents/produtos_" . $language . ".html"; ?>
    </div>

    <a name="encomendas"></a>
    <section class="encomendas sectionMenu sectionGrey">
        <div class="container">
            <div class="row text-center">
                <h1 class="title"><?php echo $labels["encomendas_title"]; ?></h1>
                <p><?php echo $labels["encomendas_subtitle"]; ?></p>
                <div class="button"><a id="btn_encomendas" ><?php echo $labels["global_viewMore"]; ?></a></div>
            </div>
        </div>
    </section>

    <div id="content_encomendas" hidden>
        <?php require_once "contents/encomendas_" . $language . ".html"; ?>
    </div>

    <a name="receitas"></a>
    <section class="receitas sectionMenu">
        <div class="container">
            <div class="row text-center">
                <h1 class="title"><?php echo $labels["receitas_title"]; ?></h1>
                <p><?php echo $labels["receitas_subtitle"]; ?></p>
                <div class="button"><a id="btn_receitas" ><?php echo $labels["global_viewMore"]; ?></a></div>
            </div>
        </div>
    </section>

    <div id="content_receitas" hidden>
        <?php require_once "contents/receitas_" . $language . ".html"; ?>
    </div>

    <a name="ondeestamos"></a>
    <section class="ondeestamos sectionMenu">
        <div class="container">
            <div class="row text-center">
                <h1 class="title"><?php echo $labels["ondeestamos_title"]; ?></h1>
                <p><?php echo $labels["ondeestamos_subtitle"]; ?></p>
                <div class="button"><a id="btn_ondeestamos" ><?php echo $labels["global_viewMore"]; ?></a></div>
            </div>
        </div>
    </section>

    <div id="content_ondeestamos" hidden>
        <?php require_once "contents/ondeestamos_" . $language . ".html"; ?>
    </div>

    <section class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 social">
                    <a href="#"><img src="./assets/images/social_twitter.png"></a>
                    <a href="#"><img src="./assets/images/social_facebook.png"></a>
                    <a href="#"><img src="./assets/images/social_googleplus.png"></a>
                    <a href="#"><img src="./assets/images/social_pinterest.png"></a>
                </div>
                <div class="col-sm-2 text"><a href="#"><?php echo $labels["footer_map"]; ?></a></div>
                <div class="col-sm-2 text"><a href="#"><?php echo $labels["footer_privacy"]; ?></a></div>
                <div class="col-sm-2 text"><a href="#"><?php echo $labels["footer_terms"]; ?></a></div>
                <div class="col-sm-3 text-right logo"><img src="./assets/images/footer_logo.png"></div>
            </div>
        </div>
    </section>
</div>



<div class="scroll-top-wrapper ">
    <span class="scroll-top-inner">
        <i class="fa fa-2x fa-arrow-circle-up"></i>
    </span>
</div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="custom.js"></script>

</body>
</html>