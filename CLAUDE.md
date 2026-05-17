# Praxis Malinowski – Webseite

## Projekt-Überblick
Webseite für Praxis für Psychotherapie Veronika Malinowski, Krefeld.
Apple-inspiriertes Design. Reines HTML/CSS/JS, kein Framework, kein Build-Schritt.

## Technologie
- Statisches HTML/CSS/JS
- Google Fonts: Inter
- Hosting: IONOS Deploy Now (automatisches Deployment via GitHub Push)
- Repo: https://github.com/jochenmalinowski/malinowski-website

## Deployment
Nach JEDER Änderung committen und pushen:
```bash
git add .
git commit -m "Kurze Beschreibung der Änderung"
git push
```
IONOS Deploy Now deployed dann automatisch innerhalb 1-2 Minuten.

## Dateistruktur
```
index.html          → Startseite
praxis.html         → Die Praxis (Kamphof Krefeld)
ueber-mich.html     → Über Veronika Malinowski
kontakt.html        → Kontakt + OpenStreetMap-Karte
impressum.html      → Impressum
datenschutz.html    → Datenschutzerklärung
styles.css          → ALLE Styles, Farbvariablen oben in :root{}
script.js           → Mobile Nav + Scroll-Animationen
images/             → Alle Bilder
```

## Design-System (styles.css :root)
Alle Farben als CSS-Variablen — nur diese ändern für neue Farbpalette:
- `--bg`          Haupt-Hintergrund
- `--bg-light`    Hintergrund für helle Sektionen
- `--accent`      Akzentfarbe (Buttons, Eyebrows, Links)
- `--accent-dark` Hover-Zustand des Akzents
- `--border`      Rahmenfarbe für Karten

## Bilder
| Datei                    | Verwendung                          |
|--------------------------|-------------------------------------|
| hero.jpg                 | Hero-Hintergrundbild Startseite     |
| feature-1.jpg            | Feature-Block Startseite (Hochformat) |
| praxis-main.jpg          | Hero Praxis-Seite                   |
| praxis-detail-1/2.jpg    | Duo-Grid Praxis-Seite               |
| karte-gesetzlich.jpg     | Karte 1 auf Startseite              |
| karte-privat.jpg         | Karte 2 auf Startseite              |
| karte-selbstzahler.jpg   | Karte 3 auf Startseite              |
| portrait.jpg             | Portrait Veronika (Über mich)       |



## Praxis-Infos (für Textkorrekturen)
- Name: Dipl.-Psych. Veronika Malinowski
- Adresse: Heyenbaumstr. 143/145, 47802 Krefeld
- Tel: +49 (0)2151 3697551
- Mail: mail@malinowski-psychotherapie.de
- Standort: Kamphof Krefeld (denkmalgeschützte Hofanlage, umgebaute Scheune)
- Koordinaten Kamphof: 51.359708° N, 6.582927° O
- Kassenärztlicher Versorgungsauftrag, Verhaltenstherapie
- Approbation: 01.08.2017, Bezirksregierung Düsseldorf
