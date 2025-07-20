# Invocation d’un modèle AWS en PHP

Script PHP minimal pour invoquer un modèle AWS (Bedrock ou SageMaker) via le **SDK AWS pour PHP**.

## Prérequis

- PHP ≥ 8.x  
- Composer installé  
- Identifiants AWS avec les permissions nécessaires (ex. `bedrock:InvokeModel` ou permissions spécifiques SageMaker)  
- Variables d’environnement configurées (`AWS_ACCESS_KEY_ID`, `AWS_SECRET_ACCESS_KEY`, `AWS_DEFAULT_REGION`)  
  - *Ou* fichier `~/.aws/credentials` + `~/.aws/config`

## Installation

```bash
composer install

## Utilisation

php invokemodel.php
