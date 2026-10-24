#!/usr/bin/env bash
# Espera al daemon de Docker (docker-in-docker) y levanta el lab.
set -euo pipefail
for _ in $(seq 1 30); do docker info >/dev/null 2>&1 && break; sleep 2; done
docker compose up -d
docker compose ps
