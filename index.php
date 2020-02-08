<?php
    require('./vendor/autoload.php');
    require('./controllers/frontController.php');
    require('./controllers/adminController.php');

    try {
        if (!empty($_GET['action'])) {
            switch ($_GET['action']) {
                
                case 'displayMentions':
                    displayMentions();
                break;

                case 'displayHome':
                    displayHome();
                break;

                case 'displayOnboard':
                    displayOnBoard();
                break;

                case 'displaySciences':
                    displaySciences();
                break;

                case 'displayContact':
                    displayContact();
                break;

                case 'displaySupport':
                    displaySupport();
                break;                    

                /* BACKOFFICE */


                /* VUES ADMIN */
                /* DASHBOARD */
                case 'displayAdmin':
                    session_start();
                    if (isset($_SESSION['user'])) {
                        displayAdmin();
                    } else {
                        displayLoginView();
                    }
                break;

                /* MAP */

                case 'displayMapMgmt':
                    session_start();
                    if (isset($_SESSION['user'])) {
                        displayMgmtMap();
                    } else {
                        displayLoginView();
                    }
                break;

                case 'listMapEvents':
                    session_start();
                    if (isset($_SESSION['user'])) {
                        displayMapEvents();
                    } else {
                        displayLoginView();
                    }
                break;

                case 'addEvent':
                    session_start();
                    $name = $_POST['name'];
                    $lat = $_POST['lat'];
                    $lng = $_POST['lng'];
                    $date = $_POST['on_date'];
                    $com = $_POST['comments'];

                    if (isset($_SESSION['user'])) {
                        if (!empty($name) && !empty($lat) && !empty($lng) && !empty($date)) {
                            addEvent($name, $lat, $lng, $date, $com);
                        } else if (empty($name)) {
                            echo 'name_missing';
                            exit;
                        } else if (empty($lat)) {
                            echo 'lat_missing';
                            exit;
                        } else if (empty($lng)) {
                            echo 'lng_missing';
                            exit;
                        } else if (empty($date)) {
                            echo 'date_missing';
                            exit;
                        } else {
                            throw new Exception('Erreur fatale');
                            exit;
                        }
                    } else {
                        displayLoginView();
                    }
                break;

                case 'displayUpdateView':
                    session_start();
                    $id = $_GET['event_id'];

                    if (isset($_SESSION['user'])) {
                        displayEventUpdateView($id);
                        exit;
                    } else {
                        displayLoginView();
                    }
                break;

                case 'updateEvent':
                session_start();
                $name = $_POST['name'];
                $lat = $_POST['lat'];
                $lng = $_POST['lng'];
                $date = $_POST['on_date'];
                $id = $_POST['event_id'];
                $com = $_POST['comments'];

                    if (isset($_SESSION['user'])) {
                        if (!empty($name) && !empty($lat) && !empty($lng) && !empty($date)) {
                            updateEvent($name, $lat, $lng, $date, $com, $id);
                        } else if (empty($name)) {
                            echo 'name_missing';
                        } else if (empty($lat)) {
                            echo 'lat_missing';
                        } else if (empty($lng)) {
                            echo 'lng_missing';
                        } else if (empty($date)) {
                            echo 'date_missing';
                        } else {
                            throw new Exception('Erreur fatale');
                        }
                    } else {
                        displayLoginView();
                    }
                break;

                case 'deleteEvent':
                session_start();
                if (isset($_SESSION['user'])) {
                    deleteEvent($_POST['event_id']);
                } else {
                    displayLoginView();
                }
                break;
                
                /* GESTIONNAIRE PROGRAMME BATEAU */

                /* Affricher des données pour le programme du bateau */

                case 'listProgInfos':
                    session_start();

                    $month = $_POST['month'];
                    $week = $_POST['week'];

                    if (isset($_SESSION['user'])) {
                        if (!empty($month) && !empty($week)) {
                                $prog = listProgInfos($month, $week);
                        } else {
                            throw new Exception('Mois ou semaine manquante');
                        }
                    } else {
                        displayLoginView();
                    }
                    break;

                /* Supprimer un programme pour une semaine donnée */

                case 'delProg':
                    session_start();

                    $month = $_POST['month'];
                    $week = $_POST['week'];

                    if (isset($_SESSION['user'])) {
                        if (!empty($month) && !empty($week)) {
                                delProg($month, $week);
                                echo 'success';
                        } else {
                            throw new Exception('Mois ou semaine manquante');
                        }
                    } else {
                        displayLoginView();
                    }
                break;


                /* Ajouter des données pour le programme du bateau */
                case 'addProgInfos':
                    session_start();

                    $month = $_POST['month'];
                    $week = $_POST['week'];

                    $mission = $_POST['mission'];
                    $details_mission = $_POST['details-mission'];
                    $location = $_POST['location'];
                    $available_beds = $_POST['available-beds'];
                    $comments = $_POST['comments'];

                    if (isset($_SESSION['user'])) {
                        if (empty($mission) && empty($details_mission) && empty($location) && empty($available_beds) && empty($comments)) {
                            echo 'missing_infos';
                        } else {
                            if ($month === 'prog_jan') {
                                if ($week === '1') {
                                    addProgJanInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jan1';
                                } else if ($week === '2') {
                                    addProgJanInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jan2';
                                } else if ($week === '3') {
                                    addProgJanInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jan3';
                                } else if ($week === '4') {
                                    addProgJanInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jan4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour janvier');
                                }
                            } else if ($month === 'prog_feb') {
                                if ($week === '1') {
                                    addProgFebInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Feb1';
                                } else if ($week === '2') {
                                    addProgFebInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Feb2';
                                } else if ($week === '3') {
                                    addProgFebInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Feb3';
                                } else if ($week === '4') {
                                    addProgFebInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Feb4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour février');
                                }
                            } else if ($month === 'prog_mar') {
                                if ($week === '1') {
                                    addProgMarInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Mar1';
                                } else if ($week === '2') {
                                    addProgMarInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Mar2';
                                } else if ($week === '3') {
                                    addProgMarInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Mar3';
                                } else if ($week === '4') {
                                    addProgMarInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Mar4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour mars');
                                }
                            } else if ($month === 'prog_apr') {
                                if ($week === '1') {
                                    addProgAprInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Apr1';
                                } else if ($week === '2') {
                                    addProgAprInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Apr2';
                                } else if ($week === '3') {
                                    addProgAprInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Apr3';
                                } else if ($week === '4') {
                                    addProgAprInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Apr4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour avril');
                                }
                            } else if ($month === 'prog_may') {
                                if ($week === '1') {
                                    addProgMayInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'May1';
                                } else if ($week === '2') {
                                    addProgMayInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'May2';
                                } else if ($week === '3') {
                                    addProgMayInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'May3';
                                } else if ($week === '4') {
                                    addProgMayInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'May4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour mai');
                                }
                            } else if ($month === 'prog_jun') {
                                if ($week === '1') {
                                    addProgJunInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jun1';
                                } else if ($week === '2') {
                                    addProgJunInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jun2';
                                } else if ($week === '3') {
                                    addProgJunInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jun3';
                                } else if ($week === '4') {
                                    addProgJunInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jun4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour juin');
                                }
                            } else if ($month === 'prog_jul') {
                                if ($week === '1') {
                                    addProgJulInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jul1';
                                } else if ($week === '2') {
                                    addProgJulInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jun2';
                                } else if ($week === '3') {
                                    addProgJulInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jul3';
                                } else if ($week === '4') {
                                    addProgJulInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jul4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour juillet');
                                }
                            } else if ($month === 'prog_aug') {
                                if ($week === '1') {
                                    addProgAugInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Aug1';
                                } else if ($week === '2') {
                                    addProgAugInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Aug2';
                                } else if ($week === '3') {
                                    addProgAugInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Aug3';
                                } else if ($week === '4') {
                                    addProgAugInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Aug4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour aout');
                                }
                            } else if ($month === 'prog_sep') {
                                if ($week === '1') {
                                    addProgSepInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Sep1';
                                } else if ($week === '2') {
                                    addProgSepInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Sep2';
                                } else if ($week === '3') {
                                    addProgSepInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Sep3';
                                } else if ($week === '4') {
                                    addProgSepInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Sep4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour septembre');
                                } 
                            } else if ($month === 'prog_oct') {
                                if ($week === '1') {
                                    addProgOctInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Oct1';
                                } else if ($week === '2') {
                                    addProgOctInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Oct2';
                                } else if ($week === '3') {
                                    addProgOctInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Oct3';
                                } else if ($week === '4') {
                                    addProgOctInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Oct4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour octobre');
                                }
                            } else if ($month === 'prog_nov') {
                                    if ($week === '1') {
                                        addProgNovInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Nov1';
                                    } else if ($week === '2') {
                                        addProgNovInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Nov2';
                                    } else if ($week === '3') {
                                        addProgNovInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Nov3';
                                    } else if ($week === '4') {
                                        addProgNovInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Nov4';
                                    } else {
                                        throw new Exception('Erreur de numéro de semaine pour novembre');
                                    }
                                } else if ($month === 'prog_dec') {
                                    if ($week === '1') {
                                        addProgDecInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Dec1';
                                    } else if ($week === '2') {
                                        addProgDecInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Dec2';
                                    } else if ($week === '3') {
                                        addProgDecInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Dec3';
                                    } else if ($week === '4') {
                                        addProgDecInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Dec4';
                                    } else {
                                        throw new Exception('Erreur de numéro de semaine pour décembre');
                                    }
                        } else {
                            throw new Exception('Erreur de mois dans la fonction d\'ajout d\'informations au programme du navire');
                        }}   
                    } else {
                        displayLoginView();
                    }
                break;

                /* LOGIN */
                case 'login':
                    displayLoginView();
                break;

                case 'adminLogin':
                if (!empty($_POST['user']) && (!empty($_POST['password']))) {
                    if (logUser($_POST['user'], $_POST['password']) == true) {
                        logUser($_POST['user'], $_POST['password']);
                        
                        session_start();
                        $_SESSION['user'] = $_POST['user'];
                        
                        echo 'success';
                        exit;
                    } else {
                        echo 'failed';
                        exit;
                    }
                }

                case 'signOut':
                    session_start();
                    if (isset($_SESSION['user'])) {
                        session_destroy();
                    }
                break;

                /* GESTION DU PROGRAMME DU BATEAU */
                case 'displayProgMgmt':
                    session_start();
                    if (isset($_SESSION['user'])) {
                        displayProgMgmt();
                        exit;
                    } else {
                        displayLoginView();
                    }

                default:
                    displayHome();
            }
        } else {
            displayHome();
        }
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }


