<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="logo"><a href="index.php"><img src="images/Untitled.png" style="height: 70px;"></a></div>
        </div>
        <div class="col-sm-9">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="categories.php">Kategorien</a>
                    <a class="nav-item nav-link" href="powerpoints.php?cat=top">Top</a>
                    <a class="nav-item nav-link" href="powerpoints.php?cat=new">Neuste</a>
                    <a class="nav-item nav-link" href="ppinfo.php?id=<?php $sql = "SELECT id FROM powerpoints ORDER BY rand() LIMIT 1"; $result = $mysqli->query($sql); while($row = $result->fetch_assoc()) { echo $row["id"]; } ?>">Zufällig</a>
                    <a class="nav-item nav-link last" href="#"><img src="images/search_icon.png"></a>
                    <a class="nav-item nav-link last" href="profile.php"><img src="images/profile.svg" style="height:30px"></a>
                </div>
            </div>
            </nav>
        </div>
    </div>
</div>