<!DOCTYPE html>
<html lang="id">
    <?php include("framework/html_head.html"); ?>
    <body>
        <div class="container">
            <?php include("framework/nav.php"); ?>
            <main>
                <?php
                $content = "home.php"; 
                if (isset($_GET['page'])) {
                    $mod = $_GET['page'];
                    switch ($mod) {
                        case "mob":
                            $content = "katalog_mobil.php";
                            break;
                        case "pro":
                            $content = "promo.php";
                            break;
                        case "tnt":
                            $content = "tentang_kami.php";
                            break;
                        case "blog":
                            $content = "blog.php"; 
                            break;
                        default:
                            $content = "home.php";
                            break;
                    }
                }
                include($content);
                ?>
            </main>
            <?php include("framework/footer.php"); ?>
        </div>
    </body>
</html>
