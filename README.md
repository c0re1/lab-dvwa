# TS Cyber Academy · Lab DVWA

Repositorio plantilla del lab **DVWA** de [TS Cyber Academy](https://academy.titansec.cl), la plataforma de
formación gratuita de TitanSec. Contiene solo lo necesario para levantar el lab, de modo que un Codespace
arranque rápido y consuma la menor cuota posible.

Proyecto original: <https://github.com/digininja/DVWA>

## Opción 1 · GitHub Codespaces (recomendada)

[![Abrir en GitHub Codespaces](https://github.com/codespaces/badge.svg)](https://codespaces.new/titansec/lab-dvwa?quickstart=1)

1. Pulsar el botón (requiere cuenta de GitHub; usa la cuota gratuita personal de Codespaces).
2. Al terminar de crearse, el contenedor ejecuta `docker compose up -d` automáticamente.
3. Abrir la pestaña **Ports** y seleccionar el puerto **4280**.

El puerto se reenvía como **privado** (solo accesible con la sesión de GitHub del alumno). No cambiarlo a
*Public*: la aplicación es deliberadamente vulnerable.

Para ahorrar cuota: detener el Codespace al terminar (*Codespaces → Stop*) y eliminarlo cuando ya no se use.

## Opción 2 · Docker local

Con Docker instalado, un solo comando:

```bash
git clone https://github.com/titansec/lab-dvwa.git && cd lab-dvwa && docker compose up -d
```

Abrir <http://127.0.0.1:4280/>. Para detener: `docker compose down`.

Primer ingreso: usuario **admin**, contraseña **password**. Luego ir a **Setup / Reset DB** y pulsar
*Create / Reset Database*. El nivel de dificultad se cambia en **DVWA Security**.

## Seguridad

- Los puertos se publican **solo en 127.0.0.1**: el lab no queda expuesto a la LAN ni a internet.
- Usar exclusivamente para formación. Atacar sistemas de terceros sin autorización es ilegal.
