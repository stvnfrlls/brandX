<?php
require_once('process/process.php');

if (empty($_SESSION['email'])) {
    $link = "account/login.php";
    $text = "Login";
} else {
    $link = "account/profile.php";
    $text = "My Account";
}
?>

<!-- Sidebar -->
<aside class="wrap-sidebar js-sidebar">
    <div class="s-full js-hide-sidebar"></div>

    <div class="sidebar flex-col-l p-t-22 p-b-25">
        <div class="flex-r w-full p-b-30 p-r-27">
            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>

        <div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
            <ul class="sidebar-link w-full">
                <li class="p-b-13">
                    <a href="index.php" class="stext-102 cl2 hov-cl1 trans-04">
                        Home
                    </a>
                </li>

                <li class="p-b-13">
                    <a href="<?php echo $link ?>" class="stext-102 cl2 hov-cl1 trans-04">
                        <?php echo $text ?>
                    </a>
                </li>

                <li class="p-b-13">
                    <a href="pages/help-faqs.php" class="stext-102 cl2 hov-cl1 trans-04">
                        Help & FAQs
                    </a>
                </li>

                <?php
                if (!empty($_SESSION['email'])) {
                    echo
                    '
                    <li class="p-b-13">
                        <a href="process/logout.php" class="stext-102 cl2 hov-cl1 trans-04"> Logout </a>
                    </li>
                    ';
                } else {
                    echo
                    '
                    <li class="p-b-13">
                        
                    </li>
                    ';
                }
                ?>
            </ul>

            <div class="sidebar-gallery w-full">
                <span class="mtext-101 cl5"> About Us </span>

                <p class="stext-108 cl6 p-t-27">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                    maximus vulputate hendrerit. Praesent faucibus erat vitae rutrum
                    gravida. Vestibulum tempus mi enim, in molestie sem fermentum
                    quis.
                </p>
            </div>
        </div>
    </div>
</aside>