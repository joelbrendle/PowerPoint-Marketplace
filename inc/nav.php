<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="logo"><a href="/"><img src="images/Untitled.png" style="height: 70px;"></a></div>
        </div>
        <div class="col-sm-9">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="categories">Kategorien</a>
                    <a class="nav-item nav-link" href="powerpoints?cat=top">Top</a>
                    <a class="nav-item nav-link" href="powerpoints?cat=new">Neuste</a>
                    <a class="nav-item nav-link" href="ppinfo?id=<?php $sql = "SELECT id FROM powerpoints WHERE active LIKE 1 ORDER BY rand() LIMIT 1"; $result = $mysqli->query($sql); if (!empty($result->num_rows) ) { while($row = $result->fetch_assoc()) { echo $row["id"]; } } ?>">Zufällig</a>
                    <!-- <a class="nav-item nav-link last" href="#"><img src="images/search_icon.png"></a> -->
                    <a class="nav-item nav-link" href="javascript:alert('\nSorry only German for now :(\n\nMomentan leider nur Deutsch :(');">🇩🇪</a>
                    <a class="nav-item nav-link" href="profile.php"><img src="images/profile.svg" style="height:30px"></a>
                </div>
            </div>
            </nav>
        </div>
    </div>
</div>