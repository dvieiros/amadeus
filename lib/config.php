<?php
// Datos de configuración de la aplicación

class Config{
    // URL de la aplicación sin terminar en /. Por ejemplo: 'http://www.veiga.local/amadeus'
    public static $urlAplicacion = 'http://www.veiga.local/amadeus';

    // Configuración de la base de datos.
    public static $dbServidor = 'vagalume.local';
    public static $dbDatabase = 'c8test';
    public static $dbUsuario = 'c8a11diegovp';
    public static $dbPassword = 'abc123.';

    // Datos de configuración para el correo.
    public static $mailNombreRemitente = 'Diego Vieiros';
    public static $mailEmailRemitente = 'info@vagalume.local';
    public static $mailServidor = 'localhost';
    public static $mailPuerto = '25';
    public static $mailUsuario = 'info@vagalume.local';
    public static $mailPassword = 'abc123.';
    
    
    
    // Datos de configuración del servidor de correo para cuenta de GMAIL.
    // IMPORTANTE si usáis XAMPP: 
    // 
    // Para que funcione en XAMPP el envío con SSL (puerto 465) en GMAIL, hay que activar en el fichero \xampp\php\php.ini, la siguiente extensión:
    // extension=php_openssl.dll
    // y reiniciar de nuevo XAMPP.
    
    // Para usarlo con GMAIL aquí van un ejemplo de configuración:
    /*
     * public static $mailNombreRemitente = 'Nombre y Apellidos';
     * public static $mailEmailRemitente = 'usuario@gmail.com';
     * public static $mailServidor = 'smtp.gmail.com';
     * public static $mailPuerto = '465';
     * public static $mailUsuario = 'usuario@gmail.com';
     * public static $mailPassword = 'xxxxxx';
     */
   
}

?>