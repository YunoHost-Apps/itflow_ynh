<!--
Ohart ongi: README hau automatikoki sortu da <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>ri esker
EZ editatu eskuz.
-->

# ITFlow YunoHost-erako

[![Integrazio maila](https://dash.yunohost.org/integration/itflow.svg)](https://dash.yunohost.org/appci/app/itflow) ![Funtzionamendu egoera](https://ci-apps.yunohost.org/ci/badges/itflow.status.svg) ![Mantentze egoera](https://ci-apps.yunohost.org/ci/badges/itflow.maintain.svg)

[![Instalatu ITFlow YunoHost-ekin](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=itflow)

*[Irakurri README hau beste hizkuntzatan.](./ALL_README.md)*

> *Pakete honek ITFlow YunoHost zerbitzari batean azkar eta zailtasunik gabe instalatzea ahalbidetzen dizu.*  
> *YunoHost ez baduzu, kontsultatu [gida](https://yunohost.org/install) nola instalatu ikasteko.*

## Aurreikuspena

IT documentation, ticketing and accounting system for small MSPs.

**Paketatutako bertsioa:** 2024.05.21~ynh1

**Demoa:** <https://demo.itflow.org/>

## Pantaila-argazkiak

![ITFlow(r)en pantaila-argazkia](./doc/screenshots/readme.gif)

## Dokumentazioa eta baliabideak

- Aplikazioaren webgune ofiziala: <https://itflow.org/>
- Administratzaileen dokumentazio ofiziala: <https://docs.itflow.org/installation>
- Jatorrizko aplikazioaren kode-gordailua: <https://github.com/itflow-org/itflow>
- YunoHost Denda: <https://apps.yunohost.org/app/itflow>
- Eman errore baten berri: <https://github.com/YunoHost-Apps/itflow_ynh/issues>

## Garatzaileentzako informazioa

Bidali `pull request`a [`testing` abarrera](https://github.com/YunoHost-Apps/itflow_ynh/tree/testing).

`testing` abarra probatzeko, ondorengoa egin:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/itflow_ynh/tree/testing --debug
edo
sudo yunohost app upgrade itflow -u https://github.com/YunoHost-Apps/itflow_ynh/tree/testing --debug
```

**Informazio gehiago aplikazioaren paketatzeari buruz:** <https://yunohost.org/packaging_apps>
