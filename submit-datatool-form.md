**Form to submit datatools.**

## Form
<div class="col-sm-12">
<h3>Informationen zum Datentool</h3>

<div class="form-group app_name col-sm-8">
<h5>Name des Datentools *</h5>
[text* tool_name class:form-control class:col-sm-12]
</div>

<div class="form-group col-sm-8 app_beschreibung">
<h5>Beschreibung des Datentools *</h5>
[textarea* tool_beschreibung class:form-control class:col-sm-12]
</div>

<div class="form-group form-bild col-sm-8">
<h5>Bild / Screenshot</h5>
[url tool_bild_url class:col-sm-12]
</div>

<div class="app_betriebssysteme">
<h5>Auf welchen Betriebssystemen läuft Ihr Datentool? *</h5>
[checkbox tool_betriebssysteme use_label_element class:checkbox "Windows" "MAC OS" "Linux"]
</div>

<div class="app_art">
<h5>Welcher Typ ist das Datentool? *</h5>
[checkbox tool_typ class:checkbox use_label_element "Datenwerkzeug" "Skript" "Anleitung"]
</div>

<div class="tool_funktionen">
<h5>Welche Funktion hat es? *</h5>
[checkbox tool_funktionen class:checkbox use_label_element "Authoring" "Publishing" "Konvertierung" "Linking" "Cleaning" "Curation" "Qualitätssicherung" "Analyse" "Visualisierung"]
</div>

<div class="form-group form-app_links">
<h5>Link zum Datentool *</h5>
<div class="col-sm-6">
[url* tool_website class:form-control class:size-medium "URL"]
</div>
<div class="col-sm-6">
[text* tool_text_website class:form-control class:size-medium "Text zu Link"]
</div>
</div>
</div>

<div class="form-group col-sm-12">
<h3>Anbieter / Hersteller</h3>

<div class="col-sm-6">
<h5 class="app_name_einreicherin">Ihr Name *</h5>
[text* tool_name_einreicherin class:form-control class:size-medium]
</div>

<div class="col-sm-6">
<h5 class="app_email_einreicherin">Ihre E-Mail-Adresse * (Achtung: Die Email-Adresse wird auf ODP-AT veröffentlicht.)</h5>
[email* tool_email_einreicherin class:form-control class:size-medium]
</div>

<div class="col-sm-6">
<h5 class="app_website_einreicherin">Link zu Ihrer Website</h5>
[url tool_website_einreicherin class:form-control class:size-medium]
</div>

<div class="row form-group form-app_links">
<div class="col-sm-6">
<h5 class="app_name_organisation">Name Organisation</h5>
[text tool_name_organisation class:form-control class:size-medium]
</div>
<div class="col-sm-6">
<h5 class="app_website_organisation">Website Organisation</h5>
[url tool_website_organisation class:form-control class:size-medium]
</div>
</div>

</div>

<div class="form-group app_bemerkung_einreicherin col-sm-9">
<h5>Optionale Bemerkung</h5>
[textarea tool_bemerkung_einreicherin class:form-control class:size-large]
</div>

<div class="col-sm-12">
[captchac captcha-datentools]
[captchar captcha-datentools]

<p>[submit class:btn class:btn-primary "Absenden"]</p>
</div>

## Mail
Von: [tool_name_einreicherin] <[tool_email_einreicherin]>
Betreff: Neues Datentool "[tool_name]" eingereicht

Neues Datentool: [tool_name]
Beschreibung Datentool: [tool_beschreibung]
Bild: [tool_bild_url]
Betriebssysteme:  [tool_betriebssysteme]
Datentool-Art:  [tool_typ]
Funktionen:  [tool_funktionen] 
Link 1: [tool_website] + [tool_text_website]

Name EinreicherIn: [tool_name_einreicherin]
Email EinreicherIn: [tool_email_einreicherin]
Website: [tool_website_einreicherin]
Name Organisation: [tool_name_organisation]
Website Organisation: [tool_website_organisation]
Opt. Bemerkung: [tool_bemerkung_einreicherin]

--
Diese E-Mail wurde von einem Kontaktformular von OpenDataPortal Österreich (http://www.opendataportal.at) gesendet

## Settings
- An: info@opendataportal.at
- Von: [tool_name_einreicherin] <[tool_email_einreicherin]>
- Betreff: Neues Datentool "[tool_name]" eingereicht
- Zusätzliche Header: Bcc: [tool_name_einreicherin] <[tool_email_einreicherin]>





