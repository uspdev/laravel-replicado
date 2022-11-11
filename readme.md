# Wrapper do Uspdev\Replicado para uso com laravel

*** Este é um projeto em elaboração. ***

## Instalação e configuração

    composer require uspdev/laravel-replicado

Use conforme a documentação do replicado.

### Configuração padrão do `.env.example`

```sh
# REPLICADO #########################################
# https://github.com/uspdev/replicado

REPLICADO_HOST=
REPLICADO_PORT=
REPLICADO_DATABASE=
REPLICADO_USERNAME=
REPLICADO_PASSWORD=

# Código da unidade
REPLICADO_CODUNDCLG=

# Todos os códigos de colegiados da unidade (default=REPLICADO_CODUNDCLG)
REPLICADO_CODUNDCLGS=${REPLICADO_CODUNDCLG}

# Caminho do log
REPLICADO_PATHLOG="../storage/logs/replicado.log"

# Converte de/para UTF-8 (default=1)
REPLICADO_SYBASE=1

# habilita o uso do cache https://github.com/uspdev/cache (default=0)
# É necessário configurar a biblioteca antes de usar
REPLICADO_USAR_CACHE=0

# Se true mostra o retorno de erros do BD (default=APP_DEBUG)
REPLICADO_DEBUG=${APP_DEBUG}
```

A explicação de cada variável está no projeto [Uspdev\\Replicado](https://github.com/uspdev/replicado).