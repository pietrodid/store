<?php

//define("BASE_URL", "http://localhost/tienda_virtual/");
const BASE_URL = "http://localhost/store/tienda_virtual";

//Zona horaria
date_default_timezone_set('America/Caracas');

//Datos de conexión a Base de Datos
const DB_HOST = "localhost";
const DB_NAME = "db_tienda_virtual";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_CHARSET = "utf8";

//Deliminadores decimal y millar Ej. 24,1989.00
const SPD = ".";
const SPM = ",";

//Simbolo de moneda
const SMONEY = "$";

//Datos envio de correo
const NOMBRE_REMITENTE = "Tienda Virtual";
const EMAIL_REMITENTE = "no-reply@abelosh.com";
const NOMBRE_EMPESA = "Tienda Virtual";
const WEB_EMPRESA = "www.abelosh.com";

const CAT_SLIDER = "1,2,3";
const CAT_BANNER = "4,5,6";

//Datos para encriptar / Desencriptar
const KEY = 'encriptar';
const METHODENCRIPT = "AES-128-ECB";

//Envio

const COSTOENVIO = 45;