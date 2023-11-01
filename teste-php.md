## INSTRUÇÕES

- Necessário o docker instalado em sua máquina para rodar à aplicação.

- Rode o comando abaixo para subir o projeto.

```sh
docker compose up -d testephp-db && sleep 2 && docker compose up testephp-app
```

- O projeto vai rodar o bd e o laravel nas portas : 3306 e 3000 respectivamente.

- Além disso, para facilitar os teste do back-end foi enviado o arquivo: alphacode test php.postman_collection. Se você possuir o postman basta importar e testar as rotas.