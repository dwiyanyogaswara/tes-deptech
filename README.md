# tes-deptech

Cara
1. build composer
>>sudo docker-compose up -d --build

2. setting database, di contoh ini saya pake mysql dg port local 3307
3. buat database, di contoh ini nama dbnya "tes_deptech"
4. migrate dg masuk ke shel docker dan jalankan migrate
>>sudo docker exec -it tes-deptech_php_1 sh

setelah masuk shellnya
>>php /code/artisan migrate

5. input bbrp row di db
6. access ke frontend, contoh "http://localhost:3053/list-produk"

Docs Backend API:
https://documenter.getpostman.com/view/9459704/2s7YtTGFMV#27e5d931-89e9-416a-b88b-2ceeec1e72c6
