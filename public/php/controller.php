<?php
require_once 'middleware.php';
require_once 'model.php';
require_once 'validation.php';
require_once 'view.php';
function pageController() {
    $data = [];
    $data['contacts'] = loadContacts();
    if ($_POST) {
        if (!empty($_POST['name']) && !empty($_POST['number'])) {
            addContact($data['contacts'], $_POST['name'], $_POST['number']);
            saveContacts($data['contacts']);
        }
    }
    if (isset($_GET['name'])) {
        deleteContacts($data['contacts'], $_GET['name']);
        saveContacts($data['contacts']);
    }
    if (isset($_GET['search-name']) ) {
        $data['contacts'] = searchContact($data['contacts'], $_GET['search-name']);
    }
    return $data;
}
extract(pageController());

