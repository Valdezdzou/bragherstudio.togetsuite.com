  
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarPanel">
    <div class="offcanvas-body">
        <!-- profile box -->
        <div class="profileBox">
            <div class="image-wrapper">
                <img src="http://localhost:8080/bragherstudio.togetsuite.com/assets/img/logo.png" alt="image" class="imaged rounded">
            </div>
        
            <div class="in">
                <strong>TogetSuite | Bar</strong>
                <div class="text-muted">
                    <ion-icon name="location"></ion-icon>
                    Cameroun
                </div>
            </div>
            <a href="#" class="close-sidebar-button" data-bs-dismiss="offcanvas">
                <ion-icon name="close"></ion-icon>
            </a>
        </div>
        <!-- * profile box -->

        <ul class="listview flush transparent no-line image-listview mt-2">
            <li>
                <a href="http://localhost:8080/bragherstudio.togetsuite.com/account/caisse/index.php" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="home-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Menu
                    </div>
                </a>
            </li>


            <li>
                <a href="http://localhost:8080/bragherstudio.togetsuite.com/account/caisse/pages/facture_close.php" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="clipboard"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Factures clôturées</div>
                    </div>
                </a>
            </li>

            <li>
                <a href="http://localhost:8080/bragherstudio.togetsuite.com/account/caisse/pages/facture_print.php" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Tickets /Impréssions
                    </div>
                </a>
            </li>

            
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="moon-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Dark Mode</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodesidebar">
                            <label class="form-check-label" for="darkmodesidebar"></label>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        
    </div>
    <!-- sidebar buttons -->
    <div class="sidebar-buttons">
        <a href="#" class="button">
            <ion-icon name="person-outline"></ion-icon>
        </a>
        <a href="#" class="button">
            <ion-icon name="archive-outline"></ion-icon>
        </a>
        <a href="#" class="button">
            <ion-icon name="settings-outline"></ion-icon>
        </a>
        <a href="http://localhost:8080/bragherstudio.togetsuite.com/pages/user_logout.php" class="button">
            <ion-icon name="log-out-outline"></ion-icon>
        </a>
    </div>
    <!-- * sidebar buttons -->
</div>