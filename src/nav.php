<?php

function getNavigation($current){ //$_SERVER['PHP_SELF']

    $resultat = '';

    if($current == "/lsmd.php"){
        $resultat .= '<li>
                                        <a href="lsmd.php" class="menu-top-active">Home</a>
                                    </li>';
    }else{
        $resultat .= '<li>
                                        <a href="lsmd.php">Home</a>
                                    </li>';
    }

    if($current == "/add_accident.php"){
        $resultat .= '<li>
										<a href="add_accident.php" class="menu-top-active">Ajouter un accident</a>
									</li>';
    }else{
        $resultat .= '<li>
										<a href="add_accident.php">Ajouter un accident</a>
									</li>';
    }

    if($current == "/contre-visite.php"){
        $resultat .= '<li>
										<a href="contre-visite.php" class="menu-top-active">Contre Visites</a>
									</li>';
    }else{
        $resultat .= '<li>
										<a href="contre-visite.php">Contre Visites</a>
									</li>';
    }

    if($current == "/concessionnaire.php"){
        $resultat .= '<li>
											<a href="concessionnaire.php" class="menu-top-active">Plaques</a>
										</li>';
    }else{
        $resultat .= '<li>
											<a href="concessionnaire.php">Plaques</a>
										</li>';
    }

    if($current == "/vehicule.php"){
        $resultat .= '<li>
										<a href="vehicule.php" class="menu-top-active">Vehicule</a>
									</li>';

    }else{
        $resultat .= '<li>
										<a href="vehicule.php">Vehicule</a>
									</li>';

    }


    $resultat .= '<li>
											<a href="trello" target="_blank">Informations Internes</a>
										</li>
										<li>
											<a href="drive" target="_blank">Documents</a>
										</li>';

    return $resultat;

}
/*
$nav = '                    <li>
                                        <a href="lsmd.php" class="menu-top-active">Home</a>
                                    </li>
                                    <li>
										<a href="add_criminal.php">Ajouter un criminel</a>
									</li>
									<li>
										<a href="bracelet.php">Bracelet</a>
									</li>
									<li>
											<a href="concessionnaire.php">Plaques</a>
										</li>
										<li>
										<a href="vehicule.php">Vehicule</a>
									</li>
										<li>
											<a href="trello" target="_blank">Informations Internes</a>
										</li>
										<li>
											<a href="drive" target="_blank">Documents</a>
										</li>';
*/

?>