#Beschreibung, wie die Datensätze auf data.opendataportal.at nach test.data.opendataportal.at migriert werden können

##Die datenbankseitige Ersteinrichtung
Auf der Eingabeaufforderung zum Benutzer Postgres wechseln und neue Datenbank
für ckan und den datapusher anlegen:

    sudo -u postgres -i
    createdb -O ckan_default ckan_test -E utf8
    createdb -O ckan_default datapusher_test -E utf8

In der Konfigurationsdatei der CKAN-Testinstanz die neuen Datenbanken eintragen.
Dazu die Einträge

    sqlalchemy.url = postgresql://ckan_default:<PWD>@<HOST>/ckan_test
    ckan.datastore.write_url = postgresql://ckan_default:<PWD>@<HOST>/datastore_test
    ckan.datastore.read_url = postgresql://datastore_default:<PWD>@<HOST>/datastore_test

entsprechend setzen. Auch darauf achten, dass `ckan.site_url` und `ckan.site_id`
auf test gesetzt sind!

Neues Verzeichnis für den Datastore in der Konfigurationsdatei des Testsystems
setzen, dazu den Eintrag `ckan.storage_path` anpassen.

##Wiederkehrend

Das Datenbank-Verzeichnis des Test-Systems leeren. Diese Verzeichnis ist in der
Konfigurationsdatei des Test-Systems `/etc/ckan/test.ini` in der Variable
`ckan.storage_path` gespeichert.

    rm -r /var/lib/ckan/test/

Das Datenbank-Verzeichnis des Produktiv-Systems von `/var/lib/ckan/default` nach `/var/lib/ckan/test/`
kopieren:

    cp -r /var/lib/ckan/default /var/lib/ckan/test

Die Datenbanken des Produktivsystems mit der Option exportieren, alle Daten vor
einem erneuten restore in jene Datenbank, in der der restore durchgeführt wird,
zu löschen. Dazu zuerst zum Datenbank-Superuser wechseln:

    sudo -u postgresql -i
    pg_dump ckan_default --clean > ckan_test.pgdump
    pg_dump datastore_default --clean > datastore_test.pgdump

Die gedumpten Daten des Produktivsystems in das Test-System restoren:

    psql ckan_test < ckan_test.pgdump
    psql datastore_test < datastore_test.pgdump

Den Solr-Index für das Test-System erneut aufbauen. Dazu zum Benutzer ckan wechseln,
das virtuelle Environment für CKAN aufrufen und den paster-Befehl für den Index-
restore nach http://docs.ckan.org/en/943-writing-extensions-tutorial/paster.html#search-index-rebuild-search-index
aufrufen:

    sudo -u ckan -i
    . /usr/lib/ckan/default/bin/activate
    cd /usr/lib/ckan/default/src/ckan/ckan
    paster --plugin=ckan search-index rebuild --config=/etc/ckan/test.ini
