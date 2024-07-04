<?php
function addUserToXML($korisnik) {
    $file = 'korisnik.xml';

    if (!file_exists($file)) {
        $xml = new SimpleXMLElement('<korisnik/>');
    } else {
        $xml = simplexml_load_file($file);
    }

    $korisnikNode = $xml->addChild('korisnik');
    $korisnikNode->addChild('id', $korisnik['id']);
    $korisnikNode->addChild('ime', $korisnik['ime']);
    $korisnikNode->addChild('prezime', $korisnik['prezime']);
    $korisnikNode->addChild('email', $korisnik['email']);

    $xml->asXML($file);
}
?>