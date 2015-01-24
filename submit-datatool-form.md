**Form to submit datatools.**

## Form
<div class="col-sm-9">
<h3>Informationen über die Datentools</h3>

<div class="form-group row app_name">
<h5>Name des Datentools *</h5>
[text* tool_name class:form-control class:size-medium]
</div>

<div class="form-group row col-sm-8 app_beschreibung">
<h5>Beschreibung des Datentools *</h5>
[textarea* tool_beschreibung class:form-control class:size-large]
</div>

<div class="form-group row form-bild">
<h5>Bild / Screenshot</h5>
[url tool_bild_url]
</div>

<div class="row app_betriebssysteme">
<h5>Auf welchen Betriebssystemen läuft Ihr Datentool? *</h5>
[checkbox tool_betriebssysteme use_label_element class:checkbox "Windows" "MAC OS" "Linux"]
</div>

<div class="row app_art">
<h5>Welcher Typ ist das Datentool? *</h5>
[checkbox tool_typ class:checkbox use_label_element "Datenwerkzeug" "Skript" "Anleitung"]
</div>

<div class="row tool_funktionen">
<h5>Welche Funktion hat es? *</h5>
[checkbox tool_funktionen class:checkbox use_label_element "Authoring" "Publishing" "Konvertierung" "Linking" "Cleaning" "Curation" "Qualitätssicherung" "Analyse" "Visualisierung"]
</div>

<div class="form-group row form-app_links">
<h5>Link zum Datentool *</h5>
<div class="row link1">
[url* tool_website class:form-control class:size-small "URL"] [text* tool_text_website class:form-control class:size-small "Text URL"]
</div>
</div>
</div>

<div class="form-group row col-sm-9">

<h3>Anbieter / Hersteller</h3>
<h5 class="app_name_einreicherin">Ihr Name *</h5>
[text* tool_name_einreicherin class:form-control class:size-medium]

<h5 class="app_email_einreicherin">Ihre E-Mail-Adresse *</h5>
[email* tool_email_einreicherin class:form-control class:size-medium]

<h5 class="app_website_einreicherin">Link zu Ihrer Website</h5>
[url tool_website_einreicherin class:form-control class:size-medium]

<h5 class="app_name_organisation">Name Organisation</h5>
[text tool_name_organisation class:form-control class:size-medium]

<h5 class="app_website_organisation">Website Organisation</h5>
[url tool_website_organisation class:form-control class:size-medium]

</div>

<div class="form-group row app_bemerkung_einreicherin col-sm-9">
<h5>Optionale Bemerkung</h5>
[textarea tool_bemerkung_einreicherin class:form-control class:size-large]
</div>

[captchac captcha-datentools]
[captchar captcha-datentools]

<p class="row">[submit class:btn class:btn-primary "Absenden"]</p>

## Mail
Von: [tool_name_einreicherin] <[tool_email_einreicherin]>
Betreff: Neues Datentool "[tool_name]" eingereicht

Neues Datentool: [tool_name]
Beschreibung Datentool: [tool_beschreibung]
Bild: [tool_bild_url]
Betriebssysteme:  [tool_betriebssysteme]
Datentool-Art:  [tool_typ]
Funktionen:  [tool_funktionen] 
Link 1: [tool_text_website_1] + [tool_website_1]

Name EinreicherIn: [tool_name_einreicherin]
Email EinreicherIn: [tool_email_einreicherin]
Website: [tool_website_einreicherin]
Name Organisation: [tool_name_organisation]
Website Organisation: [tool_website_organisation]
Opt. Bemerkung: [tool_bemerkung_einreicherin]

--
Diese E-Mail wurde von einem Kontaktformular von OpenDataPortal Österreich (http://www.opendataportal.at) gesendet

## Settings
- info@opendataportal.at
- [tool_name_einreicherin] <[tool_email_einreicherin]>
- Neues Datentool "[tool_name]" eingereicht
- Bcc: [app_name_einreicherin] <[app_email_einreicherin]>





