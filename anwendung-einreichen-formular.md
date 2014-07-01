
## Form

<div class="col-sm-9">
<h3>Informationen über die Anwendung</h3>

<div class="form-group row app_name">
<h5>Name der Anwendung *</h5>
[text* app_name class:form-control class:size-medium]
</div>

<div class="form-group row col-sm-8 app_beschreibung">
<h5>Beschreibung der Anwendung *</h5>
[textarea* app_beschreibung class:form-control class:size-large]
</div>

<div class="form-group row form-bild">
<h5>Bild / Screenshot</h5>
[url app_bild_url]
</div>

<div class="row app_betriebssysteme">
<h5>Auf welchen Betriebssystemen läuft Ihre Anwendung? *</h5>
[checkbox app_betriebssysteme use_label_element class:checkbox "Android" "Blackberry" "Browser WWW" "iOS" "Symbian" "Windows phone" "Windows 8"]
</div>

<div class="row app_art">
<h5>Welcher Typ ist Ihre Anwendung? *</h5>
[checkbox app_typ class:checkbox use_label_element "Konzept" "Mobile App" "Partizipation" "Tutorial" "Visualisierung" "Web-App"]
</div>

<div class="row app_themen">
<h5>Thema Ihrer Anwendung *</h5>
[checkbox app_themen class:checkbox use_label_element "Arbeit" "Bevölkerung" "Bildung und Forschung" "Finanzen und Rechnungswesen" "Geographie und Planung" "Gesellschaft und Soziales" "Gesundheit" "Kunst und Kultur" "Land und Forstwirtschaft" "Sport und Freizeit" "Umwelt" "Verkehr und Technik" "Verwaltung und Politik" "Wirtschaft und Tourismus"]
</div>

<div class="form-group row app_verwendete_datensaetze col-sm-8 ">
<h5>Verwendete Datens&auml;tze *</h5>
     [textarea* app_verwendete_datensaetze class:form-control class:size-large]
</div>

<h3>Links zu Ihrer Anwendung (App-Store, Informationsseite)</h3>

<div class="form-group row form-app_links">

<h5><span class="link">Links</span><span class="text">Text</span></h5>
<div class="row link1">
     [url* app_website_1 class:form-control class:size-small "URL 1"] [text* app_text_website_1 class:form-control class:size-small "Text URL 1"]
</div>

<div class="row link2">
     [url app_website_2 class:form-control class:size-small] [text app_text_website_2 class:form-control class:size-small]
</div>

<div class="row link3">
     [url app_website_3 class:form-control class:size-small] [text app_text_website_3 class:form-control class:size-small]
</div>

</div>

<div class="form-group row">

<h3>Ihre persönlichen Daten</h3>
<h5 class="app_name_einreicherin">Ihr Name *</h5>
[text* app_name_einreicherin class:form-control class:size-medium]

<h5 class="app_email_einreicherin">Ihre E-Mail-Adresse *</h5>
[email* app_email_einreicherin class:form-control class:size-medium]

<h5 class="app_website_einreicherin">Link zu Ihrer Website</h5>
[url app_website_einreicherin class:form-control class:size-medium]

<h5 class="app_ckan_user_id">CKAN User ID</h5>
[text app_ckan_user_id class:form-control class:size-medium]

<h5 class="app_name_organisation">Name Organisation</h5>
[text app_name_organisation class:form-control class:size-medium]

<h5 class="app_website_organisation">Website Organisation</h5>
[url app_website_organisation class:form-control class:size-medium]

</div>
</div>
<div class="form-group row app_bemerkung_einreicherin col-sm-8">
<h5>Optionale Bemerkung</h5>
[textarea app_bemerkung_einreicherin class:form-control class:size-large]
</div>

<p class="row">[submit class:btn class:btn-primary "Absenden"]</p>


## Mail

Von: [app_name_einreicherin] <[app_email_einreicherin]>
Betreff: Neue Anwendung "[app_name]" eingereicht

Name Anwendung: [app_name]
Beschreibung Anwendung: [app_beschreibung]
Bild: [app_bild_url]
Betriebssysteme:  [app_betriebssysteme]
Anwendungs-Typ:  [app_typ]
Themen:  [app_themen] 
Verw. Datensätze: [app_verwendete_datensaetze]
Link 1: [app_text_website_1] + [app_website_1]
Link 2: [app_text_website_2] + [app_website_2]
Link 3: [app_text_website_3] + [app_website_3]
Name EinreicherIn: [app_name_einreicherin]
Email EinreicherIn: [app_email_einreicherin]
Website: [app_website_einreicherin]
CKAN User ID: [app_ckan_user_id]
Name Organisation: [app_name_organisation]
Website Organisation: [app_website_organisation]
Opt. Bemerkung: [app_bemerkung_einreicherin]

--
Diese E-Mail wurde von einem Kontaktformular von OpenDataPortal Österreich (http://www.opendataportal.at) gesendet

## Settings
- ODP-Team <info@opendataportal.at>
- [app_name_einreicherin] <[app_email_einreicherin]>
- Neue Anwendung "[app_name]" eingereicht
- Bcc: [app_name_einreicherin] <[app_email_einreicherin]>





