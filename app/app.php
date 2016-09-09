<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Contacts.php';
    date_default_timezone_set('America/New_York');

    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('home.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->post('/added', function() use ($app) {
        $contact = new Contact($_POST['enter_name'], $_POST['enter_number'], $_POST['enter_street'], $_POST['enter_city'], $_POST['enter_state'], $_POST['enter_zip']);
        $contact->save();
        return $app['twig']->render('added.html.twig', array('newcontact' => $contact));
    });

    $app->post('/deleted', function() use ($app) {
        Contact::deleteAll();
        return $app['twig']->render('deleted.html.twig');
    });

    return $app;

?>
